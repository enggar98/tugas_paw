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

// ==========================================KELOLA PERIODE======================================================
	
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

// ==========================================KELOLA RUANGAN======================================================
	
	public function get_ruangan(){

		return $this->db->get('tb_ruang');

	}

	public function insert_ruangan($data){
		$this->db->insert('tb_ruang', $data);
	}

	public function update_ruangan($id, $data){

		$this->db->where('id_ruang', $id);
		$this->db->set('nama_ruang', $data['nama_ruang']);
		$this->db->update('tb_ruang');
	}

	public function get_ruangan_by_id($id){

			$this->db->where('id_ruang', $id);
			return $this->db->get('tb_ruang');
	}

	public function hapus_ruangan($id)
	{

			$this->db->where('id_ruang', $id);
			$this->db->delete('tb_ruang');
	}

// ==========================================KELOLA HASIL REVIEW======================================================
	
	public function get_review(){

		return $this->db->get('hasil_review');

	}

	public function insert_review($data){
		$this->db->insert('hasil_review', $data);
	}

	public function update_review($id, $data){

		$this->db->where('id_review', $id);
		$this->db->set('dosen_review', $data['dosen_review']);
		$this->db->set('nama_mhs', $data['nama_mhs']);
		$this->db->set('hasil_review', $data['hasil_review']);
		$this->db->update('hasil_review');
	}

	public function get_review_by_id($id){

			$this->db->where('id_review', $id);
			return $this->db->get('hasil_review');
	}

	public function hapus_review($id)
	{

			$this->db->where('id_review', $id);
			$this->db->delete('hasil_review');
	}

	// ==========================================KELOLA JADWAL REVIEW======================================================

	public function get_ruang1(){
		$ruangQuery = $this->get_ruangan()->result();
		$ruang = [];
			for($i=0;$i<count($ruangQuery);$i++) {
				$ruang[$i][0] = $ruangQuery[$i]->nama_ruang;
				$ruang[$i][1] = $ruangQuery[$i]->id_ruang;
				$i++;
			}
		return $ruang;
	}

	public function get_dosen1(){
		$dosenQuery = $this->get_dosen()->result();
		$dosen = [];
			for($i=0;$i<count($dosenQuery);$i++) {
				$dosen[$i][0] = $dosenQuery[$i]->nama;
				$dosen[$i][1] = $dosenQuery[$i]->id_dosen;
				$i++;
			}
		return $dosen;
	}

	public function get_jadwal_review(){

		return $this->db->get('jadwal_review');

	}

	public function insert_jadwalreview($data){
		$this->db->insert('jadwal_review', $data);
	}

	public function update_jadwalreview($id, $data){

		$this->db->where('id_jadwalreview', $id);
		$this->db->set('nama_ruang', $data['nama_ruang']);
		$this->db->set('tanggal', $data['tanggal']);
		$this->db->set('nama_mhs', $data['nama_mhs']);
		$this->db->set('nama_dosen', $data['nama_dosen']);
		$this->db->update('jadwal_review');
	}

	public function get_jadwalreview_by_id($id){

			$this->db->where('id_jadwal_review', $id);
			return $this->db->get('jadwal_review');
	}

	public function hapus_jadwalreview($id)
	{

			$this->db->where('id_jadwalreview', $id);
			$this->db->delete('jadwal_review');
	}

//===========================================KELOLA DAFTAR TA 1=====================================================

	public function get_daftarta1()
	{
		return $this->db->get('daftar_ta1');
	}


//===========================================KELOLA SIDANG TUGAS AKHIR=====================================================

	public function get_sidang()
	{
		return $this->db->get('sidang');
	}

// ==========================================KELOLA SEMINAR PENDAFTARAN TA 1======================================================

	public function get_seminar_ta1()
	{
		return $this->db->get('daftar_seminarta1');
	}

// ==========================================KELOLA PENDAFTARAN TA 2======================================================

	public function get_daftarta2()
	{
		return $this->db->get('daftar_ta2');
	}

// ==========================================KELOLA SEMINAR PENDAFTARAN TA 2======================================================

	public function get_seminar_ta2()
	{
		return $this->db->get('daftar_seminarta2');
	}

// ==========================================KELOLA NILAI SEMINAR TA 1======================================================

	public function get_nilai_seminarta1()
	{
		return $this->db->get('nilai_seminarta1_pembimbing');
	}

	public function getstatus_daftar_seminar_ta1($nim)
	{
		$hasil = $this->db->query("SELECT * FROM daftar_seminarta1 WHERE nim='$nim' ");

		return $hasil->result();
	}

	public function insert_nilaiseminarta1_pembimbing($data){
		$this->db->insert('nilai_seminarta1_pembimbing', $data);
	}

// ==========================================KELOLA NILAI SEMINAR TA 2======================================================

	public function get_nilai_seminarta2()
	{
		return $this->db->get('nilai_seminarta2');
	}

	public function getstatus_daftar_seminar_ta2($nim)
	{
		$hasil = $this->db->query("SELECT * FROM daftar_ta2 WHERE nim='$nim' ");

		return $hasil->result();
	}

	public function insert_nilaiseminarta2($data){
		$this->db->insert('nilai_seminarta2', $data);
	}

// ==========================================KELOLA NILAI SIDANG======================================================

	public function get_nilai_sidang()
	{
		return $this->db->get('nilai_sidang');
	}

	public function getstatus_daftar_sidang($nim)
	{
		$hasil = $this->db->query("SELECT * FROM daftar_seminarta2 WHERE nim='$nim' ");

		return $hasil->result();
	}

	public function insert_nilaisidang($data){
		$this->db->insert('nilai_sidang', $data);
	}

// ==========================================AKUN======================================================
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

//====================================KELOLA INFORMASI====================================================
		public function insert_informasi($data){
		$insert = $this->db->insert('informasi', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function get_informasi()
	{
		return $this->db->get('informasi');
	}

//=====================================PRINT PENDAFTARAN TA 1=============================================
	public function get_daftarta1_cetak($tahun_ajaran){

		return $this->db->query("SELECT * FROM daftar_ta1 WHERE tahun_ajaran='$tahun_ajaran' ");
	}

//=====================================PRINT PENDAFTARAN TA 2=============================================
	public function get_daftarta2_cetak($tahun_ajaran){

		return $this->db->query("SELECT * FROM daftar_ta2 WHERE tahun_ajaran='$tahun_ajaran' ");
	}

//=====================================PRINT PENDAFTARAN SEMINAR TA 1=============================================
	public function get_seminarta1_cetak($tahun_ajaran){

		return $this->db->query("SELECT * FROM daftar_seminarta1 WHERE tahun_ajaran='$tahun_ajaran' ");
	}

//=====================================PRINT PENDAFTARAN SEMINAR TA 2=============================================
	public function get_seminarta2_cetak($tahun_ajaran){

		return $this->db->query("SELECT * FROM daftar_seminarta2 WHERE tahun_ajaran='$tahun_ajaran' ");
	}

//=====================================PRINT PENDAFTARAN SIDANG===============================================
	public function get_sidang_cetak($tahun_ajaran){

		return $this->db->query("SELECT * FROM sidang WHERE tahun_ajaran='$tahun_ajaran' ");
	}

//===================================PRINT PENDAFTARAN TA 1 MAHASISWA=========================================
	public function view_kartu($id_daftar_ta1){
			$this->db->select('*');
			$this->db->from('daftar_ta1');
			$this->db->where('id_daftar_ta1',$id_daftar_ta1);
		
			$sql = $this->db->get();

			return $sql;
		}



}

?>