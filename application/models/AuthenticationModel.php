<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/9/18
 * Time: 7:17 PM
 */

class AuthenticationModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertUser($data){
        //inserting data into the table user
        $this->db->insert('user',$data);
    }

    function insertAuth($data){
        $this->db->insert('auth',$data);
    }

    function countUsers(){
        $query = $this->db->get('user');
        return $query->num_rows();
    }

    function countProfessionals(){
        $query = $this->db->get('professionals');
        return $query->num_rows();
    }

    function getPassword($email){
        $query = $this->db->get_where('auth',array('recovery_email' => $email));
        if ($query->num_rows() > 0){
            return $query->row()->password;
        }else{
            return null;
        }
    }

}

?>