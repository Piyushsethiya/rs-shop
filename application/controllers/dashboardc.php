<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboardc extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('dashboardM');
    }
    public function index(){
        if(!empty($_SESSION['uid'])){
        $data['c_count'] = $this->dashboardM->get_customer_count();
        $data['d_count'] = $this->dashboardM->get_dealer_count();
        // print_r($data);die();
        $this->load->view('template/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
        }else{
            redirect(base_url());
        }
    }
}