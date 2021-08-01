<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Gambar_model extends CI_Model {

	public function getAllGambar()
	{
		// return $query = $this->db->get('gambars')->result_array();
		return $this->db
		->select('*')
		->from('gambars')
		->get()
		->result_array();
	}

	public function getAllGambarInfo()
	{
		// return $query = $this->db->get('gambars')->result_array();
		return $this->db
		->select('*')
		->from('gambars as G')
		->join('coffeeshops as C', 'C.id_gambar = G.id_gambar')
		->get()
		->result_array();
	}

	public function getGambar1ById($id_gambar)
	{
		return $this->db
		->select('*')
		->from('gambars')
		->where('id_gambar', $id_gambar)
		->get()
		->row_array();
	}

	public function tambahDataGambar()
	{
		// siapkan data
		$data = [
			"nama_admin" => $this->input->post('nama_admin', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true)
		];

		// insert
		$this->db->insert('gambars', $data);
	}

	public function hapusDataGambar($id_gambar)
	{
		// $this->db->where('id_gambar', $id_gambar);
		$this->db->delete('gambars', ['id_gambar' => $id_gambar]);
	}

	public function getGambarById($id_gambar)
	{
		return $this->db
		->select('*')
		->from('gambars as G')
		->join('coffeeshops as C', 'C.id_gambar = G.id_gambar')
		->where('G.id_gambar', $id_gambar)
		->get()
		->row_array();
	}

	public function ubahDataGambar1()
	{
		$nm_file = $_FILES['gambar1']['name'];
		if (!$nm_file == null)
		{
			// echo $nm_file;
			$config['upload_path'] = './uploaded/';
			$config['allowed_types'] = 'jpg';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar1')){
				$error = $this->upload->display_errors();
				// echo 'Uplaod Gagal >>'.$error;
				echo '<script>alert("Format gambar harus .JPG");</script>';
			}
			else{
				$nm_file = $this->upload->data('file_name');
				$data = [
					"gambar1" => $nm_file
				];

				$this->db->where('id_gambar', $this->input->post('id_gambar', true));
				$this->db->update('gambars', $data);
				echo 'Upload success';
				return true;
			}
		}else {
			echo 'gambar kosong';
		}
	}

	public function ubahDataGambar2()
	{
		$nm_file = $_FILES['gambar2']['name'];
		if (!$nm_file == null)
		{
			// echo $nm_file;
			$config['upload_path'] = './uploaded/';
			$config['allowed_types'] = 'jpg';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar2')){
				$error = $this->upload->display_errors();
				// echo 'Uplaod Gagal >>'.$error;
				echo '<script>alert("Format gambar harus .JPG");</script>';
			}
			else{
				$nm_file = $this->upload->data('file_name');
				$data = [
					"gambar2" => $nm_file
				];

				$this->db->where('id_gambar', $this->input->post('id_gambar', true));
				$this->db->update('gambars', $data);
				echo 'Upload success';
				return true;
			}
		}else {
			echo 'gambar kosong';
		}
	}

	public function ubahDataGambar3()
	{
		$nm_file = $_FILES['gambar3']['name'];
		if (!$nm_file == null)
		{
			// echo $nm_file;
			$config['upload_path'] = './uploaded/';
			$config['allowed_types'] = 'jpg';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar3')){
				$error = $this->upload->display_errors();
				// echo 'Uplaod Gagal >>'.$error;
				echo '<script>alert("Format gambar harus .JPG");</script>';
			}
			else{
				$nm_file = $this->upload->data('file_name');
				$data = [
					"gambar3" => $nm_file
				];

				$this->db->where('id_gambar', $this->input->post('id_gambar', true));
				$this->db->update('gambars', $data);
				echo 'Upload success';
				return true;
			}
		}else {
			echo 'gambar kosong';
		}
	}

	public function ubahDataGambar4()
	{
		$nm_file = $_FILES['gambar4']['name'];
		if (!$nm_file == null)
		{
			// echo $nm_file;
			$config['upload_path'] = './uploaded/';
			$config['allowed_types'] = 'jpg';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar4')){
				$error = $this->upload->display_errors();
				// echo 'Uplaod Gagal >>'.$error;
				echo '<script>alert("Format gambar harus .JPG");</script>';
			}
			else{
				$nm_file = $this->upload->data('file_name');
				$data = [
					"gambar4" => $nm_file
				];

				$this->db->where('id_gambar', $this->input->post('id_gambar', true));
				$this->db->update('gambars', $data);
				echo 'Upload success';
				return true;
			}
		}else {
			echo 'gambar kosong';
		}
	}

}

/* End of file Gambar_model.php */
/* Location: ./application/models/Gambar_model.php */