<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['judul'] = '';
		//ambil data dari session
		//cari user yg emailnya yg kita ambil dr sesion

		// $data['user'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])-> row_array();

		$this->load->library('session');
		// if ($this->session->userdata('username')) {
		if ($this->session->userdata('level') != 'siswa') {
			// echo 'Selamat datang ' . $this->session->userdata['nama_pegawai'];
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('dashboard/index', $data);
			$this->load->view('templates/footer');
			// } else {
			// 	redirect('auth/index');
			// }
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
