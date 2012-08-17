
<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends MX_Controller{



	function index() {

		$this->load->view('member/index');

	}
	
	function join_page() {
	
		$this->load->view('join_page');
	
	}
	
	function join_db(){
	
		$this->load->model('member_model','', TRUE);
			
	
			
	//	$data['result']= $this->member_model->join();
			
		$this->member_model->join(); 
		
		$this->load->view('member/index');
			
	}
	
	function login() {
	
		$this->load->model('member_model','', TRUE);
		
		$this->member_model->login();
		
	
	}
	
	function modify() {
		
		$this->load->view('modify_page');
		
	}
	
	function login_leave(){
		$id = $_POST['id'];
		$this->load->model('member_model',$id);
		$this->member_model->leave();
		$this->load->view('/index.php/member/login_leave');
		
	}
	
}

?>