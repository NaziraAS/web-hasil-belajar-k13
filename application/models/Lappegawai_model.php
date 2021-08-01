<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Lappegawai_model extends CI_Model {

	public function getAllPegawai()
	{
		return $query = $this->db->get('pegawais')->result_array();
	}

	public function getAllPegawaiFiltered($level)
	{
		return $this->db
		->select('*')
		->from('pegawais')
		->where('level', $level)
		->get()
		->result_array();
	}

	public function getAllPegawaiByLevel($level)
	{
		if($level != '-Pilih-'){
			$string = $level;
			$newLevel = strtr($string, ['%20' => ' ']);

			return $this->db
			->select('*')
			->from('pegawais')
			->where('level', $newLevel)
			->get()
			->result_array();
		}else {
			return $this->db
			->select('*')
			->from('pegawais')
			->get()
			->result_array();
		}
		
	}

	public function getAllLevel()
	{
		return $this->db
		->select('level')
		->from('pegawais')
		->group_by('level')
		->get()
		->result_array();
	}

	public function getPegawaiById($id_pegawai)
	{
		return $this->db->get_where('pegawais', ['id_pegawai' => $id_pegawai])->row_array();
	}

}

/* End of file Lappegawai_model.php */
/* Location: ./application/models/Lappegawai_model.php */