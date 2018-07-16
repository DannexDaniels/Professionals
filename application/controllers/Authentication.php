<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/7/18
 * Time: 11:42 AM
 */

class Authentication extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('authenticationModel');
    }

    public function login(){
        $this->load->view('template/header.php');
        $this->load->view('authentication/login.php');
        $this->load->view('template/footer.php');
    }

    public function signUpUser(){
        $this->load->view('template/header.php');
        $this->load->view('authentication/sign_up_user.php');
        $this->load->view('template/footer.php');
    }

    public function authenticate(){
        $user = $this->input->post('email');
        $pass = $this->input->post('password');
        if ($this->authenticationModel->getPassword($user) != null){
            $password = $this->authenticationModel->getPassword($user);
            $result = $this->authenticationModel->getUser($user);

            $this->session->set_userdata($result);

            if ($password === $pass){
                redirect(base_url('home'));
            }else{
                print_r("authentication failed");
            }
        }else{
            echo '<script>alert("User doesn\'t exist");</script>';
        }
    }
    public function createUser(){
        $userId = $this->authenticationModel->countUsers() + 1;
        //setting values for the table column
        $data = array(
            'user_id' => 'USER'.$userId,
            'names' => $this->input->post('names'),
            'gender' => $this->input->post('gender'),
            'location' => $this->input->post('location'),
            'dob' => $this->input->post('dob'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'institution' => $this->input->post('organization'),
            'occupation' => $this->input->post('occupation')
        );
        $auth = array(
            'userId' => 'USER'.$userId,
            'password' => $this->input->post('password'),
            'recovery_email' => $this->input->post('email')
        );
        //sending the data to the model
        $this->authenticationModel->insertAuth($auth);
        $this->authenticationModel->insertUser($data);


        //loading the login form
        $this->load->view('template/header.php');
        $this->load->view('authentication/login.php');
        $this->load->view('template/footer.php');
    }

    public function myProfile(){
        $this->load->view('template/header.php');
        $this->load->view('template/top_nav.php');
        $this->load->view('template/left_nav.php');
        $this->load->view('profile.php');
        $this->load->view('template/footer.php');
    }

    public function logout(){
        session_destroy();

        //loading the login form
        $this->load->view('template/header.php');
        $this->load->view('authentication/login.php');
        $this->load->view('template/footer.php');
    }
}

?>