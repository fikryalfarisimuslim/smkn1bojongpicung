<?php 
	class ModelBerita extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function insertBerita($data){
			$data['id'] = "NULL";

			$this->db->insert('Berita',$data);
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from('Berita');
			$this->db->order_by('tgl','desc');

			return $this->db->get();
		}

		function selectById($id){
			$this->db->select('*');
			$this->db->from('Berita');
			$this->db->where('id',$id);

			return $this->db->get();
		}
		function selectLimit($limit){
			$this->db->select('*');
			$this->db->from('Berita');
			$this->db->order_by('tgl','desc');
			$this->db->limit($limit);

			return $this->db->get();
		}

		function updateBerita($id,$data){
			$this->db->set($data);
			$this->db->where('id',$id);
			$this->db->update('Berita');
		}

		function deleteBerita($id){
			$this->db->where('id',$id);
			$this->db->delete('Berita');
		}

		// function select_all_paging($limit = array())
	}
 ?>