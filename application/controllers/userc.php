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
        $data['list'] = $this->userM->get_data();

        $this->load->view('template/sidebar');
        $this->load->view('user/list', $data);
        $this->load->view('template/footer');
    }
    public function form()
    {
        $this->load->view('template/sidebar');
        $this->load->view('user/add');
        $this->load->view('template/footer');
    }
    public function collect_data()
    {
        $data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'mobile_no' => $_POST['mobile_no'],
            'address' => $_POST['address'],
            'role' => 1,
        );
        $query = $this->userM->insert($data);
        if (!($query)) {
            $this->session->set_flashdata('add', "Customer Register Successful.");  
            redirect(base_url('userc'));
        } else {
            $this->session->set_flashdata('error', "Invalid Details, Please try again!");
            redirect(base_url('userc'));
        }
    }
    public function delete($id)
    {
        // echO"<pre>";
        // print_r($id);die();
        $query = $this->userM->delete_user($id);
        if(!($query)){
            $this->session->set_flashdata('success', 'Customer Deleted Successfully.');
            redirect(base_url('userc'));
        } else {
            redirect(base_url('userc'));
            $this->session->set_flashdata('delete', 'Error, Please try again!');

        }
    }
    public function update_form($id){
        $data['list'] = $this->userM->get_Update_data($id);

        $this->load->view('template/sidebar');
        $this->load->view('user/edit', $data);
        $this->load->view('template/footer');
    }
    public function update_user($id){
        $data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'mobile_no' => $_POST['mobile_no'],
            'address' => $_POST['address'],
            'role' => 1,
        );
        $query = $this->userM->update_user_data($data, $id);
        if (!($query)) {
            $this->session->set_flashdata('edit', "Customer data Updated Successful.");
            redirect(base_url('userc'));
        } else {
            $this->session->set_flashdata('error', "Invalid Details, Please try again!");
            redirect(base_url('userc'));
        }
    }
}