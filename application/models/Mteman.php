<?php
class Mteman extends CI_Model {


	public function SaveData()
	{
		$dblokal = $this->load->database("default", TRUE);
		$input = array('id','nama', 'alamat', 'agama', 'tgl_lahir', 'hp');
		foreach ($input as $val)
			$$val = $this->input->post($val);


		$data = array('Nama'=>$nama, 
							'Alamat'=>$alamat,
							'Agama'=>$agama,
							'TglLahir'=>$tgl_lahir,
							'HP'=>$hp,
							'ts'=>date('Y-m-d H:i:s') );


		$dblokal->insert("teman", $data);
		return;
	}

	public function loadData()
	{
		$dblokal = $this->load->database("default", TRUE);
		$q = $dblokal->get('teman');
		return $q;
	}
}