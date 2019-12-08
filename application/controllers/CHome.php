<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CHome extends CI_Controller {

		public function __construct()
	{
		parent::__construct();

		// Load semua model yang dipakai
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('Home');
		$this->load->view('template/footer');
		
	}

	public function detail()
	{
		$this->load->view('template/header');
		$this->load->view('Detail');
		$this->load->view('template/footer');
	}

	public function about()
	{
		$this->load->view('template/header');
		$this->load->view('About');
		$this->load->view('template/footer');
	}

	public function contact()
	{
		$this->load->view('template/header');
		$this->load->view('Contact');
		$this->load->view('template/footer');
	}

}
