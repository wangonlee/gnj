<?php

Class Member_model extends CI_Model {

	function __construct()
	{
		parent::__construct();

	}

	function login_m(){

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

	function save_userdata_m(){

		$this -> id = $_POST['id'];
		$this -> pw = $_POST['pw'];
		$this -> name = $_POST['name'];

		$this->db->insert('Member',$this);

		echo ("<script>
				alert('DB INSERT SUCCESS')
				</script>");

	}

	function aa(){
		$id = $this->session->userdata('id');
		$sql = "select name from Member where id='$id'";
		$query = $this->db->query($sql);

		$row= $query->row();
		//echo $row->name;
		$this->session->set_userdata('name',$row->name);


	}

	function modify_user_m(){



		$current_id=$_POST['current_id'];
		$next_pw=$_POST['next_pw'];
		$next_name=$_POST['next_name'];
		echo $next_pw;
		echo $next_name;

		
		$sql = "UPDATE Member SET pw = '$next_pw', name = '$next_name' WHERE id = '$current_id'";
		$query = $this->db->query($sql);
	
		
		
	}

	function goodbye_user_m(){
			
		$id = $this->session->userdata('id');
		$sql = "delete from Member where id='$id'";
		$query = $this->db->query($sql);
		echo "delete complete";


	}
	
	function get_userdata_m(){
	
		$pre_id = $this->session->userdata('id');
		$pre_pw = $this->session->userdata('pw');
	
		$sql = "select name from Member where id='$pre_id'";
		$query = $this->db->query($sql);
	
		$row = $query->row(1);
		$row->name;
		$this->session->set_userdata('name',$row->name);
	
	}

	// 	function get_userdata_m(){
	// 		$this -> id = $_POST['id'];

	// 		$sql = "select name from Member where id='$id'";
	// 		$query = $this->db->query($sql);
	// 		echo $query->result();

	// 		foreach ($query->result() as $row)
		// 		{
		// 			$name_db=$row->name;
		// 		}

		// 		$this->session->set_userdata('name',$name_db);

		// 	}



}


?>