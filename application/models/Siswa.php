<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Model
{

    public function getAllNilai($nis)
    {
        $data = $nis;
        $query = "SELECT M.nama_mapel, NS.nilai_pengetahuan, NS.konversi_nilai_pengetahuan, NS.nilai_keterampilan, NS.konversi_nilai_keterampilan, NS.nilai_sikap 
        FROM nilai_semesters NS 
        JOIN mapels M ON M.id_mapel = NS.id_mapel Where nis=$data";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
}
