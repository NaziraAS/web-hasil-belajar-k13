<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function getAllSiswa()
	{
		return $this->db
		->select('*')
		->from('siswas as S')
		->join('kelass as K', 'S.id_kelas = K.id_kelas', 'left')
		->get()
		->result_array();
		// return $query = $this->db->get('siswas')->result_array();
	}

	public function tambahDataSiswa()
	{
		//get id_kelas
		$nama_kelas = $this->input->post('nama_kelas', true);
		$getIdKelas = $this->db->select('id_kelas')
		->get_where('kelass', array('nama_kelas' => $nama_kelas))
		->row()
		->id_kelas;

		// siapkan data
		$data = [
			"nis" => $this->input->post('nis', true),
			"id_kelas" => $getIdKelas,
			"nama_siswa" => $this->input->post('nama_siswa', true),
			"jenis_kelamin" => $this->input->post('jenis_kelamin', true),
			"tgl_lahir" => $this->input->post('tgl_lahir', true),
			"alamat" => $this->input->post('alamat', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true)
		];

		// var_dump($data);

		// insert
		$this->db->insert('siswas', $data);
	}

	public function hapusDataSiswa($nis)
	{
		//hapus detail_presensi
		$this->db->delete('detail_presensis', ['nis' => $nis]);
		//hapus detail_nilsem
		$this->db->delete('nilai_semesters', ['nis' => $nis]);
		//hapus detail_nileks
		$this->db->delete('nilai_ekstrakulikulers', ['nis' => $nis]);
		//hapus detail_sis
		$this->db->delete('siswas', ['nis' => $nis]);
	}

	public function getAllKelas()
	{
		return $this->db
		->select('*')
		->from('kelass')
		->get()
		->result_array();
	}

	public function getSiswaById($nis)
	{
		// return $this->db->get_where('siswas', ['nis' => $nis])->row_array();
		return $this->db
		->select('*')
		->from('siswas as S')
		->join('kelass as K', 'S.id_kelas = K.id_kelas', 'left')
		->where('nis', $nis)
		->get()
		->row_array();
	}

	public function ubahDataSiswa()
	{
		//get id_kelas
		// $nama_kelas = $this->input->post('nama_kelas', true);
		// $getIdKelas = $this->db
		// ->select('id_kelas')
		// ->get_where('kelass', array('nama_kelas' => $nama_kelas))
		// ->row()
		// ->id_kelas;
		// $this->db->disableForeignKeyChecks();
		// $this->db->enableForeignKeyChecks();

		//ubah nilaieks
		$data = [
			"nis" => $this->input->post('nis', true),
			"id_kelas" => $this->input->post('nama_kelas', true),
			"nama_siswa" => $this->input->post('nama_siswa', true),
			"jenis_kelamin" => $this->input->post('jenis_kelamin', true),
			"tgl_lahir" => $this->input->post('tgl_lahir', true),
			"alamat" => $this->input->post('alamat', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true)
		];

		// var_dump($data);
			$this->db->where('nis', $this->input->post('tmp_nis', true));
		// // insert
			$this->db->update('siswas', $data);

	}

}

/* End of file Siswa_model.php */
/* Location: ./application/models/Siswa_model.php */