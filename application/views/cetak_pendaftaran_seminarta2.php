<html>
<head>
    <title>Cetak Pendaftaran Seminar TA 2</title>
</head>
<body>
<h1 style="text-align: center;">Pendaftaran Seminar Tugas Akhir 2</h1>
<?php echo "Tanggal : ".date('d-m-Y'); ?><br><br>
<br>
<table border="1" align="center">
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Peminatan</th>
    <th>Semester</th>
    <th>Judul Penelitian</th>
    <th>IPK</th>
    <th>Total SKS</th>
    <th>Jumlah Nilai D</th>
    <th>Jumlah Nilai E</th>
    <th>Jumlah Matakuliah</th>
    <th>Jumlah SKS</th>
    <th>Status</th>
</tr>
<?php
if( ! empty($seminarta2)){
    $no = 1;
    foreach($seminarta2->result() as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data->nim."</td>";
        echo "<td>".$data->nama."</td>";
        echo "<td>".$data->peminatan."</td>";
        echo "<td>".$data->semester."</td>";
        echo "<td>".$data->judul_penelitian."</td>";
        echo "<td>".$data->ipk."</td>";
        echo "<td>".$data->total_sks."</td>";
        echo "<td>".$data->jml_d."</td>";
        echo "<td>".$data->jml_e."</td>";
        echo "<td>".$data->jml_mk_krs."</td>";
        echo "<td>".$data->jml_sks_krs."</td>";
        echo "<td>".$data->status_seminarta2."</td>";
        echo "</tr>";
        

        $no++;
    }    
}
?>
</table>
</body>
</html>