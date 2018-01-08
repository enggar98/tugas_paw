<div class="container-fluid">
    <div class="block-header">
        <h2>
            KELOLA MAHASISWA
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>FORM UPDATE MAHASISWA</h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="update_mahasiswa">
                       <?php foreach ($data_mahasiswa->result() as $key => $val): ?>
                       <input type="hidden" name="id_mhs" value="<?php echo $val->id_mhs?>">
                      <!-- <input type="hidden" name="id_user" value="<?php echo $val->id_user?>">-->
                       <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="id_mhs" value="<?php echo $val->id_mhs?>" readonly>
                                <label class="form-label">id mhs</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nim" value="<?php echo $val->nim?>" required>
                                <label class="form-label">NIM</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama" value="<?php echo $val->nama?>" required>
                                <label class="form-label">Nama</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="tmp_lahir" value="<?php echo $val->tmp_lahir?>" required>
                                <label class="form-label">Tempat Lahir</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="datepicker form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $val->tgl_lahir?>" placeholder="Pilih Tanggal Lahir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="jk" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="alamat" value="<?php echo $val->alamat?>" required>
                                <label class="form-label">Alamat</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" value="<?php echo $val->email?>" required>
                                <label class="form-label">Email</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="no_hp" value="<?php echo $val->no_hp?>" required>
                                <label class="form-label">No Telepon</label>
                            </div>
                        </div>
                        <div class="form-group">
                                    <select class="form-control show-tick" name="status_mhs" required>
                                        <option value="">-- Pilih Status Mahasiswa --</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                </div>
                                <!--<div class="form-group">
                                    <select class="form-control show-tick" name="peminatan" required>
                                        <option value="">-- Pilih Peminatan --</option>
                                        <option value="SCDM">SCDM</option>
                                        <option value="SIE">SIE</option>
                                    </select>
                                </div>-->
                        <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                        <?php endforeach ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- #END# Basic Validation -->