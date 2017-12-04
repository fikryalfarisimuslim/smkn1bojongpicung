<?php 
	class Galeri extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function tambahData($data){
			$data['id'] = "NULL";
			$this->db->insert('galeri',$data);
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from('galeri');
			$this->db->order_by('id','asc');

			return $this->db->get();
		}
	}
 ?>