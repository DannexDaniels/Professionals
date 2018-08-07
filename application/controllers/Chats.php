<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/22/18
 * Time: 2:06 PM
 */

class Chats extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('chatsModel');
        $this->load->model('professionalsModel');
        $this->load->model('authenticationModel');
    }

    public function index(){
        if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'prof'){
            $data['receivers'] = $this->chatsModel->getReceivers($_SESSION['current_user_id']);
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav.php');
            $this->load->view('chats.php',$data);
            $this->load->view('template/footer.php');

        }else{
            $data['receivers'] = $this->chatsModel->getSenders($_SESSION['current_user_id']);
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav.php');
            $this->load->view('chats.php',$data);
            $this->load->view('template/footer.php');
        }


    }

    public function sendMessage($receiver){
        if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'prof'){
            $data['receivers'] = $this->chatsModel->getReceivers($_SESSION['current_user_id']);
            $data['messages'] = $this->chatsModel->getMessages($receiver,$_SESSION['current_user_id']);
            $data['to'] = $receiver;
            $data['names'] = $this->authenticationModel->getUserName($receiver);
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav.php');
            $this->load->view('send_message.php',$data);
            $this->load->view('template/footer.php');

        }else{
            $data['receivers'] = $this->chatsModel->getSenders($_SESSION['current_user_id']);
            $data['messages'] = $this->chatsModel->getMessages($receiver,$_SESSION['current_user_id']);
            $data['to'] = $receiver;
            $data['names'] = $this->authenticationModel->getUserName($receiver);
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav.php');
            $this->load->view('send_message.php',$data);
            $this->load->view('template/footer.php');
        }
    }

    public function saveMessage(){
        $msg = array(
            'sender' => $this->input->post('sender'),
            'receiver' => $this->input->post('receiver'),
            'message' => $this->input->post('message'),
        );

        $this->chatsModel->saveMessage($msg);

        header("Location:sendmessage/".$this->input->post('receiver'));
    }


}