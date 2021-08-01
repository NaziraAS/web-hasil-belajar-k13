<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Lapnilaisem_model extends CI_Model {

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
		->where('NS.nis', '0000000000')
		->get()
		->result_array();
	}

	public function getAllNilaisemFiltered($nis, $semester, $tahun_ajaran)
	{
		if($nis != "-Pilih-" OR $semester != "-Pilih-" OR $tahun_ajaran != "-Pilih-"){
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
			->where('NS.semester', $semester)
			->where('NS.tahun_ajaran', $tahun_ajaran)
			->get()
			->result_array();
		}else {
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
			->where('NS.nis', '0000000000')
			->get()
			->result_array();
		}
	}

	public function getAllNilaisemByNisSemesterTahunajaran($nis_semester_tahunajaran)
	{
		if($nis_semester_tahunajaran != '-Pilih-_-Pilih-_-Pilih-'){
			// $string = $nis_semester_tahunajaran;
			// pisah parameter
			// list($semester, $tahun_ajaran) = explode("_", $string);
			// $newSemester = strtr($semester, ['%20' => ' ']);

			$string = explode("_", $nis_semester_tahunajaran);
			$nis = $string[0];
			$semester = $string[1];
			$tmp_tahun_ajaran = $string[2];

			$int_tahun_ajaran = (int)$string[2];
			$tambahan_tahun_ajaran = $int_tahun_ajaran + 1;
			$str_tahun_ajaran = (string)$tambahan_tahun_ajaran;
			$tahun_ajaran = $tmp_tahun_ajaran . "/" . $str_tahun_ajaran; 

			// echo '<script>';
			// // echo 'console.log('. $int_tahun_ajaran .')';
			// echo 'console.log(TEMP: '. $tmp_tahun_ajaran .')';
			// echo 'console.log(TAHUN AJARAN: '. $tahun_ajaran .')';
			// echo '</script>';

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
			->where('NS.semester', $semester)
			->where('NS.tahun_ajaran', $tahun_ajaran)
			->get()
			->result_array();
		}else {
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
			->where('NS.nis', '0000000000')
			->get()
			->result_array();
		}
		
	}

	public function getNisByIdKelas($id_kelas)
	{
		return $this->db
		->select('NS.nis, S.nama_siswa')
		->from('siswas S')
		->join('nilai_semesters NS', 'NS.nis = S.nis')
		->where('NS.id_kelas', $id_kelas)
		->get()
		->result_array();
	}

	public function getNamaSiswaByNis($nis)
	{
		return $this->db
		->select('nama_siswa')
		->from('siswas')
		->where('nis', $nis)
		->get()
		->row_array();
	}

	public function getNamaKelasByNis($nis)
	{
		return $this->db
		->select('K.nama_kelas')
		->from('siswas S')
		->join('kelass K', 'K.id_kelas = S.id_kelas')
		->where('S.nis', $nis)
		->get()
		->row_array();
	}

	public function getRandomNis()
	{
		return $this->db
		->select('nis')
		->from('nilai_semesters')
		->order_by('rand()')
		->limit('1')
		->get()
		->result_array();
	}

	public function getTahunNilaisem()
	{
		return $this->db
		->select('tahun_ajaran')
		->from('nilai_semesters')
		->group_by('tahun_ajaran')
		->get()
		->result_array();
	}

	public function getAllKelasNsem()
	{
		return $this->db
		->select('K.id_kelas, K.nama_kelas')
		->from('kelass K')
		->join('nilai_semesters NS', 'NS.id_kelas = K.id_kelas')
		->group_by('NS.id_kelas')
		->get()
		->result_array();
	}

	public function getAllSiswa()
	{
		return $this->db
		->select('*')
		->from('siswas')
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

	public function getNilaisemById($id_nilaisem)
	{
		return $this->db->get_where('nilaisems', ['id_nilaisem' => $id_nilaisem])->row_array();
	}

}

/* End of file Lapnilaisemkelas_model.php */
/* Location: ./application/models/Lapnilaisemkelas_model.php */