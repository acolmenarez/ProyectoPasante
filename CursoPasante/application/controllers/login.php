<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		
		parent:: __construct(); 
	}

	public function index(){

		if(isset($_POST['password'])){
			$this->load->model('users_model');
			if($this->users_model->login($_POST['username'],md5($_POST['password']))){
			redirect('user');
	}else{
			redirect('login#bad-password');
		 }
	}
		$this->load->view('login');
	
	}
}
?>