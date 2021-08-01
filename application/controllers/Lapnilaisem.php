<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapnilaisem extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        // call modul database
        $this->load->database();
        // load modul model
        $this->load->model('Lapnilaisem_model');
    }

    public function index()
    {
        $this->load->library('session');
        if ($this->session->userdata('username')) {

            $ar_nis = $this->Lapnilaisem_model->getRandomNis();
            $nis = implode($ar_nis[0]);

            // echo '<script>';
            // echo 'console.log('. json_encode( implode($nis)) .')';
            // echo '</script>';

            $data['judul'] = 'Laporan Nilai Semester';
            $data['nsem'] = $this->Lapnilaisem_model->getDetailNilaisemById($nis);

            $data['kls'] = $this->Lapnilaisem_model->getAllKelasNsem();
            $data['sis'] = $this->Lapnilaisem_model->getAllSiswa();
            $data['smt'] = $this->Lapnilaisem_model->getAllSmt();
            // $data['smt'] = array(
            //     array('semester' => 'I'),
            //     array('semester' => 'II')
            // );
            $data['tahun'] = $this->Lapnilaisem_model->getTahunNilaisem();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lapnilaisem/index', $data);
            $this->load->view('templates/footer');
        }else {
            // echo 'no session';
            redirect('notfound');
        }
        
    }

    public function filter()
    {
        echo json_encode($this->Lapnilaisem_model->getAllNilaisemFiltered($_POST['nis'], $_POST['semester'], $_POST['tahun_ajaran']));
    }

    public function cetak($nis_semester_tahunajaran)
    {
        // echo("OKKKKKK");

        if(!$nis_semester_tahunajaran = "-Pilih-_-Pilih-_-Pilih-"){
            $string = explode("_", $nis_semester_tahunajaran);
            $data['nis'] = $string[0];
            $data['semester'] = $string[1];
            $tmp_tahun_ajaran = $string[2];

            $int_tahun_ajaran = (int)$string[2];
            $tambahan_tahun_ajaran = $int_tahun_ajaran + 1;
            $str_tahun_ajaran = (string)$tambahan_tahun_ajaran;
            $data['tahun_ajaran'] = $tmp_tahun_ajaran . "/" . $str_tahun_ajaran; 

            $data['nama_siswa'] = $this->Lapnilaisem_model->getNamaSiswaByNis($string[0]);
            $data['nama_kelas'] = $this->Lapnilaisem_model->getNamaKelasByNis($string[0]);
        }else {
            $data['nis'] = "Kosong";
            $data['nama_siswa'] = array("nama_siswa" => "Kosong");
            $data['nama_kelas'] = array("nama_kelas" => "Kosong");
            $data['semester'] = "Kosong";
            $data['tahun_ajaran'] = "Kosong";
        }


        $data['judul'] = 'Cetak Laporan Nilai Semester';
        $data['nsem'] = $this->Lapnilaisem_model->getAllNilaisemByNisSemesterTahunajaran($nis_semester_tahunajaran);

        $this->load->view('templates/header', $data);
        $this->load->view('lapnilaisem/cetak', $data);
        $this->load->view('templates/footer');
    }

    public function getNisByIdKelas()
    {
        echo json_encode($this->Lapnilaisem_model->getNisByIdKelas($_POST['id_kelas']));
    }

    public function getNamaSiswaByNis()
    {
        echo json_encode($this->Lapnilaisem_model->getNamaSiswaByNis($_POST['nis']));
    }

    // public function laporan_pdf(){

    //     $data ['pgw'] = $this->Lapnilaisem_model->getAllNilaisem();

    //     $this->load->library('pdf');

    //     $this->pdf->setPaper('A4', 'potrait');
    //     $this->pdf->filename = "laporan-petanikode.pdf";
    //     $this->pdf->save('uploaded/nama_file.pdf', 'lapnilaisem/index', $data);
    //     // redirect(base_url('uploaded/nama_file.pdf'));
    // }

}