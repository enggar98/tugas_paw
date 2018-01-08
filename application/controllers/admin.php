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

// ==========================================KELOLA MAHASISWA======================================================

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

// ==========================================KELOLA PERIODE======================================================

		public function get_periode(){

			$data = array(
						  'page' => 'page_periode',
						  'data_periode' => $this->m_admin->get_periode(),
			);

			$this->load->view('template_admin', $data);
		}

		public function form_tambah_periode(){
			$data = array(
					'page' => 'ftambah_periode',
				);
			$this->load->view('template_admin', $data);
		}

		public function insert_periode(){
			$data = array(
				'id_periode' => $this->input->post('id_periode'),
				'thn_ajaran' => $this->input->post('thn_ajaran'),
				'semester' => $this->input->post('semester'),
				'tgl_buka' => $this->input->post('tgl_buka'),
				'tgl_tutup' => $this->input->post('tgl_tutup'),
				'status' => $this->input->post('status'),
			);
			$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
			$this->m_admin->insert_periode($data);
			redirect(base_url().'admin/get_periode');
		}

		public function fupdate_periode(){
			$id = $this->input->post('id_periode');

			$data = array(
				'page' => 'fupdate_periode',
				'data_periode' =>$this->m_admin->get_periode_by_id($id),
			);

			$this->load->view('template_admin', $data);
		}

		public function update_periode(){
			$id = $this->input->post('id_periode');

			$data = array(
						'id_periode' => $this->input->post('id_periode'),
						'thn_ajaran' => $this->input->post('thn_ajaran'),
						'semester' => $this->input->post('semester'),
						'tgl_buka' => $this->input->post('tgl_buka'),
						'tgl_tutup' => $this->input->post('tgl_tutup'),
						'status' => $this->input->post('status'),
			);

			$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
			$this->m_admin->update_periode($id, $data);
			redirect(base_url().'admin/get_periode');
		}

		public function hapus_periode(){
			$id = $this->input->post('id_periode');
			$this->m_admin->hapus_periode($id);

			redirect('admin/get_periode');
		}

// ==========================================KELOLA Kelas======================================================

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

// ==========================================KELOLA PENDAFTARAN TA 1======================================================

		public function form_pendaftaran_ta1(){
			$data = array(
					'data_daftarta1' => $this->m_admin->get_daftarta1(),
					'page' => 'fpendaftaran_ta1',
				);
			$this->load->view('template_admin', $data);
		}

// ==========================================KELOLA PENDAFTARAN TA 2======================================================

		public function form_pendaftaran_ta2(){
			$data = array(
					'data_daftarta2' => $this->m_admin->get_daftarta2(),
					'page' => 'fpendaftaran_ta2',
				);
			$this->load->view('template_admin', $data);
		}


// ==========================================KELOLA PENDAFTARAN SEMINAR TA 1======================================================

		public function form_pendaftaran_seminarta1(){
			$data = array(
					'data_seminarta1' => $this->m_admin->get_seminar_ta1(),
					'page' => 'fpendaftaran_seminarta1',
				);
			$this->load->view('template_admin', $data);
		}

		public function page_seminarta1(){
			$data = array(
					'page' => 'page_seminarta1',
				);
			$this->load->view('template_admin', $data);
		}

		public function page_jadwal_seminarta1(){
			$data = array(
					'page' => 'page_jadwal_seminarta1',
				);
			$this->load->view('template_admin', $data);
		}

		public function ftambah_jadwal_seminarta1(){
			$data = array(
					'page' => 'ftambah_jadwal_seminarta1',
				);
			$this->load->view('template_admin', $data);
		}

// ==========================================KELOLA PENDAFTARAN SEMINAR TA 2======================================================

		public function form_pendaftaran_seminarta2(){
			$data = array(
					'data_seminarta2' => $this->m_admin->get_seminar_ta2(),
					'page' => 'fpendaftaran_seminarta2',
				);
			$this->load->view('template_admin', $data);
		}

		public function page_seminarta2(){
			$data = array(
					'page' => 'page_seminarta2',
				);
			$this->load->view('template_admin', $data);
		}

		public function insert_pendaftaran_seminar_ta2(){
		}


		public function page_jadwal_seminarta2(){
			$data = array(
					'page' => 'page_jadwal_seminarta2',
				);
			$this->load->view('template_admin', $data);
		}


// ==========================================KELOLA PENDAFTARAN SIDANG======================================================

		public function form_pendaftaran_sidang(){
			$data = array(
					'data_sidang' => $this->m_admin->get_sidang(),
					'page' => 'fpendaftaran_sidang',
				);
			$this->load->view('template_admin', $data);
		}

		public function page_jadwal_sidang(){
			$data = array(
					'page' => 'page_jadwal_sidang',
				);
			$this->load->view('template_admin', $data);
		}


// ==========================================KELOLA NILAI SEMINAR TA 1======================================================

		public function get_nilai_seminarta1(){

			$data = array(
						  'page' => 'page_nilai_seminarta1',
						  'data_nilai_seminarta1' => $this->m_admin->get_nilai_seminarta1(),
			);
			$this->load->view('template_admin', $data);
		}

		public function ftambah_nilai_seminarta1(){

			$temp = $this->m_admin->getstatus_daftar_seminar_ta1($this->input->post("nim"));
			
			foreach ($temp as $row) {
                $tmp= $row->nim;
                $tmp1= $row->nama;
                $tmp2= $row->peminatan;
                $tmp3= $row->judul_penelitian;
                $tmp4= $row->judul_perbaikan;
                $tmp5= $row->nama_dosen_pem1;
                $tmp6= $row->nama_dosen_pem2;
            }

			$data = array(
					'nim' => $tmp,
					'nama' => $tmp1,
					'peminatan' => $tmp2,
					'judul_penelitian' => $tmp3,
					'judul_perbaikan' => $tmp4,
					'nama_dosen_pem1' => $tmp5,
					'nama_dosen_pem2' => $tmp6,
					'page' => 'ftambah_nilai_seminarta1',
				);
			$this->load->view('template_admin', $data);
		}

		public function page_nilai_pembimbing1sem1(){
			$data = array(
					'page' => 'page_seminarta2',
				);
			$this->load->view('template_admin', $data);
		}

		public function insert_nilai_seminarta1(){



			$materi_penelitian_pem1 = (int)$this->input->post("materi_penelitian_pem1");
			$pemahaman_pem1 = (int)$this->input->post("pemahaman_pem1");
			$pencapaian_target_pem1 = $this->input->post("pencapaian_target_pem1");
			$aspek_kedisiplinan_pem1 = $this->input->post("aspek_kedisiplinan_pem1");
			$pemahaman_penelitian_pem1 = $this->input->post("pemahaman_penelitian_pem1");
			$kedalaman_teori_pem1 = $this->input->post("kedalaman_teori_pem1");
			$metode_penelitian_pem1 = $this->input->post("metode_penelitian_pem1");
			$analisis_hasil_penelitian_pem1 = $this->input->post("analisis_hasil_penelitian_pem1");
			$teknik_presentasi_pem1 = $this->input->post("teknik_presentasi_pem1");
			$teknik_penulisan_pem1 = $this->input->post("teknik_penulisan_pem1");
			$pemahaman_pengembangan_pl_pem1 = $this->input->post("pemahaman_pengembangan_pl_pem1");
			$materi_penelitian_pem2 = $this->input->post("materi_penelitian_pem2");
			$pemahaman_pem2 = $this->input->post("pemahaman_pem2");
			$pencapaian_target_pem2 = $this->input->post("pencapaian_target_pem2");
			$aspek_kedisiplinan_pem2 = $this->input->post("aspek_kedisiplinan_pem2");
			$pemahaman_penelitian_pem2 = $this->input->post("pemahaman_penelitian_pem2");
			$kedalaman_teori_pem2 = $this->input->post("kedalaman_teori_pem2");
			$metode_penelitian_pem2 = $this->input->post("metode_penelitian_pem2");
			$analisis_hasil_penelitian_pem2 = $this->input->post("analisis_hasil_penelitian_pem2");
			$teknik_presentasi_pem2 = $this->input->post("teknik_presentasi_pem2");
			$teknik_penulisan_pem2 = $this->input->post("teknik_penulisan_pem2");
			$pemahaman_pengembangan_pl_pem2 = $this->input->post("pemahaman_pengembangan_pl_pem2");
			$pemahaman_penelitian_peng1 = $this->input->post("pemahaman_penelitian_peng1");
			$kedalaman_teori_peng1 = $this->input->post("kedalaman_teori_peng1");
			$metode_penelitian_peng1 = $this->input->post("metode_penelitian_peng1");
			$analisis_hasil_penelitian_peng1 = $this->input->post("analisis_hasil_penelitian_peng1");
			$teknik_presentasi_peng1 = $this->input->post("teknik_presentasi_peng1");
			$teknik_penulisan_peng1 = $this->input->post("teknik_penulisan_peng1");
			$pemahaman_pengembangan_pl_peng1 = $this->input->post("pemahaman_pengembangan_pl_peng1");
			$pemahaman_penelitian_peng2 = $this->input->post("pemahaman_penelitian_peng2");
			$kedalaman_teori_peng2 = $this->input->post("kedalaman_teori_peng2");
			$metode_penelitian_peng2 = $this->input->post("metode_penelitian_peng2");
			$analisis_hasil_penelitian_peng2 = $this->input->post("analisis_hasil_penelitian_peng2");
			$teknik_presentasi_peng2 = $this->input->post("teknik_presentasi_peng2");
			$teknik_penulisan_peng2 = $this->input->post("teknik_penulisan_peng2");
			$pemahaman_pengembangan_pl_peng2 = $this->input->post("pemahaman_pengembangan_pl_peng2");

			$ratarata = ($materi_penelitian_pem1 + $pemahaman_pem1 + $pencapaian_target_pem1 + $aspek_kedisiplinan_pem1 
						+ $pemahaman_penelitian_pem1 + $kedalaman_teori_pem1 + $metode_penelitian_pem1 + $analisis_hasil_penelitian_pem1 +
						 $teknik_presentasi_pem1 + $teknik_penulisan_pem1 + $pemahaman_pengembangan_pl_pem1 + $materi_penelitian_pem2 +
						 $pemahaman_pem2 + $pencapaian_target_pem2 + $aspek_kedisiplinan_pem2 + $pemahaman_penelitian_pem2 + 
						 $kedalaman_teori_pem2 + $metode_penelitian_pem2 + $analisis_hasil_penelitian_pem2 + $teknik_presentasi_pem2 +
						 $teknik_penulisan_pem2 + $pemahaman_pengembangan_pl_pem2 + $pemahaman_penelitian_peng1 + $kedalaman_teori_peng1 +
						 $metode_penelitian_peng1 + $analisis_hasil_penelitian_peng1 + $teknik_presentasi_peng1 + $teknik_penulisan_peng1 +
						 $pemahaman_pengembangan_pl_peng1 + $pemahaman_penelitian_peng2 + $kedalaman_teori_peng2 + $metode_penelitian_peng2 +
						 $analisis_hasil_penelitian_peng2 + $teknik_presentasi_peng2 + $teknik_penulisan_peng2 + $pemahaman_pengembangan_pl_peng2) / 40;

			$angkamutu;

			if($ratarata >=80 && $ratarata <=100)
			{
				$angkamutu = "A";
			}else if($ratarata >= 75 && $ratarata <=79.99)
			{
				$angkamutu = "AB";
			}else if($ratarata < 50){
				$angkamutu = "E";
			}

			$data1 = array(
				'nama' => $this->input->post("nama"),
				'nim' => $this->input->post("nim"),
				'peminatan' => $this->input->post("peminatan"),
				'judul_penelitian' => $this->input->post("judul_penelitian"),	
				'judul_perbaikan' => $this->input->post("judul_perbaikan"),
				'nama_dosen_pem1' => $this->input->post("nama_dosen_pem1"),
				'nama_dosen_pem2' => $this->input->post("nama_dosen_pem2"),

				'materi_penelitian_pem1' => $this->input->post("materi_penelitian_pem1"),
				'pemahaman_pem1' => $this->input->post("pemahaman_pem1"),	
				'pencapaian_target_pem1' => $this->input->post("pencapaian_target_pem1"),
				'aspek_kedisiplinan_pem1' => $this->input->post("aspek_kedisiplinan_pem1"),
				'pemahaman_penelitian_pem1' => $this->input->post("pemahaman_penelitian_pem1"),
				'metode_penelitian_pem1' => $this->input->post("metode_penelitian_pem1"),
				'kedalaman_teori_pem1' => $this->input->post("kedalaman_teori_pem1"),
				'analisis_hasil_penelitian_pem1' => $this->input->post("analisis_hasil_penelitian_pem1"),
				'teknik_presentasi_pem1' => $this->input->post("teknik_presentasi_pem1"),
				'teknik_penulisan_pem1' => $this->input->post("teknik_penulisan_pem1"),
				'pemahaman_pengembangan_pl_pem1' => $this->input->post("pemahaman_pengembangan_pl_pem1"),
				'materi_penelitian_pem2' => $this->input->post("materi_penelitian_pem2"),
				'pemahaman_pem2' => $this->input->post("pemahaman_pem2"),	
				'pencapaian_target_pem2' => $this->input->post("pencapaian_target_pem2"),
				'aspek_kedisiplinan_pem2' => $this->input->post("aspek_kedisiplinan_pem2"),
				'pemahaman_penelitian_pem2' => $this->input->post("pemahaman_penelitian_pem2"),
				'metode_penelitian_pem2' => $this->input->post("metode_penelitian_pem2"),
				'kedalaman_teori_pem2' => $this->input->post("kedalaman_teori_pem2"),
				'analisis_hasil_penelitian_pem2' => $this->input->post("analisis_hasil_penelitian_pem2"),
				'teknik_presentasi_pem2' => $this->input->post("teknik_presentasi_pem2"),
				'teknik_penulisan_pem2' => $this->input->post("teknik_penulisan_pem2"),
				'pemahaman_pengembangan_pl_pem2' => $this->input->post("pemahaman_pengembangan_pl_pem2"),
				'nama_dosen_peng1' => $this->input->post("nama_dosen_peng1"),
				'nama_dosen_peng2' => $this->input->post("nama_dosen_peng2"),
				'pemahaman_penelitian_peng1' => $this->input->post("pemahaman_penelitian_peng1"),
				'kedalaman_teori_peng1' => $this->input->post("kedalaman_teori_peng1"),
				'metode_penelitian_peng1' => $this->input->post("metode_penelitian_peng1"),
				'analisis_hasil_penelitian_peng1' => $this->input->post("analisis_hasil_penelitian_peng1"),
				'teknik_presentasi_peng1' => $this->input->post("teknik_presentasi_peng1"),
				'teknik_penulisan_peng1' => $this->input->post("teknik_penulisan_peng1"),
				'pemahaman_pengembangan_pl_peng2' => $this->input->post("pemahaman_pengembangan_pl_peng1"),
				'pemahaman_penelitian_peng2' => $this->input->post("pemahaman_penelitian_peng2"),
				'kedalaman_teori_peng2' => $this->input->post("kedalaman_teori_peng2"),
				'metode_penelitian_peng2' => $this->input->post("metode_penelitian_peng2"),
				'analisis_hasil_penelitian_peng2' => $this->input->post("analisis_hasil_penelitian_peng2"),
				'teknik_presentasi_peng2' => $this->input->post("teknik_presentasi_peng2"),
				'teknik_penulisan_peng2' => $this->input->post("teknik_penulisan_peng2"),
				'pemahaman_pengembangan_pl_peng2' => $this->input->post("pemahaman_pengembangan_pl_peng2"),
				'angka_mutu' => $angkamutu,
				);

			$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
			$this->m_admin->insert_nilaiseminarta1_pembimbing($data1);
			redirect(base_url().'admin/form_pendaftaran_ta1');
		}


// ==========================================KELOLA NILAI SEMINAR TA 2=====================================================
		
		public function get_nilai_seminarta2(){

			$data = array(
						  'page' => 'page_nilai_seminarta2',
						  'data_nilai_seminarta2' => $this->m_admin->get_nilai_seminarta2(),
			);
			$this->load->view('template_admin', $data);
		}

		public function ftambah_nilai_seminarta2(){

			$temp = $this->m_admin->getstatus_daftar_seminar_ta2($this->input->post("nim"));
			
			foreach ($temp as $row) {
                $tmp= $row->nim;
                $tmp1= $row->nama;
                $tmp2= $row->peminatan;
                $tmp3= $row->judul_penelitian;
                $tmp4= $row->judul_perbaikan;
                $tmp5= $row->nama_dosen_pem1;
                $tmp6= $row->nama_dosen_pem2;
            }

			$data = array(
					'nim' => $tmp,
					'nama' => $tmp1,
					'peminatan' => $tmp2,
					'judul_penelitian' => $tmp3,
					'judul_perbaikan' => $tmp4,
					'nama_dosen_pem1' => $tmp5,
					'nama_dosen_pem2' => $tmp6,
					'page' => 'ftambah_nilai_seminarta2',
				);
			$this->load->view('template_admin', $data);
		}

		public function insert_nilai_seminarta2(){
			
			$materi_penelitian_pem1 = (int)$this->input->post("materi_penelitian_pem1");
			$pemahaman_pem1 = (int)$this->input->post("pemahaman_pem1");
			$pencapaian_target_pem1 = (int)$this->input->post("pencapaian_target_pem1");
			$aspek_kedisiplinan_pem1 = (int)$this->input->post("aspek_kedisiplinan_pem1");
			$pemahaman_penelitian_pem1 = (int)$this->input->post("pemahaman_penelitian_pem1");
			$kedalaman_teori_pem1 = (int)$this->input->post("kedalaman_teori_pem1");
			$metode_penelitian_pem1 = (int)$this->input->post("metode_penelitian_pem1");
			$analisis_hasil_penelitian_pem1 = (int)$this->input->post("analisis_hasil_penelitian_pem1");
			$teknik_presentasi_pem1 = (int)$this->input->post("teknik_presentasi_pem1");
			$teknik_penulisan_pem1 = (int)$this->input->post("teknik_penulisan_pem1");
			$pemahaman_pengembangan_pl_pem1 = (int)$this->input->post("pemahaman_pengembangan_pl_pem1");
			$materi_penelitian_pem2 = (int)$this->input->post("materi_penelitian_pem2");
			$pemahaman_pem2 = (int)$this->input->post("pemahaman_pem2");
			$pencapaian_target_pem2 = (int)$this->input->post("pencapaian_target_pem2");
			$aspek_kedisiplinan_pem2 = (int)$this->input->post("aspek_kedisiplinan_pem2");
			$pemahaman_penelitian_pem2 = (int)$this->input->post("pemahaman_penelitian_pem2");
			$kedalaman_teori_pem2 = (int)$this->input->post("kedalaman_teori_pem2");
			$metode_penelitian_pem2 = (int)$this->input->post("metode_penelitian_pem2");
			$analisis_hasil_penelitian_pem2 = (int)$this->input->post("analisis_hasil_penelitian_pem2");
			$teknik_presentasi_pem2 = (int)$this->input->post("teknik_presentasi_pem2");
			$teknik_penulisan_pem2 = (int)$this->input->post("teknik_penulisan_pem2");
			$pemahaman_pengembangan_pl_pem2 = (int)$this->input->post("pemahaman_pengembangan_pl_pem2");
			$pemahaman_penelitian_peng1 = (int)$this->input->post("pemahaman_penelitian_peng1");
			$kedalaman_teori_peng1 = (int)$this->input->post("kedalaman_teori_peng1");
			$metode_penelitian_peng1 = (int)$this->input->post("metode_penelitian_peng1");
			$analisis_hasil_penelitian_peng1 = (int)$this->input->post("analisis_hasil_penelitian_peng1");
			$teknik_presentasi_peng1 = (int)$this->input->post("teknik_presentasi_peng1");
			$teknik_penulisan_peng1 = (int)$this->input->post("teknik_penulisan_peng1");
			$pemahaman_pengembangan_pl_peng1 = (int)$this->input->post("pemahaman_pengembangan_pl_peng1");
			$pemahaman_penelitian_peng2 = (int)$this->input->post("pemahaman_penelitian_peng2");
			$kedalaman_teori_peng2 = (int)$this->input->post("kedalaman_teori_peng2");
			$metode_penelitian_peng2 = (int)$this->input->post("metode_penelitian_peng2");
			$analisis_hasil_penelitian_peng2 = (int)$this->input->post("analisis_hasil_penelitian_peng2");
			$teknik_presentasi_peng2 = (int)$this->input->post("teknik_presentasi_peng2");
			$teknik_penulisan_peng2 = (int)$this->input->post("teknik_penulisan_peng2");
			$pemahaman_pengembangan_pl_peng2 = (int)$this->input->post("pemahaman_pengembangan_pl_peng2");

			$ratarata = ($materi_penelitian_pem1 + $pemahaman_pem1 + $pencapaian_target_pem1 + $aspek_kedisiplinan_pem1 
						+ $pemahaman_penelitian_pem1 + $kedalaman_teori_pem1 + $metode_penelitian_pem1 + $analisis_hasil_penelitian_pem1 +
						 $teknik_presentasi_pem1 + $teknik_penulisan_pem1 + $pemahaman_pengembangan_pl_pem1 + $materi_penelitian_pem2 +
						 $pemahaman_pem2 + $pencapaian_target_pem2 + $aspek_kedisiplinan_pem2 + $pemahaman_penelitian_pem2 + 
						 $kedalaman_teori_pem2 + $metode_penelitian_pem2 + $analisis_hasil_penelitian_pem2 + $teknik_presentasi_pem2 +
						 $teknik_penulisan_pem2 + $pemahaman_pengembangan_pl_pem2 + $pemahaman_penelitian_peng1 + $kedalaman_teori_peng1 +
						 $metode_penelitian_peng1 + $analisis_hasil_penelitian_peng1 + $teknik_presentasi_peng1 + $teknik_penulisan_peng1 +
						 $pemahaman_pengembangan_pl_peng1 + $pemahaman_penelitian_peng2 + $kedalaman_teori_peng2 + $metode_penelitian_peng2 +
						 $analisis_hasil_penelitian_peng2 + $teknik_presentasi_peng2 + $teknik_penulisan_peng2 + $pemahaman_pengembangan_pl_peng2) / 40;

			$angkamutu;

			if($ratarata >=80 && $ratarata <=100)
			{
				$angkamutu = "A";
			}else if($ratarata >= 75 && $ratarata <=79.99)
			{
				$angkamutu = "AB";
			}else if($ratarata < 50){
				$angkamutu = "E";
			}

			$data1 = array(
				'nama' => $this->input->post("nama"),
				'nim' => $this->input->post("nim"),
				'peminatan' => $this->input->post("peminatan"),
				'judul_penelitian' => $this->input->post("judul_penelitian"),	
				'judul_perbaikan' => $this->input->post("judul_perbaikan"),
				'nama_dosen_pem1' => $this->input->post("nama_dosen_pem1"),
				'nama_dosen_pem2' => $this->input->post("nama_dosen_pem2"),

				'materi_penelitian_pem1' => $this->input->post("materi_penelitian_pem1"),
				'pemahaman_pem1' => $this->input->post("pemahaman_pem1"),	
				'pencapaian_target_pem1' => $this->input->post("pencapaian_target_pem1"),
				'aspek_kedisiplinan_pem1' => $this->input->post("aspek_kedisiplinan_pem1"),
				'pemahaman_penelitian_pem1' => $this->input->post("pemahaman_penelitian_pem1"),
				'metode_penelitian_pem1' => $this->input->post("metode_penelitian_pem1"),
				'kedalaman_teori_pem1' => $this->input->post("kedalaman_teori_pem1"),
				'analisis_hasil_penelitian_pem1' => $this->input->post("analisis_hasil_penelitian_pem1"),
				'teknik_presentasi_pem1' => $this->input->post("teknik_presentasi_pem1"),
				'teknik_penulisan_pem1' => $this->input->post("teknik_penulisan_pem1"),
				'pemahaman_pengembangan_pl_pem1' => $this->input->post("pemahaman_pengembangan_pl_pem1"),
				'materi_penelitian_pem2' => $this->input->post("materi_penelitian_pem2"),
				'pemahaman_pem2' => $this->input->post("pemahaman_pem2"),	
				'pencapaian_target_pem2' => $this->input->post("pencapaian_target_pem2"),
				'aspek_kedisiplinan_pem2' => $this->input->post("aspek_kedisiplinan_pem2"),
				'pemahaman_penelitian_pem2' => $this->input->post("pemahaman_penelitian_pem2"),
				'metode_penelitian_pem2' => $this->input->post("metode_penelitian_pem2"),
				'kedalaman_teori_pem2' => $this->input->post("kedalaman_teori_pem2"),
				'analisis_hasil_penelitian_pem2' => $this->input->post("analisis_hasil_penelitian_pem2"),
				'teknik_presentasi_pem2' => $this->input->post("teknik_presentasi_pem2"),
				'teknik_penulisan_pem2' => $this->input->post("teknik_penulisan_pem2"),
				'pemahaman_pengembangan_pl_pem2' => $this->input->post("pemahaman_pengembangan_pl_pem2"),
				'nama_dosen_peng1' => $this->input->post("nama_dosen_peng1"),
				'nama_dosen_peng2' => $this->input->post("nama_dosen_peng2"),
				'pemahaman_penelitian_peng1' => $this->input->post("pemahaman_penelitian_peng1"),
				'kedalaman_teori_peng1' => $this->input->post("kedalaman_teori_peng1"),
				'metode_penelitian_peng1' => $this->input->post("metode_penelitian_peng1"),
				'analisis_hasil_penelitian_peng1' => $this->input->post("analisis_hasil_penelitian_peng1"),
				'teknik_presentasi_peng1' => $this->input->post("teknik_presentasi_peng1"),
				'teknik_penulisan_peng1' => $this->input->post("teknik_penulisan_peng1"),
				'pemahaman_pengembangan_pl_peng2' => $this->input->post("pemahaman_pengembangan_pl_peng1"),
				'pemahaman_penelitian_peng2' => $this->input->post("pemahaman_penelitian_peng2"),
				'kedalaman_teori_peng2' => $this->input->post("kedalaman_teori_peng2"),
				'metode_penelitian_peng2' => $this->input->post("metode_penelitian_peng2"),
				'analisis_hasil_penelitian_peng2' => $this->input->post("analisis_hasil_penelitian_peng2"),
				'teknik_presentasi_peng2' => $this->input->post("teknik_presentasi_peng2"),
				'teknik_penulisan_peng2' => $this->input->post("teknik_penulisan_peng2"),
				'pemahaman_pengembangan_pl_peng2' => $this->input->post("pemahaman_pengembangan_pl_peng2"),
				'angka_mutu' => $angkamutu,
				);

			$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
			$this->m_admin->insert_nilaiseminarta2($data1);
			redirect(base_url().'admin/form_pendaftaran_ta1');

		}

// ==========================================KELOLA NILAI SIDANG======================================================

		public function get_nilai_sidang(){

			$data = array(
						  'page' => 'page_nilai_sidang',
						  'data_nilai_sidang' => $this->m_admin->get_nilai_sidang(),
			);
			$this->load->view('template_admin', $data);
		}

		public function ftambah_nilai_sidang(){

			$temp = $this->m_admin->getstatus_daftar_sidang($this->input->post("nim"));
			
			foreach ($temp as $row) {
                $tmp= $row->nim;
                $tmp1= $row->nama;
                $tmp2= $row->peminatan;
                $tmp3= $row->judul_penelitian;
                $tmp4= $row->judul_perbaikan;
                $tmp5= $row->nama_dosen_pem1;
                $tmp6= $row->nama_dosen_pem2;
            }

			$data = array(
					'nim' => $tmp,
					'nama' => $tmp1,
					'peminatan' => $tmp2,
					'judul_penelitian' => $tmp3,
					'judul_perbaikan' => $tmp4,
					'nama_dosen_pem1' => $tmp5,
					'nama_dosen_pem2' => $tmp6,
					'page' => 'ftambah_nilai_sidang',
				);
			$this->load->view('template_admin', $data);
		}

		public function insert_nilai_sidang(){
			
			$materi_penelitian_pem1 = (int)$this->input->post("materi_penelitian_pem1");
			$pemahaman_pem1 = (int)$this->input->post("pemahaman_pem1");
			$pencapaian_target_pem1 = (int)$this->input->post("pencapaian_target_pem1");
			$aspek_kedisiplinan_pem1 = (int)$this->input->post("aspek_kedisiplinan_pem1");
			$pemahaman_penelitian_pem1 = (int)$this->input->post("pemahaman_penelitian_pem1");
			$kedalaman_teori_pem1 = (int)$this->input->post("kedalaman_teori_pem1");
			$metode_penelitian_pem1 = (int)$this->input->post("metode_penelitian_pem1");
			$analisis_hasil_penelitian_pem1 = (int)$this->input->post("analisis_hasil_penelitian_pem1");
			$teknik_presentasi_pem1 = (int)$this->input->post("teknik_presentasi_pem1");
			$teknik_penulisan_pem1 = (int)$this->input->post("teknik_penulisan_pem1");
			$pemahaman_pengembangan_pl_pem1 = (int)$this->input->post("pemahaman_pengembangan_pl_pem1");
			$materi_penelitian_pem2 = (int)$this->input->post("materi_penelitian_pem2");
			$pemahaman_pem2 = (int)$this->input->post("pemahaman_pem2");
			$pencapaian_target_pem2 = (int)$this->input->post("pencapaian_target_pem2");
			$aspek_kedisiplinan_pem2 = (int)$this->input->post("aspek_kedisiplinan_pem2");
			$pemahaman_penelitian_pem2 = (int)$this->input->post("pemahaman_penelitian_pem2");
			$kedalaman_teori_pem2 = (int)$this->input->post("kedalaman_teori_pem2");
			$metode_penelitian_pem2 = (int)$this->input->post("metode_penelitian_pem2");
			$analisis_hasil_penelitian_pem2 = (int)$this->input->post("analisis_hasil_penelitian_pem2");
			$teknik_presentasi_pem2 = (int)$this->input->post("teknik_presentasi_pem2");
			$teknik_penulisan_pem2 = (int)$this->input->post("teknik_penulisan_pem2");
			$pemahaman_pengembangan_pl_pem2 = (int)$this->input->post("pemahaman_pengembangan_pl_pem2");
			$pemahaman_penelitian_peng1 = (int)$this->input->post("pemahaman_penelitian_peng1");
			$kedalaman_teori_peng1 = (int)$this->input->post("kedalaman_teori_peng1");
			$metode_penelitian_peng1 = (int)$this->input->post("metode_penelitian_peng1");
			$analisis_hasil_penelitian_peng1 = (int)$this->input->post("analisis_hasil_penelitian_peng1");
			$teknik_presentasi_peng1 = (int)$this->input->post("teknik_presentasi_peng1");
			$teknik_penulisan_peng1 = (int)$this->input->post("teknik_penulisan_peng1");
			$pemahaman_pengembangan_pl_peng1 = (int)$this->input->post("pemahaman_pengembangan_pl_peng1");
			$pemahaman_penelitian_peng2 = (int)$this->input->post("pemahaman_penelitian_peng2");
			$kedalaman_teori_peng2 = (int)$this->input->post("kedalaman_teori_peng2");
			$metode_penelitian_peng2 = (int)$this->input->post("metode_penelitian_peng2");
			$analisis_hasil_penelitian_peng2 = (int)$this->input->post("analisis_hasil_penelitian_peng2");
			$teknik_presentasi_peng2 = (int)$this->input->post("teknik_presentasi_peng2");
			$teknik_penulisan_peng2 = (int)$this->input->post("teknik_penulisan_peng2");
			$pemahaman_pengembangan_pl_peng2 = (int)$this->input->post("pemahaman_pengembangan_pl_peng2");

			$ratarata = ($materi_penelitian_pem1 + $pemahaman_pem1 + $pencapaian_target_pem1 + $aspek_kedisiplinan_pem1 
						+ $pemahaman_penelitian_pem1 + $kedalaman_teori_pem1 + $metode_penelitian_pem1 + $analisis_hasil_penelitian_pem1 +
						 $teknik_presentasi_pem1 + $teknik_penulisan_pem1 + $pemahaman_pengembangan_pl_pem1 + $materi_penelitian_pem2 +
						 $pemahaman_pem2 + $pencapaian_target_pem2 + $aspek_kedisiplinan_pem2 + $pemahaman_penelitian_pem2 + 
						 $kedalaman_teori_pem2 + $metode_penelitian_pem2 + $analisis_hasil_penelitian_pem2 + $teknik_presentasi_pem2 +
						 $teknik_penulisan_pem2 + $pemahaman_pengembangan_pl_pem2 + $pemahaman_penelitian_peng1 + $kedalaman_teori_peng1 +
						 $metode_penelitian_peng1 + $analisis_hasil_penelitian_peng1 + $teknik_presentasi_peng1 + $teknik_penulisan_peng1 +
						 $pemahaman_pengembangan_pl_peng1 + $pemahaman_penelitian_peng2 + $kedalaman_teori_peng2 + $metode_penelitian_peng2 +
						 $analisis_hasil_penelitian_peng2 + $teknik_presentasi_peng2 + $teknik_penulisan_peng2 + $pemahaman_pengembangan_pl_peng2) / 40;

			$angkamutu;

			if($ratarata >=80 && $ratarata <=100)
			{
				$angkamutu = "A";
			}else if($ratarata >= 75 && $ratarata <=79.99)
			{
				$angkamutu = "AB";
			}else if($ratarata < 50){
				$angkamutu = "E";
			}

			$data1 = array(
				'nama' => $this->input->post("nama"),
				'nim' => $this->input->post("nim"),
				'peminatan' => $this->input->post("peminatan"),
				'judul_penelitian' => $this->input->post("judul_penelitian"),	
				'judul_perbaikan' => $this->input->post("judul_perbaikan"),
				'nama_dosen_pem1' => $this->input->post("nama_dosen_pem1"),
				'nama_dosen_pem2' => $this->input->post("nama_dosen_pem2"),

				'materi_penelitian_pem1' => $this->input->post("materi_penelitian_pem1"),
				'pemahaman_pem1' => $this->input->post("pemahaman_pem1"),	
				'pencapaian_target_pem1' => $this->input->post("pencapaian_target_pem1"),
				'aspek_kedisiplinan_pem1' => $this->input->post("aspek_kedisiplinan_pem1"),
				'pemahaman_penelitian_pem1' => $this->input->post("pemahaman_penelitian_pem1"),
				'metode_penelitian_pem1' => $this->input->post("metode_penelitian_pem1"),
				'kedalaman_teori_pem1' => $this->input->post("kedalaman_teori_pem1"),
				'analisis_hasil_penelitian_pem1' => $this->input->post("analisis_hasil_penelitian_pem1"),
				'teknik_presentasi_pem1' => $this->input->post("teknik_presentasi_pem1"),
				'teknik_penulisan_pem1' => $this->input->post("teknik_penulisan_pem1"),
				'pemahaman_pengembangan_pl_pem1' => $this->input->post("pemahaman_pengembangan_pl_pem1"),
				'materi_penelitian_pem2' => $this->input->post("materi_penelitian_pem2"),
				'pemahaman_pem2' => $this->input->post("pemahaman_pem2"),	
				'pencapaian_target_pem2' => $this->input->post("pencapaian_target_pem2"),
				'aspek_kedisiplinan_pem2' => $this->input->post("aspek_kedisiplinan_pem2"),
				'pemahaman_penelitian_pem2' => $this->input->post("pemahaman_penelitian_pem2"),
				'metode_penelitian_pem2' => $this->input->post("metode_penelitian_pem2"),
				'kedalaman_teori_pem2' => $this->input->post("kedalaman_teori_pem2"),
				'analisis_hasil_penelitian_pem2' => $this->input->post("analisis_hasil_penelitian_pem2"),
				'teknik_presentasi_pem2' => $this->input->post("teknik_presentasi_pem2"),
				'teknik_penulisan_pem2' => $this->input->post("teknik_penulisan_pem2"),
				'pemahaman_pengembangan_pl_pem2' => $this->input->post("pemahaman_pengembangan_pl_pem2"),
				'nama_dosen_peng1' => $this->input->post("nama_dosen_peng1"),
				'nama_dosen_peng2' => $this->input->post("nama_dosen_peng2"),
				'pemahaman_penelitian_peng1' => $this->input->post("pemahaman_penelitian_peng1"),
				'kedalaman_teori_peng1' => $this->input->post("kedalaman_teori_peng1"),
				'metode_penelitian_peng1' => $this->input->post("metode_penelitian_peng1"),
				'analisis_hasil_penelitian_peng1' => $this->input->post("analisis_hasil_penelitian_peng1"),
				'teknik_presentasi_peng1' => $this->input->post("teknik_presentasi_peng1"),
				'teknik_penulisan_peng1' => $this->input->post("teknik_penulisan_peng1"),
				'pemahaman_pengembangan_pl_peng2' => $this->input->post("pemahaman_pengembangan_pl_peng1"),
				'pemahaman_penelitian_peng2' => $this->input->post("pemahaman_penelitian_peng2"),
				'kedalaman_teori_peng2' => $this->input->post("kedalaman_teori_peng2"),
				'metode_penelitian_peng2' => $this->input->post("metode_penelitian_peng2"),
				'analisis_hasil_penelitian_peng2' => $this->input->post("analisis_hasil_penelitian_peng2"),
				'teknik_presentasi_peng2' => $this->input->post("teknik_presentasi_peng2"),
				'teknik_penulisan_peng2' => $this->input->post("teknik_penulisan_peng2"),
				'pemahaman_pengembangan_pl_peng2' => $this->input->post("pemahaman_pengembangan_pl_peng2"),
				'angka_mutu' => $angkamutu,
				);

			$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
			$this->m_admin->insert_nilaisidang($data1);
			redirect(base_url().'admin/form_pendaftaran_ta1');

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

//==========================================KELOLA RUANGAN===============================================
    	public function get_ruangan(){

			$data = array(
						  'data_ruangan' => $this->m_admin->get_ruangan(),
						  'page' => 'page_ruangan',

			);

			$this->load->view('template_admin', $data);
		}

		public function form_tambah_ruangan(){

			$data = array(
						  'page' => 'ftambah_ruangan',
			);

			$this->load->view('template_admin', $data);
		}

		public function insert_ruangan(){
			$data = array(
				'id_ruang' => $this->input->post('id_ruang'),
				'nama_ruang' => $this->input->post('nama_ruang'),
			);
			$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
			$this->m_admin->insert_ruangan($data);
			redirect(base_url().'admin/get_ruangan');
		}

		public function fupdate_ruangan(){
			$id = $this->input->post('id_ruang');

			$data = array(
				'page' => 'fupdate_ruangan',
				'data_ruangan' =>$this->m_admin->get_ruangan_by_id($id),
			);

			$this->load->view('template_admin', $data);
		}

		public function update_ruangan(){
			$id = $this->input->post('id_ruang');

			$data = array(
						'id_ruang' => $id,
						'nama_ruang' => $this->input->post('nama_ruang'),
			);

			$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
			$this->m_admin->update_ruangan($id, $data);
			redirect(base_url().'admin/get_ruangan');
		}

		public function hapus_ruangan(){
			$id = $this->input->post('id_ruang');
			$this->m_admin->hapus_ruangan($id);

			redirect('admin/get_ruangan');
		}


//==========================================KELOLA HASIL REVIEW===============================================
    	public function get_review(){

			$data = array(
						  'data_review' => $this->m_admin->get_review(),
						  'page' => 'page_review',

			);

			$this->load->view('template_admin', $data);
		}

		public function form_tambah_review(){

			$data = array(
						  'page' => 'ftambah_review',
			);

			$this->load->view('template_admin', $data);
		}

		public function insert_review(){
			$data = array(
				'id_review' => $this->input->post('id_review'),
				'dosen_review' => $this->input->post('dosen_review'),
				'nama_mhs' => $this->input->post('nama_mhs'),
				'hasil_review' => $this->input->post('hasil_review'),
			);
			$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
			$this->m_admin->insert_review($data);
			redirect(base_url().'admin/get_review');
		}

		public function fupdate_review(){
			$id = $this->input->post('id_review');

			$data = array(
				'page' => 'fupdate_review',
				'data_review' =>$this->m_admin->get_review_by_id($id),
			);

			$this->load->view('template_admin', $data);
		}

		public function update_review(){
			$id = $this->input->post('id_review');

			$data = array(
						'id_review' => $id,
						'dosen_review' => $this->input->post('dosen_review'),
						'nama_mhs' => $this->input->post('nama_mhs'),
						'hasil_review' => $this->input->post('hasil_review'),
			);

			$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
			$this->m_admin->update_review($id, $data);
			redirect(base_url().'admin/get_review');
		}

		public function hapus_review(){
			$id = $this->input->post('id_review');
			$this->m_admin->hapus_review($id);

			redirect('admin/get_review');
		}

//==========================================KELOLA JADWAL REVIEW===============================================
    	public function get_jadwal_review(){

			$data = array(
						  'data_jadwalreview' => $this->m_admin->get_jadwal_review(),
						  'page' => 'page_jadwal_review',
						  'ruang' => $this->m_admin->get_ruang1(),
						  'dosen1' => $this->m_admin->get_dosen1(),

			);

			$this->load->view('template_admin', $data);
		}

		public function form_tambah_jadwalreview(){

			$data = array(
						  'page' => 'ftambah_jadwalreview',
			);
			$data['ruang'] = $this->m_admin->get_ruang1()->result();

			$this->load->view('template_admin', $data);
		}

		public function insert_jadwalreview(){
			$data = array(
				'id_jadwal_review' => $this->input->post('id_jadwal_review'),
				'nama_ruang' => $this->input->post('nama_ruang'),
				'tanggal' => $this->input->post('tanggal'),
				'nama_mhs' => $this->input->post('nama_mhs'),
				'nama_dosen' => $this->input->post('nama_dosen'),

			);
			$this->session->set_flashdata('sukses', 'Data Berhasil Disimpan');
			$this->m_admin->insert_jadwalreview($data);
			redirect(base_url().'admin/get_ruangan');
		}

		public function fupdate_jadwalreview(){
			$id = $this->input->post('id_jadwal_review');

			$data = array(
				'page' => 'fupdate_jadwalreview',
				'data_jadwalreview' =>$this->m_admin->get_jadwalreview_by_id($id),
			);

			$this->load->view('template_admin', $data);
		}

		public function update_jadwalreview(){
			$id = $this->input->post('id_jadwal_review');

			$data = array(
						'id_jadwal_review' => $id,
						'nama_ruang' => $this->input->post('nama_ruang'),
						'tanggal' => $this->input->post('tanggal'),
						'nama_mhs' => $this->input->post('nama_mhs'),
						'nama_dosen' => $this->input->post('nama_dosen'),
			);

			$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
			$this->m_admin->update_jadwalreview($id, $data);
			redirect(base_url().'admin/get_jadwal_review');
		}

		public function hapus_jadwalreview(){
			$id = $this->input->post('id_jadwal_review');
			$this->m_admin->hapus_jadwalreview($id);

			redirect('admin/get_jadwalreview');
		}



//==========================================CETAK PENDAFTARAN TA 1===============================================
		public function cetak_daftarta1(){
			//set a value for $noregist
		 
			// Load all views as normal
			
			$data  = array('daftarta1' => $this->m_admin->get_daftarta1_cetak($this->input->post('cetakperiode')),
				);
			
			$this->load->view('cetak_pendaftaranta1', $data);
			$html = ob_get_contents();
       		ob_end_clean();
			// Get output html
			$html = $this->output->get_output();

			// Load library
			$this->load->library('dompdf_gen');
			$paper_size = 'A4';
			$orientation = 'landscape';
			$html = $this->output->get_output();

			$this->dompdf->set_paper($paper_size, $orientation);


			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("cetak_pendaftaranta1" . ".pdf", array ('Attachment' => 0));

			/*require_once('./assets/html2pdf_v4.03/html2pdf.class.php');
	        $pdf = new HTML2PDF('L','A4','en');
	        $pdf->WriteHTML($html);
	        $pdf->Output('Data Daftar TA 1.pdf', 'D');*/
    	}

//==========================================CETAK PENDAFTARAN TA 1 MAHASISWA===============================================
		public function cetak_daftarta1_mhs(){
			//set a value for $noregist
		 
			// Load all views as normal
			$id_daftar_ta1 = $this->input->post('id_daftar_ta1');
			$data  = array('detailfrs' => $this->m_admin->get_daftarta1_cetak_mhs($id_daftar_ta1),
				);
			
			$this->load->view('cetak_pendaftaranta1_mhs', $data);
			$html = ob_get_contents();
       		ob_end_clean();
			// Get output html
			$html = $this->output->get_output();

			// Load library
			$this->load->library('dompdf_gen');
			$paper_size = 'A4';
			$orientation = 'landscape';
			$html = $this->output->get_output();

			$this->dompdf->set_paper($paper_size, $orientation);


			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("cetak_pendaftaranta1_mhs" . ".pdf", array ('Attachment' => 0));
    	}

//==========================================CETAK PENDAFTARAN TA 2===============================================
		public function cetak_daftarta2(){
			//set a value for $noregist
		 
			// Load all views as normal
			
			$data  = array('daftarta2' => $this->m_admin->get_daftarta2_cetak($this->input->post('cetakperiode')),
				);
			
			$this->load->view('cetak_pendaftaranta2', $data);
			$html = ob_get_contents();
       		ob_end_clean();
			// Get output html
			$html = $this->output->get_output();

			// Load library
			$this->load->library('dompdf_gen');
			$paper_size = 'A4';
			$orientation = 'landscape';
			$html = $this->output->get_output();

			$this->dompdf->set_paper($paper_size, $orientation);


			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("cetak_pendaftaranta2" . ".pdf", array ('Attachment' => 0));

			/*require_once('./assets/html2pdf_v4.03/html2pdf.class.php');
	        $pdf = new HTML2PDF('L','A4','en');
	        $pdf->WriteHTML($html);
	        $pdf->Output('Data Daftar TA 1.pdf', 'D');*/
    	}

//==========================================CETAK PENDAFTARAN SEMINAR TA 1===============================================
		public function cetak_seminarta1(){
			//set a value for $noregist
		 
			// Load all views as normal
			
			$data  = array('seminarta1' => $this->m_admin->get_seminarta1_cetak($this->input->post('cetakperiode')),
				);
			
			$this->load->view('cetak_pendaftaran_seminarta1', $data);
			$html = ob_get_contents();
       		ob_end_clean();
			// Get output html
			$html = $this->output->get_output();

			// Load library
			$this->load->library('dompdf_gen');
			$paper_size = 'A4';
			$orientation = 'landscape';
			$html = $this->output->get_output();

			$this->dompdf->set_paper($paper_size, $orientation);


			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("cetak_pendaftaran_seminarta1" . ".pdf", array ('Attachment' => 0));

			/*require_once('./assets/html2pdf_v4.03/html2pdf.class.php');
	        $pdf = new HTML2PDF('L','A4','en');
	        $pdf->WriteHTML($html);
	        $pdf->Output('Data Daftar TA 1.pdf', 'D');*/
    	}

//==========================================CETAK PENDAFTARAN SEMINAR TA 2===============================================
		public function cetak_seminarta2(){
			//set a value for $noregist
		 
			// Load all views as normal
			
			$data  = array('seminarta2' => $this->m_admin->get_seminarta2_cetak($this->input->post('cetakperiode')),
				);
			
			$this->load->view('cetak_pendaftaran_seminarta2', $data);
			$html = ob_get_contents();
       		ob_end_clean();
			// Get output html
			$html = $this->output->get_output();

			// Load library
			$this->load->library('dompdf_gen');
			$paper_size = 'A4';
			$orientation = 'landscape';
			$html = $this->output->get_output();

			$this->dompdf->set_paper($paper_size, $orientation);


			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("cetak_pendaftaran_seminarta2" . ".pdf", array ('Attachment' => 0));

			/*require_once('./assets/html2pdf_v4.03/html2pdf.class.php');
	        $pdf = new HTML2PDF('L','A4','en');
	        $pdf->WriteHTML($html);
	        $pdf->Output('Data Daftar TA 1.pdf', 'D');*/
    	}

//==========================================CETAK PENDAFTARAN SIDANG===============================================
		public function cetak_sidang(){
			//set a value for $noregist
		 
			// Load all views as normal
			
			$data  = array('sidang' => $this->m_admin->get_sidang_cetak($this->input->post('cetakperiode')),
				);
			
			$this->load->view('cetak_pendaftaran_sidang', $data);
			$html = ob_get_contents();
       		ob_end_clean();
			// Get output html
			$html = $this->output->get_output();

			// Load library
			$this->load->library('dompdf_gen');
			$paper_size = 'A4';
			$orientation = 'landscape';
			$html = $this->output->get_output();

			$this->dompdf->set_paper($paper_size, $orientation);


			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("cetak_pendaftaran_sidang" . ".pdf", array ('Attachment' => 0));

			/*require_once('./assets/html2pdf_v4.03/html2pdf.class.php');
	        $pdf = new HTML2PDF('L','A4','en');
	        $pdf->WriteHTML($html);
	        $pdf->Output('Data Daftar TA 1.pdf', 'D');*/
    	}


	}
?>