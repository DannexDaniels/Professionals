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

    public function signUpProf(){
        $this->load->view('template/header.php');
        $this->load->view('authentication/sign_up_prof.php');
        $this->load->view('template/footer.php');
    }

    public function authenticate(){
        $user = $this->input->post('email');
        $pass = $this->input->post('password');
        if ($this->authenticationModel->getPassword($user) != null){
            if ($this->authenticationModel->getUserType($user) != 'prof'){
                $password = $this->authenticationModel->getPassword($user);
                $result = $this->authenticationModel->getUser($user);

                $this->session->set_userdata($result);

                if ($password === $pass){
                    redirect(base_url('home'));
                }else{
                    echo '<script>alert("Wrong password");</script>';
                    $this->login();
                }
            }else{
                $password = $this->authenticationModel->getPassword($user);
                $result = $this->authenticationModel->getProf($user);

                $this->session->set_userdata($result);

                if ($password === $pass){
                    redirect(base_url('profHome'));
                }else{
                    echo '<script>alert("Wrong password");</script>';
                    $this->login();
                }
            }
        }else{
            echo '<script>alert("User doesn\'t exist");</script>';
            $this->login();
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
            'recovery_email' => $this->input->post('email'),
            'type' => 'user'
        );
        //sending the data to the model
        $this->authenticationModel->insertAuth($auth);
        $this->authenticationModel->insertUser($data);


        //loading the login form
        $this->load->view('template/header.php');
        $this->load->view('authentication/login.php');
        $this->load->view('template/footer.php');
    }

    public function createProf(){
        $userId = $this->authenticationModel->countProfessionals() + 1;
        //setting values for the table column
        $data = array(
            'prof_id' => 'PROF'.$userId,
            'names' => $this->input->post('names'),
            'gender' => $this->input->post('gender'),
            'location' => $this->input->post('location'),
            'dob' => $this->input->post('dob'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'institution' => $this->input->post('organization'),
            'category' => $this->input->post('specialization')
        );
        $auth = array(
            'userId' => 'PROF'.$userId,
            'password' => $this->input->post('password'),
            'recovery_email' => $this->input->post('email'),
            'type' => 'prof'
        );

        print_r($data);
        print_r($auth);
        //sending the data to the model
        $this->authenticationModel->insertAuth($auth);
        $this->authenticationModel->insertProf($data);


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