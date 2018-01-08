<div class="container-fluid">
    <div class="block-header">
        <h2>
            KELOLA AKUN
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>FORM TAMBAH DOSEN</h2>
                </div>
                <div class="body">
                    <form id="form_validation" action="insert_akun" method="POST">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="username" required>
                                <label class="form-label">Username</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" required>
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="form-group">
                                    <select class="form-control show-tick" name="level_user" required>
                                        <option value="">-- Pilih Level User --</option>
                                        <option value="mhs">Mahasiswa</option>
                                        <option value="dosen">Dosen</option>
                                        <option value="admin">Admin</option>
                                        <option value="staff">Staff</option>
                                        <option value="koorta1">Koordinator TA 1</option>
                                        <option value="koorta2">Koordinator TA 2</option>
                                    </select>
                                </div>
                        <input name="tambah" type="submit" class="btn btn-primary" value="SIMPAN">
                        <input name="reset" type="reset" class="btn btn-default btn-default" value="RESET">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- #END# Basic Validation -->