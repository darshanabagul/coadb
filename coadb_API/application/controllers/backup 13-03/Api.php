<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct(){
	     parent::__construct();
	     // Load model
	     $this->load->model('Common');
  	}



  	public function cron(){

		$sellers = $this->Common->get_all_sellers();
		$testing = [];

		foreach ($sellers as $key => $value) {
				
				$addedCount = $this->new_order($value->sellerName);		
				$testing[$value->sellerName][] =$addedCount;

		}
		
		echo '<pre>';
		print_r($testing);
		$this->test_cron();
	} 


  	
	public function new_order($username = ''){

		$response = $this->Common->getOrders($username);
		if(!empty($response['order'])){
			$orders = $response['order'];
			if(!empty($username)){
				$user_id = $this->Common->get_seller_id($username);
			}else{
				$user_id = 16;
			}


			$count = 0;
			if(!empty($orders)){
						$not_found = 0;
						foreach($orders as $order){
							$exists = $this->Common->search_order($order['orderNumber']);
							if(empty($exists)){
								$data = $order;
								$data['sellerId'] = $user_id;
								$orderDetails = $this->Common->getOrder($order['orderNumber'],$username);
								$data['orderDetails'] = json_encode($orderDetails);
								$subscriberDetails = $this->Common->getSubscriber($order['accountNumber'],$username);
								$is_elibile = $this->check_ss_eligible($orderDetails);
							/*	if($is_elibile){
									$ss_data = $this->send_to_shipstation($orderDetails,$subscriberDetails);
									$data['ssEligible'] = 1;
									$data['sentSs'] = 1;
									$data['ssId'] = $ss_data['orderId'];
									$data['ssRequest'] = json_encode($ss_data);

								}*/


								if($is_elibile){
									$ss_data = $this->send_to_shipstation($orderDetails,$subscriberDetails);
									
									$data['ssEligible'] = 1;

									if(isset($ss_data['orderId'])){
										$data['sentSs'] = 1;
										$data['ssId'] = $ss_data['orderId'];
									}else{
										$data['sentSs'] = 0;

										$to = "shashank.c@codaemonsoftwares.com";
										$subject = "Error Occurred in OneBill to Shipstation";
										$headers = "MIME-Version: 1.0" . "\r\n";
										$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
										$headers .= "From: info@blazinghog.com";

										mail($to,$subject,json_encode($ss_data),$headers);
									}	
									$data['ssRequest'] = json_encode($ss_data);

								}
					

								$id = $this->Common->insert_order($data);
								$count++;
								$not_found = 0;
							}else{
								$not_found++;
								if($not_found>2){
									break;
								}
							}
							

						}
			}

			return $count;
		}else{
			return 0;
		}
	}

	public function check_ss_eligible($order){

		$onetime = 0;
		$is_fullfilled = 0;

		$items = $order['orderElement'];
		if(!empty($items)){

			foreach ($items as $value) {
				if(count($value['overrideCharge']) >= 1){
					foreach ($value['overrideCharge'] as $charge) {
							if($charge['chargeType'] == 'ONE_TIME'){
								$onetime = 1;
							}
					}

				}

				if(!empty($value['fulfilledDate'])){
								$is_fullfilled = 1;
				}	
			}
		}

		if($onetime == 1 && $is_fullfilled == 1)
		return 1;
		else
		return 0;

	}


	public function get_shipadd_id($items){

		$ship_id = '';
		$onetime = 0;
		if(!empty($items)){

			foreach ($items as $value) {
				if(count($value['overrideCharge']) >= 1){
					foreach ($value['overrideCharge'] as $charge) {
							if($charge['chargeType'] == 'ONE_TIME'){
								$onetime = 1;
							}
					}

				}

				$ship_id = $value['shipAddId'];

			}
		}
		
		return $ship_id;
	
	}

	public function get_address($id,$address){

		$add = [];


		foreach ($address as $value) {
			if($id == $value['id']){
				$add['street1'] = $value['addLine1'];
				$add['street2'] = '';
				$add['street3'] = '';
				$add['city'] = $value['city'];
				$add['state'] = $value['state'];
				$add['postalCode'] = $value['zip'];
				// $add['country'] = $value['country']; // Only 2 characters required
				$add['country'] = 'US';   
				$add['phone'] = '';
				$add['residential'] = '';
			}
		}

		return $add;

	}


	public function get_cust_mail($subscriberContactDetails){
		$email = '';
		foreach($subscriberContactDetails as $value){

			foreach ($value['communicationPoint'] as $comm) {
				if($comm['type'] == 'EMAIL'){
					$email = $comm['value'];
				}
			}

		}

		return $email;
	}

	public function get_items($orderElement){
		$items = [];
		foreach($orderElement as $value){
				$is_elibile = 0;
				if(count($value['overrideCharge']) >= 1){
					foreach ($value['overrideCharge'] as $charge) {
							if($charge['chargeType'] == 'ONE_TIME'){
								$is_elibile = 1;
							}
					}

				}

				if($is_elibile){

					$item = [];
					$product_details = $this->Common->getProduct($value['productName']);
					if($product_details['resultSize'] != 0){
						$sku = $product_details['product'][0]['code'];
					}else{
						$sku = $value['productName'];
					}

					$item['lineItemKey'] = $value['subscriptionIdentifier'];
					$item['sku'] = $sku;
					$item['name'] = $value['productName'];
					$item['imageUrl'] = '';
					$item['quantity'] = (int)$value['quantity'];
					$item['unitPrice'] = $value['chargeDetail']['grossAmount'];
					$item['taxAmount'] = $value['chargeDetail']['taxAmount'];
					$item['shippingAmount'] = 0.00;
					$item['warehouseLocation'] = '';
					$item['productId'] = $value['referenceId'];
					$item['fulfillmentSku'] = '';
					$item['adjustment'] = 'false';
					$item['upc'] = '';

					$items[] = $item;
				}

		}

		return $items;
	}

	public function send_to_shipstation($orderDetails,$subscriberDetails){
		
		$billTo = $this->get_address($orderDetails['customerDetail']['billAddId'],$subscriberDetails['address']);
		$billTo['name'] = $subscriberDetails['accountName'];

		$ship_id = $this->get_shipadd_id($orderDetails['orderElement']);
		$shipTo = $this->get_address($ship_id,$subscriberDetails['address']);
		$shipTo['name'] = $subscriberDetails['accountName'];

		
		$data['orderNumber'] = $orderDetails['orderNumber'];
		$data['orderKey'] = '';
		$orderDate = explode('T', $orderDetails['createdDate']);
		$orderTime = explode('-', $orderDate[1]);
		$data['orderDate'] = $orderDate[0].'T'.$orderTime[0].'.0000000';
		$data['paymentDate'] = $orderDate[0].'T'.$orderTime[0].'.0000000';
		$data['shipByDate'] = '';
		$data['orderStatus'] = 'awaiting_shipment';
		$data['customerId'] = $subscriberDetails['id'];
		$data['customerUsername'] = $subscriberDetails['accountName'];
		$data['customerEmail'] = $this->get_cust_mail($subscriberDetails['contact']);
		$data['billTo'] = $billTo;
		$data['shipTo'] = $shipTo;
		$data['items'] = $this->get_items($orderDetails['orderElement']);
		$data['amountPaid'] = $orderDetails['orderAmount'];
		$data['taxAmount'] = 00;
		$data['shippingAmount'] = 00;
		$data['customerNotes'] = 'SRNUMBER-'.$subscriberDetails['accountNumber'];
		$data['internalNotes'] = '';
		$data['gift'] = 'false';
		$data['giftMessage'] = '';
		$data['paymentMethod'] = '';
		$data['requestedShippingService'] = 'Priority Mail';
		$data['advancedOptions']['customField1'] = $subscriberDetails['accountNumber'];
		// $data['advancedOptions']['ORNUMBER'] = $orderDetails['orderNumber'];
		// $data['advancedOptions']['SRNUMBER'] = $subscriberDetails['accountNumber'];;

		//echo json_encode($data); exit;
		return $this->Common->sendShipstation($data);


	}




// 	$data =	[
// 				        "orderNumber" => '123Test123',
// 				        "orderKey" => '',
// 				        "orderDate" => '2015-06-29T08:46:27.0000000',
// 				        "paymentDate" => '2015-06-29T08:46:27.0000000',
// 				        "shipByDate" => '',
// 				        "orderStatus" => 'awaiting_shipment',
// 				        "customerId" => '456456442',
// 				        "customerUsername" => '',
// 				        "customerEmail" => '',
// 				        "billTo" => [
// 				        	  "name"=> "The President",
// 					            "company"=> '',
// 					            "street1"=> '',
// 					            "street2"=> '',
// 					            "street3"=> '',
// 					            "city"=> '',
// 					            "state"=> '',
// 					            "postalCode"=> '',
// 					            "country"=> '',
// 					            "phone"=> '',
// 					            "residential"=> ''
// 				        ],
// 				        "shipTo" => [
// 				        	  "name"=> " Tom Filla",
// 					            "company"=> '',
// 					            "street1"=> '11875 West Little York #501',
// 					            "street2"=> '',
// 					            "street3"=> '',
// 					            "city"=> 'Houston',
// 					            "state"=> 'TX',
// 					            "postalCode"=> '77041',
// 					            "country"=> '',
// 					            "phone"=> '',
// 					            "residential"=> ''
// 				        ],

// 				    "items" => [
// 						       	[
// 						        	  "lineItemKey"=> "vd08-MSLbtx",
// 							            "sku"=> 'ABC123',
// 							            "name"=> 'Test item #1',
// 							            "imageUrl"=> '',
// 							            // "weight"=> [
// 							            // 	'value'=>'24',
// 							            // 	'units'=>'ounces',
// 							            // ],
// 							            "quantity"=> '2',
// 							            "unitPrice"=> 99.99,
// 							            "taxAmount"=> 2.50,
// 							            "shippingAmount"=> 5.00,
// 							            "warehouseLocation"=> 'Aisle 1, Bin 7',
// 							            // "weight"=> [
							            
// 							            // 	'name'=>'Size',
// 							            // 	'value'=>'Large',
							            	
// 							            // ],
// 							             "productId"=> 1235467,
// 							            "fulfillmentSku"=> '',
// 							            "adjustment"=> 'false',
// 							            "upc"=> '32-65-98',
// 						        ],
// 						        [
// 						        	  "lineItemKey"=> "vd08-MSLbtx4",
// 							            "sku"=> 'ABC1234',
// 							            "name"=> 'Test itema #1',
// 							            "imageUrl"=> '',
// 							            // "weight"=> [
							        
// 							            // ],
// 							            "quantity"=> '2',
// 							            "unitPrice"=> 99.99,
// 							            "taxAmount"=> 2.50,
// 							            "shippingAmount"=> 5.00,
// 							            "warehouseLocation"=> 'null',
// 							            // "weight"=> [
							       
// 							            // ],
// 							             "productId"=> 1235468,
// 							            "fulfillmentSku"=> '',
// 							            "adjustment"=> 'false',
// 							            "upc"=> '32-65-98',
// 						        ],

// 				        ],
// 				        "amountPaid" => 212,
// 				        "taxAmount" => 41,
// 				        "shippingAmount" => 00,
// 				        "customerNotes" => 'null',
// 				        "internalNotes" => 'null',
// 				        "gift" => 'false',
// 				        "giftMessage" => 'null',
// 				        "paymentMethod" => 'Credit Card',
// 				        "requestedShippingService" => 'Priority Mail',
// 				        //"packageCode" => 'null',
// 				        //"confirmation" => 'null',
// 				        //"shipDate" => 'null',
// 				        // "weight" => [
				
// 				        // ],
// 				        // "dimensions" => [
						
// 				        // ], 
// 				        // "insuranceOptions" => [
						
// 				        // ],
// 				        // "internationalOptions" => [
						
// 				        // ], 

// 				        "advancedOptions" => [
// 							'customField1'=>null,
// 							'customField2'=>null,
// 							'customField3'=>null,
// 				        ],
// ];




	public function add_all(){

		$sellers = $this->Common->get_all_sellers();
		$testing = [];

		foreach ($sellers as $key => $value) {
			$response = $this->Common->getOrders($value->sellerName);
			 $total_orders = (int)$response['totalCount'];
			//echo '<br>';
			$startCount = 0;
			$endCount = (int)$response['endCount'];
			//$this->add_these($value->id,$response);
			if($total_orders > 0){

				if($total_orders < 100){

					$endCount = $this->add_these($value->id,$response);	
					$testing[$value->sellerName][] =$endCount;	
				}else{

					while ($endCount <= $total_orders) {
						$response = $this->Common->getOrders($value->sellerName,$startCount);
						
						//print_r($response); exit;
						$startCount = $endCount = $this->add_these($value->id,$response,$value->sellerName);
						$endCount++;
						$testing[$value->sellerName][] =$endCount;
					}


				}
			}

		}
		
		echo '<pre>';
		print_r($testing);


	} 


	public function add_own(){

		$testing = [];

			$response = $this->Common->getOrders();
			 $total_orders = (int)$response['totalCount'];
			//echo '<br>';
			$startCount = 0;
			$endCount = (int)$response['endCount'];
			//$this->add_these($value->id,$response);
			if($total_orders > 0){

				if($total_orders < 100){

					$endCount = $this->add_these(0,$response);	
					$testing['Me'][] =$endCount;	
				}else{

						while ($endCount <= $total_orders) {
						$response = $this->Common->getOrders('',$startCount);
						
						//print_r($response); exit;
						$startCount = $endCount = $this->add_these(0,$response);
						$endCount++;
						$testing['Me'][] =$endCount;
						}


				}
			}

		
		echo '<pre>';
		print_r($testing);


	} 

	public function add_these($sellerId,$response,$username=''){


			$orders = $response['order'];			
			$endCount = (int)$response['endCount'];
			if(!empty($orders)){
						foreach($orders as $order){
							 $exists = $this->Common->search_order($order['orderNumber']);
							 if(empty($exists)){
							$data = $order;
							$data['sellerId'] = $sellerId;
							$data['orderDetails'] = json_encode($this->Common->getOrder($order['orderNumber'],$username));
							$id = $this->Common->insert_order($data);
							}
						}
			}

			return $endCount;

	}	
 



	public function search_order($order){
		
		$this->Common->search_order($order);
	}

	public function order_details($order,$username){

		$data = $this->Common->getOrder($order,$username);

		echo '<pre>'; print_r($data); exit;
	}

	public function sellers(){
		echo '<pre>';
		print_r($this->Common->get_all_sellers());
	}


	public function test_cron(){
		$to = "shashank.c@codaemonsoftwares.com, nisar.shaikh@codaemonsoftwares.com";
		$subject = "Cron Testing";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: info@blazinghog.com";
		$text  = 'Cron is working '.date('Y-m-d H:i:s');

		mail($to,$subject,$text,$headers);
	}

}