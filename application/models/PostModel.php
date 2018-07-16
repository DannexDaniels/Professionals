<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/12/18
 * Time: 1:56 AM
 */

class PostModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllPosts(){
        $query = $this->db->get('posts');
        return $query->result_array();
    }

    public function getSpecificPost($reference){
        $query = $this->db->get_where('posts',array('post_id' => $reference));
        return $query->row_array();
    }
}