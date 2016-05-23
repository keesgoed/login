<?php
class Pages extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->view('templates/header');
        $this->load->model('Auth');

    }

    public function index(){
        $this->load->view('pages/home');
    }
}