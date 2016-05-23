<?php
class Auth extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_credentials()
    {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $password = sha1($password);


        $query = $this->db->get_where('accounts', array('username' => $username, 'password' => $password));
        return $query->num_rows();

    }

    function add_user(){
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];

            //Error messages
            //Get username and email (seperate) and check if they are taken in db
            $result_usr = $this->db->get_where('accounts', array('username' => $username));
            $acc_check = $result_usr->num_rows();

            $result_email = $this->db->get_where('accounts', array('email' => $email));
            $email_check = $result_email->num_rows();

            if($acc_check == 1 || $email_check == 1){
                echo "<div class='alert alert-danger' style='margin-top:-75px;'>
                            <strong>Username or email has already been taken.</strong>
                        </div>";
            }
            elseif($username == '' || $email == ''){
                echo "<div class='alert alert-danger' style='margin-top:-75px;'>
                            <strong>Fill in all fields.</strong>
                        </div>";
            }
            elseif($password1 != $password2){
                echo "<div class='alert alert-danger' style='margin-top:-75px;'>
                            <strong>Passwords don't match.</strong>
                        </div>";
            }else{
                //Execute insert query
                $password1 = sha1($password1);
                $data = array(
                    'username' => $username,
                    'email' => $email,
                    'password' => $password1
                );

                $this->db->insert('accounts', $data);
                header("location: ".base_url()."login/login");
            }
        }
    }
    function getUser(){
        if(isset($_SESSION['username'])){
            echo 'U bent ingelogt als '.$_SESSION['username'].'.';
        }
    }
}