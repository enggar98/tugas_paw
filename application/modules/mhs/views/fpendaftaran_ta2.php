<div class="container-fluid">
    <div class="block-header">
        <h2>
            PENDAFTARAN TUGAS AKHIR 2
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>FORM PENDAFTARAN TUGAS AKHIR 2</h2>
                </div>
                <?php
                    if($status_daftarta2 =="Acc")
                    {
                        ?>
                             <center><label><h1>Anda Telah Daftar TA 2</h1></label></center>
                             <center>
                             <form method="post" action="cetak_daftarta2_mhs">
                                <?php echo "<input type='hidden' name='id_daftar_ta2' value='$id_daftar_ta2'>"?>
                                
                                <input type="submit" name="submit" value="Cetak Form" class="btn btn-success">
                            </form>
                        <?php
                    }
                    else
                    {
                        ?>
                            <div class="body">
                    <?php if($this->session->flashdata('sukses')){ ?>
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Sukses!</strong> <?php echo $this->session->flashdata('sukses'); ?>
                        </div>
                    <?php }else if($this->session->flashdata('error')){  ?>
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php }else if($this->session->flashdata('warning')){  ?>
                        <div class="alert alert-warning">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
                        </div>
                    <?php }else if($this->session->flashdata('info')){  ?>
                        <div class="alert alert-info">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
                        </div>
                    <?php } ?>
                    <form id="form_validation" action="insert_pendaftaran_ta2" method="POST" enctype="multipart/form-data">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nim" value="<?php echo $this->session->userdata('nim')?>" readonly>
                                <label class="form-label">NIM</label>
                            </div>
                        </div> 
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama" value="<?php echo $this->session->userdata('nama')?>" readonly>
                                <label class="form-label">Nama</label>
                            </div>
                        </div> 
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="peminatan" value="<?php echo $this->session->userdata('peminatan')?>" readonly>
                                <label class="form-label">Peminatan</label>
                            </div>
                        </div> 
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <label>Semester</label>
                                <select class="form-control show-tick" name="semester" required>
                                    <option value="Ganjil">Ganjil</option>
                                    <option value="Genap">Genap</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="judul_penelitian" value="<?php echo $judul_penelitian?>" readonly>
                                <label class="form-label">Judul Penelitian</label>
                            </div>
                        </div> 
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="judul_perbaikan" required>
                                <label class="form-label">Judul Perbaikan</label>
                            </div>
                        </div>                   
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama_dosen_pem1" value="<?php echo $pembimbing1?>" readonly>
                                <input type="hidden" class="form-control" name="id_dosen_pem1" value="<?php echo $id_dosen_pem1?>" readonly>
                                <label class="form-label">Dosen Pembimbing 1</label>
                            </div>
                        </div> 
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama_dosen_pem2" value="<?php echo $pembimbing2?>" readonly>
                                <input type="hidden" class="form-control" name="id_dosen_pem2" value="<?php echo $id_dosen_pem2?>" readonly>
                                <label class="form-label">Dosen Pembimbing 2</label>
                            </div>
                        </div> 
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="ipk" required>
                                <label class="form-label">IPK</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="total_sks" required>
                                <label class="form-label">Total SKS KHS</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="jml_d" required>
                                <label class="form-label">Jumlah D</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="jml_e" required>
                                <label class="form-label">Jumlah E</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="jml_mk_krs" required>
                                <label class="form-label">Jumlah Matakuliah</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="jml_sks_krs" required>
                                <label class="form-label">Jumlah SKS</label>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <label>Berkas</label>
                                <input name="proposal" type="file" multiple required/>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <label>Kartu Hasil Studi</label>
                                <input name="khs" type="file" multiple  required/>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <label>Kartu Rencana Studi</label>
                                <input name="krs" type="file" multiple required/>
                            </div>
                        </div>
                        <?php
                            $curdate = date('Y-m-d'); 
                            foreach ($periode as $dataperiode) {
                                if ($dataperiode[0] == "pendaftaran_ta2") {
                                    if ($curdate >= $dataperiode[1] && $curdate < $dataperiode[2]) {
                                        echo "<input name='tambah' type='submit' class='btn btn-primary' value='SIMPAN'>
                        <input name='reset' type='reset' class='btn btn-default btn-default' value='RESET'>";
                                    }else{
                                        echo "<input name='tambah' type='submit' class='btn btn-primary' value='SIMPAN' disabled>
                        <input name='reset' type='reset' class='btn btn-default btn-default' value='RESET' disabled>";
                                    }
                                }
                            }
                        ?>
                    </form>
                </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Validation -->