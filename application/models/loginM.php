<?php
class LoginM extends CI_Model{
    public function login($email, $password){
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' AND role = 3";
		// print_r($sql);die();
        $result = $this->db->query($sql);
        return $result->result_array();
        
    }
}