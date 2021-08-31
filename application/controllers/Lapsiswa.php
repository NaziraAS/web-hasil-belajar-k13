<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapsiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // call modul database
        $this->load->database();
        // load modul model
        $this->load->model('Lapsiswa_model');
    }

    public function index()
    {
        $this->load->library('session');
        if ($this->session->userdata('username')) {

            $data['judul'] = 'Laporan Siswa';
            $data['sis'] = $this->Lapsiswa_model->getAllSiswa();

            $data['kelas'] = $this->Lapsiswa_model->getAllKelasLapkelas();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lapsiswa/index', $data);
            $this->load->view('templates/footer');
        } else {
            // echo 'no session';
            // echo "tidak ada session";
            redirect('notfound');
        }
    }

    public function cetak()
    {
        // echo("OKKKKKK");
        $data['judul'] = 'Cetak Laporan Siswa';
        $data['sis'] = $this->Lapsiswa_model->getAllSiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('lapsiswa/cetak', $data);
        $this->load->view('templates/footer');
    }

    public function filter()
    {
        echo json_encode($this->Lapsiswa_model->getAllSiswaFiltered($_POST['nama_kelas']));
    }
}
