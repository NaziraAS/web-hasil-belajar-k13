<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // call modul database
        $this->load->database();
        // load modul model
        $this->load->model('Siswa_model');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {

            $data['judul'] = 'Data Siswa';
            // $data['user'] = $this->session->userdata('username');
            $data['user'] = $this->db->get_where('siswas', ['username' => $this->session->userdata('username')])->row_array();

            //ambil data dr model
            $data['sis'] = $this->Siswa_model->getAllSiswa();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('siswa/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            // echo 'no session';
            redirect('notfound');
        }
    }

    public function tambah()
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'Tambah Data Siswa';
            // $data['user'] = $this->db->get_where('siswas', ['username' => $this->session->userdata('username')])-> row_array();
            $data['kls'] = $this->Siswa_model->getAllKelas();

            //rules
            $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[10]|numeric', [
                'min_length' => 'Panjang nis harus di atas 10'
            ]);
            $this->form_validation->set_rules('nama_siswa', 'Nama', 'required');
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[12]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
            $this->form_validation->set_rules('cpassword', 'Password', 'required|min_length[3]|matches[password]');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]');

            if ($this->form_validation->run() == FALSE) {
                # gagal
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('siswa/tambah', $data);
                $this->load->view('templates/footer');
            } else {
                # berhasil
                $this->Siswa_model->tambahDataSiswa();
                $this->session->set_flashdata('flash', 'ditambahkan');
                redirect('siswa');
            }
        } else {
            redirect('notfound');
        }
    }

    public function hapus($nis)
    {
        $this->Siswa_model->hapusDataSiswa($nis);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('siswa');
    }

    public function detail()
    {
        if ($this->session->userdata('username')) {
            echo json_encode($this->Siswa_model->getSiswaById($_POST['nis']));
        } else {
            redirect('notfound');
        }
    }

    public function ubah($nis)
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = 'Ubah Data Siswa';
            $data['sis'] = $this->Siswa_model->getSiswaById($nis);
            $data['kls'] = $this->Siswa_model->getAllKelas();

            //rules
            $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[6]|numeric|max_length[6]');
            $this->form_validation->set_rules('nama_siswa', 'Nama', 'required');
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[12]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
            $this->form_validation->set_rules('cpassword', 'Password', 'required|min_length[3]|matches[password]');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]');;

            if ($this->form_validation->run() == FALSE) {
                # gagal
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('siswa/ubah', $data);
                $this->load->view('templates/footer');
            } else {
                # berhasil
                $this->Siswa_model->ubahDataSiswa();
                $this->session->set_flashdata('flash', 'diubah');
                redirect('siswa');
                // var_dump($_POST);
            }
        } else {
            redirect('notfound');
        }
    }
}
