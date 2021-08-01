<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaisem_model extends CI_Model {

	public function getAllNilaisem()
	{
		return $this->db
		->select('S.nis, S.nama_siswa')
		->from('siswas as S')
		->join('nilai_semesters as NS', 'NS.nis = S.nis')
		->group_by('S.nis')
		->order_by('S.nis')
		->get()
		->result_array();
	}

	public function getAllNilaisemFiltered($semester, $kelas, $tahun_ajaran)
	{
		return $this->db
		->select('S.nis, S.nama_siswa')
		->from('siswas as S')
		->join('nilai_semesters as NS', 'NS.nis = S.nis', 'left')
		->join('kelass as K', 'K.id_kelas = NS.id_kelas', 'left')
		->where(array('NS.semester' => $semester, 'K.nama_kelas' => $kelas, 'NS.tahun_ajaran' => $tahun_ajaran))
		->order_by('S.nis')
		->get()
		->result_array();
	}

	public function tambahDataNilaisem()
	{
		// getIdMapel
		$nama_mapel = $this->input->post('nama_mapel', true);
		$getIdMapel = $this->db->select('id_mapel')
		->get_where('mapels', array('nama_mapel' => $nama_mapel))
		->row()
		->id_mapel;

		//getIdKelas
		$nama_kelas = $this->input->post('nama_kelas', true);
		$getIdKelas = $this->db->select('id_kelas')
		->get_where('kelass', array('nama_kelas' => $nama_kelas))
		->row()
		->id_kelas;

		////hitung nilai
		$nilai_tugas1_p = $this->input->post('nilai_tugas1_p', true);
		$nilai_tugas2_p = $this->input->post('nilai_tugas2_p', true);
		$nilai_ulanganH1_p = $this->input->post('nilai_ulanganH1_p', true);
		$nilai_ulanganH2_p = $this->input->post('nilai_ulanganH2_p', true);
		$nilai_tugas1_k = $this->input->post('nilai_tugas1_k', true);
		$nilai_tugas2_k = $this->input->post('nilai_tugas2_k', true);
		$nilai_ulanganH1_k = $this->input->post('nilai_ulanganH1_k', true);
		$nilai_ulanganH2_k = $this->input->post('nilai_ulanganH2_k', true);
		$nilai_UTS = $this->input->post('nilai_UTS', true);
		$nilai_UAS = $this->input->post('nilai_UAS', true);

		///hitung nilai PENGETAHUAN
		//nilai proses
		$nilai_proses_p = (($nilai_tugas1_p + $nilai_tugas2_p) + ($nilai_ulanganH1_p + $nilai_ulanganH2_p))/4;

		$nilai_akhir_p = ((2*$nilai_proses_p) + (1*$nilai_UTS) + (1*$nilai_UAS))/4;

		$konversi_p = ($nilai_akhir_p/100)*4;

		if ($konversi_p >= 0.00 AND $konversi_p <= 1.00) {
			$nilai_konversi_p = "D";
		} else if ($konversi_p >= 1.01 AND $konversi_p <= 1.33) {
			$nilai_konversi_p = "D+";
		} else if ($konversi_p >= 1.34 AND $konversi_p <= 1.66) {
			$nilai_konversi_p = "C-";
		} else if ($konversi_p >= 1.67 AND $konversi_p <= 2.00) {
			$nilai_konversi_p = "C";
		} else if ($konversi_p >= 2.01 AND $konversi_p <= 2.33) {
			$nilai_konversi_p = "C+";
		} else if ($konversi_p >= 2.34 AND $konversi_p <= 2.66) {
			$nilai_konversi_p = "B-";
		} else if ($konversi_p >= 2.67 AND $konversi_p <= 3.00) {
			$nilai_konversi_p = "B";
		} else if ($konversi_p >= 3.01 AND $konversi_p <= 3.33) {
			$nilai_konversi_p = "B+";
		} else if ($konversi_p >= 3.34 AND $konversi_p <= 3.66) {
			$nilai_konversi_p = "A-";
		} else if ($konversi_p >= 3.67 AND $konversi_p <= 4.00) {
			$nilai_konversi_p = "A";
		} else {
			$nilai_konversi_p = "##";
		}

		///hitung nilai KETERAMPILAN
		//nilai proses
		$nilai_proses_k = (($nilai_tugas1_k + $nilai_tugas2_k) + ($nilai_ulanganH1_k + $nilai_ulanganH2_k))/4;

		$nilai_akhir_k = ((2*$nilai_proses_k) + (1*$nilai_UTS) + (1*$nilai_UAS))/4;

		$konversi_k = ($nilai_akhir_k/100)*4;

		if ($konversi_k >= 0.00 AND $konversi_k <= 1.00) {
			$nilai_konversi_k = "D";
		} else if ($konversi_k >= 1.01 AND $konversi_k <= 1.33) {
			$nilai_konversi_k = "D+";
		} else if ($konversi_k >= 1.34 AND $konversi_k <= 1.66) {
			$nilai_konversi_k = "C-";
		} else if ($konversi_k >= 1.67 AND $konversi_k <= 2.00) {
			$nilai_konversi_k = "C";
		} else if ($konversi_k >= 2.01 AND $konversi_k <= 2.33) {
			$nilai_konversi_k = "C+";
		} else if ($konversi_k >= 2.34 AND $konversi_k <= 2.66) {
			$nilai_konversi_k = "B-";
		} else if ($konversi_k >= 2.67 AND $konversi_k <= 3.00) {
			$nilai_konversi_k = "B";
		} else if ($konversi_k >= 3.01 AND $konversi_k <= 3.33) {
			$nilai_konversi_k = "B+";
		} else if ($konversi_k >= 3.34 AND $konversi_k <= 3.66) {
			$nilai_konversi_k = "A-";
		} else if ($konversi_k >= 3.67 AND $konversi_k <= 4.00) {
			$nilai_konversi_k = "A";
		} else {
			$nilai_konversi_k = "##";
		}

		// echo "Nilai Proses <br>"
		// ."[(".$nilai_tugas1_p."+".$nilai_tugas2_p.")+"."(".$nilai_ulanganH1_p."+".$nilai_ulanganH2_p
		// .")]/4= ".$nilai_proses;

		// echo "<br>Nilai Akhir <br>"
		// ."[2x".$nilai_proses." + 1x".$nilai_UTS." + 1x".$nilai_UAS."]/4 = ". $nilai_akhir;

		// echo "<br>Nilai Konversi <br>"
		// .$nilai_konversi;

		// siapkan data
		//input to ekskuls
		$data = [
			"nis" => $this->input->post('nis', true),
			"id_mapel" => $getIdMapel,
			"id_kelas" => $getIdKelas,
			"semester" => $this->input->post('semester', true),
			"tahun_ajaran" => $this->input->post('tahun_ajaran', true),
			"nilai_pengetahuan" => $konversi_p,
			"konversi_nilai_pengetahuan" => $nilai_konversi_p,
			"nilai_keterampilan" => $konversi_k,
			"konversi_nilai_keterampilan" => $nilai_konversi_k,
			"nilai_sikap" => $this->input->post('nilai_sikap', true),

			"nilai_tugas1_p" => $this->input->post('nilai_tugas1_p', true),
			"nilai_tugas2_p" => $this->input->post('nilai_tugas2_p', true),
			"nilai_ulanganH1_p" => $this->input->post('nilai_ulanganH1_p', true),
			"nilai_ulanganH2_p" => $this->input->post('nilai_ulanganH2_p', true),

			"nilai_tugas1_k" => $this->input->post('nilai_tugas1_k', true),
			"nilai_tugas2_k" => $this->input->post('nilai_tugas2_k', true),
			"nilai_ulanganH1_k" => $this->input->post('nilai_ulanganH1_k', true),
			"nilai_ulanganH2_k" => $this->input->post('nilai_ulanganH2_k', true),

			"nilai_sikap" => $this->input->post('nilai_sikap', true),
			"nilai_UTS" => $this->input->post('nilai_UTS', true),
			"nilai_UAS" => $this->input->post('nilai_UAS', true)
		];

		// insert
		$this->db->insert('nilai_semesters', $data);
	}

	public function hapusDetailNilaisem($id_ekskul)
	{
		if(!$this->db->delete('detail_ekskuls', ['id_ekskul' => $id_ekskul]))
		{
			return false;
		}else {
			return true;
		}
	}

	public function hapusDataNilaisem($nis)
	{
		$this->db->delete('nilai_semesters', ['nis' => $nis]);
	}

	// public function getNilaisemById($nis)
	// {
	// 	// return $this->db->get_where('nilai_ekstrakulikulers', ['id_nilai_ekskul' => $id_nilai_ekskul])->row_array();
	// 	return $this->db
	// 	->select('*')
	// 	->from('siswas as S')
	// 	->join('nilai_semesters as NS', 'NS.nis = S.nis')
	// 	->where('NS.nis', $nis)
	// 	->get()
	// 	->row_array();
	// }

	// public function getDetNilaisemById($id_detail_ekskul)
	// {
	// 	return $this->db->get_where('detail_ekskuls', ['id_detail_ekskul' => $id_detail_ekskul])->row_array();
	// }

	public function getDetailNilaisemById($nis)
	{
		return $this->db
		->select('S.nis, S.nama_siswa, M.id_mapel, M.nama_mapel, K.id_kelas, K.nama_kelas, NS.tahun_ajaran, NS.semester,
			NS.nilai_tugas1_p, NS.nilai_tugas2_p, NS.nilai_tugas1_k, NS.nilai_tugas2_k,
			NS.nilai_ulanganH1_p, NS.nilai_ulanganH2_p, NS.nilai_ulanganH1_k, NS.nilai_ulanganH2_k,
			NS.nilai_UTS, NS.nilai_UAS,
			NS.nilai_pengetahuan, NS.konversi_nilai_pengetahuan,
			NS.nilai_keterampilan, NS.konversi_nilai_keterampilan, NS.nilai_sikap')
		->from('siswas as S')
		->join('nilai_semesters as NS', 'NS.nis = S.nis')
		->join('mapels as M', 'M.id_mapel = NS.id_mapel')
		->join('kelass as K', 'K.id_kelas = NS.id_kelas')
		->where('NS.nis', $nis)
		->get()
		->result_array();
	}

	public function getNamasiswaByNis($nis)
	{
		return $this->db->get_where('siswas', ['nis' => $nis])->row_array();
	}

	public function getIdMapel($nama_mapel)
	{
		return $this->db->get_where('mapels', ['nama_mapel' => $nama_mapel])->row_array();
	}

	public function ubahDataNilaisem()
	{
		// getIdMapel
		// $nama_mapel = $this->input->post('nama_mapel', true);
		// $getIdMapel = $this->db->select('id_mapel')
		// ->get_where('mapels', array('nama_mapel' => $nama_mapel))
		// ->row()
		// ->id_mapel;

		//getIdKelas
		// $nama_kelas = $this->input->post('nama_kelas', true);
		// $getIdKelas = $this->db->select('id_kelas')
		// ->get_where('kelass', array('nama_kelas' => $nama_kelas))
		// ->row()
		// ->id_kelas;

		////hitung nilai
		$nilai_tugas1_p = $this->input->post('nilai_tugas1_p', true);
		$nilai_tugas2_p = $this->input->post('nilai_tugas2_p', true);
		$nilai_ulanganH1_p = $this->input->post('nilai_ulanganH1_p', true);
		$nilai_ulanganH2_p = $this->input->post('nilai_ulanganH2_p', true);
		$nilai_tugas1_k = $this->input->post('nilai_tugas1_k', true);
		$nilai_tugas2_k = $this->input->post('nilai_tugas2_k', true);
		$nilai_ulanganH1_k = $this->input->post('nilai_ulanganH1_k', true);
		$nilai_ulanganH2_k = $this->input->post('nilai_ulanganH2_k', true);
		$nilai_UTS = $this->input->post('nilai_UTS', true);
		$nilai_UAS = $this->input->post('nilai_UAS', true);

		///hitung nilai PENGETAHUAN
		//nilai proses
		$nilai_proses_p = (($nilai_tugas1_p + $nilai_tugas2_p) + ($nilai_ulanganH1_p + $nilai_ulanganH2_p))/4;

		$nilai_akhir_p = ((2*$nilai_proses_p) + (1*$nilai_UTS) + (1*$nilai_UAS))/4;

		$konversi_p = ($nilai_akhir_p/100)*4;

		if ($konversi_p >= 0.00 AND $konversi_p <= 1.00) {
			$nilai_konversi_p = "D";
		} else if ($konversi_p >= 1.01 AND $konversi_p <= 1.33) {
			$nilai_konversi_p = "D+";
		} else if ($konversi_p >= 1.34 AND $konversi_p <= 1.66) {
			$nilai_konversi_p = "C-";
		} else if ($konversi_p >= 1.67 AND $konversi_p <= 2.00) {
			$nilai_konversi_p = "C";
		} else if ($konversi_p >= 2.01 AND $konversi_p <= 2.33) {
			$nilai_konversi_p = "C+";
		} else if ($konversi_p >= 2.34 AND $konversi_p <= 2.66) {
			$nilai_konversi_p = "B-";
		} else if ($konversi_p >= 2.67 AND $konversi_p <= 3.00) {
			$nilai_konversi_p = "B";
		} else if ($konversi_p >= 3.01 AND $konversi_p <= 3.33) {
			$nilai_konversi_p = "B+";
		} else if ($konversi_p >= 3.34 AND $konversi_p <= 3.66) {
			$nilai_konversi_p = "A-";
		} else if ($konversi_p >= 3.67 AND $konversi_p <= 4.00) {
			$nilai_konversi_p = "A";
		} else {
			$nilai_konversi_p = "##";
		}

		///hitung nilai KETERAMPILAN
		//nilai proses
		$nilai_proses_k = (($nilai_tugas1_k + $nilai_tugas2_k) + ($nilai_ulanganH1_k + $nilai_ulanganH2_k))/4;

		$nilai_akhir_k = ((2*$nilai_proses_k) + (1*$nilai_UTS) + (1*$nilai_UAS))/4;

		$konversi_k = ($nilai_akhir_k/100)*4;

		if ($konversi_k >= 0.00 AND $konversi_k <= 1.00) {
			$nilai_konversi_k = "D";
		} else if ($konversi_k >= 1.01 AND $konversi_k <= 1.33) {
			$nilai_konversi_k = "D+";
		} else if ($konversi_k >= 1.34 AND $konversi_k <= 1.66) {
			$nilai_konversi_k = "C-";
		} else if ($konversi_k >= 1.67 AND $konversi_k <= 2.00) {
			$nilai_konversi_k = "C";
		} else if ($konversi_k >= 2.01 AND $konversi_k <= 2.33) {
			$nilai_konversi_k = "C+";
		} else if ($konversi_k >= 2.34 AND $konversi_k <= 2.66) {
			$nilai_konversi_k = "B-";
		} else if ($konversi_k >= 2.67 AND $konversi_k <= 3.00) {
			$nilai_konversi_k = "B";
		} else if ($konversi_k >= 3.01 AND $konversi_k <= 3.33) {
			$nilai_konversi_k = "B+";
		} else if ($konversi_k >= 3.34 AND $konversi_k <= 3.66) {
			$nilai_konversi_k = "A-";
		} else if ($konversi_k >= 3.67 AND $konversi_k <= 4.00) {
			$nilai_konversi_k = "A";
		} else {
			$nilai_konversi_k = "##";
		}

		$data = [
			"nis" => $this->input->post('nis', true),
			"id_mapel" => $this->input->post('nama_mapel', true),
			"id_kelas" => $this->input->post('nama_kelas', true),
			"semester" => $this->input->post('semester', true),
			"tahun_ajaran" => $this->input->post('tahun_ajaran', true),
			"nilai_pengetahuan" => $nilai_akhir_p,
			"konversi_nilai_pengetahuan" => $nilai_konversi_p,
			"nilai_keterampilan" => $nilai_akhir_k,
			"konversi_nilai_keterampilan" => $nilai_konversi_k,
			"nilai_sikap" => $this->input->post('nilai_sikap', true),

			"nilai_tugas1_p" => $this->input->post('nilai_tugas1_p', true),
			"nilai_tugas2_p" => $this->input->post('nilai_tugas2_p', true),
			"nilai_ulanganH1_p" => $this->input->post('nilai_ulanganH1_p', true),
			"nilai_ulanganH2_p" => $this->input->post('nilai_ulanganH2_p', true),

			"nilai_tugas1_k" => $this->input->post('nilai_tugas1_k', true),
			"nilai_tugas2_k" => $this->input->post('nilai_tugas2_k', true),
			"nilai_ulanganH1_k" => $this->input->post('nilai_ulanganH1_k', true),
			"nilai_ulanganH2_k" => $this->input->post('nilai_ulanganH2_k', true),

			"nilai_sikap" => $this->input->post('nilai_sikap', true),
			"nilai_UTS" => $this->input->post('nilai_UTS', true),
			"nilai_UAS" => $this->input->post('nilai_UAS', true)
		];

		$this->db->where('nis', $this->input->post('nis'));
		// insert
		$this->db->update('nilai_semesters', $data);
	}


	public function getAllKelas()
	{
		return $this->db
		->select('K.id_kelas, K.nama_kelas')
		->from('nilai_semesters NS')
		->join('kelass K', 'K.id_kelas = NS.id_kelas')
		->group_by('K.nama_kelas')
		->get()
		->result_array();
	}

	public function getAllKelasIndex()
	{
		return $this->db
		->select('*')
		->from('kelass')
		->get()
		->result_array();
	}

	public function getAllSmt()
	{
		return $this->db
		->select('semester')
		->from('nilai_semesters')
		->group_by('semester')
		->get()
		->result_array();
	}

	public function getAllTahunajaran()
	{
		return $this->db
		->select('tahun_ajaran')
		->from('nilai_semesters')
		->group_by('tahun_ajaran')
		->get()
		->result_array();
	}

	public function getAllNis()
	{
		return $this->db
		->select('nis, nama_siswa')
		->from('siswas')
		->get()
		->result_array();
	}

	public function getAllmapel()
	{
		return $this->db
		->select('*')
		->from('mapels')
		->get()
		->result_array();
	}

	public function getListNisByKelas($nama_kelas)
	{
		//getIdKelas
		$getIdKelas = $this->db->select('id_kelas')
		->get_where('kelass', array('nama_kelas' => $nama_kelas))
		->row()
		->id_kelas;

		return $this->db
		->select('nis, nama_siswa')
		->from('siswas')
		->where('id_kelas', $getIdKelas)
		->get()
		->result_array();
	}

	public function maxIdNilaisem()
	{
		$this->db->select_max('id_ekskul', 'max');
		$query = $this->db->get('ekskuls');
		if ($query->num_rows() == 0) {
			return 1;
		}
		$max = $query->row()->max;
		return $max;
	}

}

/* End of file Nilaisem_model.php */
/* Location: ./application/models/Nilaisem_model.php */