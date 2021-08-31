<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{

	public function getAllPegawai()
	{
		return $query = $this->db->get('pegawais')->result_array();
	}

	public function tambahDataPegawai()
	{
		// siapkan data
		$data = [
			"nip" => $this->input->post('nip', true),
			"nama_pegawai" => $this->input->post('nama_pegawai', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"no_hp" => $this->input->post('no_hp', true),
			"level" => $this->input->post('level', true)
		];

		// insert
		$this->db->insert('pegawais', $data);
	}

	public function hapusDataPegawai($id_pegawai)
	{



		//hapus detail_jadwal join mapels
		// $query_dj = "DELETE DJ FROM detail_jadwals DJ
		// JOIN mapels M ON M.id_mapel = DJ.id_mapel
		// WHERE M.id_pegawai = '$id_pegawai'";

		//hapus nilaisem join mapels
		// $query_ns = "DELETE NS FROM nilai_semesters NS
		// JOIN mapels M ON M.id_mapel = NS.id_mapel
		// WHERE M.id_pegawai = '$id_pegawai'";

		// if ($this->db->query($query_dj)) {
		// 	if ($this->db->query($query_ns)) {
		// 		$this->db->delete('mapels', ['id_pegawai' => $id_pegawai]);

		// 		//hapus nilai_eks join eksul
		// 		$query_ne = "DELETE NE FROM nilai_ekstrakulikulers NE
		// 		JOIN ekskuls E ON E.id_ekskul = NE.id_ekskul
		// 		WHERE E.id_pegawai = '$id_pegawai'";

		// 		if ($this->db->query($query_ne)) {
		// 			$this->db->delete('ekskuls', ['id_pegawai' => $id_pegawai]);

		// 			return $this->db->delete('pegawais', ['id_pegawai' => $id_pegawai]);
		// 		}
		// 	}
		// }



		// //hapus nilaieks
		// $getIdEkskul = $this->db
		// ->select('id_ekskul')
		// ->get_where('ekskuls', array('id_pegawai' => $id_pegawai))
		// ->row()
		// ->id_ekskul;
		// $this->db->delete('nilai_ekstrakulikulers', ['id_ekskul' => $getIdEkskul]);

		// //hapus eksul
		// $this->db->delete('ekskuls', ['id_pegawai' => $id_pegawai]);


		// //hapus mapel
		$this->db->delete('mapels', ['id_pegawai' => $id_pegawai]);

		// //hapus pegawai
		$this->db->delete('pegawais', ['id_pegawai' => $id_pegawai]);
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

	public function ubahDataPegawai()
	{
		// siapkan data
		$data = [
			"nip" => $this->input->post('nip', true),
			"nama_pegawai" => $this->input->post('nama_pegawai', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"no_hp" => $this->input->post('no_hp', true),
			"level" => $this->input->post('level', true)
		];

		$this->db->where('id_pegawai', $this->input->post('id_pegawai'));
		// insert
		$this->db->update('pegawais', $data);
	}
}

/* End of file Pegawai_model.php */
/* Location: ./application/models/Pegawai_model.php */