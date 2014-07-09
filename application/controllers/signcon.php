<?php
class Signcon extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//$this->load->library('jquery');
	}
	public function sign()
	{
		$this->load->view('signcon/sign_view');
	}
	public function prof()
	{
		$params=$this->input->post();
		log_message('error',print_r($params,TRUE));
		$this->load->model('prof_model');
		$result=$this->prof_model->inserting($params);
		
	}
}
?>
