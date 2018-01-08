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
                    <h2>FORM TAMBAH PERIODE</h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="insert_periode">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="thn_ajaran" required>
                                <label class="form-label">Tahun Ajaran</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="semester" required>
                                <option value="">-- Pilih Semester --</option>
                                <option value="GANJIL">GANJIL</option>
                                <option value="GENAP">GENAP</option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="datepicker form-control" id="tgl_buka" name="tgl_buka" placeholder="Tanggal Buka" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="datepicker form-control" id="tgl_tutup" name="tgl_tutup" placeholder="Tanggal Tutup" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="status" required>
                                <option value="">-- Pilih Status Periode --</option>
                                <option value="pendaftaran_ta1">Pendaftaran TA 1</option>
                                <option value="pendaftaran_ta2">Pendaftaran TA 2</option>
                                 <option value="seminar_ta1">Pendaftaran Seminar TA 1</option>
                                  <option value="seminar_ta2">Pendaftaran Seminar TA 2</option>
                                   <option value="sidang">Sidang</option>
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