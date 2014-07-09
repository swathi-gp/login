<?php
    class inserting extends CI_Controller
    {
    	function __construct()
		{
			parent::__construct();
			$this->load->helper('date');
		}
    	public function disp()
	{
		echo "<br/><br/>";
		$ename=$this->input->post('username');
		$pw=$this->input->post('password');
		$datestring="%Y-%m-%d %h:%i %a";
		 $time=time();
		$d=mdate($datestring,$time);
		$query=$this->db->get_where('user1',array('Email'=>$ename,'Password'=>$pw));
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
			echo $row->Country,"</td></tr></table>";
				
		$d1=array(
		'UID'=>$row->UID,
		'Date'=>$d
		);
		$this->db->insert('timetrack',$d1);
		$qu=$this->db->get_where('timetrack',array('UID'=>$row->UID));
		//foreach($qu->result())
		
		}
	}
    }
?>