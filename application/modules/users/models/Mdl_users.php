<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 2/1/16
 * Time: 7:05 PM
 */

class Mdl_users extends CI_Model
{
    const GUEST_ID = 1; //may be needs to do it like it take it from database or to define user level as global constants later. It will be seen in future.
    private $user_id;
    private $user_name;
    private $password;
    private $role_id;
    private $roles_name;
    private $permissions_name;
    private $social_id;
    private $token;
    private $provider;
    private $status;
    private $user_fname;
    private $phone;
        /**
     * @return mixed
     */
        public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $user_fname
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getUserFname()
    {
        return $this->user_fname;
    }

    /**
     * @param mixed $user_fname
     */
    public function setUserFname($user_fname)
    {
        $this->user_fname = $user_fname;
    }
    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }


    public function __construct()
    {
        parent::__construct();
        $this->role_id = self::GUEST_ID;
        $this->permissions_name = array();
    }

    /**
     * @param mixed $roles_name
     */
    public function setRolesName($roles_name)
    {
        $this->roles_name = $roles_name;
    }

    /**
     * @param mixed $permissions_name
     */
    public function setPermissionsName($permissions_name)
    {
        $this->permissions_name = $permissions_name;
    }

    /**
     *perform set data for class functions.
     */
    public function setData()
    {
        switch (func_get_arg(0)) {
            case "register":
                $this->setUserName(func_get_arg(1));
                $this->setPassword(func_get_arg(2));
                $this->setRoleId(func_get_arg(3));
                $this->setUserFname(func_get_arg(4));
                $this->setPhone(func_get_arg(5));
                break;
            case "checkUser":
                $this->setUserName(func_get_arg(1));
                $this->setPassword(func_get_arg(2));
                break;
            case "setSessionData": {
                
                    $data = $this->db->where(array('eduworkers_users_username' => func_get_arg(1)))->select('eduworkers_users_username,eduworkers_users_id,eduworkers_users_roles_id,eduworkers_users_userfname')->get('eduworkers_users')->result_array();
                    /*print_r($data); die;*/
                    $this->setUserID($data[0]['eduworkers_users_id']);
                    $this->setUserName($data[0]['eduworkers_users_username']);
                    $this->setUserFname($data[0]['eduworkers_users_userfname']);
                    $this->setRoleId($data[0]['eduworkers_users_roles_id']);
                    //$this->setPhone($data[0]['eduworkers_users_phone']);
                    $role_name = $this->db->where(array('eduworkers_roles_id' => $this->role_id))->select('eduworkers_roles_name')->get('eduworkers_roles')->result_array();
                    $this->setRolesName($role_name[0]['eduworkers_roles_name']);
                    $this->permissions_name = array();
                   /* echo $this->getUserFname(); die;*/
                
                 }
                break;
            case "facebook_login": {
                $this->setUserName(func_get_arg(1));
                $this->setSocialId(func_get_arg(2));
                $this->setToken(func_get_arg(3));
                $this->setProvider(func_get_arg(4));
                break;
            }
            case "is_Social": {
                $this->setUserId(func_get_arg(1));
                $this->setProvider(func_get_arg(2));
                break;
            }
            case 'UidEmail' : {
                $this->setUserId(func_get_arg(1));
                $this->setUserId(func_get_arg(2));
                break;
            }


            case'get_email': {
                $this->setUserName(func_get_arg(1));
                $this->setToken(func_get_arg(2));
                break;


            }

            case 'token':{
                $this->setToken(func_get_arg(1));

              break;
            }

            case'pass':{
                $this->setPassword(func_get_arg(1));


                break; 

            }
             case'update_profile':{
               
                $this->setPhone(func_get_arg(1));
                $this->setUserFname(func_get_arg(2));


                break;

            }
            case'updatePassword':{
                $this->setPassword(func_get_arg(1));
                $this->setNewPassword(func_get_arg(2));
                


                break;

            }
            default:
                break;
        }

    }

    /**
     * @param mixed $provider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

    /**
     * @param mixed $social_id
     */
    public function setSocialId($social_id)
    {
        $this->social_id = $social_id;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */

    public function getToken()
    {
        return $this->token;
    }

    public function getUserId()
    {
        if (!$this->user_id) {
            $user_id = $this->db->where('eduworkers_users_username', $this->getUserName())->select(array('eduworkers_users_id'))->get('eduworkers_users')->result_array();
            $this->setUserId($user_id[0]['eduworkers_users_id']);
        }
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @return mixed
     */
    public function getRoleId()
    {
        return $this->role_id;
    }

    /**
     * @return mixed
     */
    public function getRolesName()
    {
        return $this->roles_name;
    }

    /**
     * @return array
     */
    public function getPermissionsName()
    {
        return $this->permissions_name;
    }

    public function register()
    {
        switch (func_get_arg(0)) {
            case 'normal_registration':
                $this->_validate('normal_registration');
                $this->setPassword(password_hash($this->password, PASSWORD_DEFAULT));
                $data = [
                    'eduworkers_users_userfname' => $this->user_fname,
                    'eduworkers_users_username' => $this->user_name,
                    'eduworkers_users_password' => $this->password,
                    'eduworkers_users_roles_id' => $this->role_id,
                    'eduworkers_users_phone'    => $this->phone,
                    'eduworkers_users_state'    => '1'
                ];

              /*  print_r($data);die;*/

                if ($this->db->insert('eduworkers_users', $data)) {
                    return true;
                }
                return false;
                break;
            case 'social_registration':
                $this->_validate('social_registration');
                $data = [
                    'eduworkers_users_username' => $this->user_name,
                    'eduworkers_users_social_id' => $this->social_id,
                    'eduworkers_users_provider' => $this->provider,
                    'eduworkers_users_roles_id' => $this->role_id
                ];
                if ($this->db->insert('eduworkers_users', $data)) {
                    return true;
                }
                return false;
                break;

            case 'get_email':
                $this->_validate(func_get_arg(0));
                return true;
                break;
                 case 'update_profile':
                $this->_validate('update_profile');
                $data = [
                    'eduworkers_users_phone' => $this->phone,
                    'eduworkers_users_userfname' => $this->user_fname
                   
                ];
                // print_r($data);die;
                 $this->db->where('eduworkers_users_id',$this->session->userdata['user_data']['user_id']);

                if ($this->db->update('eduworkers_users', $data)) {
                    return true;
                }
                return false;
                break;
            default:
                break;
        }

    }

    /**
     * this checks user credentials on basis of user provided data
     * @return bool
     */
    public function checkUser()
    {
        if ($data = $this->db->where(array('eduworkers_users_username' => $this->user_name))->select('eduworkers_users_password')->get('eduworkers_users')->result_array()) {
            if (password_verify($this->password, $data[0]['eduworkers_users_password'])){

             return true;
            
            }
        return false;
    }
}


public function hasUser(){
 if ($this->db->where(array('eduworkers_users_username' => $this->user_name))->select('eduworkers_users_username')->get('eduworkers_users')->result_array()) {
             return true;
     
    }else{return false;}

}

    public function stateUser(){
       $data= $this->db->where(array('eduworkers_users_username' => $this->user_name))->select('eduworkers_users_state')->get('eduworkers_users')->result_array();


        if ($data[0]['eduworkers_users_state']==1) {
            return true;

        }else{return false;}

    }




    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @param mixed $password 
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
     public function setNewPassword($new_password)
    {
        $this->new_password = $new_password;
    }

    /**
     * @param mixed $role_id
     */
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;
    }

    private function _validate()
    {
        switch (func_get_arg(0)) {
            case "normal_registration":
                $this->setPassword($this->security->xss_clean($this->password));
                $this->setUserName($this->security->xss_clean($this->user_name));
                $this->setRoleId($this->security->xss_clean($this->role_id));
                break;
            case "social_registration":
                $this->setUserId($this->security->xss_clean($this->user_id));
                $this->setSocialId($this->security->xss_clean($this->social_id));
                $this->setToken($this->security->xss_clean($this->token));
                $this->setProvider($this->security->xss_clean($this->provider));
                break;

            case'get_email': {
                $this->setUserName($this->security->xss_clean($this->getUserName()));
                $this->setToken($this->security->xss_clean($this->getToken()));
            }
                break;
                 case'update_profile': {
                $this->setPhone($this->security->xss_clean($this->getPhone()));
                $this->setUserFname($this->security->xss_clean($this->getUserFname()));
            }
                break;
            default:
                break;
        }

    }

    /**
     * return user data
     * @return array
     */
    public function getUserData()
    {
        return ['user_id' => $this->getUserId(), 'user_name' => $this->getUserName(),
            'user_role_id' => $this->getRoleId(), 'user_role_name' => $this->getRolesName(),
            'user_permissions' => $this->getPermissionsName(),
            'user_fname'=>$this->getUserFname()
        ];
    }

    public function isSocialRegistered()
    {
        return $this->db->where(array('eduworkers_users_username' => $this->user_name, 'eduworkers_users_provider' => $this->provider))->select('eduworkers_users_id')->get('eduworkers_users')->result_array() ? true : false;
    }

    public function isNormalRegistered()
    {
        return $this->db->where(array('eduworkers_users_username' => $this->user_id))->select('eduworkers_users_id')->get('eduworkers_users')->result_array() ? true : false;
    }

    public function getUsers()
    {
        switch (func_get_arg(0)) {
            /*returns an array og users Uid and Email*/
            case 'UidEmail': {
                $user1 = array();
                $users = $this->db->select('eduworkers_users_id,eduworkers_users_username')->get('eduworkers_users')->result_array();
                foreach ($users as $user) {
                    $user1[$user['eduworkers_users_id']] = $user['eduworkers_users_username'];
                }
                return $user1;
                break;
            }
            default:
                break;
        }
    }


    public function forgotPwd()
    {
        switch (func_get_arg(0)) {
            case'get_email': {
                return $this->db->where('eduworkers_users_username',$this->getUserName())->select(array('eduworkers_users_id'))->get('eduworkers_users')->result_array() ? true : false;
                break;
            }
            case'forgot': {
                $data = [
                    'eduworkers_forgot_pwd_email' => $this->getUserName(),
                    'eduworkers_forgot_pwd_password' => $this->getToken()
                ];
                return $this->db->insert('eduworkers_forgot_pwd', $data) ? true : false;
            }
            case'update_pass': {
                $this->getPassword();
                $username = $this->session->userdata('username');
                $this->session->unset_userdata('username');
                return $this->db->where('eduworkers_users_username',$username)->update('eduworkers_users',['eduworkers_users_password'=>$this->getPassword()])?true:false;
            }
        }

    }

    public  function  getEmail()
        {


            $token = $this->session->userdata('token');

            $email = $this->db->where('eduworkers_forgot_pwd_password', $token)->select('eduworkers_forgot_pwd_email')->get('eduworkers_forgot_pwd')->result_array();
            return $email;
        }
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
  public function getNewPassword()
    {
        return $this->new_password;
    }
    /**
     * @return mixed
     */
    public function getSocialId()
    {
        return $this->social_id;
    }

    /**
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    public function insertToken(){
        return $this->db->where('eduworkers_users_id',$this->getUserId())->update('eduworkers_users',[
           'eduworkers_users_token'=>$this->getToken()
        ])?true:false;
    }
    public function verifyEmail(){

        $this->db->where('eduworkers_users_token',$this->getToken())->update('eduworkers_users',['eduworkers_users_status'=>'1']);
       if($this->db->affected_rows()){

            $this->db->where('eduworkers_users_token',$this->getToken())->update('eduworkers_users',['eduworkers_users_token'=>NULL]);
           return true;

       }else{


           return false;
       }

 

    }


   
    public function isActive(){
    
    $query=$this->db->where('eduworkers_users_username',$this->getUserName())->select(array('eduworkers_users_status'))->get('eduworkers_users')->result_array();

 
       if(!empty($this->db->where('eduworkers_users_username',$this->getUserName())->select(array('eduworkers_users_status'))->get('eduworkers_users')->result_array()[0]['eduworkers_users_status'])){
        
           return true;
       }else{
       
        return false;
       }

    }

   public function removeToken(){
       $token = $this->session->userdata('token');
       return $this->db->where('eduworkers_forgot_pwd_password',$token)->delete('eduworkers_forgot_pwd')?true:false;
   }


    public function usersViews(){

       $data = $this->db->query("select * from eduworkers_users   join eduworkers_profiles on eduworkers_users.eduworkers_users_id=eduworkers_profiles.eduworkers_profiles_id")->result_array();

        return $data;
    }

    public function getProfile(){

        return $this->db->where('eduworkers_users_id',$this->session->userdata['user_data']['user_id'])->get('eduworkers_users')->result_array();
    }



    public function uploadFiles($data= array()){

       

        foreach ($data as $row) {

            $data=['eduworkers_temp_files_buyer_id' => $this->session->userdata['user_data']['user_id'],

                    'eduworkers_temp_files_name' => $row
                   
            ];
             $a= $this->db->insert('eduworkers_temp_files',$data);
        }
     if($this->db->affected_rows()){
        return true;
     }
     else{
        return false;
     }
    }


public function payment(){

$file['data_files']=$this->db->where('eduworkers_temp_files_buyer_id',$this->session->userdata['user_data']['user_id'])->get('eduworkers_temp_files')->result_array();

  if($this->session->userdata['user_products']['lenght']){

    $lenght=$this->session->userdata['user_products']['lenght'];
  }
  else{
    $lenght=$this->session->userdata['user_products']['slide'];
  }


$product_rand=rand(999,9999);
   
  
        $data=[
        'eduworkers_products_users_id'=> $this->session->userdata['user_data']['user_id'],
        'eduworkers_products_services'=>$this->session->userdata['user_products']['services'],
        'eduworkers_products_subjects'=>$this->session->userdata['user_products']['subjects'],
        'eduworkers_products_length'=>$lenght,
        'eduworkers_products_delivery_date'=>$this->session->userdata['user_products']['date'],
        'eduworkers_products_grade'=>$this->session->userdata['user_products']['grade'],
        'eduworkers_products_total'=>$this->session->userdata['user_products']['total'],
        'eduworkers_products_title'=>$this->session->userdata['user_order']['title'],
        'eduworkers_products_message'=>$this->session->userdata['user_order']['message'],
        'eduworkers_products_status'=>'pending',
        'eduworkers_products_rand_no'=>$product_rand
       
        ];
    if($this->db->insert('eduworkers_products',$data)){

       $data['product_id']=$this->db->where('eduworkers_products_users_id', $this->session->userdata['user_data']['user_id'])->select('eduworkers_products_id')->order_by("eduworkers_products_id","desc")->get('eduworkers_products')->result_array();

            $this->session->set_userdata('order_id',$data['product_id'][0]['eduworkers_products_id']);
   /*    echo $data['product_id'][0]['eduworkers_products_id'];*/  /*print_r($data['product_id']); *//*die;*/

        foreach ($file['data_files'] as $row) {

/*echo $row['eduworkers_temp_files_name'];die;*/
                $data1=['eduworkers_products_files_buyer_id' => $this->session->userdata['user_data']['user_id'],

                    'eduworkers_products_files_name' => $row['eduworkers_temp_files_name'],
                    'eduworkers_products_files_product_id'=>$data['product_id'][0]['eduworkers_products_id'],
                    'eduworkers_products_files_rand_no'=>$product_rand
                   
            ];

              $this->db->insert('eduworkers_products_files',$data1);

              $this->db->where('eduworkers_temp_files_name',$row['eduworkers_temp_files_name']);  
              $this->db->delete('eduworkers_temp_files'); 

        }
     
    $this->db->from ( 'eduworkers_products' );
    $this->db->join ( 'eduworkers_products_files', 'eduworkers_products_files.eduworkers_products_files_rand_no = eduworkers_products.eduworkers_products_rand_no' , 'inner' );
    $this->db->where ( 'eduworkers_products.eduworkers_products_users_id', $this->session->userdata['user_data']['user_id']);
    $this->db->where('eduworkers_products_id',$data['product_id'][0]['eduworkers_products_id']);
    $query = $this->db->get ()->result_array();

/*print_r($query);die;*/

 /*$data=$this->db->query("select * from  left join  on eduworkers_products.eduworkers_products_id = eduworkers_products_files. ")->where('eduworkers_products_users_id',)->result_array();
*/

            if(!empty($query)){

            return ['data'=>$query,
            "has_attachment"=>1];
            }else{

                $file=$this->db->where('eduworkers_products_users_id',$this->session->userdata['user_data']['user_id'])
                  ->where('eduworkers_products_id',$data['product_id'][0]['eduworkers_products_id'])
                  ->order_by("eduworkers_products_id","desc")
                  ->get('eduworkers_products')->result_array();


             return ['data'=> $file,
            "has_attachment"=>0];
                
            }

        
    }
    else{
        return false;
    }
}

public function table(){

    if($this->db->select('eduworkers_temp')){
        return true;
    }else{
        return false;
    }
}




public function updatePassword(){

if($data = $this->db->where(array('eduworkers_users_username' =>$this->session->userdata['user_data']['user_id']))->select('eduworkers_users_password')->get('eduworkers_users')->result_array()) {
if (password_verify($this->password, $data[0]['eduworkers_users_password'])){
 $this->setNewPassword(password_hash($this->new_password, PASSWORD_DEFAULT));

  $data=['eduworkers_users_password'=>$this->new_password] ;     
  
 $this->db->where('eduworkers_users_id',$this->session->userdata['user_data']['user_id'])->update('eduworkers_users');

  if ($this->db->affected_rows('eduworkers_users')) {
     return true;
}else{
    return false;
}
  
            
  }else {return false;}

}else {return false;}

}


public function showProduct(){
   return $this->db->where('eduworkers_products_users_id',$this->session->userdata['user_data']['user_id'])->get('eduworkers_products')->result_array();
}



public function cancelled($id){

  $data = [ 'eduworkers_products_status' => 'cancelled' ];
    
                $this->db->where('eduworkers_products_users_id',$this->session->userdata['user_data']['user_id']);
                $this->db->where('eduworkers_products_id',$id); 
                 if($this->db->update('eduworkers_products',$data)){
                    return true;
                 }else{
                    return false;
                 }
                 
}

public function setEmail(){

    return $this->db->select('eduworkers_email_settings_smtp_user')->get('eduworkers_email_settings')->result_array();
}

public function getOrderSummary(){
  

      /* $data['product_id']=$this->db->where('eduworkers_products_users_id', $this->session->userdata['user_data']['user_id'])->select('eduworkers_products_id')->order_by("eduworkers_products_id","desc")->get('eduworkers_products')->result_array();*/
    $order_id=$this->session->userdata['order_id']; 
   /*echo $order_id;
    die;*/
         $data = [ 'eduworkers_products_status' => 'payment_done' ];
         $this->db->where('eduworkers_products_id',$order_id); 
        if($this->db->update('eduworkers_products',$data)){
                    
   
  $this->db->from ( 'eduworkers_products' );
    $this->db->join ( 'eduworkers_products_files', 'eduworkers_products_files.eduworkers_products_files_rand_no = eduworkers_products.eduworkers_products_rand_no' , 'inner' );
    $this->db->where ( 'eduworkers_products.eduworkers_products_users_id', $this->session->userdata['user_data']['user_id']);
    $this->db->where('eduworkers_products_id',$order_id);
    $query = $this->db->get ()->result_array();


            if(!empty($query)){

            return ['data'=>$query,
            "has_attachment"=>1];
            }else{

                $file=$this->db->where('eduworkers_products_users_id',$this->session->userdata['user_data']['user_id'])
                  ->where('eduworkers_products_id',$order_id)
                  ->order_by("eduworkers_products_id","desc")
                  ->get('eduworkers_products')->result_array();


             return ['data'=> $file,
            "has_attachment"=>0];
                
            }

}
 else return false;
}

public function getCounter(){
    
    
    $this->db->where('eduworkers_products_status','completed');
    $this->db->where('eduworkers_products_users_id',$this->session->userdata['user_data']['user_id']);
    $completed=count($this->db->get('eduworkers_products')->result_array());

    $this->db->where('eduworkers_products_status','pending');
    $this->db->where('eduworkers_products_users_id',$this->session->userdata['user_data']['user_id']);
    $pending=count($this->db->get('eduworkers_products')->result_array());

     $this->db->where('eduworkers_products_status','payment_done');
     $this->db->where('eduworkers_products_users_id',$this->session->userdata['user_data']['user_id']);
    $payment_done=count($this->db->get('eduworkers_products')->result_array());

    $this->db->where('eduworkers_products_status','cancelled');
    $this->db->where('eduworkers_products_users_id',$this->session->userdata['user_data']['user_id']);
    $cancelled=count($this->db->get('eduworkers_products')->result_array());

     $data=['completed'=>$completed,'pending'=>$pending,'cancelled'=>$cancelled,'payment_done'=>$payment_done];

     /*print_r($data);die;*/
      return $data;
   }


}
