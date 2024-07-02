<?php
class UserM extends CI_Model{
    public function get_data(){
        $sql = "SELECT * FROM user WHERE role = 1";
        return $this->db->query($sql)->result_array();
    }
    public function insert($data){
        $this->db->insert('user', $data) ;
    }
    public function delete_user($id){
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function get_update_data($id){
        $sql = "SELECT * FROM user WHERE id = $id";
        return $this->db->query($sql)->result_array();
    }
    public function update_user_data($data, $id){
        $this->db->where('id', $id);
        $this->db->update('user', $data) ;
    }
}