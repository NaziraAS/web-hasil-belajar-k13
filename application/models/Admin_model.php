<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function getAllAdmin()
	{
		return $query = $this->db->get('admins')->result_array();
	}

	public function tambahDataAdmin()
	{
		// siapkan data
		$data = [
			"nama_admin" => $this->input->post('nama_admin', true),
			"no_telp" => $this->input->post('no_telp', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true)
		];

		// insert
		$this->db->insert('admins', $data);
	}

	public function hapusDataAdmin($id_admin)
	{
		// $this->db->where('id_admin', $id_admin);
		$this->db->delete('admins', ['id_admin' => $id_admin]);
	}

	public function getAdminById($id_admin)
	{
		return $this->db->get_where('admins', ['id_admin' => $id_admin])->row_array();
	}

	public function ubahDataAdmin()
	{
		// siapkan data
		$data = [
			"nama_admin" => $this->input->post('nama_admin', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true)
		];

		$this->db->where('id_admin', $this->input->post('id_admin'));
		// insert
		$this->db->update('admins', $data);
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */