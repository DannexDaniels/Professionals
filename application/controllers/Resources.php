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
        $data['resources'] = $this->ResourceModel->getAllResources();
        $this->load->view('template/header.php');
        $this->load->view('template/top_nav.php');
        $this->load->view('template/left_nav.php');
        $this->load->view('resources.php',$data);
        $this->load->view('template/footer.php');
    }
}