<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/5/18
 * Time: 11:33 AM
 */

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('PostModel');
    }
    public function index(){
        if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'prof'){
            $data['posts'] = $this->PostModel->getAllPosts();
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav.php');
            $this->load->view('home.php',$data);
            $this->load->view('template/footer.php');
        }else{
            $data['posts'] = $this->PostModel->getAllPosts();
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav_prof.php');
            $this->load->view('prof_home.php',$data);
            $this->load->view('template/footer.php');
        }

    }

}