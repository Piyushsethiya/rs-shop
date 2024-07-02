<?php
class DealerM extends CI_Model{
    public function get_data(){
        $sql = "SELECT * FROM user WHERE role = 2";
        return $this->db->query($sql)->result_array();
    }
    public function insert($data){
        $result = $this->db->insert('user', $data) ;
        return $result; 
    }
    public function delete_dealer($id){
        $this->db->where('id', $id);
        $result = $this->db->delete('user');
        return $result;
    }
    public function get_update_data($id){
        $sql = "SELECT * FROM user WHERE id = $id";
        return $this->db->query($sql)->result_array();
    }
    public function update_dealer_data($data, $id){
		$result = $this->db->where('id', $id)->update('user', $data);
        return $result;
    }
}
