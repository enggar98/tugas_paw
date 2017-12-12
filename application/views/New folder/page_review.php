a<!DOCTYPE html>
<html>
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA HASIL REVIEW TUGAS AKHIR
                    <small>Universitas Jenderal Achmad Yani <a href="https://datatables.net/" target="_blank">| UNJANI</a></small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                    
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID Review</th>
                                            <th>Dosen Review</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Hasil Review</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data_review->result() as $key => $val): ?>
                                            <tr>
                                                <td><?php echo $val->id_review?></td>
                                                <td><?php echo $val->dosen_review?></td>
                                                <td><?php echo $val->nama_mhs?></td>
                                                <td><?php echo $val->hasil_review?></td>
                                               
                                            </tr>
                                            
                                         <?php endforeach;?>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>