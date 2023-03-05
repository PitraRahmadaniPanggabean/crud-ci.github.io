<?php
class Msekolah extends CI_Model {


	public function SaveData()
	{
		$dblokal = $this->load->database("default", TRUE);
		$input = array('id','npsn', 'nama_sekolah', 'status', 'alamat');
		foreach ($input as $val)
			$$val = $this->input->post($val);


		$data = array('NPSN'=>$npsn, 
							'Nama Sekolah'=>$nama_sekolah,
							'Status'=>$status,
							'Alamat'=>$alamat
							);


		$dblokal->insert("sekolah", $data);
		return;
	}

	public function loadData()
	{
		$dblokal = $this->load->database("default", TRUE);
		$q = $dblokal->get('sekolah');
		return $q;
	}
}