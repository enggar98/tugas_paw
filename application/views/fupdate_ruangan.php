<div class="container-fluid">
    <div class="block-header">
        <h2>
            KELOLA RUANGAN
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>FORM UPDATE RUANGAN</h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="update_ruangan">
                        <?php foreach ($data_ruangan->result() as $key => $val): ?>
                        <input type="hidden" name="id_ruang" value="<?php echo $val->id_ruang?>">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="id_ruang" value="<?php echo $val->id_ruang?>" readonly>
                                <label class="form-label">ID Ruang</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama_ruang" value="<?php echo $val->nama_ruang?>" required>
                                <label class="form-label">Nama Ruang</label>
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