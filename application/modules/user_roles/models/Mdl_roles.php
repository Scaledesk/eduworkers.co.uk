<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: tushar
 * Date: 14/9/15
 * Time: 5:43 PM
 */

class Mdl_roles extends CI_Model{
    private $roles_name;

    function __construct()
    {
        parent::__construct();
        $this->roles_name = $this->db->select('eduworkers_roles_id,eduworkers_roles_name')->get('eduworkers_roles')->result_array();
    }

    public function setData(){
        switch (func_get_arg(0)){
            case "insert_roles":    $this->setRolesName(func_get_arg(1));
                                    break;
            default:                break;
        }
    }


    /**
     * @return mixed
     */
    public function getRolesName()
    {
        return $this->roles_name;
    }

    /**
     * @param mixed $roles_name
     */
    public function setRolesName($roles_name)
    {
        $this->roles_name = $roles_name;
    }

    public function insertRoles(){
        $this->_validate();
        $data=[
            'eduworkers_roles_name'=>$this->roles_name
        ];
        if($this->db->insert('eduworkers_roles',$data)){
            return true;
        }
        return false;
    }

    private function _validate()
    {
        $this->setRolesName($this->security->xss_clean($this->roles_name));
    }


}