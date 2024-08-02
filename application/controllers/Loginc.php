<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginc extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('loginM');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function signin()
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = $this->loginM->login($email, $password);
		
		if ($query) {
			$uid = array(
				'user_id' => $query[0]['id'],
				'email' => $query[0]['email'],
				'name' => $query[0]['name'],
				'mobile_no' => $query[0]['mobile_no'],
				'address' => $query[0]['address'],
				'area' => $query[0]['area']
			);
			$this->session->set_userdata('uid', $uid);
			// echo"<pre>";print_r($_SESSION);die();
			redirect(base_url('dashboardc'));
		} else {
			$this->session->set_flashdata('error', 'Invalid Username and Password!');
			redirect(base_url());
		}

		// portion for api
		if($query) {
            $response = array('status' => 'success', 'message' => 'Login successful');
        } else {
            $response = array('status' => 'error', 'message' => 'Invalid email or password');
        }

        echo json_encode($response);
    }
}