<?php
   class User extends CI_Model
   {
   	function login($username,$password)
	{
		$this->db->get_where('user1',array('Email'=>$username,'Password'=>$password));
		if($query->num_rows()==1)
		{
			return $query->result();
		}
		else 
			{
				return false;
				
			}
		}
	
   }
?>