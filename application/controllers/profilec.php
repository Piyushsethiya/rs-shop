<?php
class Profilec extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view('template/sidebar');
        $this->load->view('template/profile');
        $this->load->view('template/footer');
    }
}