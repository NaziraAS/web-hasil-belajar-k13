<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller 
{

	public function index()
	{
		if(!$this->session->userdata('username')){

			$data['judul'] = '';
		//ambil data dari session
		//cari user yg emailnya yg kita ambil dr sesion

			$this->load->view('templates/header_nf', $data);
		// $this->load->view('templates/sidebar_nf', $data);
		// $this->load->view('templates/topbar_nf', $data);
			$this->load->view('notfound/index', $data);
			$this->load->view('templates/footer_nf');
		}else {
			redirect(base_url());
		}
	}

}