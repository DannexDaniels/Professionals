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

    function getProfessionalId($phone){
        $query = $this->db->get_where('profs',array('phone' => $phone));
        return $query->row_array();
    }

    function getProfessional($id){
        $query = $this->db->get_where('professionals',array('prof_id' => $id));
        return $query -> row_array();
    }
}