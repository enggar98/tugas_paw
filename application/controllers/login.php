<?php 
	/**
	* 
	*/
	class login extends CI_Controller
	{
		
		public function __construct() {
			parent::__construct();

			$this->load->model('m_login');
		}
		
		public function index() {
			if($this->session->userdata('level_user') != null){
				redirect(base_url().$this->session->userdata('level_user'));
			}else{
				$this->load->view('form_login');
			}
		}

		public function pendaftaran()
		{
			$data = array(
						  'dosen' => $this->m_login->load_dosen(),
			);

			$this->load->view('form_pendaftaran', $data);

		}

		public function cek_login() {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$hasil = $this->m_login->cek_login($username,$password);
			if($hasil){
				redirect(base_url().'dashboard');
			}else{
				$this->session->set_flashdata('error', 'Username dan Password Anda Salah Mohon Check Kembali!');
				redirect(base_url());
			}
				
		}

		public function logout() {
			$this->session->sess_destroy();
			redirect(base_url());
		}

		public function insert_pendaftaran()
		{
			$level_user = "mhs";
			$status_mhs = "aktif";
			// $akun = array(
			// 	'username' => $this->input->post('username'),
			// 	'password' => md5($this->input->post('password')),
			// 	'level_user' => $level_user,
			// );

			// $id_user = $this->m_login->insert_akun_mhs($akun);

			$mhs = array(
				'nim' => $this->input->post('nim'),
				'nama' => $this->input->post('nama'),
				'tmp_lahir' => $this->input->post('tmp_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jk' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'email' => $this->input->post('email'),
				'no_hp' => $this->input->post('no_hp'),
				'status_mhs' => $status_mhs,
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'level_user' => $level_user,
			);	

			$query = $this->m_login->insert_data_mhs($mhs);
			if ($query) {
				$this->session->set_flashdata('sukses', ' Selamat Pendaftaran Akun Mahasiswa Berhasil');
			} else {
				$this->session->set_flashdata('error', ' Pendaftaran Akun Mahasiswa Gagal Coba Cek Kembali Formulir Yang Diisi');
			}
			redirect(base_url().'login');
		}
	}
?>