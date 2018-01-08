<div id="container">
 
  <table border="0" align="left" cellpadding="7" cellspacing="0" style="border-collapse: collapse;">
  
  <tr>
   <td>
   
 <button onclick="myFunction()"><img align="center" src="<?php echo base_url(); ?>asset/images/logo.png" width="50" height="50">
</button>    

<script>
function myFunction() {
    window.print();
}
</script>
   </td>
   <td><font size="1"><p>YAYASAN KARTIKA EKA PAKSI (YKEP)<br>UNIVERSITAS JENDERAL ACHMAD YANI (UNJANI)</font><br><font size=2px> JURUSAN INFORMATIKA</font><br><font size=2px>TERAKREDITASI 'B' SK.DIRJEN DIKTI No: 120/SK/BAN-PT/Akred/S/XII/2015</font><br><font size=1px>Jln.Ters.Jend.Sudirman Cimahi 40513/Gd.LAB.II F-MIPA LT.3/TLP/FAX. (022)6631302<br>Website : HTTP://if.unjani.ac.id/ email : informatika.unjani@yahoo.co.id</font></p></td></font>
</td></tr></table>
<table border="1" align="left" cellpadding="7" cellspacing="0" style="border-collapse: collapse;">
  </tr>
  <tr border="2" ><td  bgcolor="white"><font color="black"><p align="center"><b>F-C</b></font></p></td></tr>
  <tr><td colspan="2">MAHASISWA  </td></tr>
 </table ><table border="1" align="center" cellspacing="0" style="border-collapse: collapse;">
  <tr border="2" ><td >No.Form</font></td><td>:</td><td  bgcolor="white"><font color="black"><p align="center">IF-FM/ADM/06</font></p></td></tr>
  <tr border="2" ><td >DiSahkan</font></td><td>:</td><td  bgcolor="white"><font color="black"><p align="center">17/07/2017</font></p></td></tr><tr border="2" ><td >No.Revisi</font></td><td>:</td><td  bgcolor="white"><font color="black"><p align="center">2</font></p></td></tr>
  </table>&nbsp;<table border="1"  cellpadding="7" cellspacing="0" style="border-collapse: collapse;">
  </tr>
  
 </table>

 <br>
 <div id="body">
 <table border="1" align="left" cellpadding="7" cellspacing="0" style="border-collapse: collapse;">
  
  <tr border="2" ><td bgcolor="black"><font color="white">IF.AKD.06</font></td><td><b><center>FORM PERWALIAN <br>MAHASISWA</center></td></b></tr>
  
  </tr>
  
 </table>
 <table border="1" align="center" cellpadding="7" cellspacing="0" style="border-collapse: collapse;">
  
  <tr border="2" ><td bgcolor="black" colspan="2"><font color="white" align="center"><center>SEMESTER</center></font></td></b></tr>
  <tr border="2" ><td >THN.AKD</font></td><td><?php echo $tahun_ajaran; ?></td></b></tr>
  
  </tr>
  
 </table> 

  <div class="cleaner_h10"></div>
  <br>
<form name="datafrs" id="datafrs" method="POST" action="<?php echo base_url(); ?>mahasiswa/simpan_krs">
<br>
 <table border="1" width="100%" cellpadding="7" cellspacing="0" style="border-collapse: collapse;">
 <tr>
  <td>NIM</td>
  <td><?php echo $nim; ?></td><td>PEMINATAN : SCDM/SIE*</td><td>NAMA DOSEN WALI</td></tr><tr>
  <td>Nama</td>
  <td colspan="2"><?php echo $nama; ?></td><td colspan="2"><?php echo $dosen_wali; ?></td>
  
  </tr>
  
 </table><br>
 <table border="1" width="100%" style="border-collapse: collapse; font-size:12px;" cellpadding="5">
<td  align="center" bgcolor="#0000" style="text-transform:uppercase;"><strong><font color="#FFF">1</strong></td>
 <td colspan="3" align="center" bgcolor="#fff" style="text-transform:uppercase;"><strong>DAFTAR MATA KULIAH RENCANA STUDI</strong></td>
 <td  align="center" bgcolor="#0000" style="text-transform:uppercase;"><strong><font color="#FFF">2</strong></td>
 <td colspan="3" align="center" bgcolor="#fff" style="text-transform:uppercase;"><strong>PERUBAHAN</strong></td>
 </tr>
 <tr>
  <td align="center">No</td>
 <td align="center">Kode MK</td>
 <td align="center">Mata Kuliah</td>
 
 <td align="center">SKS</td>
 <td align="center">NT*</td>
 <td align="center">No</td> 
 <td align="center">MUNDUR</td> 
 <td align="center">TAMBAH</td>
 
 
 <?php
 if($status=='0')
 {
  echo '<td align="center">Batalkan</td>';
 }
 ?>
 </tr>
   

<?php
 $state_app = 0;
 $no=1;
 $tot_sks = 0;
 
 foreach ($detailfrs->result_array() as $value) 
 {
 $tot_sks += $value['jum_sks'];
  
  echo '<tr class="content">
   <td>'.$no.'</td>
    <td>'.$value['kd_mk'].'</td>
    <td>'.$value['nama_mk'].'</td>
    <td>'.$value['jum_sks'].'</td>
    <td>'.$value['jum_sks'].'</td>
    <td>'.$no.'</td>
    
';
    
  echo '<td></td>';
  echo '<td></td>

    
    
    ';
   if($status=='0')
   {
    echo '<td align="center">
    <a class="delbutton" id="'.$value['nim'].'|'.$value['kd_jadwal'].'" href="#"><div id="box-link">Batalkan</div></a>
    </td>';
   }
   $no++;
 }
 echo '<tr><td colspan=3><center>JUMLAH SKS</td><td colspan=2 id="jmlcart"><b>'.$tot_sks.' SKS</b></td><td colspan=3 id="jmlcart"></td></tr>';
 echo '<tr><td colspan=5><center >**)KETERANGAN : NT = NILAI MATA KULIAH</td></center><td colspan=3 id="jmlcart"></td></tr>';
?>
 </table>
<br><br><br>
 <table border="1" width="100%" cellpadding="7" cellspacing="0" style="border-collapse: collapse;">
  <tr>
   <td  align="center" bgcolor="#0000" style="text-transform:uppercase;"><strong><font color="#FFF">3</strong></td>
   <td colspan="2"><center>Persetujuan Dosen Wali</td>
    <td  align="center" bgcolor="#0000" style="text-transform:uppercase;"><strong><font color="#FFF">4</strong></td>
   <td colspan="7"><center>Persetujuan Perubahan</center></td>
  </tr>
  <tr>
   <td colspan="3"><center>DISETUJUI</td>
   <td colspan="2"><center>BATAL</center></td><td colspan="3"><center>TAMBAH</center></td>
  </tr>
  <tr >
   <td ><center>JUMLAH MK</td>
   <td><center><?php echo $no-1 ?></center></td><td rowspan="2"><center>CIMAHI <br></center></td>
   <td><center>JUMLAH MK</td>
   <td><center> </center></td>
  
   <td><center>JUMLAH MK</center></td>
   <td><center> </td>
   

  </tr>
  <tr >
   <td ><center>JUMLAH SKS</td>
   <td><center><?php echo $tot_sks ?></center></td>
   <td><center>JUMLAH SKS</td>
   <td><center> </center></td>
  
   <td><center>JUMLAH SKS</center></td>
   <td><center> </td>
   

  </tr>
  <tr>
   <td >
    <center>DOSEN WALI
   </td>
   <td colspan="2">
    <center>MAHASISWA
   </td>
<td colspan="5">
    <center>DISETUJUI
   </td>

  </tr>
  <tr>
   <td rowspan="2">
    <center>
   </td>
   <td colspan="2" rowspan="2">
    <center></center></td>
 <td ><center>JUMLAH MK</td>
   <td><center> </center></td><td rowspan="2" colspan="2"><center>CIMAHI <br></center></td>  </tr>
  <tr><td>JUMLAH SKS</td><td> </td></tr>
  <tr><td>NIDN : </td><td colspan="2">NIM :  </td><td colspan="2" >
    <center>DOSEN WALI
   </td>
   <td colspan="2">
    <center>MAHASISWA
   </td></tr>
  <tr><td colspan="3" >KETERANGAN </td>
   <td colspan="2" rowspan="3">
    <center></center></td>
   <td colspan="2" rowspan="3">
    <center></center></td></tr>
<tr><td colspan="3" > • Kotak 1 dan 2 diiisi pada saat registrasi</td></tr>
  <tr><td colspan="3" border="0" > • Kotak 3 dan 4 diisi pada saat Perubahan</td></tr>
   <tr><td colspan="3" border="0" > • Gunakan huruf Kapital Untuk Pengisian Form</td><td colspan="2">NIDN : </td><td colspan="2">NIM :  </td></tr>
    <tr><td colspan="3" border="0" > **) Coret Salah Satu</td></tr>
 </table>