<!DOCTYPE html>
<html>
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    MODUL
                    <small>Teknik Informatika <a href="https://if.uinsgd.ac.id/" target="_blank">| UIN Bandung</a></small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <!--<form method="post" action="form_tambah_modul">
                                <input type="submit" name="submit" value="Tambah Data" class="btn bg-deep-orange waves-effect">
                            </form>-->
                            <br>
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
                                            <th>ID Modul</th>
                                            <th>Nama Modul</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data_informasi->result() as $key => $val): ?>
                                            <tr>
                                                <td><?php echo $val->id_informasi?></td>
                                                <td><?php echo $val->informasi?></td>
                                                <td><a href="<?php echo base_url().'file/'.$val->informasi?>" class="btn btn-info" download>Unduh</a></td>
                                                <td>
                                                <!--<form method="post" action="hapus_modul">
                                                    <input type="hidden" name="id_informasi" value="<?php echo $val->id_informasi?>">
                                                    <input type="submit" name="submit" value="Hapus" class="btn btn-danger ">
                                                </form>-->
                                            </td>
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