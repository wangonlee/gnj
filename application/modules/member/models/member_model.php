
<?php 
class Member_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}


	function join()
	{

		$this -> id = $_POST['id'];
		$this -> pw = $_POST['pw'];
		$this -> name = $_POST['name'];

		
		$this->db->insert('Member',$this);
			
	}


	function login()
	{
		$id = $_POST['id'];
		$pw = $_POST['pw'];
		
		$sql = "select pw from Member where id='$id' and pw = '$pw'";
		$query = $this->db->query($sql);
		

			
		foreach ($query->result() as $row)
		{
			$pw_db= $row->pw;			}

		if($pw == $pw_db){
			
			
			
			$this->load->view('member/login_complete',$id);
			
		}
		else{
				
			$this->load->view('member/index');
		}
			
			
	}

	function login_modify(){
		
	}
	
	function leave(){
		$id = $_POST['id'];
		$sql = "delete * from Member where id='$id'";
		$query = $this->db->query($sql);
		
		
		
	}
	
}



?>