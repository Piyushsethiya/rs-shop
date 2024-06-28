<?php
class Dealerc extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('dealerM');
    }
    public function index(){
        $data['list'] = $this->dealerM->get_data();

        $this->load->view('template/sidebar');
        $this->load->view('dealer/list',$data);
        $this->load->view('template/footer');
    }
    public function form()
    {
        $this->load->view('template/sidebar');
        $this->load->view('dealer/add');
        $this->load->view('template/footer');
    }
    public function collect_data()
    {
        $data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'mobile_no' => $_POST['mobile_no'],
            'company_name' => $_POST['company_name'],
            'address' => $_POST['address'],
            'customer' => 2,
        );
        $query = $this->dealerM->insert($data);
        if (!($query)) {
            $this->session->set_flashdata('add', "Dealer Register Successful.");  
            redirect(base_url('dealerc'));
        } else {
            $this->session->set_flashdata('error', "Invalid Details, Please try again!");
            redirect(base_url('dealerc'));
        }
    }
    public function delete($id)
    {
        // echO"<pre>";
        // print_r($id);die();
        $query = $this->dealerM->delete_dealer($id);
        if(!($query)){
            $this->session->set_flashdata('success', 'Dealer Deleted Successfully.');
            redirect(base_url('dealerc'));
        } else {
            redirect(base_url('dealerc'));
            $this->session->set_flashdata('delete', 'Error, Please try again!');

        }
    }
    public function update_form($id){
        $data['list'] = $this->dealerM->get_Update_data($id);

        $this->load->view('template/sidebar');
        $this->load->view('dealer/edit', $data);
        $this->load->view('template/footer');
    }
    public function update_dealer($id){
        $data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'mobile_no' => $_POST['mobile_no'],
            'company_name' => $_POST['company_name'],
            'address' => $_POST['address'],
            'customer' => 1,
        );
        $query = $this->dealerM->update_dealer_data($data, $id);
        if (!($query)) {
            $this->session->set_flashdata('edit', "Dealer data Updated Successful.");  
            redirect(base_url('dealerc'));
        } else {
            $this->session->set_flashdata('error', "Invalid Details, Please try again!");
            redirect(base_url('dealerc'));
        }
    }
}