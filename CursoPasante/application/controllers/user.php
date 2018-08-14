<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	

	public function __construct(){
		
		parent:: __construct(); 
		$this->load->model('users_model');
	}
	
	public function index()
	{
		$this->load->view('user');
	}
	public function newuser(){

		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email'),
			'type' => $this->input->post('type'));

		$this->users_model->createuser($data);
		$this->load->view('user');
	 }  
		
}
