<?php  
	/**
	* 
	*/
	class mhs extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_mhs');
			$this->load->helper(array('form', 'url'));
		}

// ==========================================KELOLA PENDAFTARAN TA 1======================================================

		public function form_pendaftaran_ta1(){

            $tmp = $this->m_mhs->getstatus_daftar_ta1($this->session->userdata('nim'));

            foreach ($tmp as $row) {
                $tmp1 = $row->status;
                $tmp2 = $row->id_daftar_ta1;
            }


			$data = array(
					'periode' => $this->m_mhs->load_periode(),
					'dosen' => $this->m_mhs->load_dosen(),
					'mhs' => $this->m_mhs->load_mahasiswa(),
                    'status' => $tmp1,
                    'id_daftar_ta1' => $tmp2,
					'page' => 'fpendaftaran_ta1',
				);

			$this->load->view('template_mhs', $data);
		}

		public function page_ta1(){
			$data = array(
					'page' => 'page_ta1',
				);
			$this->load->view('template_mhs', $data);
		}


		public function insert_pendaftaran_ta1(){

			if(!empty($_FILES['proposal']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['proposal']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('proposal')){
                    $uploadData = $this->upload->data();
                    $proposal = $uploadData['file_name'];
                }else{
                    $proposal = '';
                }
            }else{
                $proposal = '';
            }

            if(!empty($_FILES['krs']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['krs']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('krs')){
                    $uploadData = $this->upload->data();
                    $krs = $uploadData['file_name'];
                }else{
                    $krs = '';
                }
            }else{
                $krs = '';
            }

            if(!empty($_FILES['khs']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['khs']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('khs')){
                    $uploadData = $this->upload->data();
                    $khs = $uploadData['file_name'];
                }else{
                    $khs = '';
                }
            }else{
                $khs = '';
            }

            $tmp1 = explode("|", $this->input->post('dosen_pem1'));
            $tmp2 = explode("|", $this->input->post('dosen_pem2'));

            $status = "belum diacc";
            $daftar_ta1 = array(
            	'id_daftar_ta1' => $this->input->post('id_daftar_ta1'),
            	'nim' => $this->input->post('nim'),
            	'nama' => $this->input->post('nama'),
                'peminatan' => $this->input->post('peminatan'),
                'semester' => $this->input->post('semester'),
            	'judul_penelitian' => $this->input->post('judul_penelitian'),
                'ipk' => $this->input->post('ipk'),
                'total_sks' => $this->input->post('total_sks'),
                'jml_d' => $this->input->post('jml_d'),
                'jml_e' => $this->input->post('jml_e'),
                'jml_mk_krs' => $this->input->post('jml_mk_krs'),
                'jml_sks_krs' => $this->input->post('jml_sks_krs'),
                'id_dosen_pem1' => $tmp1[0],
                'nama_dosen_pem1' => $tmp1[1],
            	'id_dosen_pem2' => $tmp2[0],
                'nama_dosen_pem2' => $tmp2[1],
            	'file_proposal' => $proposal,
            	'file_krs' => $krs,
            	'file_khs' => $khs,
            	'status' => $status,
            );

            $daftar_ta1 = $this->m_mhs->insert_pendaftaran_ta1($daftar_ta1);
            if ($daftar_ta1) {
            	$this->session->set_flashdata('sukses', 'Selamat Pendaftaran TA 1 Anda Telah Berhasil !');
            } else {
            	$this->session->set_flashdata('error', 'Pendaftaran TA 1 Anda Gagal Coba Check Kembali Formulir Yang Diisi !');
            }
            

			redirect(base_url().'mhs/form_pendaftaran_ta1');
		}

// ==========================================KELOLA PENDAFTARAN SEMINAR TA 1======================================================

        public function form_pendaftaran_seminarta1(){

            $temp = $this->m_mhs->getstatus_daftar_seminar_ta1($this->session->userdata('nim'));

            foreach ($temp as $row) {
                $var1 = $row->status_seminarta1;
                $tmp2 = $row->id_daftar_seminarta1;
            }

            $var = $this->m_mhs->load_pembimbing($this->session->userdata('nim'));

            foreach ($var as $row) {
                $tmp1 = $row->nama_dosen_pem1;
                $tmp2 = $row->nama_dosen_pem2;
                $tmp3 = $row->judul_penelitian;
                $tmp4 = $row->id_dosen_pem1;
                $tmp5 = $row->id_dosen_pem2;
            }

            $data = array(
                    'periode' => $this->m_mhs->load_periode(),
                    'pembimbing1' => $tmp1, 
                    'pembimbing2' => $tmp2,
                    'judul_penelitian' => $tmp3,
                    'id_dosen_pem1' => $tmp4,
                    'id_dosen_pem2' => $tmp5,
                    'status_seminarta1' => $var1,
                    'id_daftar_seminarta1' => $tmp2,
                    'page' => 'fpendaftaran_seminarta1',
                );
            $this->load->view('template_mhs', $data);
        }

        public function page_seminarta1(){
            $data = array(
                    'page' => 'page_seminarta1',
                    'dosen' => $this->m_mhs->load_dosen(),
                );
            $this->load->view('template_mhs', $data);
        }

        public function insert_seminarta1(){

            if(!empty($_FILES['proposal']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['proposal']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('proposal')){
                    $uploadData = $this->upload->data();
                    $proposal = $uploadData['file_name'];
                }else{
                    $proposal = '';
                }
            }else{
                $proposal = '';
            }

            if(!empty($_FILES['krs']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['krs']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('krs')){
                    $uploadData = $this->upload->data();
                    $krs = $uploadData['file_name'];
                }else{
                    $krs = '';
                }
            }else{
                $krs = '';
            }

            if(!empty($_FILES['khs']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['khs']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('khs')){
                    $uploadData = $this->upload->data();
                    $khs = $uploadData['file_name'];
                }else{
                    $khs = '';
                }
            }else{
                $khs = '';
            }


            $status = "belum diacc";
            $seminar_ta1 = array(
                'id_daftar_seminarta1' => $this->input->post('id_daftar_seminarta1'),
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'peminatan' => $this->input->post('peminatan'),
                'semester' => $this->input->post('semester'),
                'judul_penelitian' => $this->input->post('judul_penelitian'),
                'judul_perbaikan' => $this->input->post('judul_perbaikan'),
                'ipk' => $this->input->post('ipk'),
                'total_sks' => $this->input->post('total_sks'),
                'jml_d' => $this->input->post('jml_d'),
                'jml_e' => $this->input->post('jml_e'),
                'jml_mk_krs' => $this->input->post('jml_mk_krs'),
                'jml_sks_krs' => $this->input->post('jml_sks_krs'),
                'id_dosen_pem1' => $this->input->post('id_dosen_pem1'),
                'nama_dosen_pem1' =>  $this->input->post('nama_dosen_pem1'),
                'id_dosen_pem2' =>  $this->input->post('id_dosen_pem2'),
                 'nama_dosen_pem2' =>  $this->input->post('nama_dosen_pem2'),
                'file_krs' => $krs,
                'file_khs' => $khs,
                'file_berkas' => $proposal,
                'status_seminarta1' => $status,
            );

            $seminar_ta1 = $this->m_mhs->insert_seminar_ta1($seminar_ta1);
            if($seminar_ta1) {
                $this->session->set_flashdata('sukses', 'Selamat Pendaftaran Seminar TA 1 Anda Telah Berhasil !');
            } else {
                $this->session->set_flashdata('error', 'Pendaftaran Seminar TA 1 Anda Gagal Coba Check Kembali Formulir Yang Diisi !');
            }

            redirect(base_url().'mhs/form_pendaftaran_seminarta1');

        }

// ==========================================KELOLA PENDAFTARAN TA 2======================================================

        public function form_pendaftaran_ta2(){

            $temp = $this->m_mhs->getstatus_daftar_ta2($this->session->userdata('nim'));

            foreach ($temp as $row) {
                $var4 = $row->status_daftarta2;
                $tmp2 = $row->id_daftar_ta2;
            }

            $var1 = $this->m_mhs->load_pembimbing1($this->session->userdata('nim'));

            foreach ($var1 as $row) {
                $tmp6 = $row->nama_dosen_pem1;
                $tmp7 = $row->nama_dosen_pem2;
                $tmp8 = $row->judul_penelitian;
                $tmp9 = $row->id_dosen_pem1;
                $tmp10 = $row->id_dosen_pem2;
            }

            $data = array(
                    'periode' => $this->m_mhs->load_periode(),
                    'pembimbing1' => $tmp6, 
                    'pembimbing2' => $tmp7,
                    'judul_penelitian' => $tmp8,
                    'id_dosen_pem1' => $tmp9,
                    'id_dosen_pem2' => $tmp10,
                    'status_daftarta2' => $var4,
                    'id_daftar_ta2' => $tmp2,
                    'page' => 'fpendaftaran_ta2',
                );
            $this->load->view('template_mhs', $data);
        }

        public function insert_pendaftaran_ta2(){

            if(!empty($_FILES['proposal']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['proposal']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('proposal')){
                    $uploadData = $this->upload->data();
                    $proposal = $uploadData['file_name'];
                }else{
                    $proposal = '';
                }
            }else{
                $proposal = '';
            }

            if(!empty($_FILES['krs']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['krs']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('krs')){
                    $uploadData = $this->upload->data();
                    $krs = $uploadData['file_name'];
                }else{
                    $krs = '';
                }
            }else{
                $krs = '';
            }

            if(!empty($_FILES['khs']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['khs']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('khs')){
                    $uploadData = $this->upload->data();
                    $khs = $uploadData['file_name'];
                }else{
                    $khs = '';
                }
            }else{
                $khs = '';
            }

            $status_daftarta2 = "belum diacc";
            $daftar_ta2 = array(
                'id_daftar_ta2' => $this->input->post('id_daftar_ta2'),
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'peminatan' => $this->input->post('peminatan'),
                'semester' => $this->input->post('semester'),
                'judul_penelitian' => $this->input->post('judul_penelitian'),
                'judul_perbaikan' => $this->input->post('judul_perbaikan'),
                'ipk' => $this->input->post('ipk'),
                'total_sks' => $this->input->post('total_sks'),
                'jml_d' => $this->input->post('jml_d'),
                'jml_e' => $this->input->post('jml_e'),
                'jml_mk_krs' => $this->input->post('jml_mk_krs'),
                'jml_sks_krs' => $this->input->post('jml_sks_krs'),
                'id_dosen_pem1' => $this->input->post('id_dosen_pem1'),
                'nama_dosen_pem1' => $this->input->post('nama_dosen_pem1'),
                'id_dosen_pem2' => $this->input->post('id_dosen_pem2'),
                 'nama_dosen_pem2' => $this->input->post('nama_dosen_pem2'),
                'file_proposal' => $proposal,
                'file_krs' => $krs,
                'file_khs' => $khs,
                'status_daftarta2' => $status_daftarta2,
            );

            $daftar_ta2 = $this->m_mhs->insert_pendaftaran_ta2($daftar_ta2);
            if ($daftar_ta2) {
                $this->session->set_flashdata('sukses', 'Selamat Pendaftaran TA 2 Anda Telah Berhasil !');
            } else {
                $this->session->set_flashdata('error', 'Pendaftaran TA 2 Anda Gagal Coba Check Kembali Formulir Yang Diisi !');
            }
            

            redirect(base_url().'mhs/form_pendaftaran_ta2');
        }


// ==========================================KELOLA PENDAFTARAN SEMINAR TA 2======================================================

		public function form_pendaftaran_seminarta2(){

            $temp = $this->m_mhs->getstatus_seminar_ta2($this->session->userdata('nim'));

            foreach ($temp as $row) {
                $var2 = $row->status_seminarta2;
                 $tmp2 = $row->id_daftar_seminarta2;
            }

            $var1 = $this->m_mhs->load_pembimbing2($this->session->userdata('nim'));

            foreach ($var1 as $row) {
                $tmp6 = $row->nama_dosen_pem1;
                $tmp7 = $row->nama_dosen_pem2;
                $tmp8 = $row->judul_penelitian;
                $tmp9 = $row->id_dosen_pem1;
                $tmp10 = $row->id_dosen_pem2;
            }

            $data = array(
                    'periode' => $this->m_mhs->load_periode(),
                    'pembimbing1' => $tmp6, 
                    'pembimbing2' => $tmp7,
                    'judul_penelitian' => $tmp8,
                    'id_dosen_pem1' => $tmp9,
                    'id_dosen_pem2' => $tmp10,
                    'status_seminarta2' => $var2,
                    'id_daftar_seminarta2' => $tmp2,
                    'page' => 'fpendaftaran_seminarta2',
                );
            $this->load->view('template_mhs', $data);
        }

        public function insert_seminarta2(){

            if(!empty($_FILES['proposal']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['proposal']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('proposal')){
                    $uploadData = $this->upload->data();
                    $proposal = $uploadData['file_name'];
                }else{
                    $proposal = '';
                }
            }else{
                $proposal = '';
            }

            if(!empty($_FILES['krs']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['krs']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('krs')){
                    $uploadData = $this->upload->data();
                    $krs = $uploadData['file_name'];
                }else{
                    $krs = '';
                }
            }else{
                $krs = '';
            }

            if(!empty($_FILES['khs']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['khs']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('khs')){
                    $uploadData = $this->upload->data();
                    $khs = $uploadData['file_name'];
                }else{
                    $khs = '';
                }
            }else{
                $khs = '';
            }

            $status = "belum diacc";
            $seminarta2 = array(
                'id_daftar_seminarta2' => $this->input->post('id_daftar_seminarta2'),
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'peminatan' => $this->input->post('peminatan'),
                'semester' => $this->input->post('semester'),
                'judul_penelitian' => $this->input->post('judul_penelitian'),
                'judul_perbaikan' => $this->input->post('judul_perbaikan'),
                'ipk' => $this->input->post('ipk'),
                'total_sks' => $this->input->post('total_sks'),
                'jml_d' => $this->input->post('jml_d'),
                'jml_e' => $this->input->post('jml_e'),
                'jml_mk_krs' => $this->input->post('jml_mk_krs'),
                'jml_sks_krs' => $this->input->post('jml_sks_krs'),
                'id_dosen_pem1' => $this->input->post('id_dosen_pem1'),
                'nama_dosen_pem1' => $this->input->post('nama_dosen_pem1'),
                'id_dosen_pem2' => $this->input->post('id_dosen_pem2'),
                 'nama_dosen_pem2' => $this->input->post('nama_dosen_pem2'),
                'file_proposal' => $proposal,
                'file_krs' => $krs,
                'file_khs' => $khs,
                'status_seminarta2' => $status,
            );

            $seminarta2 = $this->m_mhs->insert_seminar_ta2($seminarta2);
            if ($seminarta2) {
                $this->session->set_flashdata('sukses', 'Selamat Pendaftaran Seminar TA 2 Anda Telah Berhasil !');
            } else {
                $this->session->set_flashdata('error', 'Pendaftaran Seminar TA 2 Anda Gagal Coba Check Kembali Formulir Yang Diisi !');
            }
            

            redirect(base_url().'mhs/form_pendaftaran_ta2');
        }

// ==========================================KELOLA PENDAFTARAN SIDANG======================================================

        
        public function form_pendaftaran_sidang(){

            $temp = $this->m_mhs->getstatus_daftar_sidang($this->session->userdata('nim'));

            foreach ($temp as $row) {
                $var1 = $row->status_sidang;
                $var2 = $row->id_daftar_sidang;
            }

            $var = $this->m_mhs->load_pembimbing3($this->session->userdata('nim'));

            foreach ($var as $row) {
                $tmp1 = $row->nama_dosen_pem1;
                $tmp2 = $row->nama_dosen_pem2;
                $tmp3 = $row->judul_penelitian;
                $tmp4 = $row->id_dosen_pem1;
                $tmp5 = $row->id_dosen_pem2;
            }

            $data = array(
                    'periode' => $this->m_mhs->load_periode(),
                    'pembimbing1' => $tmp1, 
                    'pembimbing2' => $tmp2,
                    'judul_penelitian' => $tmp3,
                    'id_dosen_pem1' => $tmp4,
                    'id_dosen_pem2' => $tmp5,
                    'status_sidang' => $var1,
                    'id_daftar_sidang' => $var2,
                    'page' => 'fpendaftaran_sidang',
                );
            $this->load->view('template_mhs', $data);
        }

        public function insert_sidang(){

            if(!empty($_FILES['proposal']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['proposal']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('proposal')){
                    $uploadData = $this->upload->data();
                    $proposal = $uploadData['file_name'];
                }else{
                    $proposal = '';
                }
            }else{
                $proposal = '';
            }

            if(!empty($_FILES['krs']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['krs']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('krs')){
                    $uploadData = $this->upload->data();
                    $krs = $uploadData['file_name'];
                }else{
                    $krs = '';
                }
            }else{
                $krs = '';
            }

            if(!empty($_FILES['khs']['name'])){
                $config['upload_path'] = 'file';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx|xlsx|pptx';
                $config['file_name'] = $_FILES['khs']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('khs')){
                    $uploadData = $this->upload->data();
                    $khs = $uploadData['file_name'];
                }else{
                    $khs = '';
                }
            }else{
                $khs = '';
            }

            $status = "belum diacc";
            $sidang = array(
                'id_daftar_sidang' => $this->input->post('id_daftar_sidang'),
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'peminatan' => $this->input->post('peminatan'),
                'semester' => $this->input->post('semester'),
                'judul_penelitian' => $this->input->post('judul_penelitian'),
                'judul_perbaikan' => $this->input->post('judul_perbaikan'),
                'ipk' => $this->input->post('ipk'),
                'total_sks' => $this->input->post('total_sks'),
                'jml_d' => $this->input->post('jml_d'),
                'jml_e' => $this->input->post('jml_e'),
                'jml_mk_krs' => $this->input->post('jml_mk_krs'),
                'jml_sks_krs' => $this->input->post('jml_sks_krs'),
                'id_dosen_pem1' => $this->input->post('dosen_pem1'),
                'nama_dosen_pem1' => $this->input->post('nama_dosen_pem1'),
                'id_dosen_pem2' => $this->input->post('dosen_pem2'),
                 'nama_dosen_pem2' => $this->input->post('nama_dosen_pem2'),
                'file_proposal' => $proposal,
                'file_krs' => $krs,
                'file_khs' => $khs,
                'status' => $status,
            );

            $sidang = $this->m_mhs->insert_sidang($sidang);
            if ($sidang) {
                $this->session->set_flashdata('sukses', 'Selamat Pendaftaran Seminar TA 2 Anda Telah Berhasil !');
            } else {
                $this->session->set_flashdata('error', 'Pendaftaran Seminar TA 2 Anda Gagal Coba Check Kembali Formulir Yang Diisi !');
            }

            redirect(base_url().'mhs/form_pendaftaran_sidang');

        }

// ==========================================KELOLA NILAI SEMINAR TA 1======================================================

		public function ftambah_nilai_seminarta1(){
			$data = array(
					'page' => 'ftambah_nilai_seminarta1',
				);
			$this->load->view('template_mhs', $data);
		}

		public function page_nilai_pembimbing1sem1(){
			$data = array(
					'page' => 'page_seminarta2',
				);
			$this->load->view('template_mhs', $data);
		}


// ==========================================KELOLA NILAI SEMINAR TA 2=====================================================
		public function ftambah_nilai_seminarta2(){
			$data = array(
					'page' => 'ftambah_nilai_seminarta2',
				);
			$this->load->view('template_mhs', $data);
		}

        public function get_modul(){

            $data = array(
                          'page' => 'page_modul_mhs',
                          'data_informasi' => $this->m_mhs->get_modul(),
            );

            $this->load->view('template_mhs', $data);
        }


// ==========================================KELOLA NILAI SIDANG======================================================

		public function ftambah_nilai_sidang(){
			$data = array(
					'page' => 'ftambah_nilai_sidang',
				);
			$this->load->view('template_mhs', $data);
		}

//==========================================CETAK PENDAFTARAN TA 1 MAHASISWA===============================================
        public function cetak_daftarta1_mhs(){
            //set a value for $noregist
         
            // Load all views as normal
            $id_daftar_ta1 = $this->input->post('id_daftar_ta1');
            $data  = array('daftarta1_mhs' => $this->m_mhs->get_daftarta1_cetak_mhs($id_daftar_ta1),
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

//==========================================CETAK PENDAFTARAN TA 2 MAHASISWA===============================================
        public function cetak_daftarta2_mhs(){
            //set a value for $noregist
         
            // Load all views as normal
            $id_daftar_ta2 = $this->input->post('id_daftar_ta2');
            $data  = array('daftarta2_mhs' => $this->m_mhs->get_daftarta2_cetak_mhs($id_daftar_ta2),
                );
            
            $this->load->view('cetak_pendaftaranta2_mhs', $data);
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
            $this->dompdf->stream("cetak_pendaftaranta2_mhs" . ".pdf", array ('Attachment' => 0));
        }

//==========================================CETAK PENDAFTARAN SEMINAR TA 1 MAHASISWA===============================================
        public function cetak_seminarta1_mhs(){
            //set a value for $noregist
         
            // Load all views as normal
            $id_daftar_seminarta1 = $this->input->post('id_daftar_seminarta1');
            $data  = array('seminarta1_mhs' => $this->m_mhs->get_seminarta1_cetak_mhs($id_daftar_seminarta1),
                );
            
            $this->load->view('cetak_seminarta1_mhs', $data);
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
            $this->dompdf->stream("cetak_seminarta1_mhs" . ".pdf", array ('Attachment' => 0));
        }

//==========================================CETAK PENDAFTARAN SEMINAR TA 2 MAHASISWA===============================================
        public function cetak_seminarta2_mhs(){
            //set a value for $noregist
         
            // Load all views as normal
            $id_daftar_seminarta2 = $this->input->post('id_daftar_seminarta2');
            $data  = array('seminarta2_mhs' => $this->m_mhs->get_seminarta2_cetak_mhs($id_daftar_seminarta2),
                );
            
            $this->load->view('cetak_seminarta2_mhs', $data);
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
            $this->dompdf->stream("cetak_seminarta2_mhs" . ".pdf", array ('Attachment' => 0));
        }

//==========================================CETAK PENDAFTARAN SIDANG MAHASISWA===============================================
        public function cetak_sidang_mhs(){
            //set a value for $noregist
         
            // Load all views as normal
            $id_daftar_sidang = $this->input->post('id_daftar_sidang');
            $data  = array('sidang_mhs' => $this->m_mhs->get_sidang_cetak_mhs($id_daftar_sidang),
                );
            
            $this->load->view('cetak_sidang_mhs', $data);
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
            $this->dompdf->stream("cetak_sidang_mhs" . ".pdf", array ('Attachment' => 0));
        }

// ==========================================KELOLA NILAI SEMINAR TA 1======================================================

        public function get_nilai_seminarta1(){

            $data = array(
                          'page' => 'page_nilai_seminarta1',
                          'data_nilai_seminarta1' => $this->m_mhs->get_nilai_seminarta1(),
            );
            $this->load->view('template_mhs', $data);
        }

// ==========================================KELOLA NILAI SEMINAR TA 2======================================================

        public function get_nilai_seminarta2(){

            $data = array(
                          'page' => 'page_nilai_seminarta2',
                          'data_nilai_seminarta2' => $this->m_mhs->get_nilai_seminarta2(),
            );
            $this->load->view('template_mhs', $data);
        }

// ==========================================KELOLA NILAI SIDANG======================================================

        public function get_nilai_sidang(){

            $data = array(
                          'page' => 'page_nilai_sidang',
                          'data_nilai_sidang' => $this->m_mhs->get_nilai_sidang(),
            );
            $this->load->view('template_mhs', $data);
        }

//==========================================KELOLA HASIL REVIEW===============================================
        public function get_review(){

            $data = array(
                          'data_review' => $this->m_mhs->get_review(),
                          'page' => 'page_review',

            );

            $this->load->view('template_mhs', $data);
        }

//==========================================KELAS===============================================
        public function get_kelas(){

            $data = array(
                          'data_kelas' => $this->m_mhs->get_kelas(),
                          'page' => 'page_kelas',
                          //'nama_dosen' => $this->m_mhs->get_dosen(),

            );

            $this->load->view('template_mhs', $data);
        }

//==========================================KELOLA JADWAL SEMINAR TA 1===============================================
        public function page_jadwal_seminarta1(){

            $data = array(
                          'page' => 'page_jadwal_seminarta1',

            );

            $this->load->view('template_mhs', $data);
        }
//==========================================KELOLA JADWAL SEMINAR TA 2===============================================
        public function page_jadwal_seminarta2(){

            $data = array(
                          'page' => 'page_jadwal_seminarta2',

            );

            $this->load->view('template_mhs', $data);
        }

//==========================================KELOLA JADWAL SIDANG===============================================
        public function page_jadwal_sidang(){

            $data = array(
                          'page' => 'page_jadwal_sidang',

            );

            $this->load->view('template_mhs', $data);
        }


	}

    


?>