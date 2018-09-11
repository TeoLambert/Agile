<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function insert_user()
    {
        $this->load->model('User_model');
        $data = $this->input->post();
        $user = new User_model();
        $user->use_mail = $data["use_mail"];
        $user->use_pass = md5($data["use_pass"]);
        $user->use_name =  $data["use_name"];
        $user->use_surname = $data["use_surname"];
        $this->db->insert('user',$user);
        $this->load->view('header');
        $this->load->view('registration_success');
    }


    public function user_haslogged() {
        $this->load->model('User_model');
        $data = $this->input->post();
        $isUser = $this->db->simple_query("select * from user where use_mail='".$data["use_mail"]."' and use_pass='".md5($data["use_pass"])."';"); 
        if($isUser->num_rows !== 0)
        {
            $query = $this->db->query("select use_name, use_surname, use_mail from user where use_mail='".$data["use_mail"]."';")->row();
            $user = new User_model();
            $user->use_mail = $query->use_mail;
            $user->use_name = $query->use_name;
            $user->use_surname = $query->use_surname;
            $_SESSION["user_connected"] = $user;
            $this->load->view('header');
        }
        else
        {
            $this->user_login();
            $this->load->view('failed_login');
        }

    }

    public function user_login()
    {
        $this->load->view('login');
    }

    public function account_creation()
    {
        $this->load->view('account_creation');
    }

    public function logout()
    {
        unset($_SESSION);
        $this->load->view("header");
    }
}