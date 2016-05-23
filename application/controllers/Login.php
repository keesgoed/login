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
                        'logged_in' => TRUE,
                        'role' => $this->Auth->getRole()
                    );
                    $this->session->set_userdata($session);
                    redirect(base_url('home'));
                }
            }
        }else{
            redirect(base_url('home'));
        }
        if(isset($_POST['register'])){
            redirect(base_url('register'));
        }
    }
    public function logout(){
        session_destroy();
        redirect(base_url('home'));
    }

    public function register(){
        $this->load->view('login/register');
        if(isset($_POST['login'])){
            redirect(base_url('login'));
        }
    }
}