<?php
class Accountc extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view('template/sidebar');
        $this->load->view('account/home');
        $this->load->view('template/footer');
    }
}