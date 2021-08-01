<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    public function index()
    {
        //set rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == False) {
            $data['title'] = 'Login Siswa Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth_siswa/login');
            $this->load->view('templates/auth_footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->db->get_where('siswas', ['username' => $username])->row_array();
            if ($user) {
                if ($user['password'] == $password) {
                    $data = [
                        'username' => $user['username'],
                        'nis' => $user['nis'],
                        'password' => $user['password'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('SiswaNilai');
                }
            }
        }
    }
    public function logout()
    {
        //membersihkan session lalu mengembalikan ke login
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nis');
        $this->session->unset_userdata('password');

        //redirect to login
        $this->session->set_flashdata('message', '
			<div 
			class="alert alert-success" role="alert">
			Anda telah logout!
			</div>
			');
        redirect('Authentication');
    }
}
