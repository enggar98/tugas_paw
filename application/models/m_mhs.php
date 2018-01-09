<?php  

/**
* 
*/
class m_mhs extends CI_Model
{
	
// ==========================================KELOLA KELAS======================================================
	
	public function get_kelas	(){

		return $this->db->get('kelas');

	}

// ==========================================KELOLA MODUL======================================================

	 public function get_modul()
    {
        return $this->db->get('informasi');
    }

	public function insert_modul($data){

        $insert = $this->db->insert('informasi', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }


    public function get_kelas_by_id_dosen($id){

            $this->db->where('id_user', $id);
            return $this->db->get('tb_dosen');

    }

}
?>