<div class="container-fluid">
    <div class="block-header">
        <h2>
            KELOLA DOSEN
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>FORM UPDATE DOSEN</h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="update_dosen">
                       <?php foreach ($data_dosen->result() as $key => $val): ?>
                       <input type="hidden" name="id_dosen" value="<?php echo $val->id_dosen?>">
                       <input type="hidden" name="id_user" value="<?php echo $val->id_user?>">
                       <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="id_dosen" value="<?php echo $val->id_dosen?>" readonly>
                                <label class="form-label">id dosen</label>
                            </div>
                        </div>
                        <!--<div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="NID" value="<?php echo $val->nid?>" required>
                                <label class="form-label">NID</label>
                            </div>
                        </div>-->
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama" value="<?php echo $val->nama?>" required>
                                <label class="form-label">Nama Dosen</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="struktural"  required>
                                <option value="">-- Pilih Struktural --</option>
                                <option value="DEKAN">DEKAN</option>
                                <option value="KAJUR INFORMATIKA">KAJUR INFORMATIKA</option>
                                <option value="PENGAJAR">PENGAJAR</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="pendidikan_terakhir" required>
                                <option value="">-- Pilih Pendidikan Terakhir --</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="golongan" required>
                                <option value="">-- Pilih Golongan --</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III   </option>
                                </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="jabatan_akd" required>
                                <option value="">-- Pilih Jabatan --</option>
                                <option value="KETUA KELOMPOK KEAHLIAN">KETUA KELOMPOK KEAHLIAN</option>
                                <option value="WAKIL KETUA KELOMPOK KEAHLIAN">WAKIL KETUA KELOMPOK KEAHLIAN</option>
                                <option value="ASISTEN AHLI">ASISTEN AHLI</option>
                                <option value="TENAGA PENGAJAR">TENAGA PENGAJAR</option>
                            </select>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                        <?php endforeach ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- #END# Basic Validation -->