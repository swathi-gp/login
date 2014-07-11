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
		$quer = $this->db->get_where('user1',array('UID'=>$ui));
		echo "<table><tr><th>UID</th><th>Name</th><th>Email</th><th>Password</th><th>Gender</th><th>Mobile No.</th><th>Country</th>";
		echo "</tr>";
		foreach ($quer->result() as $row)
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
		echo "</table>";
		$qu=$this->db->get_where('timetrack',array('UID'=>$ui));
		echo "<table><tr><th>TID</th><th>UID</th><th>Date</th>";
		echo "</tr>";
		foreach ($qu->result() as $row)
		{
			
			echo "<tr><td>";
			echo $row->TID ,"</td><td>";
			echo $row->UID ,"</td><td>";
			echo $row->Date ,"</td></tr>";
				
		}
		echo "</table>";
		}
		}
}
?>
<a href='logout' style="top:15%;left:70%; position:absolute;">LOGOUT</a>
