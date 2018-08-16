<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		
		parent:: __construct(); 
		$this->load->model('users_model');
	}

	public function index(){

      if($this->session->userdata('username')){
     	redirect('user');
     }
		if(isset($_POST['psw'])){
			if($this->users_model->login($_POST['username'],md5($_POST['password']))){
				$this->session->set_userdata('username',$_POST['username']);
			redirect('user');
	}else{
			redirect('login#bad-password');
		 }
	  }
	$this->load->view('login');
	
	}
	
	public function logout(){

		$this->session->sess_destroy();
		redirect('login');

	}
 }

?>