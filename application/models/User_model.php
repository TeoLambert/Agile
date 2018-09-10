<?php 

class User extends CI_Model {

    public $use_mail;
    public $use_name;
    public $use_surname;

    public function insert_entry() {
        $this->use_mail = $POST["use_mail"];
        $this->use_name = $POST["use_name"];
        $this->use_surname = $POST["use_surname"];

        $this->db->insert('user',$this);
    }


}