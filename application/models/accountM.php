<?php
class AccountM extends CI_Model{
	public function get_area_d(){
		$sql = "SELECT * FROM area_d where active = 1 ";
		return $this->db->query($sql)->result_array();
	}
	public function get_dealer($area){
		$sql = "SELECT DISTINCT user.name FROM user, area_d WHERE user.area = '$area' AND role = 2";
		return $this->db->query($sql)->result_array();
	}
}
