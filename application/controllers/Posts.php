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
        if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'prof'){
            $data['posts'] = $this->PostModel->getAllPosts();
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav.php');
            $this->load->view('posts.php',$data);
            $this->load->view('template/footer.php');
        }else{
            $data['posts'] = $this->PostModel->getAllPosts();
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav_prof.php');
            $this->load->view('posts.php',$data);
            $this->load->view('template/footer.php');
        }

    }

    public function getSpecific($id = 'POST1'){
        if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'prof'){
            $data['posts'] = $this->PostModel->getSpecificPost($id);
            $spec = $data['posts'];
            $data['user'] = $this->ProfessionalsModel->getProfessional($spec['posted_by']);
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav.php');
            $this->load->view('post.php',$data);
            $this->load->view('template/footer.php');
        }else{
            $data['posts'] = $this->PostModel->getSpecificPost($id);
            $spec = $data['posts'];
            $data['user'] = $this->ProfessionalsModel->getProfessional($spec['posted_by']);
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav_prof.php');
            $this->load->view('post.php',$data);
            $this->load->view('template/footer.php');
        }
    }

    public function addPost(){
        $this->load->view('template/header.php');
        $this->load->view('template/top_nav.php');
        $this->load->view('template/left_nav_prof.php');
        $this->load->view('add_post.php');
        $this->load->view('template/footer.php');
    }

    public function savePost(){
        $no = $this->PostModel->countPost() + 1;
        $data = array(
            'post_id' => 'POST'.$no,
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'posted_by' => $_SESSION['prof_id']
        );

        $this->PostModel->savePost($data);

        echo '<script>alert("saved Successfully");</script>';
        $this->addPost();
    }
    
}