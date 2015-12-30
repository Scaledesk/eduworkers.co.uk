<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller 
{
	 function  __construct(){
		parent::__construct();
	
		$this->load->model('Mdl_payment');
	 }
	 
	 function index(){
		$data = array();
		//get products data from database
        $data['products'] = $this->Mdl_payment->getRows();
		//pass the products data to view
		$this->load->view('products/index', $data);
	}


   public function do_payment(){

   	 $data=$this->input->post();


   }
	
	public function success(){
		$data=$this->input->post();
       print_r($data);
       die;
		 $this->load->view('paypal/success', $data);
	}
}