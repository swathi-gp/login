<?php
class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('login/login_view');
						
	}
	public function process()
	{
		$this->load->model('login_model');
		$result=$this->login_model->validate();
	}
	
	
	public function admin()
	{
		$this->load->model('adm_model');
		$result=$this->adm_model->disp();
	}
	public function ind()
	{
		redirect("login/login_view",'refresh');
	}
}
	
		
		