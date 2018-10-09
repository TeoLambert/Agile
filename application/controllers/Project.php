<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Project_model');
        $this->load->model('Task_model');
        
    }

    public function index($insert_id)
    {
        $mail = unserialize($_SESSION["user_connected"])->use_mail;
        $projects = array();
        $query = $this->db->query("select p.* from project p join belong_to b on p.pro_id = b.pro_id where b.use_mail ='".$mail."';");
        // TODO: query the specific project using $insert_id
        foreach($query->result("Project_model") as $project)
            $projects[] = $project;
        $data["projects"] = $projects;
        $this->load->view('header',$data);
        $this->load->view('side_bar');
        $this->load->view('projects',$insert_id);
    }

    public function new_project()
    {
        $this->load->view('header');
        $this->load->view('new_project');
    }

    public function project_creation()
    {
        $data = $this->input->post();
        $project = new Project_model();
        $project->pro_name = $data["pro_name"];
        $project->pro_deadline = $data["pro_deadline"];
        $project->pro_customer = $data["pro_customer"];
        $project->pro_customer_tel = $data["pro_customer_tel"];
        $project->pro_customer_mail = $data["pro_customer_mail"];
        $project->use_mail = unserialize($_SESSION["user_connected"])->use_mail;
        $project->pro_desc = $data["pro_desc"];
        $this->db->insert('project',$project);
        $insert_id = $this->db->insert_id();
        $belong = array("pro_id" => $insert_id, 
                        "use_mail" => unserialize($_SESSION["user_connected"])->use_mail
    );
        $this->db->insert("belong_to",$belong);
        $this->index($insert_id);
    }

    public function detailled_project($id)
    {
        $data["project"] = $this->getProject($id);
        $query_workers = $this->db->query("select u.use_mail, use_name, use_surname from user u
                                            join belong_to b on u.use_mail = b.use_mail where b.pro_id = ".$id.";");
        foreach($query_workers->result('User_model') as $user)
            $workers[] = $user;
        $data["workers"] = $workers; 
        $query_tasks = $this->db->query('select * from task where pro_id='.$id.';');
        foreach($query_tasks->result('Task_model') as $task)
            $tasks[] = $task;
        $data["tasks"] = $tasks;
        $this->load->view('header');
        $this->load->view('side_bar');
        $this->load->view('detailled_view',$data);
    }

    public function add_worker()
    {
        $data = $this->input->post();
        $check_query = $this->db->query("select 'X' from user u
                                         where not exists(
                                                            select 'X' from belong_to b
                                                            where b.use_mail='".$data["use_mail"]."' AND b.pro_id=".$data["pro_id"].") AND u.use_mail='".$data["use_mail"]."';");
        if($check_query->result_id->num_rows >= 1)
        {
            $belong = array("pro_id" => $data["pro_id"], "use_mail" => $data["use_mail"]);
            $this->db->insert('belong_to',$belong);
            $this->detailled_project($data["pro_id"]);
        }
        else
        {
            $this->detailled_project($data["pro_id"]);
            $this->load->view('errors/cli/cant_add_user');
        }
    }

    public function add_task($id)
    {
        $data["project"] = $this->getProject($id);
        $this->load->view('header');
        $this->load->view('add_task',$data);
    }

    public function task_added()
    {
        $data = $this->input->post();
        $task = new Task_model();
        $task->tas_name= $data["tas_name"];
        $task->tas_deadline = $data["tas_deadline"];
        $task->tas_desc = $data["tas_desc"];
        $task->pro_id = $data["pro_id"];
        $this->db->insert('task',$task);
        $this->index();

    }

    public function add_requirement($id) 
    {
        $data["task"] = $this->getTask($id);
        $this->load->view('header');
        $this->load->view('add_requirement',$data);
    }

    private function getProject($id)
    {
        $query = $this->db->query("select * from project where pro_id=".$id.";")->row();
        $workers = array();
        $project = new Project_model();
        $project->pro_id = $query->pro_id;
        $project->pro_name = $query->pro_name;
        $project->pro_deadline = $query->pro_deadline;
        $project->pro_customer = $query->pro_customer;
        $project->pro_customer_tel = $query->pro_customer_tel;
        $project->pro_customer_mail = $query->pro_customer_tel;
        $project->pro_desc = $query->pro_desc;
        $project->use_mail = $query->use_mail;
        return $project;
    }

    private function getTask($id)
    {
        $query = $this->db->query('select * from task where tas_id='.$id.";")->row();
        $task = new Task_model();
        $task->tas_id = $query->tas_id;
        $task->tas_name = $query->tas_name;
        $task->tas_desc = $query->tas_desc;
        $task->pro_id = $query->pro_id;
        return $task;

    }
}