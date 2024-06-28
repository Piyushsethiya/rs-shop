<?php
class LoginM extends CI_Model{
    public function login($email, $password){
        $sql = "SELECT email, password FROM user WHERE email = '$email' AND password = '$password' AND customer = 0";
		// print_r($sql);die();
        $result = $this->db->query($sql);
        return $result->result_array();
        
    }
}