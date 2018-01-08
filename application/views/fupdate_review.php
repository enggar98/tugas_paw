<div class="container-fluid">
    <div class="block-header">
        <h2>
            KELOLA HASIL REVIEW
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>FORM UPDATE HASIL REVIEW</h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="update_review">
                        <?php foreach ($data_review->result() as $key => $val): ?>
                        <input type="hidden" name="id_review" value="<?php echo $val->id_review?>">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="id_review" value="<?php echo $val->id_review?>" readonly>
                                <label class="form-label">ID Review</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="dosen_review" value="<?php echo $val->dosen_review?>" required>
                                <label class="form-label">Dosen Review</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama_mhs" value="<?php echo $val->nama_mhs?>" required>
                                <label class="form-label">Nama Mahasiswa</label>
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