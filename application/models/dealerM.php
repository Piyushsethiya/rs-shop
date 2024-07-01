<?php
class DealerM extends CI_Model{
    public function get_data(){
        $sql = "SELECT * FROM dealer WHERE customer = 2";
        return $this->db->query($sql)->result_array();
    }
    public function insert($data){
        $result = $this->db->insert('dealer', $data) ;
        return $result; 
    }
    public function delete_dealer($id){
        $this->db->where('id', $id);
        $result = $this->db->delete('dealer');
        return $result;
    }
    public function get_update_data($id){
        $sql = "SELECT * FROM dealer WHERE id = $id";
        return $this->db->query($sql)->result_array();
    }
    public function update_dealer_data($data, $id){
		$result = $this->db->where('id', $id)->update('dealer', $data);
        return $result;
    }
}