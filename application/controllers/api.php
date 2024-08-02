<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

class Api extends CI_Controller {

    public function login() {
        $this->load->model('loginM');

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->loginM->login($email, $password);

        if ($user) {
            // User found, return success response
            echo json_encode(array('status' => 'success', 'user' => $user));
        } else {
            // User not found, return error response
            echo json_encode(array('status' => 'error', 'message' => 'Invalid email or password'));
        }
    }
}
