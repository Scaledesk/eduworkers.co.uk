<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 2/1/16
 * Time: 4:38 PM
 */

class Users extends MX_Controller{

    function __construct()
    {
        date_default_timezone_set('Asia/Calcutta');
        parent::__construct();
       
        $this->load->Model('Mdl_users');
    }
    /**
     * this is the index method the landing page for all operations
     */
    public function index(){

      if (islogin()) {
         /*redirect(base_url('users/dashboard'));*/
         if (isAdmin()) {
             redirect(base_url('admin'));
         }
         else{
             $this->load->view('header/header');
             $this->load->view('index');
             $this->load->view('header/footer');
         }
      }
        else{ 
     
        if($this->_logged_in()){
            if($this->_getRole()=='guest'){
                //show their dashboard
            }elseif($this->_getRole()=='host'){
                //show their dashboard
            }
        }else if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
            $to_do_with_post=$_POST["todo"];
            if(isset($to_do_with_post)){
                if($to_do_with_post=='login'){
                    $this->_login($this->input->post());
                }elseif($to_do_with_post=='register'){



                    
                    $this->_register($this->input->post());
                }
            }
        }else{
            /*$roles= array();
            foreach($this->_getRole() as $role){
                $roles[$role['eduworkers_roles_id']]=$role['eduworkers_roles_name'];
            }
            $data['roles']=$roles;
            $data['facebook_login_url']=$this->_getFacebookLoginUrl();*/
            $this->load->view('header/header');
             $this->load->view('index');
             $this->load->view('header/footer');
            /* redirect('users/dashboard');*/
        }
    }
 }

    /**
     * check if user if someone is logged in or not
     * @return bool
     */
 /*public function dashboard(){
      if (islogin()) {

        if(isAdmin()){
           redirect(base_url('admin')); 
        }
     else  {
            
         }

         
      }
      else{
             $this->load->view('header/header');
             $this->load->view('index');
             $this->load->view('header/footer');
      }
 }


*/

    private function _logged_in()
    {
        /*if(someone is logged in)
        RETURN TRUE;*/
    }
    public function signup()
    {
       
            $this->load->view('header/header');
             $this->load->view('signup');
             $this->load->view('header/footer');
    }
    
public function login()
    {
       
            $this->load->view('header/header');
             $this->load->view('login');
             $this->load->view('header/footer');
    }
    /**
     *return role of currently logged in user
     */
    private function _getRole()
    {
        //return role
        if(false/*logged_in*/){

        }else{
            $this->load->Model('user_roles/Mdl_roles');
            return $this->Mdl_roles->getRolesName();
        }
    }

    /**
     *login the user
     */
    private function _login($data)
    {
        $this->Mdl_users->setData('checkUser',$data['email'],$data['password']);
        if(hasUser()){
        if(isAccountActive()){
            if($this->Mdl_users->checkUser()){
                $this->Mdl_users->setData('setSessionData',$data['email']);
                $user_data=$this->Mdl_users->getUserData();
                $this->_setSessionData('authorize',$user_data);

                /*echo $user_data['user_role_name'];die;*/
                   if($user_data['user_role_name']=='admin'){
                    setInformUser('success','Login successfully');
                    redirect(base_url('admin'));
                   } else if ($this->session->userdata('user_products')) {

                       redirect(base_url('users/do_upload'));
                       
                   }{
                    setInformUser('success','Login successfully');
                    redirect(base_url('users'));
                   }
                
               
            }else{
                //set flash message that his username and password do not match try again.
                setInformUser('error','your Username and password do not match');
                redirect(base_url('users/login'));
            }
        }else{
            setInformUser('error','Your Account in not activated. Kindly verify your email to logon.');
            redirect(base_url('users/login'));
        }
      }
      else{
            setInformUser('error','Your email not register.Please at first  register email .');
            redirect(base_url('users/login'));
        }

    }

   
    private function _register($data)
    {
        $role=10;
        $this->Mdl_users->setData('register',$data['email'],$data['password'],$role,$data['name']);
        if($this->Mdl_users->register('normal_registration')){
            
            if($this->sendMail()){
                $this->Mdl_users->insertToken();
                 setInformUser('success','your account successfully created and  Active link on your Email');
                redirect(base_url('users'));
            }else{
                 setInformUser('error','Account registered but email not send.');
               
                redirect(base_url('users'));
            }
        }
    }

    private function _setSessionData()
    {
        switch(func_get_arg(0)){
            case 'authorize':   $this->session->set_userdata('authorize',true);
                $this->session->set_userdata('user_data',func_get_arg(1));
                break;

               case 'products':
                    
                $this->session->set_userdata('user_products',func_get_arg(1));
                break; 
                case 'order':
                    
                $this->session->set_userdata('user_order',func_get_arg(1));
                break;
            default: break;
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('users?logout=1'));
    }

    private function _getFacebookLoginUrl(){
        $fb = $this->_facebookAppConf();

        $helper = $fb->getRedirectLoginHelper();

        $permissions = ['email']; // Optional permissions
        return $helper->getLoginUrl(base_url().'users/doFacebookLogin', $permissions);
    }
   

    

    Public function forgetPwd()
    {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {

            $a=rand(999999999999,9999999999999999);
            $token = "eduworkers".$a;
            $token = password_hash($token, PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $this->Mdl_users->setData('get_email', $email,$token);
            if ($this->Mdl_users->forgotPwd('get_email',$email)) {

                $this->email->from('nitesh@weboforce.com', 'Edu Workers');
                $this->email->to($email);

                $this->email->subject('Forgot Password');
                $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;">Reset Password</div>
                           <br/>
                           <a href="'.base_url().'index.php/users/recallMail?tqwertyuiasdfghjzxcvbn=' . $token . '">Click here</a>');
                if ($this->email->send()) {

                    if($this->Mdl_users->forgotPwd('forgot',$email,$token)){

                        setInformUser('success','Kindly check your email to reset password');

                        redirect(base_url('users'));
                    }else{
                        setInformUser('error','Some error Occurred! Kindly retry');
                        redirect(base_url('users'));
                    }
                } else {
                    setInformUser('error','Some error Occurred!'.$this->email->print_debugger(). 'Kindly retry');
                        redirect(base_url('users'));
                    
                }
            }else{
                setInformUser('error','No such email found in our records. Kindly register with us');
                  redirect(base_url('users'));
            }
        }
    }
    public function forgotMail(){
        $this->load->view('header/header');
        $this->load->view('forgot_password');
        $this->load->view('header/footer');

    }
    public  function  recallMail()
    {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $pass = $this->input->post('pasword');
            $pass_c = $this->input->post('c_pasword');
            if ($pass == $pass_c) {
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $this->Mdl_users->setData('pass', $pass);
                if($this->Mdl_users->forgotPwd('update_pass', $pass)){
                    $this->removeToken();
                    setInformUser('success','Your password updated successfully! kindly login with new password to continue.');
                    redirect(base_url('users'));
                };
            } else {
               
                  setInformUser('error','Password not match.');
                    redirect(base_url('users'));
            }
        }
        if (isset($_REQUEST['tqwertyuiasdfghjzxcvbn'])) {
            $token = $this->input->post_get('tqwertyuiasdfghjzxcvbn');
            $this->session->set_userdata('token', $token);
            if($data['email']=$this->getEmail()){
                $email=$data['email'][0]['eduworkers_forgot_pwd_email'];

                $this->session->set_userdata('username',$email);
                $this->removeToken();
                $this->load->view('header/header');
                $this->load->view('update_password');
                $this->load->view('header/footer');
            }
            else{

                setInformUser('error','Your token has expired !  Try Again.');
                redirect(base_url('users'));
            }

        }

    }

    public  function  createToken()
    {
        $a=rand(999999999999,9999999999999999);
        $active_token = "eduworkers".$a;
        $active_token = password_hash($active_token, PASSWORD_DEFAULT);
        return $active_token;
    }

    public  function sendMail()
    {
        /*echo $this->Mdl_users->getUserName();
        die();*/
        $token = $this->createToken();
        $this->email->from('nitesh@weboforce.com', 'Edu Workers');
        $this->email->to($this->Mdl_users->getUserName());

        $this->email->subject('Email Activation');
        $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;">Please Activate your account</div>
                           <br/>
                           <a href="'.base_url().'users/verifyEmail?tqwertyuiasdfghjzxcvbn=' . $token . '">Click here</a>');
        $this->Mdl_users->setData('token',$token);
        return $this->email->send()?true:false;
    }
    public function verifyEmail(){


        $token=$this->input->post_get('tqwertyuiasdfghjzxcvbn');
        $this->Mdl_users->setData('token',$token);
        $this->Mdl_users->verifyEmail()?setInformUser('success',"email verified successfully"):setInformUser('error',"Your token has expired");
        redirect(base_url('users'));
    }

    public function removeToken(){

        return $this->Mdl_users->removeToken()?true:false;

    }

    public  function getEmail(){
        $data=$this->Mdl_users->getEmail();
        return $data;

    }
    private function _callCreateOffers()
    {
        $this->load->Model('offers/Mdl_offers');
        if(offerCredit($this->Mdl_users->getUserId(),'add 100 keys to user wallet on sign up',strtolower(Wallet_transaction_type::CREDIT),100)){
            $this->Mdl_offers->setData('create_offer',[
                'id'=>$this->Mdl_users->getUserId(),
                'sign_up'=>'1'
            ]);
            return $this->Mdl_offers->insert();
        }else{
            return false;
        }
    }
    public  function usersViews(){

        $data['user']=$this->Mdl_users->usersViews();

        $this->load->view('admin/header/header');
        $this->load->view('users_views',$data);

    }


    public function profile(){

        if (islogin()) {

            if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
           $data=$this->input->post();
           $this->Mdl_users->setData('update_profile',$data['email'],$data['fname']);

         }
                else{

                    $data['profile']=$this->Mdl_users->getProfile();
                   /* print_r( $data['profile']);
                    die;*/
                    $this->load->view('header/header');
                    $this->load->view('profile',$data);
                    $this->load->view('header/footer');

                }
           
        }
        else{
            redirect(base_url('users'));
        }
    }



     public  function contact()
    {
   
    $data=$this->input->post();
    $name=$data['name'];
    $email=$data['email'];
    $query=$data['message'];
  
        $admin_mail='nkscoder@gmail.com';
       $this->email->from('nitesh@weboforce.com', 'Edu Workers');
        
        $this->email->to($admin_mail);
     
        $this->email->subject('Notifiction');
        $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;">'. $name.'<br/>'.$email.'<br/>'.$query.'</div>');

      if($this->email->send()){
         setInformUser('success',"Send Query successfully");
        redirect(base_url('users'));
      }else{
         setInformUser('error',"Some Error Occurred.");
        redirect(base_url('users'));
      }
    
}

/*public function order_details(){

print_r($this->session->userdata('user_products'));
die;
    $this->load->view('header/header');
    $this->load->view('order_details');
    $this->load->view('header/footer');

}*/

public function order(){


/*print_r($this->session->userdata('user_products'));
die;*/
       
 if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){


     $this->_setSessionData('products',$this->input->post());
 
        if (islogin()) {

                 redirect(base_url('users/do_upload'));
              }
            else{

                 setInformUser('error',"Please login at first.");
                redirect(base_url('users/login'));
            }  
   }
    else{

        $this->load->view('header/header');
        $this->load->view('order');
        $this->load->view('header/footer');
    }

     
}

public function doOrder(){

     $date=$this->input->post('date');
     $grade=$this->input->post('grade');
     $subjects=$this->input->post('subjects');
     $words=$this->input->post('length');
     $currency=$this->input->post('currency');
/*echo json_encode($date);*/
/* echo json_encode($grade);*/
/* die;*/

 if($grade=='gcse A'){
     $pl=0.075;
  

   if ($date==1 and $words==1000) {
     
      $pl2=2.5;
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }
  elseif ($date==2 and $words==1000) {
     
       $pl2=1.75;
      $total=$pl* $words*$pl2;
        echo json_encode($total);
  }
elseif ($date==3 and $words==1000) {
    
      $pl2=1.5;
      $total=$pl* $words*$pl2;
        echo json_encode($total);
  }elseif ($date==4 and $words==1000) {
     
      $pl2=1.35;
      $total=$pl* $words*$pl2;
        echo json_encode($total);
  }elseif ($date==5 and $words==1000) {
     
      $pl2=1.20;
      $total=$pl*$words*$pl2;
        echo json_encode($total);
  }elseif ($words==1000 and $date==6 or $date==7 or $date==8 or $date==9) {
    
      $pl2=1.15;
      $total=$pl* $words*$pl2;
        echo json_encode($total);
  }elseif ($date==10 and $words==1000) {
    
      $pl2=1;
      $total=$pl* $words*$pl2;
        echo json_encode($total);
  }
}
else if ($grade=='gcse B' or $grade=='nvq') {
 
         $pl=0.0714;
         $pl2=1;
     
      
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }

else if ($grade=='merit') {
 
         $pl=0.075;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }

else if ($grade=='A grade A') {
 
         $pl=0.075;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }
else if ($grade=='A grade A') { 
 
         $pl=0.0786;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }
 else if ($grade=='diploma pass') {
 
         $pl=0.075;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }  
  else if ($grade=='diploma merit') {
 
         $pl=0.093;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }  
    
    else if ($grade=='Undergraduate 2:2') {
 
         $pl=0.082;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }  
    else if ($grade=='Undergraduate 2:1' or $grade=='postgraduate Diploma 2:2') {
 
         $pl=0.093;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }  


   else if ($grade=='postgraduate Diploma 2:1'  or $grade=='Masters 2:1' ) {
 
         $pl=0.129;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   } 
   else if ($grade=='Masters 2:2') {
 
         $pl=0.093;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }  
   else if ($grade=='Mphil Pass' or $grade=='PhD' ) {
 
         $pl=0.5358;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }
   else if ($grade=='GDL Pass') {
 
         $pl=0.0822;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   } 
     else if ($grade=='GDL commendation') {
 
         $pl=0.093;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }  else if ($grade=='LPC Pass') {
 
         $pl=0.0858;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }  else if ($grade=='LPC Pass 1') {
 
         $pl=0.1326;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }  else if ($grade=='BPTC Competent') {
 
         $pl=0.1428;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }  else if ($grade=='BPTC very Competent') {
 
         $pl=0.1716;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   } 
   else if ($grade=='Presentation') {
 
         $pl=15;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }
   else if ($grade=='Undergraduate Dissertation/project') {
 
         $pl=0.095;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }
   else if ($grade=='Postgraduate Dissertation/project') {
 
         $pl=0.12;
         $pl2=1;   
        $total=$pl* $words*$pl2;
        echo json_encode($total);
   }
}




public function products_query(){

   if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $ci=CI::get_instance();
            $config['upload_path']          = 'uploads/';
            $config['allowed_types']        = 'txt|pptx|docx|pdf';
            $config['max_size']             = 2000;
            $config['encrypt_name'] = TRUE;
            $this->upload->initialize($config);
            if ( ! $ci->upload->do_upload('name'))
            {
                $error = array('error' => $ci->upload->display_errors());
                setInformUser('error', $error['error'].' please import  file formate only');
               
             }
           else{
               $data = array('upload_data' => $ci->upload->data());
               $file=$data['upload_data']['file_name'];
               if($this->Mdl_users->products_query($file)){
                 setInformUser('success', ' please import  file formate only');
               }else{
                 setInformUser('error','Some error Occurred');
               }
               }
                
}

}






function do_upload() {
  if(islogin()){
   if(strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post'){
    $files = $_FILES;
    $order['title']=$this->input->post('title');
    $order['message']=$this->input->post('message');

  $this->_setSessionData('order',$order);


  $filesn=$_FILES ['userfile'] ['name']; 

  $filesn=array_filter($filesn,'strlen');
  /*print_r($files);
  die;*/
    $cpt = count ( $_FILES ['userfile'] ['name'] );
 


 if(!empty($filesn)){

/* echo $cpt;
  print_r($files);
  die;*/

     $ci=CI::get_instance();
    
    $name_array = array();
     $name_display = array();
    
  if ($cpt<10) {

    for($i = 0; $i < $cpt; $i ++) {

       $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());

        if(!$this->upload->do_upload ('userfile'))
        {
        
         $data = $this->upload->data();

       /*cho  $name_array[] = $data['file_name'];
die;*/

          $error = array('error' => $ci->upload->display_errors());
           setInformUser('error', $error['error'].' please uploads  file formate only');
               
        
          redirect(base_url('users/do_upload'));
        }
        
         $data = $this->upload->data();
        $name_array[] = $data['file_name'];

/*print_r($name_array);die;*/
    }


     if($this->Mdl_users->uploadFiles($name_array)){
/*echo "string";
        print_r($name_array);die;*/
        redirect(base_url('users/orderSummary'));
      
       }
        else {

          echo "Some Error Occurred";
        }
    
}
    else{
      echo "10 Files Only uploads";

    }

  }else{

    redirect(base_url('users/orderSummary'));
  }
   
}
else{
  $this->load->view('header/header');
  $this->load->view('files_upload');
  $this->load->view('header/footer');
}
}else{

  redirect(base_url('users'));
}

}
private function set_upload_options() {
    // upload an image options
    $config = array ();
    $config ['upload_path'] = 'uploads/';
    $config ['allowed_types'] = 'docx|pdf|ppt|doc|pptx'; 
     $config['max_size']      = 2000;
    $config ['encrypt_name'] = TRUE;

    return $config;
}



public function orderSummary(){

/*print_r($this->session->userdata('user_order'));
print_r($this->session->userdata('user_products'));
die;*/
if (islogin()) {

$this->load->view('header/header');
  $this->load->view('payment');
  $this->load->view('header/footer');

}
else{
   redirect(base_url('users'));
}
}


public function payment(){

  if($this->Mdl_users->payment()){
   redirect(base_url('users'));
    setInformUser('success',' successfully Payment');
  }
  else{
     redirect(base_url('users'));
      setInformUser('error', 'Some error Occurred ');
  }
}


public function table(){
   if($this->Mdl_users->table()){
  echo "successfully ";
  }
  else{
    echo "error";
  }
}



public function updatePassword(){
  if (islogin()) {
   
 if (strtolower($_SERVER(REQUEST_METHOD))=='post') {
   $data=$this->input->post();
   $this->Mdl_users->setData('updatePassword',$data['old_password'],$data['new_password']);
   $this->Mdl_users->updatePassword();

 }else{

  $this->load->view('header/header');
  $this->load->view();
  $this->load->view('header/footer');
 }



  }else{
    redirect(base_url('users'));
  }
}


public function services (){

   $this->load->view('header/header');
  $this->load->view('services');
  $this->load->view('header/footer');
}

public function singleServices (){

   $this->load->view('header/header');
  $this->load->view('single_services');
  $this->load->view('header/footer');
}


}