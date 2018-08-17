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

    function login($username,$password)
	{

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('users');
		if($query->num_rows()>0){

		return true;
	}else
	{

		return false;
	}
    }

    function createuser($data)
    {
		$this->db->insert('users',array(
		'username' => $data['username'],
		'password' => $data['password'],
		'email' => $data['email'],
		'type' => $data['type']));	
			
	}

	function link()
	{
		$query = $this->db->get('users');
		if($query->num_rows() > 0) return $query;
		else return false;
	}

	function links($id)
	{
		$this->db->where('idUser',$id);
		$query = $this->db->get('users');
		if($query->num_rows() > 0) return $query;
		else return false;

	}

	function updateuser($id,$data)
	{
		$datos = array(
	 		'username' => data['username'],
			'password' =>  data['password'],
			'email' =>  data['email'],
			'type' =>  data['type']
	 	);
	    $this->db->where('iduser',$id);
	    $query = $this->db->update('users',$datos);
	}

	function deleteuser($id)
	{
	  	$this->db->delete('users', array('idUser'=>$id));
	}
}
?>
