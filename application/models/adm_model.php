<?php
class Adm_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}
	public function disp()
	{
		$query = $this->db->get('user1');
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
		echo "</table>";
		$qu=$this->db->get('timetrack');
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
?>
