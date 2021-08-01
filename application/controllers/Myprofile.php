<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myprofile extends CI_Controller 
{

	public function index()
	{
		$data['title'] = 'Profil Admin';
		//ambil data dari session
		//cari user yg emailnya yg kita ambil dr sesion
	
		$data['user'] = $this->db->get('tb_admin', ['username' => $this->session->userdata('username')])-> row_array();

		// query data tb_admin
		$data['admin'] = $this->db->get('tb_admin')->result_array();

		// echo 'Selamat datang ' . $data['user']['name'];
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('myprofile/index', $data);
		$this->load->view('templates/footer');

	}

	public function editprofile()
	{
		$data['title'] = 'Ubah Profile';
		//ambil data dari session
		//cari user yg emailnya yg kita ambil dr sesion
	
		$data['user'] = $this->db->get('tb_admin', ['username' => $this->session->userdata('username')])-> row_array();

		// query data tb_admin
		$data['admin'] = $this->db->get('tb_admin')->result_array();

		// echo 'Selamat datang ' . $data['user']['name'];
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('myprofile/editprofile', $data);
		$this->load->view('templates/footer');

	}

}