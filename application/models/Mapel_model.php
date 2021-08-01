<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel_model extends CI_Model {

	public function getAllMapel()
	{
		return $this->db
		->select('*')
		->from('mapels as M')
		->join('pegawais as P', 'M.id_pegawai = P.id_pegawai', 'left')
		->get()
		->result_array();
		// return $query = $this->db->get('mapels')->result_array();
	}

	public function tambahDataMapel()
	{
		//get id_pegawai
		$nama_pegawai = $this->input->post('nama_pegawai', true);
		$getIdPegawai = $this->db->select('id_pegawai')
		->get_where('pegawais', array('nama_pegawai' => $nama_pegawai))
		->row()
		->id_pegawai;

		// siapkan data
		$data = [
			"id_mapel" => $this->input->post('id_mapel', true),
			"nama_mapel" => $this->input->post('nama_mapel', true),
			"id_pegawai" => $getIdPegawai
		];

		// var_dump($data);

		// insert
		$this->db->insert('mapels', $data);
	}

	public function hapusDataMapel($id_mapel)
	{
		// $this->db->where('id_mapel', $id_mapel);
		$this->db->delete('mapels', ['id_mapel' => $id_mapel]);
	}

	public function getAllGuru()
	{
		return $this->db
		->select('nama_pegawai')
		->from('pegawais')
		// ->where_not_in('level', 'Admin')
		->group_by('nama_pegawai')
		->get()
		->result_array();
	}

	public function getMapelById($id_mapel)
	{
		// return $this->db->get_where('mapels', ['id_mapel' => $id_mapel])->row_array();
		return $this->db
		->select('*')
		->from('mapels as M')
		->join('pegawais as P', 'P.id_pegawai = M.id_pegawai', 'left')
		->where('id_mapel', $id_mapel)
		->get()
		->row_array();
	}

	public function ubahDataMapel()
	{
		//get id_pegawai
		$nama_pegawai = $this->input->post('nama_pegawai', true);
		$getIdPegawai = $this->db->select('id_pegawai')
		->get_where('pegawais', array('nama_pegawai' => $nama_pegawai))
		->row()
		->id_pegawai;

		// siapkan data
		$data = [
			"id_mapel" => $this->input->post('id_mapel', true),
			"nama_mapel" => $this->input->post('nama_mapel', true),
			"id_pegawai" => $getIdPegawai
		];

		// var_dump($data);
		$this->db->where('id_mapel', $this->input->post('tmp_id_mapel', true));
		// // insert
		$this->db->update('mapels', $data);
	}

}

/* End of file Mapel_model.php */
/* Location: ./application/models/Mapel_model.php */