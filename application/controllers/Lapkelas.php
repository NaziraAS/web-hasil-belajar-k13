<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapkelas extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        // call modul database
        $this->load->database();
        // load modul model
        $this->load->model('Lapkelas_model');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {

            $data['judul'] = 'Laporan Kelas';
            $data['kls'] = $this->Lapkelas_model->getAllKelas();

            $data['kelas'] = $this->Lapkelas_model->getAllKelas();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lapkelas/index', $data);
            $this->load->view('templates/footer');
        }else {
            // echo 'no session';
            redirect('notfound');
        }
        
    }

    public function cetak()
    {
        if ($this->session->userdata('username')) {
        // echo("OKKKKKK");
            $data['judul'] = 'Cetak Laporan Kelas';
            $data['kls'] = $this->Lapkelas_model->getAllKelas();

            $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
            $this->load->view('lapkelas/cetak', $data);
            $this->load->view('templates/footer');
        }else {
            redirect('notfound');
        }
    }

    public function filter()
    {
        echo json_encode($this->Lapkelas_model->getAllKelasFiltered($_POST['nama_kelas']));
    }
}