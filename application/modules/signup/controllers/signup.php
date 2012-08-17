<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends MX_Controller{
	
	function index(){
		
		$this->load->view('index');
		
	}
	
	function login(){
		
		$this->load->model('signup_model','',TRUE);
		$this->signup_model->login();
		$this->load->view('user_info');
			
	}
	
	function join_application(){
		
		$this->load->view('join_application');	
	}
	
	function join_db(){
		
		$this->load->model('signup_model','',TRUE);
		$this->signup_model->join_db();
		$this->load->view('index');
	
	} 
	
	function user_modify(){
			
		$id=$_POST['id'];
		echo $id;
		$this->load->model('signup_model','',TRUE);
		$this->signup_model->user_modify();
	}
	
	function user_leave(){
		
		$this->load->model('signup_model','',TRUE);
		$this->signup_model->user_leave();
		
	}
}

?>