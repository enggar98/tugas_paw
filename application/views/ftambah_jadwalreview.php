<div class="container-fluid">
    <div class="block-header">
        <h2>
            KELOLA JADWAL REVIEW
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>FORM TAMBAH JADWAL REVIEW</h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="insert_jadwalreview">
                        <div class="form-group">
                            <select class="form-control show-tick" name="id_ruang" required>
                                <option value="">-- Pilih Ruang --</option>
                                <?php
                                    foreach($ruang as $dataruang) {

                                        echo "<option  value='".$dataruang[1]."'>".$dataruang[0]."</option>'";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="tanggal" required>
                                <label class="form-label">Tanggal</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama_mhs" required>
                                <label class="form-label">Nama Mahasiswa</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="id_dosen" required>
                                <option value="">-- Pilih Dosen --</option>
                                <?php
                                    foreach($dosen as $datadosen) {

                                        echo "<option  value='".$datadosen[1]."'>".$datadosen[0]."</option>'";
                                    }
                                ?>
                            </select>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Validation -->