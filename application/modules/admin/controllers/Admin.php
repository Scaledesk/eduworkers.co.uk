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
            $data['active']=0;
            $this->load->view('header',$data);
           
           $this->load->view('footer');
        }
       else {
          redirect(base_url('users'));
       }
    }

 public function product(){
  if (isAdmin()) {
         $data['active']=1;
           $data['product']=$this->Mdl_admin->showProduct();
            $this->load->view('header',$data);
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

public function password(){

  if (isAdmin()) {
    
  if (strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
      $data=$this->input->post();
/*print_r($data);
      die;*/
      $this->Mdl_admin->setData('password',$data['new_pass'],$data['old_pass']);

      if ($this->Mdl_admin->password()) {
                    setInformUser('success','your password has been successfully updated.');
                    redirect(base_url('admin'));
      }else{
        setInformUser('error','password does not match old password');
                    redirect(base_url('admin/password'));
      }



    
    }
    else{  $data['active']=3;
          $this->load->view('header',$data);
          $this->load->view('password');
          $this->load->view('footer');
    }
  }
  else{

    redirect(base_url('users'));
  }
}

public function inprogress($id){
  if(islogin()){
  if($this->Mdl_admin->inprogress($id)){

     

       setInformUser('success', 'Product successfully Inprogress ');
      redirect(base_url('users/admin'));
  }else{

       
       setInformUser('error', 'Some error Occurred ');
        redirect(base_url('users/admin'));

  }
}
else{
  redirect(base_url('users'));
}

}
public function completed($id){
  if(islogin()){
  if($this->Mdl_admin->completed($id)){
    setInformUser('success', ' Product successfully Completed ');

      redirect(base_url('users/admin'));

      
  }else{

      
       setInformUser('error', 'Some error Occurred ');
        redirect(base_url('users/admin'));
  }
}
else{
  redirect(base_url('users'));
}

}


}