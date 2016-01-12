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
 	return $this->db->get('eduworkers_products')->result_array();
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
/*echo $this->db->last_query();
print_r($data);die;*/
if($data) {
 /*print_r($data);die;*/
if (password_verify($this->old_pass, $data[0]['eduworkers_users_password'])){
 $this->setNewPass(password_hash($this->new_pass, PASSWORD_DEFAULT));

  $data=['eduworkers_users_password'=>$this->new_pass] ;     
  
  /*print_r($data);die;*/
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


}