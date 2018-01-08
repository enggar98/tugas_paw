<!DOCTYPE html>
<html>
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA PENDAFTARAN TUGAS AKHIR 1
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
                                            <th>ID TA 1</th>
                                            <th>Mahasiswa</th>
                                            <th>Status Daftar</th>
                                            <th>Judul Penelitian</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Semester</th>
                                            <th>IPK</th>
                                            <th>Total SKS</th>
                                            <th>Jumlah MK D</th>
                                            <th>Jumlah MK E</th>
                                            <th>Jumlah MK KRS</th>
                                            <th>Jumlah SKS KRS</th>
                                            <th>Dosen Pembimbing 1</th>
                                            <th>Dosen Pembimbing 2</th>
                                            <th>Proposal</th>
                                            <th>KHS</th>
                                            <th>KRS</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data_daftarta1->result() as $key => $val):?>
                                        <tr>
                                            <td><?php echo $val->id_daftar_ta1?></td>
                                            <td><?php echo $val->namamhs?></td>
                                            <td><?php echo $val->status_acc?></td>
                                            <td><?php echo $val->judul_penelitian?></td>
                                            <td><?php echo $val->thn_ajaran?></td>
                                            <td><?php echo $val->semester?></td>
                                            <td><?php echo $val->ipk?></td>
                                            <td><?php echo $val->total_sks?></td>
                                            <td><?php echo $val->jml_d?></td>
                                            <td><?php echo $val->jml_e?></td>
                                            <td><?php echo $val->jml_mk_krs?></td>
                                            <td><?php echo $val->jml_sks_krs?></td>
                                            <td><?php echo $val->namadosenp1?></td>
                                            <td><?php echo $val->namadosenp2?></td>
                                            <td><a href="<?php echo base_url().'file/'.$val->file_proposal?>" class="btn btn-info" download>Download</a></td>
                                            <td><a href="<?php echo base_url().'file/'.$val->file_khs?>" class="btn btn-info" download>Download</a></td>
                                            <td><a href="<?php echo base_url().'file/'.$val->file_krs?>" class="btn btn-info" download>Download</a></td>
                                            <td>
                                                <form method="post" action="update_acc_daftarta1">
                                                    <input type="hidden" name="id_daftar_ta1" value="<?php echo $val->id_daftar_ta1?>">
                                                    <input type="submit" name="submit" value="ACC" class="btn btn-info ">
                                                </form>
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