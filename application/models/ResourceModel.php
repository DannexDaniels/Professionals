<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/15/18
 * Time: 6:38 AM
 */

class ResourceModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    function getAllResources(){
        $query = $this->db->get('res');
        return $query->result_array();
    }
}