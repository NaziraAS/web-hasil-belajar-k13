<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        // call modul database
        $this->load->database();
        // load modul model
        $this->load->model('Kelas_model');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {

            $data['judul'] = 'Manajemen Kelas';

        //ambil data dr model
            $data['kls'] = $this->Kelas_model->getAllKelas();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kelas/index', $data);
            $this->load->view('templates/footer');
        }else {
            // echo 'no session';
            redirect('notfound');
        }
        
    }

    public function tambah()
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'Tambah Data Kelas';

        //rules
            $this->form_validation->set_rules('id_kelas', 'Kode kelas', 'required|min_length[2]|max_length[5]|trim|alpha_numeric|is_unique[kelass.id_kelas]');
            $this->form_validation->set_rules('nama_kelas', 'Nama', 'required|min_length[3]');

            if ($this->form_validation->run() == FALSE) {
            # gagal
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('kelas/tambah', $data);
                $this->load->view('templates/footer');
            } else {
            # berhasil
                $this->Kelas_model->tambahDataKelas();
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('kelas');
            } 
        }else{
            redirect('notfound');
        }

    }

    public function hapus($id_kelas)
    {
        $this->Kelas_model->hapusDataKelas($id_kelas);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('kelas');
    }

    public function ubah($id_kelas)
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'Ubah Data Kelas';
            $data['kls'] = $this->Kelas_model->getKelasById($id_kelas);

        //rules
            $this->form_validation->set_rules('id_kelas', 'Kode kelas', 'required|min_length[2]|max_length[5]|trim|alpha_numeric');
            $this->form_validation->set_rules('nama_kelas', 'Nama', 'required|min_length[3]');

            if ($this->form_validation->run() == FALSE) {
            # gagal
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('kelas/ubah', $data);
                $this->load->view('templates/footer');
            } else {
            # berhasil
                $this->Kelas_model->ubahDataKelas();
                $this->session->set_flashdata('flash', 'diubah');
                redirect('kelas');
            }
        }else{
            redirect('notfound');
        }
    }

}