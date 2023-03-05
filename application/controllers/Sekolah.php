<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {
	
	public function index()
	{
		$this->load->model('msekolah');
		$this->load->helper('url');
		$data['halaman'] = "f-sekolah";
		$this->load->view('template-sbadmin2', $data);
	}

	public function SaveData(){
		$this->load->model('msekolah');
		$input = array('id','npsn', 'nama_sekolah', 'status', 'alamat');
		foreach ($input as $val)
			$$val = $this->input->post($val);

		$status = "ERROR";
		$pesan = "";

		if($npsn == "" || $nama_sekolah == '' || $status == '' || $alamat == ''){
			$pesan = "terdapat kesalahan:\n";
		if($npsn == ""){
			$pesan  .= "=> NPSN harus diisi\n";	
		}

		if($nama_sekolah == ""){
			$pesan  .= "=> Nama Sekolah harus diisi\n";

		}

		if($status == ""){
			$pesan  .= "=> Status harus diisi\n";

		}
			
		if($alamat == ""){
			$pesan  .= "=> Alamat harus diisi\n";
			
		}

	}else{
		$status = 'OK';
		$this->msekolah->saveData();
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
		$this->load->view('f-sekolah-old');
	}
}

