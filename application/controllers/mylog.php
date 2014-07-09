<?php
class Mylog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	
		
	public function index()
	{
		$data['use']=$this->login_model->get_user();
		$this->load->view('login/login_view');
						
	}
		/*
		public function needed()
		{
			$this->load->view('login_view');
			$this->load->helper('form');
			echo form_open('inserting/disp');
			echo "Welcome to login form<br/><br/>";
			echo "<table><tr><td>";
			echo "Email:</td><td>";
			$data1=array('name'=>'email',
			'id'=>'email'
			);
			echo form_input($data1);
			echo "</td></tr>";
			echo "<tr><td>Password:</td><td>";
			$data2=array('name'=>'password',
			'id'=>'password'
			);
		    echo form_password($data2);
			echo "</td></tr></table>";
			echo "<br/>";
			echo form_submit('mysubmit','Submit!');
			echo form_reset('myreset','Reset!');
			echo form_close();
			echo form_open('signup');	
			echo form_submit('mysub','SIGNUP!');
		}
		 * */
		
		
		
}

