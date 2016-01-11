<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/1/16
 * Time: 10:38 PM
 */

class Admin extends MX_Controller{

    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();
        $this->load->model('Mdl_admin');
       
    }
    /**
     * this is the index method the landing page for all operations
     */
    public function index(){
        if (isAdmin()) {
          
            $this->load->view('header');
           
           $this->load->view('footer');
        }
       else {
          redirect(base_url('users'));
       }
    }

 public function product(){
  if (isAdmin()) {
           $data['product']=$this->Mdl_admin->showProduct();
            $this->load->view('header');
            $this->load->view('table',$data);
           $this->load->view('footer');
        }
       else {
          redirect(base_url('users'));
       }
 }   

// Download working fine 

public function download_file($id){
  $data['file']=$this->Mdl_admin->download_file($id);
  $file=$data['file'][0]['eduworkers_products_files_name'];


$data = file_get_contents(base_url()."uploads/".$file); // Read the file's contents


force_download($file, $data);

}

}