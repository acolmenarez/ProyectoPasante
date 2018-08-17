<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	

	public function __construct()
	{
		
		parent:: __construct(); 
		$this->load->model('users_model');
		$this->load->helper('form');
	 }
	public function index()
	{
		$data['segmento'] = $this->uri->segment(3); 
		 
		if(!$data['segmento']){
			$data['users'] = $this->users_model->link(); 
		}
		else{
			$data['users'] = $this->users_model->links($data['segmento']);
		}
		
		
		$this->load->view('user',$data);
	  }	

	public function create(){
		$this->load->view('newuser');
	 }  

	public function createuser(){

		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email'),
			'type' => $this->input->post('type')
		);

		$this->users_model->createuser($data);
		$this->load->view('home',$data);
	 }  

 	public function edit()
 	{
 		$this->load->view('edituser');
 	}
 	
	public function edituser()
	 {
	 	$data['id'] = $this->uri->segment(3);
	 	$data['users'] = $this->users_model->links($data['id']);
	
	 	$this->load->view('edituser', $data);
	 }

	 public function update()
	 {
	 	$data = array(
	 		'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email'),
			'type' => $this->input->post('type')
	 	);
	 	$this->users_model->updateuser($this->uri->segment(3),$data);
		redirect(base_url());
	 }

	 public function delete()
	 {
	 	$id= $this->uri->segment(3);
	 	$this->users_model->deleteuser($id);
	 	redirect ('home');
	
	 }
		
}
?>