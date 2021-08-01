<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapnilaisemkelas extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        // call modul database
        $this->load->database();
        // load modul model
        $this->load->model('Lapnilaisemkelas_model');
    }

    public function index()
    {
        $this->load->library('session');
        if ($this->session->userdata('username')) {

            // $ar_kls = $this->Lapnilaisemkelas_model->getRandomKls();
            // $id_kelas = implode($ar_kls[0]);
            // $data['klsMin'] = $this->Lapnilaisemkelas_model->getMinIdKelas();
            // $id_kelas = $klsMin[0]['id_kelas'];

            // echo '<script>';
            // echo 'console.log('. json_encode( implode($nis)) .')';
            // echo '</script>';

            $data['judul'] = 'Laporan Nilai Semester Kelas';
            $data['nsem'] = $this->Lapnilaisemkelas_model->getDetailNilaisemByKelas('001');

            $data['kls'] = $this->Lapnilaisemkelas_model->getAllKelasNsem();
            $data['map'] = $this->Lapnilaisemkelas_model->getAllMapelNsem();
            $data['sis'] = $this->Lapnilaisemkelas_model->getAllSiswa();
            $data['smt'] = $this->Lapnilaisemkelas_model->getAllSmt();
            // $data['smt'] = array(
            //     array('semester' => 'I'),
            //     array('semester' => 'II')
            // );
            $data['tahun'] = $this->Lapnilaisemkelas_model->getTahunNilaisem();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lapnilaisemkelas/index', $data);
            $this->load->view('templates/footer');
        }else {
            // echo 'no session';
            redirect('notfound');
        }
        
    }

    public function filter()
    {
        echo json_encode($this->Lapnilaisemkelas_model->getAllNilaisemFiltered($_POST['id_kelas'], $_POST['id_mapel'], $_POST['semester'], $_POST['tahun_ajaran']));
    }

    public function cetak($id_kelas_id_mapel_semester_tahunajaran)
    {
        // echo("OKKKKKK");
        $data['judul'] = 'Cetak Laporan Nilai Semester';
        $data['nsem'] = $this->Lapnilaisemkelas_model->getAllNilaisemByNisSemesterTahunajaran($id_kelas_id_mapel_semester_tahunajaran);

        $this->load->view('templates/header', $data);
        $this->load->view('lapnilaisemkelas/cetak', $data);
        $this->load->view('templates/footer');
    }

    public function getNisByIdKelas()
    {
        echo json_encode($this->Lapnilaisemkelas_model->getNisByIdKelas($_POST['id_kelas']));
    }

    public function getNamaSiswaByNis()
    {
        echo json_encode($this->Lapnilaisemkelas_model->getNamaSiswaByNis($_POST['nis']));
    }

    // public function laporan_pdf(){

    //     $data ['pgw'] = $this->Lapnilaisemkelas_model->getAllNilaisem();

    //     $this->load->library('pdf');

    //     $this->pdf->setPaper('A4', 'potrait');
    //     $this->pdf->filename = "laporan-petanikode.pdf";
    //     $this->pdf->save('uploaded/nama_file.pdf', 'lapnilaisemkelas/index', $data);
    //     // redirect(base_url('uploaded/nama_file.pdf'));
    // }

}