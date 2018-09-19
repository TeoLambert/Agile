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
            $_SESSION["user_connected"] = serialize($user);
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

    public function acc_management()
    {
        $this->load->model('User_model');
        $user = new User_model();
        $this->load->view('header');
        if(isset($_SESSION["user_connected"])) {
            $data  = array("user" => unserialize($_SESSION["user_connected"]));
            $this->load->view('account_management',$data);
        }
        else
            $this->load->view('errors/cli/must_be_connected');
    }

    public function account_update()
    {
        $this->load->model('User_model');
        $data = $this->input->post();
        $basemail = unserialize($_SESSION["user_connected"])->use_mail;
        $user = array(
            "use_mail" => $data["use_mail"],
            "use_name"=> $data["use_name"],
            "use_surname" =>$data["use_surname"]
        );
        if($basemail !== $data["use_mail"]){
            $isFree = $this->db->simple_query("select 1 from user where use_mail='".$data["use_mail"]."';");
            if($isFree->num_rows === 0) {
                $this->db->update('user', $user, array('use_mail' => $basemail));
                $_SESSION["user_connected"] = serialize($user);
                $this->load->view('header');
            }
            else
            {
                $this->acc_management();
                $this->load->view("errors/cli/email_used");
            }
        }
        else {
            $this->db->update('user', array_shift($user), array('use_mail' => $basemail));
            $this->load->view('header');
        }
       
    }
}   