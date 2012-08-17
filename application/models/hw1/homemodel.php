<?php

class Homemodel extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function insert_entry()
	{
		$this->id=$_POST['id'];
		$this->password=$_POST['password'];
		$this->name=$_POST['name'];
		$this->email=$_POST['email'];
		$this->work=$_POST['rank'];
		
		$this->db->insert('classics',$this);
			
		echo "DB INSERT SUCCESS";
	}
	
	function select_entry()
	{
		//테이블 전체를 넘겨주는 소스코드
		$sql="select * from classics";
		$query=$this->db->query($sql);
		return $data['result']=$query->result_array();
	}

}
?>
