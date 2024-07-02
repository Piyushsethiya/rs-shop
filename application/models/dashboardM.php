<?php
class DashboardM extends CI_Model{
    public function get_customer_count(){
        $sql = "SELECT COUNT(id) as customer_count FROM user WHERE role = 1";
        return $this->db->query($sql)->result_array();
    }
    public function get_dealer_count(){
        $sql = "SELECT COUNT(id) as dealer_count FROM user WHERE role = 2";
        return $this->db->query($sql)->result_array();
    }
}