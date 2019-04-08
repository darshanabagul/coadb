<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends CI_Controller {

	public function __construct(){
	     parent::__construct();
	     // Load model
	     $this->load->model('Common');
  	}


  	public function index(){
  		$error = '';
  		$success = '';
  		if(!empty($_POST)){

  			$name = $this->input->post("name");
  			$status = $this->input->post("status");
  			$seller_exists = $this->Common->search_seller($name);
  			if(!empty($name)){
	  			if(!empty($seller_exists)){
	  				$error = "Seller already exists.";
	  			}else{
	  				$arr = array(
	  					'sellername'=>$name,
	  					'status'=>$status
	  				);
	  				$this->Common->insert_seller($arr);

	  				$success = "Seller added succesfully.";
	  			}
  			}
  		}
  		$data = array('error'=>$error,'success'=>$success);
  		$this->load->view('seller',$data);
  	}

  	public function get_list(){

  		//$data = $this->Common->get_sellers_list();

  		echo $this->Common->get_sellers_list();
  	}

  	public function ajax_get_seller(){

  		//$data = $this->Common->get_sellers_list();

  		echo $this->Common->get_sellers_list();
  	}





}