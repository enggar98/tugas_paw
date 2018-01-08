<div class="container-fluid">
    <div class="block-header">
        <h2>
            KELOLA KELAS
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>FORM TAMBAH KELAS</h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="insert_kelas">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="kode_kelas" required>
                                <label class="form-label">Kode Kelas</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="pelajaran" required>
                                <label class="form-label">Pelajaran</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="dosen" required>
                                <option value="">-- Pilih Dosen --</option>
                                <?php foreach($data_dosen->result() as $key => $val): ?> 
                                <option value="<?php echo $val->id_dosen?>"><?php echo $val->nama?></option>
                                <?php endforeach;?>   
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