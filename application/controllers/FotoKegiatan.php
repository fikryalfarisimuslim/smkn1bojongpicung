<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FotoKegiatan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('session');
		$this->load->model('Galeri');

	}

	public function index(){
		$data['daftarFoto'] = $this->Galeri->selectAll()->result();
		$this->load->view('Galeri/index.php',$data);
	}

	public function tambahFoto(){
		$this->load->view('Galeri/add.php');
	}

	// public function 

	public function uploadNew(){
		$judul = $this->input->post('judul');
		$tags = $this->input->post('tags');
		echo $judul.$tags;
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '0';
		$config['max_width'] = '0';
		$config['max_height'] = '0';

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('img')){
			$error = array('error'=>$this->upload->data());
			// $this->load->view('Berita/index.php');
			echo "HELL";
		}else{
			$upload_data = $this->upload->data();
			$upload_data['judul'] = $judul;
			$upload_data['tags'] = $tags;
			$data['judul'] = $judul;
			$data['tags'] = $tags;
			$data['path'] = $upload_data['orig_name'];
			$this->Galeri->tambahData($data);
			redirect(site_url('FotoKegiatan/'));
		}
	}
}
