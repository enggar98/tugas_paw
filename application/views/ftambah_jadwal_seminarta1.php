<div class="container-fluid">
    <div class="block-header">
        <h2>
            KELOLA JADWAL PENDAFTARAN TA 2
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>FORM UBAH JADWAL SIDANG</h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="insert_jadwalseminarta1">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="id_ruang" required>
                                <label class="form-label">Ruang</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="jam" required>
                                <label class="form-label">Jam</label>
                            </div>
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
                                <label class="form-label">Nama</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="judul_penelitian" required>
                                <label class="form-label">Judul Penelitian</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="pem1" required>
                                <label class="form-label">Pembimbing 1</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="pem2" required>
                                <label class="form-label">Pembimbing 2</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="peng1" required>
                                <label class="form-label">Penguji 1</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="peng2" required>
                                <label class="form-label">Penguji 2</label>
                            </div>
                        </div>
                        <input name="tambah" type="submit" class="btn btn-primary"  action="get_obat" value="SIMPAN">
                        <input name="reset" type="reset" class="btn btn-default btn-default" value="RESET">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- #END# Basic Validation -->