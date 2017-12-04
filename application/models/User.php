<?php 
	class User extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function checkUser($username,$password){
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('username',$username);
			$this->db->where('password',$password);

			return $this->db->get();
		}
	}
 ?>