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
                    <h2>FORM UPDATE AKUN</h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="update_akun">
                        <?php foreach ($data_akun->result() as $key => $val): ?>
                        <input type="hidden" name="id_user" value="<?php echo $val->id_user?>">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="username" value="<?php echo $val->username;?>" required>
                                <label class="form-label">Username</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="password" value="<?php echo $val->password;?>" required>
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="level_user" value="<?php echo $val->level_user;?>" required>
                                <label class="form-label">Level User</label>
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