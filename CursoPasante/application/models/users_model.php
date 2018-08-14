<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
	
	public function __construct()
	{
		parent:: __construct(); 
		$this->load->database();
	}

	public function login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$q = $this->db->get('users');
		if($q->num_rows()>0)
	{
		return true;
	}else
	{
		return false;
	}
  }
}
?>
