<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller 
{
	 function  __construct(){
		parent::__construct();
		$this->load->library('paypal_lib');
		$this->load->model('Mdl_payment');
	 }
	 
	 function index(){
		$data = array();
		//get products data from database
        $data['products'] = $this->Mdl_payment->getRows();
		//pass the products data to view
		$this->load->view('products/index', $data);
	}

	 function success(){
	    //get the transaction data
		$paypalInfo = $this->input->get();
		  
		$data['item_number'] = $paypalInfo['item_number']; 
		$data['txn_id'] = $paypalInfo["tx"];
		$data['payment_amt'] = $paypalInfo["amt"];
		$data['currency_code'] = $paypalInfo["cc"];
		$data['status'] = $paypalInfo["st"];
		
		//pass the transaction data to view
        $this->load->view('paypal/success', $data);
	 }
	 
	 function cancel(){
        $this->load->view('paypal/cancel');
	 }
	 
	 function ipn(){
		//paypal return transaction details array
		$paypalInfo	= $this->input->post();

		$data['user_id'] = $paypalInfo['custom'];
		$data['product_id']	= $paypalInfo["item_number"];
		$data['txn_id']	= $paypalInfo["txn_id"];
		$data['payment_gross'] = $paypalInfo["payment_gross"];
		$data['currency_code'] = $paypalInfo["mc_currency"];
		$data['payer_email'] = $paypalInfo["payer_email"];
		$data['payment_status']	= $paypalInfo["payment_status"];

		$paypalURL = $this->paypal_lib->paypal_url;		
		$result	= $this->paypal_lib->curlPost($paypalURL,$paypalInfo);
		
		//check whether the payment is verified
		if(eregi("VERIFIED",$result)){
		    //insert the transaction data into the database
			$this->Mdl_payment->insertTransaction($data);
		}
    }
    function buy($id){
		//Set variables for paypal form
		$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //test PayPal api url
		$paypalID = 'info@codexworld.com'; //business email
		$returnURL = base_url().'payment/success'; //payment success url
		$cancelURL = base_url().'payment/cancel'; //payment cancel url
		$notifyURL = base_url().'payment/ipn'; //ipn url
		//get particular product data
		$product = $this->Mdl_payment->getRows($id);
		$userID = 1; //current user id
		$logo = base_url().'assets/images/codexworld-logo.png';
		
		$this->paypal_lib->add_field('business', $paypalID);
		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name', $product['name']);
		$this->paypal_lib->add_field('custom', $userID);
		$this->paypal_lib->add_field('item_number',  $product['id']);
		$this->paypal_lib->add_field('amount',  $product['price']);		
		$this->paypal_lib->image($logo);
		
		$this->paypal_lib->paypal_auto_form();
	}
}