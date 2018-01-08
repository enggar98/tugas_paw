<?php  

/**
* 
*/
class m_mhs extends CI_Model
{
	
// ==========================================KELOLA PENDAFTARAN TA 1======================================================

	public function insert_pendaftaran_ta1($data){
		$insert = $this->db->insert('daftar_ta1', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function get_pendaftaran_ta1()
	{
		return $this->db->get('daftar_ta1');
	}

// ==========================================KELOLA SEMINAR TA 1======================================================

	public function insert_seminar_ta1($data)
	{
		$this->db->insert('daftar_seminarta1',$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function load_pembimbing($nim)
	{
		$hasil = $this->db->query("SELECT * FROM daftar_ta1 WHERE nim='$nim'");

		return $hasil->result();
	}

	public function getstatus_daftar_ta1($nim)
	{
		$hasil = $this->db->query("SELECT * FROM daftar_ta1 WHERE nim='$nim'");

		return $hasil->result();
	}	

	public function getstatus_daftar_seminar_ta1($nim)
	{
		$hasil = $this->db->query("SELECT * FROM daftar_seminarta1 WHERE nim='$nim'");

		return $hasil->result();
	}	

// ==========================================KELOLA PENDAFTARAN TA 2======================================================

	public function insert_pendaftaran_ta2($data)
	{
		$this->db->insert('daftar_ta2',$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function load_pembimbing1($nim)
	{
		$hasil = $this->db->query("SELECT * FROM daftar_seminarta1 WHERE nim='$nim'");

		return $hasil->result();
	}

	public function getstatus_daftar_ta2($nim)
	{
		$hasil = $this->db->query("SELECT * FROM daftar_ta2 WHERE nim='$nim'");

		return $hasil->result();
	}	

// ==========================================KELOLA SEMINAR TA 2======================================================

	public function insert_seminar_ta2($data)
	{
		$this->db->insert('daftar_seminarta2',$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function load_pembimbing2($nim)
	{
		$hasil = $this->db->query("SELECT * FROM daftar_seminarta1 WHERE nim='$nim'");

		return $hasil->result();
	}

	public function getstatus_seminar_ta2($nim)
	{
		$hasil = $this->db->query("SELECT * FROM daftar_seminarta2 WHERE nim='$nim'");

		return $hasil->result();
	}	

//=======================================KELOLA SIDANG========================================================

	public function insert_sidang($data)
	{
		$this->db->insert('sidang',$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function load_pembimbing3($nim)
	{
		$hasil = $this->db->query("SELECT * FROM daftar_seminarta2 WHERE nim='$nim'");

		return $hasil->result();
	}

	public function getstatus_daftar_sidang($nim)
	{
		$hasil = $this->db->query("SELECT * FROM sidang WHERE nim='$nim'");

		return $hasil->result();
	}	

//=======================================MAHASISWA============================================================

	public function get_mahasiswa()
	{
		return $this->db->get('tb_mhs');
	}

	public function insert_mahasiswa($data){
		$this->db->insert('tb_mahasiswa',$data);
	}

	public function load_mahasiswa()
	{
		$datamahasiswa = $this->get_mahasiswa()->result();
		$mahasiswa = [];
		for($i=0;$i<count($datamahasiswa);$i++) {
			$mahasiswa[$i][0] = $datamahasiswa[$i]->id_mhs;
			$mahasiswa[$i][1] = $datamahasiswa[$i]->nim;
			$mahasiswa[$i][2] = $datamahasiswa[$i]->nama;
		}

		return $mahasiswa;
	}
//==========================================DOSEN=========================================================
	public function get_dosen()
	{
		return $this->db->get('tb_dosen');
	}

	public function load_dosen()
	{
		$datadosen = $this->get_dosen()->result();
		$dosen = [];
		for($i=0;$i<count($datadosen);$i++) {
			$dosen[$i][0] = $datadosen[$i]->id_dosen;
			$dosen[$i][1] = $datadosen[$i]->nama;
		}

		return $dosen;
	}
//=====================================PERIODE==============================================================
	public function get_periode()
	{
		return $this->db->get('tb_periode');
	}

	public function load_periode()
	{
		$dataperiode = $this->get_periode()->result();
		$periode = [];
		$curdate = date('Y-m-d'); 
		for($i=0;$i<count($dataperiode);$i++) {
			if($curdate >= $dataperiode[$i]->tgl_buka && $curdate < $dataperiode[$i]->tgl_tutup){
			$periode[$i][0] = $dataperiode[$i]->status;
			$periode[$i][1] = $dataperiode[$i]->tgl_buka;
			$periode[$i][2] = $dataperiode[$i]->tgl_tutup;}
		}

		return $periode;
	}

//===================================PRINT PENDAFTARAN TA 1 MAHASISWA=========================================
	public function get_daftarta1_cetak_mhs($id_daftar_ta1){
			$this->db->select('*');
			$this->db->from('daftar_ta1');
			$this->db->where('id_daftar_ta1',$id_daftar_ta1);
		
			$sql = $this->db->get();

			return $sql;
		}

//===================================PRINT PENDAFTARAN TA 2 MAHASISWA=========================================
	public function get_daftarta2_cetak_mhs($id_daftar_ta2){
			$this->db->select('*');
			$this->db->from('daftar_ta2');
			$this->db->where('id_daftar_ta2',$id_daftar_ta2);
		
			$sql = $this->db->get();

			return $sql;
		}

//===================================PRINT PENDAFTARAN SEMINAR TA 1 MAHASISWA=========================================
	public function get_seminarta1_cetak_mhs($id_daftar_seminarta1){
			$this->db->select('*');
			$this->db->from('daftar_seminarta1');
			$this->db->where('id_daftar_seminarta1',$id_daftar_seminarta1);
		
			$sql = $this->db->get();

			return $sql;
		}

//===================================PRINT PENDAFTARAN SEMINAR TA 2 MAHASISWA=========================================
	public function get_seminarta2_cetak_mhs($id_daftar_ta2){
			$this->db->select('*');
			$this->db->from('daftar_seminarta2');
			$this->db->where('id_daftar_seminarta2',$id_daftar_seminarta2);
		
			$sql = $this->db->get();

			return $sql;
		}

//===================================PRINT PENDAFTARAN SIDANG MAHASISWA=========================================
	public function get_sidang_cetak_mhs($id_daftar_ta2){
			$this->db->select('*');
			$this->db->from('sidang');
			$this->db->where('id_daftar_sidang',$id_daftar_sidang);
		
			$sql = $this->db->get();

			return $sql;
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
	
	public function get_kelas	(){

		return $this->db->get('kelas');

	}

	 public function get_modul()
    {
        return $this->db->get('informasi');
    }

	public function insert_modul($data){

        $insert = $this->db->insert('informasi', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

   /* public function get_kelas($id){

        $this->db->where('id_dosen', $id);
        return $this->db->get('kelas');

    }*/

    public function get_kelas_by_id_dosen($id){

            $this->db->where('id_user', $id);
            return $this->db->get('tb_dosen');

    }
}
?>