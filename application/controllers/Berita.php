<?php 

	if(! defined('BASEPATH')) exit('No direct');

	class Berita extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->helper(array('form','url'));
			$this->load->library(array('upload','session'));
			$this->load->model('modelBerita');
		}

		public function index(){
			// $cek = arraY();
			// $cek = $this->news->selectAll()->result();
			$this->load->view('Berita/index.php');
		}

		public function showBerita(){
			$data['daftarBerita'] = $this->modelBerita->selectAll()->result();
			$this->load->view('Berita/view.php',$data);
		}

		public function addBerita(){
			$this->load->view('Berita/add.php');
		}

		public function addProcess(){
			$created_date = date("Y-m-d H:i:s");
			$data['tgl'] = $created_date;
			$data['judul'] = $this->input->post('Judul');
			$data['deskripsi'] = $this->input->post('Deskripsi');
			$data['foto'] = file_get_contents($_FILES['img']['tmp_name']);
			$this->modelBerita->insertBerita($data);
			redirect(site_url('Berita/showBerita/'));
		}

		public function deleteBerita($id){
			$this->modelBerita->deleteBerita($id);
			redirect(site_url('Berita/showBerita/'));
		}

		public function editBerita($id){
			$data['row'] = $this->modelBerita->selectById($id)->row();
			$this->load->view('Berita/edit.php',$data);
		}

		public function editProcess(){
			$idb = $this->input->post('id');
			$getDate = $this->input->post('tgl');
			$data['tgl'] = implode(' ',[$getDate,date("H:i:s")]);
			$data['judul'] = $this->input->post('Judul');
			$data['deskripsi'] = $this->input->post('Deskripsi');

			$this->modelBerita->updateBerita($idb,$data);
			redirect(site_url('Berita/showBerita/'));
		}

	}
 ?>