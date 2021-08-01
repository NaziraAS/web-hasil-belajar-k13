<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	//constructor
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index() //login
	{
		// //block access to auth.php
		if ($this->session->userdata('username')) {
			redirect('dashboard');
		}

		//set rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$data['title'] = 'Login Page';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			# code...
			//validasi sukses
			$this->_login(); //_ private method
		}
		// echo 'auth/index';
	}


	private function _login()
	{

		// // //block access to auth.php
		// if ($this->session->userdata('username')){
		// 	redirect('dashboard');
		// }

		//ambil username password yg lolos validasi
		$username = $this->input->post('username');
		$password = $this->input->post('password');


		//query to DB. select*from tb.tb_admin where username yg sesuai dg input
		$user = $this->db->get_where('pegawais', ['username' => $username])->row_array();
		$user2 = $this->db->get_where('siswas', ['username' => $username])->row_array();

		// jika ada tb_admin
		// if ($user) {
		// 	// var_dump($user);
		// 	# code...
		// 	//ada user 
		// 	// if (password_verify($password, $user['password'])) {
		// 	if ($password == $user['password']) {
		// 		# code...
		// 		//LOGIN SUCCESS
		// 		//siapkan data session, hanya butuh username dan role
		// 		$data = [
		// 			'nama_pegawai' => $user['nama_pegawai'],
		// 			'username' => $user['username'],
		// 			'no_hp' => $user['no_hp'],
		// 			'level' => $user['level']
		// 		];

		// 		$this->session->set_userdata($data);
		// 		// $this->session->set_userdata('thisuser',$data);
		// 		redirect('dashboard');
		// 	} else {
		// 		# code...
		// 		$this->session->set_flashdata('message', '
		// 			<div 
		// 			class="alert alert-danger" role="alert">
		// 			Password salah!
		// 			</div>
		// 			');
		// 		redirect('auth');
		// 	}
		// } else {
		// 	//tidak ada user
		// 	$this->session->set_flashdata('message', '
		// 		<div 
		// 		class="alert alert-danger" role="alert">
		// 		Username belum terdaftar!
		// 		</div>
		// 		');
		// 	redirect('auth');
		// }
		// 
		if ($user) {
			if ($user['level'] == 'Admin' || $user['level'] == 'Guru Mapel') {
				if ($password == $user['password']) {
					$data = [
						// 'nama_pegawai' => $user['nama_pegawai'],
						'username' => $user['username'],
						// 'no_hp' => $user['no_hp'],
						'level' => $user['level']
					];

					$this->session->set_userdata($data);
					redirect('dashboard');
				} else {
					# code...
					$this->session->set_flashdata('message', '
					<div 
					class="alert alert-danger" role="alert">
					Password salah!
					</div>
					');
					redirect('auth');
				}
			} elseif ($user['level'] == 'Guru Wali') {
				$data = [
					// 'nama_pegawai' => $user['nama_pegawai'],
					'username' => $user['username'],
					// 'no_hp' => $user['no_hp'],
					'level' => $user['level']
				];
				$this->session->set_userdata($data);
				redirect('Dashboard');
			} else {
				$this->session->set_flashdata('message', '
				<div 
				class="alert alert-danger" role="alert">
				Maaf bukan anda!
				</div>
				');
				redirect('auth');
			}
		} elseif ($user2) {
			if ($user2['level'] == 'siswa') {
				if ($password == $user2['password']) {
					$data = [
						'username' => $user2['username'],
						'level' => $user2['level'],
						'nis' => $user2['nis'],

					];

					$this->session->set_userdata($data);
					redirect('DashboardSiswa');
				} else {
					$this->session->set_flashdata('message', '
						<div 
						class="alert alert-danger" role="alert">
						Password salah!
						</div>
						');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '
					<div 
					class="alert alert-danger" role="alert">
					Maaf Login sesuai dengan level
					</div>
					');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '
				<div 
				class="alert alert-danger" role="alert">
				Username belum terdaftar!
				</div>
				');
			redirect('auth');
		}
	}

	public function registration()
	{
		//block access to auth.php
		if ($this->session->userdata('username')) {
			redirect('dashboard');
		}

		// rules untuk form input
		$this->form_validation->set_rules('nm_admin', 'Namalengkap', 'required|trim');
		$this->form_validation->set_rules('telp', 'Telp', 'required|trim|min_length[9]|max_length[13]');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[3]|max_length[9]', [
			'is_unique' => 'Username sudah terpakai!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$data['title'] = 'Daftar Admin Cari Kos';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else {
			# code...//sukses
			// echo "data berhasil ditambahkan";
			$data = [
				'nm_admin' => htmlspecialchars($this->input->post('nm_admin', true)),
				'telp' => htmlspecialchars($this->input->post('telp', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => htmlspecialchars($this->input->post('password1', true)),
				// 'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),

			];

			//insert to DB
			$this->db->insert('pegawais', $data);
			$this->session->set_flashdata('message', '
				<div 
				class="alert alert-success" role="alert">
				Berhasil mendaftar!. Akun telah dibuat. Silakan login
				</div>
				');
			redirect('auth');
		}
	}


	public function logout()
	{
		//membersihkan session lalu mengembalikan ke login
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');

		//redirect to login
		$this->session->set_flashdata('message', '
			<div 
			class="alert alert-success" role="alert">
			Anda telah logout!
			</div>
			');
		redirect('auth');
	}
}
