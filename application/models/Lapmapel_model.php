<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Lapmapel_model extends CI_Model {

	public function getAllMapel()
	{
		// return $query = $this->db->get('mapels')->result_array();
		return $this->db
		->select('*')
		->from('mapels as M')
		->join('pegawais as P', 'P.id_pegawai = M.id_pegawai', 'left')
		->get()
		->result_array();
	}

	public function getAllMapelFiltered($nama_kelas)
	{
		return $this->db
		->select('*')
		->from('mapels as S')
		->join('kelass as K', 'K.id_kelas = S.id_kelas', 'left')
		->where('K.nama_kelas', $nama_kelas)
		->get()
		->result_array();
	}

	public function getAllKelas()
	{
		return $this->db
		->select('*')
		->from('kelass')
		->get()
		->result_array();
	}

}

/* End of file Lapmapel_model.php */
/* Location: ./application/models/Lapmapel_model.php */