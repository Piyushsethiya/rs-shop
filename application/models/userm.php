<?php
class Userm extends CI_Model{
    public function get_data(){

    }
    public function insert($data){
        $this->db->insert('user', $data) ;
    }
}