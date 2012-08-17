<?php

Class Signup_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
		
	}
	
	function login(){
		
		$id = $_POST['id'];
		$pw = $_POST['pw'];
		
		$sql = "select pw from Member where id='$id'";
		$query = $this->db->query($sql);
		
		
			
		foreach ($query->result() as $row)
		{
			$pw_db= $row->pw;
		}
		
		if($pw == $pw_db){
							
		
		}
				
		else if($pw != $pw_db)
		{
			$this->load->view('index');
		}
		
		else if($pw == NULL || $id == NULL)
		{
			$this->load->view('index');
		}
			
	}
	
	function join_db(){
		
		$this -> id = $_POST['id'];
		$this -> pw = $_POST['pw'];
		$this -> name = $_POST['name'];
		
		$this->db->insert('Member',$this);
	
		echo ("<script>
		alert('DB INSERT SUCCESS')
		</script>");
		
	}
	
	function user_modify(){
		
		$id1=$_POST['id'];
		echo $id1;
		
		
	}
}


?>