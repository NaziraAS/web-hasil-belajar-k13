<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Coffeeshop_model extends CI_Model {

	public function getAllCoffeeshop()
	{
		return $this->db
		->select('*')
		->from('coffeeshops as C')
		->join('gambars as G', 'G.id_gambar = C.id_gambar', 'left')
		->get()
		->result_array();
	}

	public function tambahDataCoffeeshop()
	{
		$gambar1 = $this->uploadGambar1();
		if (!$gambar1) {
			return false;
			echo '<script>alert("Gambar GAGAL");</script>';
			die();
		}else {
			echo 'ID_GAMBAR= '.$gambar1;

		//get id gambar
			$data['idGambar'] = $this->getIdGambar();
			
		// siapkan data
			$data = [
				"id_gambar" => $data['idGambar'],
				"nama_coffee_shop" => $this->input->post('nama_coffeeshop', true),
				"alamat" => $this->input->post('alamat', true),
				"jam_buka" => $this->input->post('jam_buka', true),
				"jam_tutup" => $this->input->post('jam_tutup', true),
				"fasilitas" => $this->input->post('fasilitas', true),
				"harga_menu_min" => $this->input->post('harga_menu_min', true),
				"harga_menu_max" => $this->input->post('harga_menu_max', true),
				"lattitude" => $this->input->post('lattitude', true),
				"longitude" => $this->input->post('longitude', true)
			];

			// var_dump($data);

		// // insert
			$this->db->insert('coffeeshops', $data);
			return true;
		}
		
	}

	public function uploadGambar1()
	{
		
		$nm_file = $_FILES['gambar1']['name'];
		// echo $nm_file;
		if ($nm_file == '') {
			return false;
			echo '<script>alert("Gambar Kosong");</script>';
		}else {
			$config['upload_path'] = './uploaded/';
			$config['allowed_types'] = 'jpg';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar1')){
				// $error = $this->upload->display_errors();
				// return $error;
				// echo 'do_upload GAGAL '. $error;
				echo '<script>alert("Tambahkan gambar terlebih dahulu");</script>';
				return false;
				die();

			}else{
				// $data = array('gambar' => $this->upload->data());
				$nm_file = $this->upload->data('file_name');
				$data = [
					"gambar1" => $nm_file
				];
				echo "do_upload success";

				//input nm_file to DB
				return $this->db->insert('gambars', $data);
				return $nm_file;

				//get id gambar
			}
		}
	}

	public function getIdGambar(){
		$this->db->select_max('id_gambar', 'max');
		$query = $this->db->get('gambars');
		if ($query->num_rows() == 0) {
			return 1;
		}
		$max = $query->row()->max;
		return $max;
	}

	public function hapusDataCoffeeshop($id_coffee_shop)
	{
		// $this->db->where('id_event', $id_coffee_shop);
		$this->db->delete('coffeeshops', ['id_coffee_shop' => $id_coffee_shop]);
	}

	public function getCoffeeshopById($id_coffee_shop)
	{
		return $this->db
		->select('*')
		->from('coffeeshops as C')
		->join('gambars as G', 'G.id_gambar = C.id_gambar', 'left')
		->where('id_coffee_shop', $id_coffee_shop)
		->get()
		->row_array();
	}

	public function ubahDataCoffeeshop()
	{
		$data = [
			"nama_coffee_shop" => $this->input->post('nama_coffeeshop', true),
			"alamat" => $this->input->post('alamat', true),
			"jam_buka" => $this->input->post('jam_buka', true),
			"jam_tutup" => $this->input->post('jam_tutup', true),
			"fasilitas" => $this->input->post('fasilitas', true),
			"harga_menu_min" => $this->input->post('harga_menu_min', true),
			"harga_menu_max" => $this->input->post('harga_menu_max', true),
			"lattitude" => $this->input->post('lattitude', true),
			"longitude" => $this->input->post('longitude', true)
		];

			// var_dump($data);
		$this->db->where('id_coffee_shop', $this->input->post('id_coffee_shop', true));
		// insert
		$this->db->update('coffeeshops', $data);
		return true;
	}


	// }

}

/* End of file Coffeeshop_model.php */
/* Location: ./application/models/Coffeeshop_model.php */