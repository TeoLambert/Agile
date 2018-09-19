<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Project_model');
        
    }

    public function index()
    {
        $mail = unserialize($_SESSION["user_connected"])->use_mail;
        $projects = array();
        $query = $this->db->query("select p.* from project p join belong_to b on p.pro_id = b.pro_id where b.use_mail ='".$mail."';");
        foreach($query->result("Project_model") as $project)
            $projects[] = $project;
        $data["projects"] = $projects;
        $this->load->view('header');
        $this->load->view('projects',$data);

    }

    public function new_project()
    {
        $this->load->view('header');
        $this->load->view('new_project');
    }
}