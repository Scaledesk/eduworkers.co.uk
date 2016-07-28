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
             $data['counter']=$this->Mdl_admin->getCounter();
            $data['active']=0;
            $this->load->view('header',$data);
           $this->load->view('index',$data);
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
      redirect(base_url('admin/product'));
  }else{

       
       setInformUser('error', 'Some error Occurred ');
        redirect(base_url('admin/product'));

  }
}
else{
  redirect(base_url('users'));
}

}
public function completed($id){
  if(islogin()){

  if($data['result']=$this->Mdl_admin->completed($id)){

       /* $this->load->view('messageCompleted',$data); */

         /* die();*/
          $user_email=$data['result'][0]['eduworkers_users_username'];
         /* echo $user_email;
          die;*/
         $messageCompleted=$this->load->view('messageCompleted',$data,TRUE); 
         $this->email->from(setEmail(), 'EduWorkers');
         $this->email->to($user_email);
         $this->email->subject('Order Completed');
        /* $this->email->message('Your order number :'.$data['result'][0]['eduworkers_products_id'].' has been successfully completed. Thank you for using our services.');  */
        $this->email->message($messageCompleted);
      if($this->email->send()){
      
     setInformUser('success', ' Product successfully Completed ');

      redirect(base_url('admin/product'));


  }else{
     setInformUser('error', 'Some error Occurred ');
        redirect(base_url('admin/product'));
  }
    
   
      
  }else{

      
       setInformUser('error', 'Some error Occurred ');
        redirect(base_url('admin/product'));
  }
}
else{
  redirect(base_url('users'));
}

}

public function getUsers(){

  if(isAdmin()){
      $data['users']=$this->Mdl_admin->getUsers();
      $data['active']=4;
          $this->load->view('header',$data);
          $this->load->view('users_details',$data);
          $this->load->view('footer');
  }
  else{
    redirect(base_url('users'));
  }
}

public function orderDetails($id){

  if(isAdmin()){
      $data['order']=$this->Mdl_admin->orderDetails($id);
      
    $data['active']=5;

          $this->load->view('header',$data);
          $this->load->view('single_users_order_details',$data);
          $this->load->view('footer');
  }
  else{
    redirect(base_url('users'));
  }
}




public function confirmation($data){
          /*  echo "<pre/>";
            print_r($data);
            echo 
            die();*/
           /* $this->load->view('report',$data);*/
          $this->load->view('messageCompleted'); 
          die();
         /* $user_email=$data[0]['eduworkers_users_username'];
         $message_confirmation=$this->load->view('message_completed',$data,TRUE); 
         $this->email->from(setEmail(), 'EduWorkers');
         $this->email->to($user_email);
         $this->email->subject('Order Completed');
         $this->email->message($message_completed);
         return $this->email->send()?true:false;*/

}


 public  function disable($id)
 {
     if (islogin()) {
         if ($this->Mdl_admin->disable($id)) {
             setInformUser('success', 'user successfully disabled ');
             redirect(base_url('admin/getUsers'));
         } else {
             setInformUser('error', 'Some error Occurred ');
             redirect(base_url('admin/getUsers'));
         }
     } else {
         redirect(base_url('users'));

     }
 }
    public  function enable($id){
        if (islogin()) {
            if ($this->Mdl_admin->enable($id)) {
                setInformUser('success', 'user successfully enabled ');
                redirect(base_url('admin/getUsers'));
            } else {
                setInformUser('error', 'Some error Occurred ');
                redirect(base_url('admin/getUsers'));
            }
        } else {
            redirect(base_url('users'));

        }
    }

}