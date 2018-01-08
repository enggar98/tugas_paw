<?php  
	/**
	* 
	*/
	class admin1 extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_admin1');
			$this->load->helper(array('form','url'));
		}

//======================================KELOLA AKUN=======================================================
		public function get_akun(){
			$data = array(
				'page' => 'page_akun',
				'data_akun' => $this->m_admin1->get_akun(),
				);
			$this->load->view('template_admin1',$data);
		}

		public function form_tambah_akun(){
			$data = array(
				'page' => 'ftambah_akun',
				);
			$this->load->view('template_admin1',$data);
		}

		public function insert_akun(){
			$data = array(
				'id_user' => $this->input->post('id_user'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'level_user' => $this->input->post('level_user'),
			);
			$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
			$this->m_admin1->insert_akun($data);
			redirect(base_url().'admin1/get_akun');
		}

		public function fupdate_akun(){
			$id = $this->input->post('id_user');

			$data = array(
				'page' => 'fupdate_akun',
				'data_akun' =>$this->m_admin1->get_akun_by_id($id),
			);

			$this->load->view('template_admin1', $data);
		}

		public function update_akun(){
			$id = $this->input->post('id_user');

			$data = array(
						'id_user' => $this->input->post('id_user'),
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'level_user' => $this->input->post('level_user'),
			);

			$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
			$this->m_admin1->update_akun($id, $data);
			redirect(base_url().'admin1/get_akun');
		}

		public function hapus_akun(){
			$id = $this->input->post('id_user');
			$this->m_admin1->hapus_akun($id);

			redirect('admin1/get_akun');
		}
	}
?>