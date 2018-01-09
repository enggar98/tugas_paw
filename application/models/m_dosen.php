<?php  
	/**
	* 
	*/
	class m_dosen extends CI_Model
	{
	
//====================================KELOLA MODUL====================================================

		public function get_modul()
		{
			return $this->db->get('informasi');
		}
		public function insert_modul($data){
			$insert = $this->db->insert('informasi', $data);
	        return ($this->db->affected_rows() != 1) ? false : true;
		}
		public function get_kelas($id){

			$this->db->where('id_dosen', $id);
			return $this->db->get('kelas');

		}

		public function get_kelas_by_id_dosen($id){

				$this->db->where('id_user', $id);
				return $this->db->get('tb_dosen');

		}
	
	}
?>