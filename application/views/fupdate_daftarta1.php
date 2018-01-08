<div class="container-fluid">
    <div class="block-header">
        <h2>
            KELOLA PERIODE
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>FORM UPDATE PERIODE</h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="update_periode">
                        <?php foreach ($data_daftarta1->result() as $key => $val): ?>
                        <input type="hidden" name="id_daftar_ta1" value="<?php echo $val->id_daftar_ta1?>">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nim" value="<?php echo $val->nim?>" required>
                                <label class="form-label">NIM</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama" value="<?php echo $val->nama?>" required>
                                <label class="form-label">NIM</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="peminatan" value="<?php echo $val->peminatan?>" required>
                                <option value="">-- Pilih PEMINATAN --</option>
                                <option value="SCDM">SCDM</option>
                                <option value="SIE">SIE</option>
                                
                            </select>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="tahun_ajaran" value="<?php echo $val->tahun_ajaran?>" required>
                                <label class="form-label">Tahun Ajaran</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="judul_penelitian" value="<?php echo $val->judul_penelitian?>" required>
                                <label class="form-label">Judul Penelitian</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="ipk" value="<?php echo $val->ipk?>" required>
                                <label class="form-label">IPK</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="total_sks" value="<?php echo $val->total_sks?>" required>
                                <label class="form-label">Total SKS</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="jml_d" value="<?php echo $val->jml_d?>" required>
                                <label class="form-label">Jumlah D</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="jml_e" value="<?php echo $val->jml_e?>" required>
                                <label class="form-label">Jumlah E</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="jml_mk_krs" value="<?php echo $val->jml_mk_krs?>" required>
                                <label class="form-label">Jumlah Matakuliah KRS</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="jml_sks_krs" value="<?php echo $val->jml_sks_krs?>" required>
                                <label class="form-label">Jumlah SKS KRS</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama_dosen_pem1" value="<?php echo $val->nama_dosen_pem1?>" required>
                                <label class="form-label">Dosen Pembimbing 1</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama_dosen_pem2" value="<?php echo $val->nama_dosen_pem2?>" required>
                                <label class="form-label">Dosen Pembimbing 2</label>
                            </div>
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