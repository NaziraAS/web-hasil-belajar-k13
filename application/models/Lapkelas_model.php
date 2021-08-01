<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Lapkelas_model extends CI_Model {

	public function getAllKelas()
	{
		return $query = $this->db->get('kelass')->result_array();
	}

	public function getAllKelasFiltered($nama_kelas)
	{
		return $this->db
		->select('*')
		->from('kelass as S')
		->join('kelass as K', 'K.id_kelas = S.id_kelas', 'left')
		->where('K.nama_kelas', $nama_kelas)
		->get()
		->result_array();
	}

	public function getAllKelasByLevel($nama_kelas)
	{
		if($nama_kelas != '-Pilih-'){
			$string = $nama_kelas;
			$newNamaKelas = strtr($string, ['%20' => ' ']);

			return $this->db
			->select('*')
			->from('kelass as S')
			->join('kelass as K', 'K.id_kelas = S.id_kelas', 'left')
			->where('K.nama_kelas', $newNamaKelas)
			->get()
			->result_array();
		}else {
			return $this->db
			->select('*')
			->from('kelass as S')
			->join('kelass as K', 'K.id_kelas = S.id_kelas', 'left')
			->get()
			->result_array();
		}
		
	}


}

/* End of file Lapkelas_model.php */
/* Location: ./application/models/Lapkelas_model.php */