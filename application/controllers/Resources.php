<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/4/18
 * Time: 4:22 AM
 */

class Resources extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ResourceModel');
    }

    public function index(){
        if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'prof'){
            $data['resources'] = $this->ResourceModel->getAllResources();
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav.php');
            $this->load->view('resources.php',$data);
            $this->load->view('template/footer.php');
        }else{
            $data['resources'] = $this->ResourceModel->getAllResources();
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav_prof.php');
            $this->load->view('resources.php',$data);
            $this->load->view('template/footer.php');
        }
    }
}