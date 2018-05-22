<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/5/18
 * Time: 11:33 AM
 */

class Home extends CI_Controller
{
    public function index(){
        $this->load->view('template/header.php');
        $this->load->view('template/top_nav.php');
        $this->load->view('template/left_nav.php');
        $this->load->view('home.php');
        $this->load->view('template/footer.php');
    }
}