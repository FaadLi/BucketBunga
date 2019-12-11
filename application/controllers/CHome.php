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
		date_default_timezone_set("Asia/Jakarta");

		$new_name = date("Y-m-d-H-i-s");//new name

		$config['upload_path']="./assets/gambar"; //path folder file upload
		$config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
		$config['file_name'] = $new_name;  //set name

		$this->load->library('upload', $config); //call library upload

		if($this->upload->do_upload("file")){ //upload file
			// mendapatkan ekstensi file
            $path = $_FILES['file']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
			$source =  "assets/gambar/".$new_name.".".$ext;  //set file name ke variable image 

			$namaBunga 	= $this->input->post('namaBunga');
			$keterangan	= $this->input->post('keterangan');
			$id_kat		= $this->input->post('id_kat');
			$url		= $this->input->post('url');
			$gambar		= $source;

			$result = $this->home_model->set_bunganya($namaBunga,$keterangan, $id_kat, $url, $gambar);
			echo json_encode($result);

			
		}
		else{
			echo json_encode("belum bisa");
			return;
		}
		

		

		// $namaBunga 	= "cobaBunga";
		// $keterangan	= "cobaKeterangan";
		// $id_kat		= "2";
		// $url		= "www apa aja boleh";

		
		


		// $result = $this->home_model->set_bunganya($namaBunga,$keterangan, $id_kat, $url);
		// echo json_encode($result);
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
