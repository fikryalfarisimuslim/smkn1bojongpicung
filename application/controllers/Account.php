<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('User');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('Login');
	}
	public function login(){
		$username = $this->input->post('TxtUser');
		$password = $this->input->post('TxtPassword');

		$temp = $this->User->checkUser($username,md5($password))->row();

		$numRows = count($temp);
		echo $numRows.$username.$password."<br/>";
		if($numRows > 0){
			$array = array(
				'id' => $temp->id,
				'username' => $temp->username,
				'password' => $temp->password,
				'loggedin' => "TRUE"
				);
			$this->session->set_userdata($array);
			echo "SUCCESS";
			redirect(site_url('Berita/'));
		}else{
			$this->session->set_flashdata('notification','Peringatan : Username dan Password salah');
			echo "SUCCESSNNNN";

			redirect(site_url('/'));
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('/'));

	}
}
