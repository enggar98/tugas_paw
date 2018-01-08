<?php  
	/**
	* 
	*/
	class dosen extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_dosen');
			$this->load->helper(array('form', 'url'));
		}

		public function index(){
			$this->load->view('template_dosen');
		}

		public function mahasiswa_bimbingan_ta1(){

			$data = array(
						  'page' => 'page_mhs',
			);
			$this->load->view('template_dosen', $data);
		}

//==========================================KELOLA INFORMASI===============================================
    	public function get_informasi(){
    		//$id = $this->input->post('id_dosen');
			$data = array(
						  'page' => 'page_informasi',
						  'data_informasi' => $this->m_dosen->get_informasi(),
						  //'data_kelas' => $this->m_dosen->get_kelas(),
			);

			$this->load->view('template_dosen', $data);
		}

		//==========================================KELOLA INFORMASI===============================================
    	/*public function get_modul(){
    		$id = $this->input->post(id_dosen);
			$data = array(
						  'page' => 'page_informasi',
						  //'data_informasi' => $this->m_dosen->get_informasi(),
						  'data_kelas' => $this->m_dosen->get_kelas(),
			);

			$this->load->view('template_dosen', $data);
		}*/

		public function get_kelas(){
			
			$data = array(
						  'page' => 'page_kelas_dosen',
						  'data_kelas' => $this->m_dosen->get_kelas('41'),
			);

			$this->load->view('template_dosen', $data);
		}

//==========================================KELOLA Modul===============================================
    	public function get_modul(){

			$data = array(
						  'page' => 'page_modul',
						  'data_informasi' => $this->m_dosen->get_modul(),
			);

			$this->load->view('template_dosen', $data);
		}

		public function form_tambah_modul(){

			$data = array(
						  'page' => 'ftambah_modul',
			);

			$this->load->view('template_dosen', $data);
		}

		public function insert_modul(){

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

            $informasi = $this->m_dosen->insert_modul($informasi);
            if ($informasi) {
            	$this->session->set_flashdata('sukses', 'Telah Berhasil Diunggah!');
            } else {
            	$this->session->set_flashdata('error', 'Gagal di unggah cek kembali !');
            }
            

			redirect(base_url().'dosen/get_modul');
		}/*
*/
// ==========================================KELOLA PENDAFTARAN TA 1======================================================

		public function get_daftarta1(){
			$data = array(
					'data_daftarta1' => $this->m_dosen->get_daftarta1(),
					'page' => 'page_daftarta1',
				);
			$this->load->view('template_dosen', $data);
		}

// ==========================================KELOLA PENDAFTARAN SEMINAR TA 1======================================================

		public function get_seminarta1(){
			$data = array(
					'data_seminarta1' => $this->m_dosen->get_seminarta1(),
					'page' => 'page_seminarta1',
				);
			$this->load->view('template_dosen', $data);
		}

// ==========================================KELOLA PENDAFTARAN TA 2======================================================

		public function get_daftarta2(){
			$data = array(
					'data_daftarta2' => $this->m_dosen->get_daftarta2(),
					'page' => 'page_daftarta2',
				);
			$this->load->view('template_dosen', $data);
		}

// ==========================================KELOLA PENDAFTARAN SEMINAR TA 2======================================================

		public function get_seminarta2(){
			$data = array(
					'data_seminarta2' => $this->m_dosen->get_seminarta2(),
					'page' => 'page_seminarta2',
				);
			$this->load->view('template_dosen', $data);
		}

// ==========================================KELOLA PENDAFTARAN SIDANG======================================================

		public function get_sidang(){
			$data = array(
					'data_sidang' => $this->m_dosen->get_sidang(),
					'page' => 'page_sidang',
				);
			$this->load->view('template_dosen', $data);
		}
		
// ==========================================KELOLA NILAI SEMINAR TA 1======================================================

		public function get_nilai_seminarta1(){

			$data = array(
						  'page' => 'page_nilai_seminarta1',
						  'data_nilai_seminarta1' => $this->m_dosen->get_nilai_seminarta1(),
			);
			$this->load->view('template_dosen', $data);
		}

// ==========================================KELOLA NILAI SEMINAR TA 2======================================================

		public function get_nilai_seminarta2(){

			$data = array(
						  'page' => 'page_nilai_seminarta2',
						  'data_nilai_seminarta2' => $this->m_dosen->get_nilai_seminarta2(),
			);
			$this->load->view('template_dosen', $data);
		}

// ==========================================KELOLA NILAI SIDANG==========================================================

		public function get_nilai_sidang(){

			$data = array(
						  'page' => 'page_nilai_sidang',
						  'data_nilai_sidang' => $this->m_dosen->get_nilai_sidang(),
			);
			$this->load->view('template_dosen', $data);
		}

//==========================================KELOLA HASIL REVIEW===============================================
        public function get_review(){

            $data = array(
                          'data_review' => $this->m_dosen->get_review(),
                          'page' => 'page_review',

            );

            $this->load->view('template_dosen', $data);
        }
//==========================================KELOLA JADWAL REVIEW===============================================
    	public function get_jadwal_review(){

			$data = array(
						  'data_jadwalreview' => $this->m_dosen->get_jadwal_review(),
						  'page' => 'page_jadwal_review',

			);

			$this->load->view('template_dosen', $data);
		}

//================================KELOLA JADWAL SEMINAR TA1================
	public function get_jadwal_Seminarta1(){
			$data = array(
					'page' => 'page_jadwal_seminarta1',
				);
			$this->load->view('template_dosen', $data);
		}

//================================KELOLA JADWAL SEMINAR TA2================
	public function get_jadwal_Seminarta2(){
			$data = array(
					'page' => 'page_jadwal_seminarta2',
				);
			$this->load->view('template_dosen', $data);
		}

//================================KELOLA JADWAL SIDANG================
	public function get_jadwal_sidang(){
			$data = array(
					'page' => 'page_jadwal_sidang',
				);
			$this->load->view('template_dosen', $data);
		}


	}
?>