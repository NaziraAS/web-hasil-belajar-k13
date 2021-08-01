<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Lapsiswa_model extends CI_Model {

	public function getAllSiswa()
	{
		return $query = $this->db->get('siswas')->result_array();
	}

	public function getAllSiswaFiltered($nama_kelas)
	{
		return $this->db
		->select('*')
		->from('siswas as S')
		->join('kelass as K', 'K.id_kelas = S.id_kelas', 'left')
		->where('K.nama_kelas', $nama_kelas)
		->get()
		->result_array();
	}

	public function getAllKelasLapkelas()
	{
		return $this->db
		->select('K.id_kelas, K.nama_kelas')
		->from('kelass K')
		->join('siswas S', 'S.id_kelas = K.id_kelas')
		->group_by('K.nama_kelas')
		->get()
		->result_array();
	}

	public function getAllSiswaByLevel($nama_kelas)
	{
		if($nama_kelas != '-Pilih-'){
			$string = $nama_kelas;
			$newNamaKelas = strtr($string, ['%20' => ' ']);

			return $this->db
			->select('*')
			->from('siswas as S')
			->join('kelass as K', 'K.id_kelas = S.id_kelas', 'left')
			->where('K.nama_kelas', $newNamaKelas)
			->get()
			->result_array();
		}else {
			return $this->db
			->select('*')
			->from('siswas as S')
			->join('kelass as K', 'K.id_kelas = S.id_kelas', 'left')
			->get()
			->result_array();
		}
		
	}

}

/* End of file Lapsiswa_model.php */
/* Location: ./application/models/Lapsiswa_model.php */