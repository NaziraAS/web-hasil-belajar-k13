<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  SiswaNilai extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('username')) {
            $data['judul'] = "Dashboard";
            $this->load->view('templates/header_siswa', $data);
            $this->load->view('templates/sidebar_siswa', $data);
            $this->load->view('templates/topbar_siswa', $data);
            $this->load->view('dashboard_siswa/index', $data);
            $this->load->view('templates/footer_siswa');
        } else {
            redirect('Authentication');
        }
    }
}
