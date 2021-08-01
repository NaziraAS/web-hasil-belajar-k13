<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lappegawai extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        // call modul database
        $this->load->database();
        // load modul model
        $this->load->model('Lappegawai_model');
    }

    public function index()
    {
        $this->load->library('session');
        if ($this->session->userdata('username')) {

            $data['judul'] = 'Laporan Pegawai';
            $data['pgw'] = $this->Lappegawai_model->getAllPegawai();

            $data['level'] = $this->Lappegawai_model->getAllLevel();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lappegawai/index', $data);
            $this->load->view('templates/footer');
        }else {
            // echo 'no session';
            redirect('notfound');
        }
        
    }

    public function filter()
    {
        echo json_encode($this->Lappegawai_model->getAllPegawaiFiltered($_POST['level']));
    }

    public function cetak($level)
    {
        // echo("OKKKKKK");
        $data['judul'] = 'Cetak Laporan Pegawai';
        $data['pgw'] = $this->Lappegawai_model->getAllPegawaiByLevel($level);

        $this->load->view('templates/header', $data);
        $this->load->view('lappegawai/cetak', $data);
        $this->load->view('templates/footer');
    }

    public function laporan_pdf(){

        $data ['pgw'] = $this->Lappegawai_model->getAllPegawai();

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->save('uploaded/nama_file.pdf', 'lappegawai/index', $data);
        // redirect(base_url('uploaded/nama_file.pdf'));
    }

}