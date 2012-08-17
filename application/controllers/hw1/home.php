<?php

class Home extends CI_Controller {
	
	function index()
	{
	
		$this->load->view('hw1/homeview');
				
	}

	function myjoin()
	{
	
		$this->load->view('hw1/join');
		
	}
	
	function info()
	{
		
		
		$this->load->model('hw1/Homemodel','',TRUE);
		$this->Homemodel->insert_entry();
	}
	
	function login()
	{
		$this->load->model('hw1/Homemodel','',TRUE);
		$data['result']=$this->Homemodel->select_entry();
	
		$this->load->view('hw1/logincheck',$data);
	}
	
	
}

?>

