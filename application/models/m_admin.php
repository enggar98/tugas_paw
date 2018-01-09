<?php  

/**
* 
*/
class m_admin extends CI_Model{

// ==========================================KELOLA MAHASISWA======================================================
	public function get_mahasiswa(){

		return $this->db->get('tb_mhs');

	}

	public function get_khs_mhs(){

			$this->db->select('*');
			$this->db->from('tb_studi');
			$this->db->join('tb_mhs','tb_studi.id_mhs = tb_mhs.id_mhs');
			
			$sql = $this->db->get();

			return $sql;
	}

	public function update_mahasiswa($id, $data){

		$this->db->where('id_mhs', $id);
		$this->db->set('nim', $data['nim']);
		$this->db->set('nama', $data['nama']);
		$this->db->set('tmp_lahir', $data['tmp_lahir']);
		$this->db->set('tgl_lahir', $data['tgl_lahir']);
		$this->db->set('jk', $data['jk']);
		$this->db->set('alamat', $data['alamat']);
		$this->db->set('email', $data['email']);
		$this->db->set('no_hp', $data['no_hp']);
		$this->db->set('status_mhs', $data['status_mhs']);
		$this->db->set('peminatan', $data['peminatan']);
		$this->db->update('tb_mhs');
	}

	public function get_mahasiswa_by_id($id){

			$this->db->where('id_mhs', $id);
			return $this->db->get('tb_mhs');
	}

	public function hapus_mahasiswa($id)
	{

			$this->db->where('id_user', $id);
			$this->db->delete('tb_akun');
	}




// ==========================================KELOLA DOSEN======================================================
	
	public function get_dosen(){

		return $this->db->get('tb_dosen');

	}

	public function insert_dosen($dosen){
		$this->db->insert('tb_dosen', $dosen);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function insert_akun_dosen($akun)
		{
			$this->db->insert('tb_akun',$akun);
			return $this->db->insert_id();
		}

	public function update_dosen($id, $data){

		$this->db->where('id_dosen', $id);
		//$this->db->set('nid', $data['nid']);
		$this->db->set('nama', $data['nama']);
		$this->db->set('struktural', $data['struktural']);
		$this->db->set('pendidikan_terakhir', $data['pendidikan_terakhir']);
		$this->db->set('golongan', $data['golongan']);
		$this->db->set('jabatan_akd', $data['jabatan_akd']);
		$this->db->update('tb_dosen');
	}

	public function get_dosen_by_id($id){

			$this->db->where('id_dosen', $id);
			return $this->db->get('tb_dosen');
	}

	public function hapus_dosen($id)
	{

			$this->db->where('id_user', $id);
			$this->db->delete('tb_akun');

			$this->db->where('id_user', $id);
			$this->db->delete('tb_dosen');
	}

// ==========================================KELOLA PERIODE======================================================
	
	public function get_periode(){

		return $this->db->get('tb_periode');

	}

	public function insert_periode($data){
		$this->db->insert('tb_periode', $data);
	}

	public function update_periode($id, $data){

		$this->db->where('id_periode', $id);
		$this->db->set('thn_ajaran', $data['thn_ajaran']);
		$this->db->set('semester', $data['semester']);
		$this->db->set('tgl_buka', $data['tgl_buka']);
		$this->db->set('tgl_tutup', $data['tgl_tutup']);
		$this->db->set('status', $data['status']);
		$this->db->update('tb_periode');
	}

	public function get_periode_by_id($id){

			$this->db->where('id_periode', $id);
			return $this->db->get('tb_periode');
	}

	public function hapus_periode($id)
	{

			$this->db->where('id_periode', $id);
			$this->db->delete('tb_periode');
	}

// ==========================================KELOLA KELAS======================================================
	
	public function get_kelas(){

		return $this->db->get('kelas');

	}

	public function insert_kelas($data){
		$this->db->insert('kelas', $data);
	}

	public function update_kelas($id, $data){

		$this->db->where('id_kelas', $id);
		$this->db->set('kode_kelas', $data['kode_kelas']);
		$this->db->set('pelajaran', $data['pelajaran']);
		$this->db->set('id_dosen', $data['id_dosen']);
		$this->db->update('kelas');
	}

	public function get_kelas_by_id($id){

			$this->db->where('id_kelas', $id);
			return $this->db->get('kelas');
	}

	public function hapus_kelas($id)
	{

			$this->db->where('id_kelas', $id);
			$this->db->delete('kelas');
	}

	public function insert_akun($data)
	{
		$this->db->insert('tb_akun', $data);
		return $this->db->insert_id();
	}

	public function get_akun_by_id($id)
	{
		$this->db->where('id_user', $id);
		return $this->db->get('tb_akun');
	}
}

?>