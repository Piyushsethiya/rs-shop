<?php
class Logoutc extends CI_Controller{
    public function logout()
	{
		$newdata = array(
			'name' => '',
			'email' => '',
			// 'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		redirect(base_url('Loginc'));
	}
}