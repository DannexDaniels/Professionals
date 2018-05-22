<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/22/18
 * Time: 2:07 PM
 */

class Posts extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('professionalsModel');
    }

    public function index(){
        $data['profs'] = $this->professionalsModel->getAllProfessionals();
        $this->load->view('template/header.php');
        $this->load->view('template/top_nav.php');
        $this->load->view('template/left_nav.php');
        $this->load->view('posts.php',$data);
        $this->load->view('template/footer.php');
    }
}