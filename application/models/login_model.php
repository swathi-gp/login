<?php
    class login_model extends CI_Model
    {
    	public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
			$this->load->helper('url');
		}
		public function validate()
		{
	    $username=$this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $this->db->where('Email', $username);
        $this->db->where('Password', $password);
        $query = $this->db->get('user1');
        $datestring="%Y-%m-%d %h:%i %a";
		 $time=time();
		$d=mdate($datestring,$time);
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
		//$qu2=$this->db->select('Date');
		echo "<br/><br/> Date";
		echo "<br/>","<select>"; 
		foreach ($qu->result() as $row1)
		{
			echo "<option>";
			echo $row1->Date,"</option>";
		}
		
		echo "</select>";
		}
		}
}
//redirect('signcon/logout');
?>
<form action='login' method="post">
	    	<input type="submit" value="LOGOUT">
	    </form>