<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardSiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa');
    }
    public function index()
    {
        $nis = $this->session->userdata('nis');
        $data['nilai'] = $this->Siswa->getAllNilai($nis);
        // var_dump($data);
        // die;
        //ambil data dari session
        //cari user yg emailnya yg kita ambil dr sesion

        // $data['user'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])-> row_array();

        if ($this->session->userdata('username')) {
            $data['judul'] = "Halaman Siswa";
            // echo 'Selamat datang ' . $this->session->userdata['nama_pegawai'];
            $this->load->view('templates/templates_siswa/header_siswa', $data);
            $this->load->view('templates/templates_siswa/topbar');
            $this->load->view('templates/templates_siswa/index', $data);
            $this->load->view('templates/templates_siswa/footer_siswa');
        } else {
            // echo 'LOGIN DULU';
            redirect('notfound');
            // $this->load->view('templates/header', $data);
            // // $this->load->view('templates/sidebar', $data);
            // // $this->load->view('templates/topbar', $data);
            // $this->load->view('NotFound/index', $data);
            // $this->load->view('templates/footer');
        }
    }
}
