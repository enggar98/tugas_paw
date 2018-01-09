<?php  

	/**
	* 
	*/
	class dashboard extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			
			$this->load->helper(array('form', 'url'));
		}

		public function index()
		{
			if($this->session->userdata('level_user') == 'mhs') {
				$data['page'] = 'dashboard_mhs';
				$this->load->view('template_mhs', $data);
			}
			else if($this->session->userdata('level_user') == 'dosen'){
				$data['page'] = 'dashboard_dosen';
				$this->load->view('template_dosen',$data);
			}
			else if($this->session->userdata('level_user') == 'admin')
			{
				$data['page'] = 'dashboard_admin1';
				$this->load->view('template_admin1', $data);
			}
			else if($this->session->userdata('level_user') == 'staff')
			{
				$data['page'] = 'dashboard_admin';
				$this->load->view('template_admin', $data);
			}
			else
			{
				echo "<script>alert('Anda belum login! Silahkan login untuk melanjutkan');window.location='login' </script>";
			}
		}
	}
?>