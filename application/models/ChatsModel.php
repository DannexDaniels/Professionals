<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/7/18
 * Time: 12:22 PM
 */

class ChatsModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function saveMessage($data){
        //inserting data into the table user
        $this->db->insert('chats',$data);
    }

    function getReceivers($sender){
        $sql = "SELECT * FROM `messages` WHERE rid != '$sender' AND sid= '$sender' GROUP BY reciever ORDER BY time";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function getSenders($receiver){
        $sql = "SELECT * FROM `messages` WHERE sid != '$receiver' AND rid = '$receiver' GROUP BY sender ORDER BY time";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function getMessages($receiver,$sender){
        $sql = "SELECT * FROM messages WHERE (sid = '".$sender."' AND rid = '".$receiver."') OR (sid = '".$receiver."' AND rid = '".$sender."') ORDER BY time ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}