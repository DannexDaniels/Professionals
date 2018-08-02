<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/22/18
 * Time: 1:34 PM
 */

class Professionals extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('professionalsModel');
    }

    public function index(){
        if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'prof'){
            $data['profs'] = $this->professionalsModel->getAllProfessionals();
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav.php');
            $this->load->view('users.php',$data);
            $this->load->view('template/footer.php');
        }else{
            $data['profs'] = $this->professionalsModel->getAllProfessionals();
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav_prof.php');
            $this->load->view('users.php',$data);
            $this->load->view('template/footer.php');
        }
    }

    public function profile($id){
        if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'prof'){
            $data = $this->professionalsModel->getProfessionalId($id);
            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav.php');
            $this->load->view('profile.php',$data);
            $this->load->view('template/footer.php');
        }else{

            $data = $this->professionalsModel->getProfessionalId($id);

            $this->load->view('template/header.php');
            $this->load->view('template/top_nav.php');
            $this->load->view('template/left_nav_prof.php');

            $this->load->view('profile.php',$data);
            $this->load->view('template/footer.php');
        }
    }
}