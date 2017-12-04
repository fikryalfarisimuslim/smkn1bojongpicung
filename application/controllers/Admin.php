<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
}
