<?php
class Prof_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function inserting()
	{
		echo "The data is submitted successfully";
		//$uid=$this->security->xss_clean($this->input->post('uid'));
		//$tid=$this->security->xss_clean($this->input->post('tid'));
	    $name = $this->security->xss_clean($this->input->post('name'));
		$email=$this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));
		$gender=$this->security->xss_clean($this->input->post('gender'));
		$mobile=$this->security->xss_clean($this->input->post('mobile'));
        $country = $this->security->xss_clean($this->input->post('country'));
		$data=array(
			//'UID'=>$uid,
			'Name'=>$name,
			'Email'=>$email,
			'Password'=>$password,
			'Gender'=>$gender,
			'Mobile'=>$mobile,
			'Country'=>$country
			);
		$this->db->insert('user1',$data);
		$this->load->helper('date');
		$datestring="%Y-%m-%d %h:%i %a";
		$time=time();
	    $d=mdate($datestring,$time);
		$u=$this->db->get_where('user1',array('Email'=>$email,'Password'=>$password));
		foreach ($u->result() as $row1)
		{
		$ui=$row1->UID;
		$dat=array(
			//'TID'=>$tid,
			'UID'=>$ui,
			'Date'=>$d
			);
	$this->db->insert('timetrack',$dat);
		}
	}
	
}
