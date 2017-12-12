<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran TA 1</title>
</head>
<body>
    <div>
        <img src="untitled.png" width="500px">
        <table border="1" align="">
        <!-- <tr>
            <th>No Registrasi</th>
            <th>NIK</th>
            <th>Nama </th>
        </tr> -->
        <?php
        if(!empty($daftarta1_mhs)){
            foreach($daftarta1_mhs->result() as $data){
                ?>
                    <!-- <tr>
                        <td colspan="6"></td>
                        
                    </tr> -->

                    <tr>
                        <td ><center><b>TA-F14</b></center></td>
                        <td colspan="5"><center><b>FORM PENDAFTARAN SIDANG</b></center></td>
                        <td colspan="6" rowspan="5"><center><br><img src="TA1.png" width="300px"></center></td>
                    </tr>
                    <tr>
                        <td>TAHUN AKADEMIK</td>
                        <td colspan="2"></td>
                        <td>TA. ANGKATAN</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>NAMA</td>
                        <td colspan="2"><?php echo $data->nama?></td>
                        <td>JURUSAN</td>
                        <td colspan="2"><?php echo $data->peminatan?></td>
                    </tr>
                    <tr>
                        <td>NIM|K|S</td>
                        <td><?php echo $data->nim?></td>
                        <td></td>
                        <td><?php echo $data->semester?></td>
                        <td>HP</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="6"><CENTER>JUDUL PENELITIAN TUGAS AKHIR / SKRIPSI</CENTER></td>
                    </tr>
                    <tr>
                        <td colspan="6"><?php echo $data->judul_penelitian?></td>
                        <td colspan="6"><CENTER>DOSEN PENGUJI SEMINAR/SIDANG 1-2</CENTER></td>
                    </tr>
                    <tr>
                        <td colspan="6" rowspan="2"><CENTER><b><br><br>BERKAS PERSYARATAN PENDAFTARAN SIDANG</b></CENTER></td>
                        <td colspan="2"> <br> NID. </td>
                        <td rowspan="2" colspan="2">R1</td>
                        <td rowspan="2" colspan="2">R2</td>

                    </tr>
                    <tr>
                        <td colspan="2"> <br> NID. </td>
                    </tr>
    
                    <tr>
                        <td colspan="6">1. FILE BIODATA MHSW. YANG SUDAH DIISI DAN FILE POSTER. (JPG)<BR>
                        2. 1 (SATU) RANGKAP DRAFT LAPORAN PENELITIAN TUGAS AKHIR YANG AKAN DISIDANGKAN DIJILID PLASTIK COVER WARNA BIRU.<BR>
                        3. POSTER PENELITIAN TA ( FLEXI FULL COLOR 60X90 CM).<BR>
                        4. SALINAN KARTU HASIL STUDI (KHS) / TRANSKIP.<BR>
                        5. SURAT KETERANGAN TIDAK MEMILIKI PINJAMAN BUKU PERPUS.</td>
                        <td colspan="6"><CENTER><br><br>DOSEN PEMBIMBING TUGAS AKHIR 1-2</CENTER></td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="2">PESERTA/ <br>MAHASISWA YANG<br> MENGAJUKAN </BR></CENTER></td>
                        <td colspan="4" rowspan="2"><CENTER>CIMAHI.  <BR>
                        <BR>
                        <BR>
                        <br>
                        <?php echo $data->nama?><BR>
                        <?php echo $data->nim?>
                        </BR></BR></BR></BR></CENTER></td>
                        <td colspan="2"> <br> NID. </td>
                        <td rowspan="2" colspan="2">P1</td>
                        <td rowspan="2" colspan="2">P2</td>


                    </tr>
                    <tr>
                        <td colspan="2"> <br> NID. </td>
                    </tr>
                    
                <?php
                }    
            }
        ?>
        </table>
    </div>
    <br>
    <br>
</body>
</html>