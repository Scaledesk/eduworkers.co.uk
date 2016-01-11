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
}