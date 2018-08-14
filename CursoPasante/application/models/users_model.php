<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
	
	public function __construct()
	{
		parent:: __construct(); 
		$this->load->database();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function login($username,$password){

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$q = $this->db->get('users');
		if($q->num_rows()>0){

		return true;
	}else{

		return false;
	}
  }
  function createuser($data){
		$this->db->insert('users',array(
		'username' => $data['username'],
		'password' => $data['password'],
		'email' => $data['email'],
		'type' => $data['type']));	
			
	}
	
}
?>
