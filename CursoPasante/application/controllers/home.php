<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{


	public function __construct()
	 {
		parent:: __construct(); 
		$this->load->model('users_model');
	  }
	
	public function index()
	{
		
		$data['segmento'] = $this->uri->segment(3); 
		 
			if(!$data['segmento']){
			$data['users'] = $this->users_model->link(); 
			}else{
			$data['users'] = $this->users_model->links($data['segmento']);
			}
		
		$this->load->view('headers');
		$this->load->view('home',$data);
	  }	


 }	
 ?>