<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/22/18
 * Time: 1:31 PM
 */

class ProfessionalsModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAllProfessionals(){
        $query = $this->db->get('profs');
        return $query->result_array();
    }
}