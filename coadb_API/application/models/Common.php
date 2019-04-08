<?php
Class Common extends CI_Model
{
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();


	}


	function getOrders($username = '',$start_count=0){
  		
  		$url = Globals::$api_url.'/rest/OrderService/v1/orders?startCount='.$start_count;
  		$token = Globals::gettoken();
  		// $data = [
    //                     "startCount" => 0,
    //                     "resultCount" => 100,
                     
    //             ];
        if(!empty($username)){
        $headers = [
                       "Content-Type: application/json ", 
                       "Accept: application/json ", 
                        "Authorization:".$token, 
                        "proxy_username:".$username, 
                    ];
        }else{
         $headers = [
                       "Content-Type: application/json ", 
                       "Accept: application/json ", 
                        "Authorization:".$token, 
                    ];
        }
        $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => $url,
                    CURLOPT_HTTPHEADER => $headers,
                ]);
                $resp = curl_exec($curl);
                curl_close($curl);
                $resp = json_decode($resp,true);

          	$check = $this->check_valid($resp);

          	if($check){
          		return $resp;
          	}else{
          		return [];
          	}
      

  	}


  	function getOrder($orderNumber,$username=''){
  		
  		$url = Globals::$api_url.'/rest/OrderService/v1/orders/'.$orderNumber;
  		$token = Globals::gettoken();
  
        if(!empty($username)){
        $headers = [
                       "Content-Type: application/json", 
                       "Accept: application/json", 
                        "Authorization:".$token, 
                        "proxy_username:".$username, 
                    ];
        }else{
         $headers = [
                       "Content-Type: application/json", 
                       "Accept: application/json", 
                        "Authorization:".$token, 
                    ];
        }
        $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => $url,
                    CURLOPT_HTTPHEADER => $headers,
                ]);
                $resp = curl_exec($curl);
                curl_close($curl);
                $resp = json_decode($resp,true);

          	$check = $this->check_valid($resp);

          	if($check){
          		return $resp;
          	}else{
          		return [];
          	}
      

  	}


  	function getSubscriber($subNumber,$username=''){
  		
  		$url = Globals::$api_url.'/rest/SubscriberService/v1/subscribers/'.$subNumber;
  		$token = Globals::gettoken();
  
        if(!empty($username)){
        $headers = [
                       "Content-Type: application/json", 
                       "Accept: application/json", 
                        "Authorization:".$token, 
                        "proxy_username:".$username, 
                    ];
        }else{
         $headers = [
                       "Content-Type: application/json", 
                       "Accept: application/json", 
                        "Authorization:".$token, 
                    ];
        }
        $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => $url,
                    CURLOPT_HTTPHEADER => $headers,
                ]);
                $resp = curl_exec($curl);
                curl_close($curl);
                $resp = json_decode($resp,true);

          	$check = $this->check_valid($resp);

          	if($check){
          		return $resp;
          	}else{
          		return [];
          	}
      

  	}


  	 function getProduct($productName){
  		
  		$url = Globals::$api_url.'/rest/ProductService/v1/products?searchBy=productName&searchString='.$productName;
  		$token = Globals::gettoken();
  
         $headers = [
                       "Content-Type: application/json", 
                       "Accept: application/json", 
                        "Authorization:".$token, 
                    ];
     
        $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => $url,
                    CURLOPT_HTTPHEADER => $headers,
                ]);
                $resp = curl_exec($curl);
                curl_close($curl);
                $resp = json_decode($resp,true);

          	$check = $this->check_valid($resp);

          	if($check){
          		return $resp;
          	}else{
          		return [];
          	}
      

  	}


  	function sendShipstation($data){
  		
  		$url = Globals::$ss_api_url.'/orders/createorder';
  		$token = Globals::$ss_token;
  
         $headers = [
                       "Content-Type: application/json",  
                        "Authorization: Basic ".$token, 
                    ];
     
         $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => $url,
                    CURLOPT_POST => 1,
                    CURLOPT_HTTPHEADER => $headers,
                    CURLOPT_POSTFIELDS => json_encode($data)
                ]);
                $resp = curl_exec($curl);
                curl_close($curl);
                $resp = json_decode($resp,true);
            
           return $resp;

  	}



  	function check_valid($data){

  		if(array_key_exists('status',$data) && $data['status'] == 'OK'){
  			return true;
  		}else{
  			return false;
  		}
  	}


  	function insert_order($data){
  		    $this->db->insert('orders',$data);
  		    return $this->db->insert_id(); 
  	}

  	function search_order($orderNumber){
  		///foreach ($query->result() as  $key=>$row) {

	  $sql = "select id from orders where orderNumber='".$orderNumber."'";
	   $query = $this->db->query($sql);
	  if ($query->num_rows() > 0)
	  {
	  		return $query->row();
	  }
	  else
	  {
	  		return [];
	  }
  	}



  	function get_all_sellers(){
  		///foreach ($query->result() as  $key=>$row) {

	  $sql = "select * from seller where status= 1";
	   $query = $this->db->query($sql);
	  if ($query->num_rows() > 0)
	  {
	  		return $query->result();
	  }
	  else
	  {
	  		return [];
	  }
  	}


    function get_sellers_list(){
      ///foreach ($query->result() as  $key=>$row) {

      $data = '{"data": [';
  
      $sql = "select sellerName,status from seller";
          
          $query = $this->db->query($sql);

          $first_time = true;
          foreach ($query->result() as  $key=>$row) {
            $status = ($row->status == 1)?'Active':'Inactive';
            if (!$first_time)
              $data .= ',';
            $first_time = false;
           $data .= '[
              "' . $row->sellerName .'",
              "' . $status . '"
            ]';
          }
          
          
          $data .= ']
        }';
          return $data;
    }


  	function get_seller_id($username){
  		///foreach ($query->result() as  $key=>$row) {

	  $sql = "select id from seller where sellerName = '".$username."'";
	   $query = $this->db->query($sql);
	  if ($query->num_rows() > 0)
	  {
	  		return $query->row()->id;
	  }
	  else
	  {
	  		return 0;
	  }
  	}



    function search_seller($sellerName){
      ///foreach ($query->result() as  $key=>$row) {

    $sql = "select id from seller where sellerName='".$sellerName."'";
     $query = $this->db->query($sql);
    if ($query->num_rows() > 0)
    {
        return $query->row();
    }
    else
    {
        return [];
    }
    }


      function insert_seller($data){
          $this->db->insert('seller',$data);
          return $this->db->insert_id(); 
    }

	
}