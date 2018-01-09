<?php  
	/**
	* 
	*/
	class admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_admin');
			$this->load->helper(array('form', 'url'));
		}

		public function index(){
			$this->load->view('template_admin');
		}

		public function form_update(){
			$data = array(
					'page' => 'fupdate_daftarta1',
				);
			$this->load->view('template_admin', $data);
		}

// ==========================================KELOLA DOSEN======================================================

		public function get_dosen(){

			$data = array(
						  'page' => 'page_dosen',
						  'data_dosen' => $this->m_admin->get_dosen(),
			);
			$this->load->view('template_admin', $data);
		}

		public function form_tambah_dosen(){
			$data = array(
					'page' => 'ftambah_dosen',
				);
			$this->load->view('template_admin', $data);
		}


		public function insert_dosen(){
			$level_user = "dosen";
			$akun = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'level_user' => $level_user,
				);
			
			$id_user = $this->m_admin->insert_akun_dosen($akun);			

			$dosen = array(
				'nid' => $this->input->post('nid'),
				'nama' => $this->input->post('nama'),
				'struktural' => $this->input->post('struktural'),
				'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
				'golongan' => $this->input->post('golongan'),
				'jabatan_akd' => $this->input->post('jabatan_akd'),
				'id_user' => $id_user,

			);

			$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
			$this->m_admin->insert_dosen($dosen);
			redirect(base_url().'admin/get_dosen');
		}

		public function fupdate_dosen(){
			$id = $this->input->post('id_dosen');

			$data = array(
				'page' => 'fupdate_dosen',
				'data_dosen' => $this->m_admin->get_dosen_by_id($id),
				'data_akun' => $this->m_admin->get_akun_by_id($id),
			);

			$this->load->view('template_admin', $data);
		}

		public function update_dosen(){
			$id = $this->input->post('id_dosen');

			$data = array(
						'id_dosen' => $this->input->post('id_dosen'),
						//'nid' => $this->input->post('nid'),
						'nama' => $this->input->post('nama'),
						'struktural' => $this->input->post('struktural'),
						'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
						'golongan' => $this->input->post('golongan'),
						'jabatan_akd' => $this->input->post('jabatan_akd'),
			);

			$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
			$this->m_admin->update_dosen($id, $data);
			redirect(base_url().'admin/get_dosen');
		}

		public function hapus_dosen(){
			$id = $this->input->post('id_user');
			//$id_d = $this->input->post('id_dosen');
			$this->m_admin->hapus_dosen($id);

			redirect('admin/get_dosen');
		}

//====================================KELOLA MAHASISWA====================================================

		public function page_mahasiswa(){
			$data = array(
					'page' => 'page_mahasiswa',
					'data_mahasiswa' => $this->m_admin->get_mahasiswa(),
				);
			$this->load->view('template_admin', $data);
		}

		public function fupdate_mahasiswa(){
			$id = $this->input->post('id_mhs');

			$data = array(
				'page' => 'fupdate_mahasiswa',
				'data_mahasiswa' => $this->m_admin->get_mahasiswa_by_id($id),
				//'data_akun' => $this->m_admin->get_akun_by_id($id),
			);

			$this->load->view('template_admin', $data);
		}

		public function update_mahasiswa(){
			$id = $this->input->post('id_mhs');

			$data = array(
						'id_mhs' => $this->input->post('id_mhs'),
						'nim' => $this->input->post('nim'),
						'nama' => $this->input->post('nama'),
						'tmp_lahir' => $this->input->post('tmp_lahir'),
						'tgl_lahir' => $this->input->post('tgl_lahir'),
						'jk' => $this->input->post('jk'),
						'alamat' => $this->input->post('alamat'),
						'email' => $this->input->post('email'),
						'no_hp' => $this->input->post('no_hp'),
						'status_mhs' => $this->input->post('status_mhs'),
						'peminatan' => $this->input->post('peminatan'),
			);

			$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
			$this->m_admin->update_mahasiswa($id, $data);
			redirect(base_url().'admin/page_mahasiswa');
		}

		public function hapus_mahasiswa(){
			$id = $this->input->post('id_user');
			$this->m_admin->hapus_mahasiswa($id);

			redirect('admin/page_mahasiswa');
		}

// ==========================================KELOLA KELAS======================================================

		public function get_kelas(){

			$data = array(
						  'page' => 'page_kelas_tambah',
						  'data_kelas' => $this->m_admin->get_kelas(),
			);

			$this->load->view('template_admin', $data);
		}

		public function form_tambah_kelas(){
			$data = array(
					'page' => 'ftambah_kelas',
					'data_dosen' => $this->m_admin->get_dosen(),
				);
			$this->load->view('template_admin', $data);
		}

		public function insert_kelas(){
			$data = array(
				'kode_kelas' => $this->input->post('kode_kelas'),
				'pelajaran' => $this->input->post('pelajaran'),
				'id_dosen' => $this->input->post('dosen'),
			);
			$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
			$this->m_admin->insert_kelas($data);
			redirect(base_url().'admin/get_kelas');
		}

		public function fupdate_kelas(){
			$id = $this->input->post('id_kelas');

			$data = array(
				'page' => 'fupdate_kelas',
				'data_kelas' => $this->m_admin->get_kelas_by_id($id),
				'data_dosen' => $this->m_admin->get_dosen(),
			);

			$this->load->view('template_admin', $data);
		}

		public function update_kelas(){
			$id = $this->input->post('id_kelas');

			$data = array(
				'kode_kelas' => $this->input->post('kode_kelas'),
				'pelajaran' => $this->input->post('pelajaran'),
				'id_dosen' => $this->input->post('dosen'),
			);

			$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
			$this->m_admin->update_kelas($id, $data);
			redirect(base_url().'admin/get_kelas');
		}

		public function hapus_kelas(){
			$id = $this->input->post('id_kelas');
			$this->m_admin->hapus_kelas($id);

			redirect('admin/get_kelas');
		}

//==========================================KELOLA INFORMASI===============================================
    	public function get_informasi(){

			$data = array(
						  'page' => 'page_informasi',
						  'data_informasi' => $this->m_admin->get_informasi(),
			);

			$this->load->view('template_admin', $data);
		}

		public function form_tambah_informasi(){

			$data = array(
						  'page' => 'ftambah_informasi',
			);

			$this->load->view('template_admin', $data);
		}

		public function insert_informasi(){

			if(!empty($_FILES['informasi']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['informasi']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('informasi')){
                    $uploadData = $this->upload->data();
                    $informasi = $uploadData['file_name'];
                }else{
                    $informasi = '';
                }
            }else{
                $informasi = '';
            }

            $informasi = array(
            	'id_informasi' => $this->input->post('id_informasi'),
            	'informasi' => $informasi,
            );

            $informasi = $this->m_admin->insert_informasi($informasi);
            if ($informasi) {
            	$this->session->set_flashdata('sukses', 'Telah Berhasil Diunggah!');
            } else {
            	$this->session->set_flashdata('error', 'Gagal di unggah cek kembali !');
            }
            

			redirect(base_url().'admin/get_informasi');
		}

	}
?>