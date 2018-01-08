<div class="container-fluid">
    <div class="block-header">
        <h2>
            KELOLA MODUL
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>UNGGAH MODUL</h2>
                </div>
                <div class="body">
                    <?php if($this->session->flashdata('sukses')){ ?>
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Sukses!</strong> <?php echo $this->session->flashdata('sukses'); ?>
                        </div>
                    <?php }else if($this->session->flashdata('error')){  ?>
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php }else if($this->session->flashdata('warning')){  ?>
                        <div class="alert alert-warning">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
                        </div>
                    <?php }else if($this->session->flashdata('info')){  ?>
                        <div class="alert alert-info">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
                        </div>
                    <?php } ?>
                    <form id="form_validation" action="insert_modul" method="POST" enctype="multipart/form-data">
                        <center>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <label>Unggah MODUL</label>
                                <input name="informasi" type="file" multiple required/>
                            </div>
                        </div>
                        </center>
                        <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Validation -->