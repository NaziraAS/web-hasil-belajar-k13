<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model
{

	public function getAllKelas()
	{
		return $query = $this->db->get('kelass')->result_array();
	}

	public function tambahDataKelas()
	{
		// siapkan data
		$data = [
			"id_kelas" => $this->input->post('id_kelas', true),
			"nama_kelas" => $this->input->post('nama_kelas', true)
		];

		// insert
		$this->db->insert('kelass', $data);
	}

	public function hapusDataKelas($id_kelas)
	{
		// hapus kelas
		$this->db->delete('kelass', ['id_kelas' => $id_kelas]);
		//hapus kelas join nilaisem
		// $query_ns = "DELETE NS FROM nilai_semesters NS
		// JOIN kelass K ON K.id_kelas = NS.id_kelas
		// WHERE NS.id_kelas = '$id_kelas'";

		// if($this->db->query($query_ns))
		// {
		// 	//hapus detail presensi join pressensi join kelas
		// 	$query_dp = "DELETE DP FROM detail_presensis DP
		// 	JOIN presensis P ON P.id_presensi = DP.id_presensi
		// 	WHERE P.id_kelas = '$id_kelas'";

		// 	if($this->db->query($query_dp))
		// 	{
		// 		//hapus presensi join kelas
		// 		$query_p = "DELETE P FROM presensis P
		// 		JOIN kelass K ON K.id_kelas = P.id_kelas
		// 		WHERE P.id_kelas = '$id_kelas'";

		// 		if($this->db->query($query_p))
		// 		{
		// 			//hapus nilaieks join siswa
		// 			$query_ne = "DELETE NE FROM nilai_ekstrakulikulers NE
		// 			JOIN siswas S ON S.nis = NE.nis
		// 			WHERE S.id_kelas = '$id_kelas'";

		// 			if($this->db->query($query_ne))
		// 			{
		// 				//hapus siswa join kelas
		// 				$query_s = "DELETE S FROM siswas S
		// 				JOIN kelass K ON K.id_kelas = S.id_kelas
		// 				WHERE S.id_kelas = '$id_kelas'";

		// 				if($this->db->query($query_s))
		// 				{

		// 					//hapus detail jadwal join jadwal
		// 					$query_dj = "DELETE DJ FROM detail_jadwals DJ
		// 					JOIN jadwals J ON J.id_jadwal = J.id_jadwal
		// 					WHERE J.id_kelas = '$id_kelas'";

		// 					if($this->db->query($query_dj))
		// 					{
		// 						//hapus jadwal join kelas
		// 						$query_j = "DELETE J FROM jadwals J
		// 						JOIN kelass K ON K.id_kelas = J.id_kelas
		// 						WHERE J.id_kelas = '$id_kelas'";

		// 						if($this->db->query($query_j))
		// 						{
		// 							//finaly delete kelass by id_kelas
		// 							$this->db->delete('kelass', ['id_kelas' => $id_kelas]);
		// 							// return true;
		// 						}
		// 					}
		// 				}
		// 			}
		// 		}
		// 	}
		// }


		// $this->db->delete('kelass', ['id_kelas' => $id_kelas]);
	}

	public function getKelasById($id_kelas)
	{
		return $this->db->get_where('kelass', ['id_kelas' => $id_kelas])->row_array();
	}

	public function ubahDataKelas()
	{
		// siapkan data
		$data = [
			"id_kelas" => $this->input->post('id_kelas', true),
			"nama_kelas" => $this->input->post('nama_kelas', true)
		];

		$this->db->where('id_kelas', $this->input->post('tmp_id_kelas'));
		// insert
		$this->db->update('kelass', $data);
	}
}

/* End of file Kelas_model.php */
/* Location: ./application/models/Kelas_model.php */