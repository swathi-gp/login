<?php
class profile extends CI_Controller
{
	public function disp()
	{
		$uid=$this->input->post('uid');
		$query=$this->db->get_where('user1',array('UID'=>$uid));
		//$query=$this->db->where('Password',$pw);
		echo "<table><tr><th>UID</th><th>Name</th><th>Email</th><th>Password</th><th>Gender</th><th>Mobile No.</th><th>Country</th>";
		echo "</tr>";
		foreach ($query->result() as $row)
		{
			
			echo "<tr><td>";
			echo $row->UID ,"</td><td>";
			echo $row->Name ,"</td><td>";
			echo $row->Email ,"</td><td>";
			echo $row->Password,"</td><td>";
			echo $row->Gender,"</td><td>";
			echo $row->Mobile,"</td><td>";
			echo $row->Country,"</td></tr>";
			
		}	
		$query=$this->db->get_where('timetrack',array('UID'=>$uid));
		echo "<table><tr><th>TID</th><th>UID</th><th>Date</th>";
		echo "</tr>";
		foreach ($query->result() as $row)
		{
			
			echo "<tr><td>";
			echo $row->TID ,"</td><td>";
			echo $row->UID ,"</td><td>";
			echo $row->Date,"</td></tr>";
		}
	}
   public function index()
		{
			//$uid=$this->input->post('uid');
			//$tid=$this->input->post('tid');
			$name=$this->input->post('Name');
			$email=$this->input->post('email');
			$password=$this->input->post('pword');
			$gender=$this->input->post('gender');
			$mobile=$this->input->post('mobile');
			$country=$this->input->post('country');
			$this->load->helper('date');
			$datestring="%Y-%m-%d %h:%i %a";
		    $time=time();
			$d=mdate($datestring,$time);
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
			//$this->load->helper('helper_common_functions-helper');
			$dat=array(
			//'TID'=>$tid,
			'UID'=>$this->db-get_where('user1',array('Email'=>$email,'Password'=>$password)),
			'Date'=>$d
			);
			$this->db->insert('timetrack',$dat);
			$this->disp();
	}
}
?>