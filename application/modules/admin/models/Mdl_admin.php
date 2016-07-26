<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/1/16
 * Time: 10:38 PM
 */

/**
* 
*/
class Mdl_admin extends CI_model
{
	
	private $product;
	private $user_id;
    private $new_pass;
    private $old_pass;

     /**
     * @return mixed
     */
    public function getNewpass()
    {
        return $this->new_pass;
    }

    /**
     * @param mixed $new_pass
     */
    public function setNewPass($new_pass)
    {
        $this->new_pass = $new_pass;
    }
         /**
     * @return mixed
     */
    public function getOldPass()
    {
        return $this->old_pass;
    }

    /**
     * @param mixed $old_pass
     */
    public function setOldPass($old_pass)
    {
        $this->old_pass = $old_pass;
    }
	     /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }
         /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserFname($user_id)
    {
        $this->user_id = $user_id;
    }



 public function showProduct(){
  
       $data = $this->db->query("select * from eduworkers_users   join eduworkers_products on eduworkers_users.eduworkers_users_id=eduworkers_products.eduworkers_products_users_id")->result_array();
  /*echo"<pre/>";
  print_r($data);*/
        return $data;
    

 	
 }


 public function download_file($id){

    return $data=$this->db->where('eduworkers_products_files_id',$id)->select('eduworkers_products_files_name')->get('eduworkers_products_files')->result_array();

 }


public function setData(){


    switch (func_get_arg(0)) {
        case 'password':  

                        $this->setNewPass(func_get_arg(1));
                         $this->setOldPass(func_get_arg(2));
                      /*echo $this->getNewpass();
                       echo $this->getOldPass();die;*/
            break;
        
        default:
           
            break;
    }
}

public function password(){
$data = $this->db->where(array('eduworkers_users_id' =>$this->session->userdata['user_data']['user_id']))->select('eduworkers_users_password')->get('eduworkers_users')->result_array();
// echo $this->db->last_query();
// print_r($data);die; 
if($data) {
 //    echo $this->new_pass;
 // print_r($data);die;
if (password_verify($this->old_pass, $data[0]['eduworkers_users_password'])){
 $this->setNewPass(password_hash($this->new_pass, PASSWORD_DEFAULT));

  $data=['eduworkers_users_password'=>$this->new_pass] ;     
  
  // print_r($data);die;
 $this->db->where('eduworkers_users_id',$this->session->userdata['user_data']['user_id'])->update('eduworkers_users',$data);

  if ($this->db->affected_rows('eduworkers_users')) {
    /*print_r($data);die;*/
     return true;
}else{
    return false;
}
  
            
  }else {return false;}

}else { return false;}

}


public function inprogress($id){


  $data = [ 'eduworkers_products_status' => 'inprogress' ];
    
                
                $this->db->where('eduworkers_products_id',$id); 
                 if($this->db->update('eduworkers_products',$data)){
                    return true;
                 }else{
                    return false;
                 }
                 
}


public function completed($id){


  $data = [ 'eduworkers_products_status' => 'completed' ];
    
               
                $this->db->where('eduworkers_products_id',$id); 
                 if($this->db->update('eduworkers_products',$data)){

                    $data = $this->db->query("select * from eduworkers_products   join eduworkers_users on eduworkers_products.eduworkers_products_users_id=eduworkers_users.eduworkers_users_id where eduworkers_products_id=".$id)->result_array();
                    
                    if($data) {
                        return $data;
                    }else {
                       return false; 
                    }

                   
                 }else{
                    return false;
                 }
                 
}

public function getUsers(){
    return $this->db->get('eduworkers_users')->result_array();
}

public function orderDetails($id){

               
                $this->db->where('eduworkers_products_users_id',$id); 
                  $data=$this->db->get('eduworkers_products')->result_array();
                  /*echo "<pre/>";
                print_r($data);die;
*/
                return $data;          
                 
}


public function getCounter(){
    
     /*$query = "SELECT COUNT(*) FROM eduworkers_products where eduworkers_products_status='pending'";
     $data=$this->db->get($query)->result_array();
     /*$row = mysqli_fetch_row($result);
      $count = $row[0];
      echo $data;die;*/

    $this->db->where('eduworkers_products_status','completed');
    $completed=count($this->db->get('eduworkers_products')->result_array());

    $this->db->where('eduworkers_products_status','pending');
    $pending=count($this->db->get('eduworkers_products')->result_array());

     $this->db->where('eduworkers_products_status','payment_done');
    $payment_done=count($this->db->get('eduworkers_products')->result_array());

    $this->db->where('eduworkers_products_status','cancelled');
    $cancelled=count($this->db->get('eduworkers_products')->result_array());

     $data=['completed'=>$completed,'pending'=>$pending,'cancelled'=>$cancelled,'payment_done'=>$payment_done];

     
      return $data;
   }

    public function disable($id){


        $data = [ 'eduworkers_users_state' => '0' ];


        $this->db->where('eduworkers_users_id',$id);
        if($this->db->update('eduworkers_users',$data)){
            return true;
        }else{
            return false;
        }

    }


    public function enable($id){


        $data = [ 'eduworkers_users_state' => '1' ];


        $this->db->where('eduworkers_users_id',$id);
        if($this->db->update('eduworkers_users',$data)){
            return true;
        }else{
            return false;
        }

    }

}