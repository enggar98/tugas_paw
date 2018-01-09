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

//==========================================KELOLA KELAS===============================================

		public function get_kelas(){
			$id_user = $this->session->userdata('id_user');
			$query = $this->db->query('SELECT id_dosen FROM tb_dosen where id_user='.$id_user.'');
			foreach ($query->result() as $row) {
			     $id = $row->id_dosen;
			}

			$data = array(
						  'page' => 'page_kelas_dosen',
						 'data_kelas' => $this->m_dosen->get_kelas($id),
			);
			//echo $id;
			$this->load->view('template_dosen', $data);
		}
		

//==========================================KELOLA MODUL===============================================
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
		}

	}
?>