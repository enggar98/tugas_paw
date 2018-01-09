<?php
	require_once "PHPUnit/Framework/TestCase.php";
	class TestInsert extends PHPUnit_Framework_TestCase
	{
		public function testLogin($username,$password) {
            
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
	       
	}
?>