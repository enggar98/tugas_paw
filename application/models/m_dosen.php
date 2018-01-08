<?php  
	/**
	* 
	*/
	class m_dosen extends CI_Model
	{
	
//====================================KELOLA INFORMASI====================================================

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
//====================================KELOLA PENDAFTARAN TA 1====================================================

	public function get_daftarta1()
	{
		return $this->db->get('daftar_ta1');
	}
	
//====================================KELOLA PENDAFTARAN SEMINAR TA 1====================================================

	public function get_seminarta1()
	{
		return $this->db->get('daftar_seminarta1');
	}

//====================================KELOLA PENDAFTARAN TA 2====================================================

	public function get_daftarta2()
	{
		return $this->db->get('daftar_ta2');
	}

//====================================KELOLA PENDAFTARAN SEMINAR TA 1====================================================

	public function get_seminarta2()
	{
		return $this->db->get('daftar_seminarta2');
	}


//====================================KELOLA PENDAFTARAN SIDANG====================================================

	public function get_sidang()
	{
		return $this->db->get('sidang');
	}

// ==========================================KELOLA NILAI SEMINAR TA 1======================================================

	public function get_nilai_seminarta1()
	{
		return $this->db->get('nilai_seminarta1_pembimbing');
	}

// ==========================================KELOLA NILAI SEMINAR TA 2======================================================

	public function get_nilai_seminarta2()
	{
		return $this->db->get('nilai_seminarta2');
	}

// ==========================================KELOLA NILAI SIDANG======================================================

	public function get_nilai_sidang()
	{
		return $this->db->get('nilai_sidang');
	}

// ==========================================KELOLA HASIL REVIEW======================================================
	
	public function get_review(){

		return $this->db->get('hasil_review');

	}

// ==========================================KELOLA JADWAL REVIEW======================================================
	
	public function get_jadwal_review(){

		return $this->db->get('jadwal_review');

	}
		
	}
?>