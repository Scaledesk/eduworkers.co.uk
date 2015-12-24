<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: tushar
 * Date: 14/9/15
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
        }
    }

    /**
     * check if user if someone is logged in or not
     * @return bool
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
        if(isAccountActive()){
            if($this->Mdl_users->checkUser()){
                $this->Mdl_users->setData('setSessionData',$data['email']);
                $user_data=$this->Mdl_users->getUserData();
                $this->_setSessionData('authorize',$user_data);
                setInformUser('success','Login successfully');
                redirect(base_url('users'));
                /*$this->load->view('header/header');
                $this->load->view('dashboard');*/
              //  redirect('testapp');
            }else{
                //set flash message that his username and password do not match try again.
                setInformUser('error','your Username and password do not match');
                redirect(base_url('users'));
            }
        }else{
            setInformUser('error','Your Account in not activated. Kindly verify your email to logon.');
            redirect(base_url('users'));
        }

    }

    /**
     *register the user
     */
    private function _register($data)
    {
        $role=10;
        $this->Mdl_users->setData('register',$data['email'],$data['password'],$role,$data['name']);
        if($this->Mdl_users->register('normal_registration')){
            
            if($this->sendMail()){
                echo $this->Mdl_users->insertToken();
                 setInformUser('success','your account successfully created and  Active link on your Email');
                redirect(base_url('users'));
            }else{
                 setInformUser('error','Account registered but email not send.');
               
                redirect(base_url('users'));
            }
        };
    }

    private function _setSessionData()
    {
        switch(func_get_arg(0)){
            case 'authorize':   $this->session->set_userdata('authorize',true);
                $this->session->set_userdata('user_data',func_get_arg(1));
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
                    print_r( $data['profile']);
                    die;
                    $this->load->view('header/header');
                    $this->load->view('profile');
                    $this->load->view('header/footer');

                }
           
        }
        else{
            redirect(base_url('users'));
        }
    }



     public  function contact()
    {
    if(islogin()){
    $data=$this->input->post();
    $name=$data['name'];
    $email=$data['email'];
    $query=$data['message'];
   /* print_r($data);die;*/
        $admin_mail='nkscoder@gmail.com';
        $email= $this->Mdl_users->getUserName();
        $name= $this->Mdl_users->getFname();
        $query= $this->Mdl_users->getContactQuery();

        $this->email->from('nitesh@weboforce.in', 'Edu Workers');
        $this->email->to($admin_mail);
        /*$this->email->to($this->Mdl_users->getUserName());*/

        $this->email->subject('Notifiction');
        $this->email->message(' <div id="abcd" style="text-align:justify;font-size:18px;">'. $name.'<br/>'.$email.'<br/>'.$query.'</div>');

        return $this->email->send()?true:false;
    }
    else{
        redirect(base_url('users')); 
    }
}


}