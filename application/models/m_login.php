<?php  

	/**
	* 
	*/
	class m_login extends CI_Model
	{
		function __construct()
    	{
        	parent::__construct();
        	$this->load->library('session');
    	}

		public function cek_login($username,$password) {

		$data = array(
				'username' => $username,
				'password' => $password				
			);

		$akun = $this->db->get_where('tb_akun',$data);
		$mhs = $this->db->get_where('tb_mhs',$data);
	
		if($akun->num_rows() == 1)
		{
			$data_session['username'] = $akun->row()->username;
			$data_session['id_user'] = $akun->row()->id_user;
			$data_session['level_user'] = $akun->row()->level_user;	
			$this->session->set_userdata($data_session);
			return true;
		}else if($mhs->num_rows() == 1)
		{
			$data_session['nim'] = $mhs->row()->nim;
			$data_session['nama'] = $mhs->row()->nama;
			$data_session['level_user'] = $mhs->row()->level_user;
			$data_session['status'] = $mhs->row()->status;
			$this->session->set_userdata($data_session);
			return true;
		}else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger"><strong>Login gagal</strong><br>Periksa Username dan Password Anda!</div>');
			return false;
		}
			
		}

		public function insert_akun_mhs($akun)
		{
			$this->db->insert('tb_akun',$akun);
			return $this->db->insert_id();
		}

		public function insert_data_mhs($mhs)
		{
			$this->db->insert('tb_mhs',$mhs);
			return ($this->db->affected_rows() != 1) ? false : true;
		}

		public function load_dosen()
		{
			$datadosen = $this->get_dosen()->result();
			$dosen = [];
			for($i=0;$i<count($datadosen);$i++) {
				$dosen[$i][0] = $datadosen[$i]->id_dosen;
				$dosen[$i][1] = $datadosen[$i]->nama;
				$i++;
			}

			return $dosen;
		}

		public function get_dosen()
		{
			return $this->db->get('tb_dosen');
		}

	}
?>