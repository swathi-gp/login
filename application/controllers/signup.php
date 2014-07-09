<?php
class signup extends CI_Controller
{
    public function index()
	{
		$this->load->helper('form');
		echo form_open('profile');
		echo "<table>";
		echo "To Create your Account:","<tr><td>";
		echo "UID:</td><td>";
		$data1=array('name'=>'uid',
		'id'=>'uid'
		);
		echo form_input($data1);
		echo "</td></tr><tr><td>TID:</td><td>";
		$data1=array('name'=>'tid',
		'id'=>'tid'
		);
		echo form_input($data1);
		echo "</td></tr><tr><td>Name:</td><td>";
		$data1=array('name'=>'Name',
		'id'=>'Name'
		);
		echo form_input($data1);
		echo "</td></tr><tr><td>Email:</td><td>";
		$data1=array('name'=>'email',
		'id'=>'email'
		);
		echo form_input($data1);
		echo "</td></tr><tr><td>Password:</td><td>";
		$data1=array('name'=>'pword',
		'id'=>'pword'
		);
		echo form_password($data1);
		echo "</td></tr><tr><td>Confirming Password:</td><td>";
		$data1=array('name'=>'cword',
		'id'=>'cword'
		);
		echo form_password($data1);
		echo "</td></tr><tr><td>Gender:</td><td> Female";
		$data1=array('name'=>'gender',
		'id'=>'gender',
		'value'=>'female'
		
		);
		echo form_radio($data1);
		echo "Male";
		$data2=array('name'=>'gender',
		'id'=>'gender',
		'value'=>'male'
		);
		echo form_radio($data1,$data2);
		echo "</td></tr><tr><td>MObile no.:</td><td>";
		$data1=array('name'=>'mobile',
		'id'=>'mobile'
		);
		echo form_input($data1);
		echo "</td></tr><tr><td>Country</td><td>";
		$options=array(
		'India'=>'India',
		'usa'=>'USA',
		'japan'=>'Japan'
		);
		echo form_dropdown('country',$options,'india');
		echo "</td></tr></table>";
		echo form_submit('submit','MY PROFILE!');
	
}
}
?>