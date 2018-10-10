<?php

class Requirement_model extends CI_Model {

    public $req_id;
    public $req_name;
    public $req_deadline;
    public $req_estimate;
    public $req_priority;
    public $pro_id;

    public function __construct()
    {
        parent::__construct();
    }
}