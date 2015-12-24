<?php
/**
 * Created by PhpStorm.
 * User: tushar
 * Date: 20/9/15
 * Time: 6:43 PM
 */

class Mdl_email_settings extends CI_Model{

    private $smtp_host;
    private $smtp_user;
    private $smtp_pass;
    private $port;
    const ID=1;

    function __construct()
    {
        $settings=$this->db->where('eduworkers_email_settings_id',self::ID)->get('eduworkers_email_settings')->result_array();
        if(isset($settings[0])){
        $this->setSmtpHost($settings[0]['eduworkers_email_settings_smtp_host']);
        $this->setSmtpUser($settings[0]['eduworkers_email_settings_smtp_user']);
        $this->setSmtpPass($settings[0]['eduworkers_email_settings_smtp_pass']);
        $this->setPort($settings[0]['eduworkers_email_settings_port']);
        }else{
            $this->setSmtpHost('');
            $this->setSmtpUser('');
            $this->getSmtpPass('');
            $this->setPort('');
        }
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getSmtpHost()
    {
        return $this->smtp_host;
    }

    /**
     * @param mixed $smtp_host
     */
    public function setSmtpHost($smtp_host)
    {
        $this->smtp_host = $smtp_host;
    }

    /**
     * @return mixed
     */
    public function getSmtpUser()
    {
        return $this->smtp_user;
    }

    /**
     * @param mixed $smtp_user
     */
    public function setSmtpUser($smtp_user)
    {
        $this->smtp_user = $smtp_user;
    }

    /**
     * @return mixed
     */
    public function getSmtpPass()
    {
        return $this->smtp_pass;
    }

    /**
     * @param mixed $smtp_pass
     */
    public function setSmtpPass($smtp_pass)
    {
        $this->smtp_pass = $smtp_pass;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    public function setData(){
        switch(func_get_arg(0)){
            case 'update':{
                $this->setSmtpHost(func_get_arg(1)['smtp_host']);
                $this->setSmtpUser(func_get_arg(1)['smtp_user']);
                $this->setSmtpPass(func_get_arg(1)['smtp_pass']);
                $this->setPort(func_get_arg(1)['smtp_port']);
                break;
            }
            default:break;
        }
    }

    public function toArray(){
        return [
            'smtp_host'=>$this->getSmtpHost(),
            'smtp_user'=>$this->getSmtpUser(),
            'smtp_pass'=>$this->getSmtpPass(),
            'smtp_port'=>$this->getPort(),
        ];
    }
    private function _validate(){
        switch(func_get_arg(0)){
            case 'update':{
                $this->setSmtpHost($this->security->xss_clean($this->getSmtpHost()));
                $this->setSmtpUser($this->security->xss_clean($this->getSmtpUser()));
                $this->setSmtpPass($this->security->xss_clean($this->getSmtpPass()));
                $this->setPort($this->security->xss_clean($this->getPort()));
                break;
            }
            default:break;
        }
    }
    public function update(){
        if($this->db->where('eduworkers_email_settings_id',self::ID)->select(array('eduworkers_email_settings_id'))->get('eduworkers_email_settings')->result_array()){
        return $this->db->where('eduworkers_email_settings_id',self::ID)->update('eduworkers_email_settings',[
            'eduworkers_email_settings_smtp_host'=>$this->getSmtpHost(),
            'eduworkers_email_settings_smtp_user'=>$this->getSmtpUser(),
            'eduworkers_email_settings_smtp_pass'=>$this->getSmtpPass(),
            'eduworkers_email_settings_port'=>$this->getPort()
        ])?true:false;}
        else{
            return $this->insert(); // this returns what insert function returns.
        }
    }
    public function insert(){
        return $this->db->insert('eduworkers_email_settings',[
            'eduworkers_email_settings_smtp_host'=>$this->getSmtpHost(),
            'eduworkers_email_settings_smtp_user'=>$this->getSmtpUser(),
            'eduworkers_email_settings_smtp_pass'=>$this->getSmtpPass(),
            'eduworkers_email_settings_port'=>$this->getPort()
        ])?true:false;
    }
}
