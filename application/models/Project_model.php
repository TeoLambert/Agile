<?php

class Project_model extends CI_Model {
    public $pro_id;
    public $pro_name;
    public $pro_deadline;
    public $pro_customer;
    public $pro_customer_tel;
    public $pro_customer_mail;
    public $pro_desc;
    public $use_mail;

    public function __construct()
    {
        parent::__construct();
    }
}