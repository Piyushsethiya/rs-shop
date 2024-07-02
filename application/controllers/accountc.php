<?php
class Accountc extends CI_Controller{
    function __construct(){
        parent::__construct();
		$this->load->model('accountM');
    }
    public function index(){
		$data['area'] = $this->accountM->get_area_d();
        $this->load->view('template/sidebar');
        $this->load->view('account/home',$data);
        $this->load->view('template/footer');
    }
	public function get_dealer($area){
		$data = $this->accountM->get_dealer($area);
		foreach($data as $name){
			echo '<option value="' . $name['name'] . '">' . $name['name'];
			'</option>';
		}
	}
}
