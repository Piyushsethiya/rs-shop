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
			$this->session->set_userdata('email', $query[0]['email']);
			echo "done";
			// print_r($_SESSION);die();
			redirect(base_url('dashboardc'));
		} else {
			$this->session->set_flashdata('error', 'Invalid Username and Password');
			redirect(base_url());
		}
	}
}
