<?php  
	/**
	* 
	*/
	class m_admin1 extends CI_Model{
		
//================================KELOLA AKUN=========================
		public function get_akun(){
			return $this->db->get('tb_akun');
		}

		public function insert_akun($data){
			$this->db->insert('tb_akun', $data);
		}

		public function update_akun($id, $data){

			$this->db->where('id_user', $id);
			$this->db->set('username', $data['username']);
			$this->db->set('password', $data['password']);
			$this->db->set('level_user', $data['level_user']);
			$this->db->update('tb_akun');
		}

		public function get_akun_by_id($id){

			$this->db->where('id_user', $id);
			return $this->db->get('tb_akun');
		}

		public function hapus_akun($id)
	{

			$this->db->where('id_user', $id);
			$this->db->delete('tb_akun');
	}
	}
?>