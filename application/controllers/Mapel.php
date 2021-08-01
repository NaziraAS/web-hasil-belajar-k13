<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        // call modul database
        $this->load->database();
        // load modul model
        $this->load->model('Mapel_model');
    }

    public function index()
    {
        $this->load->library('session');
        if ($this->session->userdata('username')) {

            $data['judul'] = 'Data Mapel';
            // $data['user'] = $this->session->userdata('username');

            //ambil data dr model
            $data['map'] = $this->Mapel_model->getAllMapel();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mapel/index', $data);
            $this->load->view('templates/footer', $data);
        }else {
            // echo 'no session';
            redirect('notfound');
        }
        
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Mapel';
        // $data['user'] = $this->db->get_where('mapels', ['username' => $this->session->userdata('username')])-> row_array();
        $data['guru'] = $this->Mapel_model->getAllGuru();

        //rules
        $this->form_validation->set_rules('id_mapel', 'Kode', 'required|min_length[3]|max_length[10]|trim|alpha_numeric');
        $this->form_validation->set_rules('nama_mapel', 'Nama', 'required|min_length[3]');
        $this->form_validation->set_rules('nama_pegawai', 'Guru', 'required');

        if ($this->form_validation->run() == FALSE) {
            # gagal
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mapel/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            # berhasil
            $this->Mapel_model->tambahDataMapel();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('mapel');
        }
    }

    public function hapus($nis)
    {
        $this->Mapel_model->hapusDataMapel($nis);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('mapel');
    }

    public function detail()
    {
        echo json_encode($this->Mapel_model->getMapelById($_POST['nis']));

    }

    public function ubah($id_mapel)
    {
        $data['judul'] = 'Ubah Data Mapel';
        $data['guru'] = $this->Mapel_model->getAllGuru();
        $data['map'] = $this->Mapel_model->getMapelById($id_mapel);

        //rules
        $this->form_validation->set_rules('id_mapel', 'Kode', 'required|min_length[3]|max_length[10]|trim|alpha_numeric');
        $this->form_validation->set_rules('nama_mapel', 'Nama', 'required|min_length[3]');
        $this->form_validation->set_rules('nama_pegawai', 'Guru', 'required');

        if ($this->form_validation->run() == FALSE) {
            # gagal
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('mapel/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            # berhasil
            $this->Mapel_model->ubahDataMapel();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('mapel');
        }
    }

}