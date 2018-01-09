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

//==========================================KELAS===============================================

        public function get_kelas(){

            $data = array(
                          'data_kelas' => $this->m_mhs->get_kelas(),
                          'page' => 'page_kelas',
                          //'nama_dosen' => $this->m_mhs->get_dosen(),

            );

            $this->load->view('template_mhs', $data);
        }

//==========================================MODUL===============================================

        public function get_modul(){

            $data = array(
                          'page' => 'page_modul_mhs',
                          'data_informasi' => $this->m_mhs->get_modul(),
            );

            $this->load->view('template_mhs', $data);
        }

	}

    


?>