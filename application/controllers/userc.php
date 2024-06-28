<?php
class Userc extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('userM');
    }
    public function index()
    {
        // $data = $this->userM->get_data();
        $this->load->view('template/sidebar');
        $this->load->view('user/list');
        $this->load->view('template/footer');
    }
    public function form(){
        $this->load->view('template/sidebar');
        $this->load->view('user/add');
        $this->load->view('template/footer');
    }
    public function collect_data()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        $data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'mobile_no' => $_POST('mobile_no'),
            'address' => $_POST['address'],
            'customer' => 1,
        );
        echO"<pre>";
        print_r($data);die();
        $query = $this->userM->insert($data);
        if ($query) {
            echo 'success';
        } else {
            echo "not done";
        }
    }
    }
}