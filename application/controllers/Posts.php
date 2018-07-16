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
        $this->load->model('PostModel');
        $this->load->model('ProfessionalsModel');
    }

    public function index(){
        $data['posts'] = $this->PostModel->getAllPosts();
        $this->load->view('template/header.php');
        $this->load->view('template/top_nav.php');
        $this->load->view('template/left_nav.php');
        $this->load->view('posts.php',$data);
        $this->load->view('template/footer.php');

    }

    public function getSpecific($id = 'POST1'){
        $data['posts'] = $this->PostModel->getSpecificPost($id);
        $spec = $data['posts'];
        $data['user'] = $this->ProfessionalsModel->getProfessional($spec['posted_by']);
        $this->load->view('template/header.php');
        $this->load->view('template/top_nav.php');
        $this->load->view('template/left_nav.php');
        $this->load->view('post.php',$data);
        $this->load->view('template/footer.php');
    }
}