<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Project_model');
        $this->load->model('Task_model');
        $this->load->model('Requirement_model');
    }

    public function index($pro_id)
    {
        $mail = unserialize($_SESSION["user_connected"])->use_mail;
        $data["projects"] = $name_and_id;
        $this->load->view('header',$data);
        $this->load->view('side_bar');

        $query = $this->db->query("select p.* from project p join belong_to b on p.pro_id = b.pro_id where b.use_mail ='".$mail."' and p.pro_id = '".$pro_id."';");
        $spec_proj["project"] = $query->result("Project_model");
        $this->load->view('projects',$spec_proj);
    }

    public function new_project()
    {
        $this->load->view('header');
        $this->load->view('side_bar');
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
        $_SESSION["pro_id"] = $insert_id;
        $this->index($insert_id);
    }

    public function detailled_project()
    {
        $id = $_SESSION["pro_id"];
        $data["project"] = $this->getProject($id);
        $workers = $this->getProjectWorker($id);
        $data["workers"] = $workers; 

        $query_tasks = $this->db->query('select * from task where pro_id='.$id.';');
            foreach($query_tasks->result('Task_model') as $task)
                $tasks[] = $task;
            $data["tasks"] = $tasks;
        
        $query_reqs = $this->db->query('select * from requirement where pro_id='.$id.';');
            foreach($query_reqs->result('Requirement_model') as $req)
                $reqs[] = $req;
            $data["requirements"] = $reqs;

        $this->load->view('header');
        $this->load->view('side_bar');
        $this->load->view('projects',$data);
    }

    public function add_worker()
    {
        $data = $this->input->post();
        $check_query = $this->db->query("select 'X' from user u
                                         where not exists(
                                                            select 'X' from belong_to b
                                                            where b.use_mail='".$data["use_mail"]."' AND b.pro_id=".$_SESSION["pro_id"].") AND u.use_mail='".$data["use_mail"]."';");
        if($check_query->result_id->num_rows <= 1)
        {
            $belong = array("pro_id" => $_SESSION["pro_id"], "use_mail" => $data["use_mail"]);
            $this->db->insert('belong_to',$belong);
            $this->detailled_project();
        }
        else
        {
            $this->load->view('errors/cli/cant_add_user');
        }
    }


    public function task_added()
    {
        $data = $this->input->post();
        $task = new Task_model();
        $task->tas_name= $data["tas_name"];
        $task->tas_progress = $data["tas_progress"];
        $task->tas_priority = $data["tas_priority"];
        $task->tas_deadline = $data["tas_deadline"];
        $task->tas_desc = "None";
        $task->pro_id = $_SESSION["pro_id"];
        $task->use_mail = $data["use_mail"];
        $this->db->insert('task',$task);
        $this->detailled_project();
    }

    public function task_modified($tas_id){

    }

    public function task_deleted($tas_id){
        $this->db->where("tas_id",$tas_id);
        $this->db->delete("task");
        $this->detailled_project();
    }

    
    public function requirement_added(){
        $data = $this->input->post();
        $req = new Requirement_model();
        $req->req_name= $data["req_name"];
        $req->req_deadline = $data["req_deadline"];
        $req->req_estimate = $data["req_estimate"];
        $req->req_priority = $data["req_priority"];
        $req->pro_id = $_SESSION["pro_id"];
        $this->db->insert('requirement',$req);
        $this->detailled_project();
    }

    public function req_modified($req_id){

    }

    public function req_deleted($req_id){
        $this->db->where("req_id",$req_id);
        $this->db->delete("requirement");
        $this->detailled_project();
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

    // TODO: remain update according to the new DB
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

    private function getProjectWorker($pro_id)
    {
        $query_workers = $this->db->query("select u.use_mail, use_name, use_surname from user u
                                            join belong_to b on u.use_mail = b.use_mail where b.pro_id = ".$pro_id.";");
        foreach($query_workers->result('User_model') as $user)
            $workers[] = $user;
        return $workers;
    }

    private function getProjectTask($pro_id)
    {
        $query_tasks = $this->db->query('select * from task where pro_id='.$pro_id.';');
        foreach($query_tasks->result('Task_model') as $task)
            $tasks[] = $task;
        return $tasks;
    }


    private function getProjectRequirement($pro_id){
        $query_reqs = $this->db->query('select * from requirement where pro_id='.$pro_id.';');
        foreach($query_reqs->result('Requirement_model') as $req)
            $reqs[] = $req;
        return $reqs;
    }
}