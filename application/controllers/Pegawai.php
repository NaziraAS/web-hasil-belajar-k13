<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        // call modul database
        $this->load->database();
        // load modul model
        $this->load->model('Pegawai_model');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {

            $data['judul'] = 'Data Pegawai';
            // $data['user'] = $this->session->userdata('username');
            $data['user'] = $this->db->get_where('pegawais', ['username' => $this->session->userdata('username')])-> row_array();

            //ambil data dr model
            $data['pgw'] = $this->Pegawai_model->getAllPegawai();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pegawai/index', $data);
            $this->load->view('templates/footer');
        }else {
            // echo 'no session';
            redirect('notfound');
        }
        
    }

    public function tambah()
    {

        if ($this->session->userdata('username')) {
            $data['judul'] = 'Tambah Data Pegawai';
        // $data['user'] = $this->db->get_where('pegawais', ['username' => $this->session->userdata('username')])-> row_array();
        // $data['lvl'] = $this->Pegawai_model->getAllLevel();

        //rules
            $this->form_validation->set_rules('nip', 'NIP', 'required|min_length[18]|numeric');
            $this->form_validation->set_rules('nama_pegawai', 'Nama', 'required|min_length[3]');
            $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[12]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
            $this->form_validation->set_rules('cpassword', 'Password', 'required|min_length[3]|matches[password]');
            $this->form_validation->set_rules('no_hp', 'Nomor Hp', 'required|min_length[9]|max_length[13]');
            $this->form_validation->set_rules('level', 'Level', 'required|min_length[3]');

            if ($this->form_validation->run() == FALSE) {
            # gagal
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('pegawai/tambah', $data);
                $this->load->view('templates/footer');
            } else {
            # berhasil
                $this->Pegawai_model->tambahDataPegawai();
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('pegawai');
            }
        }else {
            redirect('notfound');
        }

    }

    public function hapus($id_pegawai)
    {
        if ($this->session->userdata('username')) {
            $this->Pegawai_model->hapusDataPegawai($id_pegawai);
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('pegawai');
        }else {
            redirect('notfound');
        }
    }

    public function detail($id_pegawai)
    {
        $data['judul'] = 'Detail Pegawai';
        $data['adm'] = $this->Pegawai_model->getPegawaiById($id_pegawai);

        $data['user'] = $this->db->get_where('pegawais', ['username' => $this->session->userdata('username')])-> row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_pegawai)
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'Ubah Data Pegawai';
            $data['pgw'] = $this->Pegawai_model->getPegawaiById($id_pegawai);
            $data['lvl'] = $this->Pegawai_model->getAllLevel();
        // $data['user'] = $this->db->get_where('pegawais', ['username' => $this->session->userdata('username')])-> row_array();

        //rules
            $this->form_validation->set_rules('nip', 'NIP', 'required|min_length[18]|numeric');
            $this->form_validation->set_rules('nama_pegawai', 'Nama', 'required|min_length[3]');
            $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[12]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
            $this->form_validation->set_rules('cpassword', 'Password', 'required|min_length[3]|matches[password]');
            $this->form_validation->set_rules('no_hp', 'Nomor Hp', 'required|min_length[9]|max_length[13]');
            $this->form_validation->set_rules('level', 'Level', 'required|min_length[3]');

            if ($this->form_validation->run() == FALSE) {
            # gagal
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('pegawai/ubah', $data);
                $this->load->view('templates/footer');
            } else {
            # berhasil
                $this->Pegawai_model->ubahDataPegawai();
                $this->session->set_flashdata('flash', 'diubah');
                redirect('pegawai');
            }
        }else {
            redirect('notfound');
        }
    }

}