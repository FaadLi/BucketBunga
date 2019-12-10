<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CHome extends CI_Controller {

		public function __construct()
	{
		parent::__construct();

		// Load semua model yang dipakai
		$this->load->model('home_model');
	}

	public function index()
	{
		// Dapatkan data bucket
		$data['bucketnya'] 	= $this->home_model->get_bunganya();
		$data['kategori'] 	= $this->home_model->get_kategori();

		$this->load->view('template/header');
		$this->load->view('Home', $data);
		$this->load->view('Detail', $data);
		$this->load->view('template/footer');
		
	}

	public function detail()
	{
		$data['bucketnya'] 	= $this->home_model->get_bunganya();

		$this->load->view('template/header');
		$this->load->view('Detail', $data);
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


	public function createBucket()
	{
		
		// $namaBunga 	= "cobaBunga";
		// $keterangan	= "cobaKeterangan";
		// $id_kat		= "2";
		// $url		= "www apa aja boleh";

		$namaBunga 	= $this->input->post('namaBunga');
		$keterangan	= $this->input->post('keterangan');
		$id_kat		= $this->input->post('id_kat');
		$url		= $this->input->post('url');

		$result = $this->home_model->set_bunganya($namaBunga,$keterangan, $id_kat, $url);
		echo json_encode($result);
		// echo json_encode($tabel);
	}
	public function deleteBucket()
	{
		// $id = 17;
		$id 	= $this->input->post('id');


		$data = $this->home_model->delete_bunganya($id);
			echo json_encode($data);
		
	}

}
