<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapmapel extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        // call modul database
        $this->load->database();
        // load modul model
        $this->load->model('Lapmapel_model');
    }

    public function index()
    {
        $this->load->library('session');
        if ($this->session->userdata('username')) {

            $data['judul'] = 'Laporan Mapel';
            $data['map'] = $this->Lapmapel_model->getAllMapel();

            $data['kelas'] = $this->Lapmapel_model->getAllKelas();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lapmapel/index', $data);
            $this->load->view('templates/footer');
        }else {
            // echo 'no session';
            redirect('notfound');
        }
        
    }

    public function filter()
    {
        echo json_encode($this->Lapmapel_model->getAllMapelFiltered($_POST['nama_kelas']));
    }

    public function cetak()
    {
        $data['judul'] = 'Cetak Laporan Mapel';
        $data['map'] = $this->Lapmapel_model->getAllMapel();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        // $this->load->view('templates/topbar', $data);
        $this->load->view('lapmapel/cetak', $data);
        $this->load->view('templates/footer');
    }
}