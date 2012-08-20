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
		$this->member_model->login_db();




		$user_info = array(
				'id'  => $_POST['id'],
				'pw'  => $_POST['pw'],
		);

		$this->session->set_userdata($user_info);


		$this->load->view('main');

			
	}

	function join_page(){

		$this->load->view('join_page');
	}

	function join_user(){

		$this->load->model('member_model','',TRUE);
		$this->member_model->join_user_db();
		$this->load->view('index');

	}

	function modify_user(){
			

		$this->load->model('member_model','',TRUE);
		$this->member_model->modify_user_db();
	}

	function goodbye_user(){

		$this->load->model('member_model','',TRUE);
		$this->member_model->goodbye_user_db();

	}
}

?>