<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	  {
		
		parent:: __construct(); 
		$this->load->model('users_model');
	  }
	
	public function index()
	{
		$data = array(
    	'link' => $this->users_model->see(),
    	'dump' => 0
    	 );

    	$this->load->view('home');
	}

	public function see()
	{
		$data = array(
    	'link' => $this->users_model->see(),
    	'dump' => 0
    	 );
		$this->load->view('home');
	 }
 }	
 ?>