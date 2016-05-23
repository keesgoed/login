<?php
class Login extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->view('templates/header');
        $this->load->model('Auth');
    }
    public function login(){

        if(!isset($_SESSION['username'])){
        $this->load->view('login/login');

            if(isset($_POST['submit'])) {
                if ($this->Auth->get_credentials() == 1) {
                    $session = array(
                        'username' => $_POST['username'],
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($session);
                }
            }
        }else{
            header('location: '.base_url().'');
        }
        if(isset($_POST['register'])){
            header('location: register');
        }
    }
    public function logout(){
        session_destroy();
        header('location: '.base_url().'');
    }

    public function register(){
        $this->load->view('login/register');
        if(isset($_POST['login'])){
            header('location: '.base_url('login/login'));
        }
    }
}