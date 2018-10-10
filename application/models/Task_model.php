<?php

class Task_model extends CI_Model {

    public $tas_id;
    public $tas_name;
    public $tas_deadline;
    public $tas_desc;
    public $tas_progress;
    public $tas_priority;
    public $pro_id;

    public function __construct()
    {
        parent::__construct();
    }
}