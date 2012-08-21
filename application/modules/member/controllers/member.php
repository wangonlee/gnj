<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends MX_Controller{

	
	
	
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}
	
	
	function index(){

		$this->load->view('index');

	}

	function login(){

		$this->load->model('member_model','',TRUE);
		
		
		if(!$this->member_model->login_m()){
			//아이디 또는 비밀번호가 올바르지 않은 경우
			echo ("<script>
					alert('Please Enter Correct ID and Password!')
					</script>");
		
			$this->load->view('index');
				
		}
		else{
				
			$this->load->view('main');
		}
		
		
	

			
	}

	function join_page(){

		$this->load->view('join_page');
	}

	

	function modify_user(){
		$this->load->model('member_model','',TRUE);
		$this->member_model->get_userdata_m();
		$this->load->view('modify_user');
		
		
		}
		
		function modifyok_user(){
		
			$this->load->model('member_model','',TRUE);
			$this->member_model->modify_user_m();
			$this->load->view('modifyok_user');
		}
		

	function goodbye_user(){

		$this->load->model('member_model','',TRUE);
		$this->member_model->goodbye_user_m();

	}
	
	function check_userinfo(){
		$this->load->model('member_model','',TRUE);
		
		//ID Check
		
		
		
		
		if($_POST['pw']== $_POST['repw']){
	
			$this->member_model->save_userdata_m();
			$this->load->view('index');	}
		else{
			echo ("<script>
					alert('Please Enter Correct Password and RePassword!')
					</script>");
			$this->load->view('join_page');
		}
		
		
	}
}

?>