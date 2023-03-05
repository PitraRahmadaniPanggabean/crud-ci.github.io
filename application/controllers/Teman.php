<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teman extends CI_Controller {
	
	public function index()
	{
		$this->load->model('mteman');
		$this->load->helper('url');
		$data['halaman'] = "f-teman";
		$this->load->view('template-sbadmin2', $data);
	}

	public function SaveData(){
		$this->load->model('mteman');
		$input = array('id','nama', 'alamat', 'agama', 'tgl_lahir', 'hp');
		foreach ($input as $val)
			$$val = $this->input->post($val);

		$status = "ERROR";
		$pesan = "";

		if($nama == "" || $alamat == '' || $tgl_lahir == '' || $hp == ''){
			$pesan = "terdapat kesalahan:\n";
		if($nama == ""){
			$pesan  .= "=> Nama harus diisi\n";	
		}

		if($alamat == ""){
			$pesan  .= "=> Alamat harus diisi\n";

		}

		if($tgl_lahir == ""){
			$pesan  .= "=> Tanggal Lahir harus diisi\n";

		}
			
		if($hp == ""){
			$pesan  .= "=> No HP harus diisi\n";
			
		}

	}else{
		$status = 'OK';
		$this->mteman->saveData();
	}

		echo json_encode(
			array(
				'status'=>$status,
				'pesan'=>$pesan
			)
		);
	}

	public function lama()
	{
		$this->load->view('f-teman-old');
	}
}
