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
                        <form method="post" action="cetak_daftarta1">
                                <!-- untuk modal select -->
                                <button type="button" class="btn bg-deep-orange waves-effect" data-toggle="modal" data-target="#myModal">Cetak</button>
                            </form>
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
                                <table class="table table-bordered table-striped table-hover js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>ID Seminar TA 1</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Peminatan</th>
                                            <th>Semester</th>
                                            <th>Judul Penelitian</th>
                                            <th>IPK</th>
                                            <th>Total SKS</th>
                                            <th>Jumlah MK D</th>
                                            <th>Jumlah MK E</th>
                                            <th>Jumlah MK KRS</th>
                                            <th>Jumlah SKS KRS</th>
                                            <th>Proposal</th>
                                            <th>KHS</th>
                                            <th>KRS</th>
                                            <th>Dosen Pembimbing 1</th>
                                            <th>Dosen Pembimbing 2</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php foreach($data_daftarta1->result() as $key => $val):?>
                                        <tr>
                                            <td><?php echo $val->id_daftar_ta1?></td>
                                            <td><?php echo $val->nim?></td>
                                            <td><?php echo $val->nama?></td>
                                            <td><?php echo $val->peminatan?></td>
                                            <td><?php echo $val->semester?></td>
                                            <td><?php echo $val->judul_penelitian?></td>
                                            <td><?php echo $val->ipk?></td>
                                            <td><?php echo $val->total_sks?></td>
                                            <td><?php echo $val->jml_d?></td>
                                            <td><?php echo $val->jml_e?></td>
                                            <td><?php echo $val->jml_mk_krs?></td>
                                            <td><?php echo $val->jml_sks_krs?></td>
                                            <td><a href="<?php echo base_url().'file/'.$val->file_proposal?>" class="btn btn-info" download>Download</a></td>
                                            <td><a href="<?php echo base_url().'file/'.$val->file_khs?>" class="btn btn-info" download>Download</a></td>
                                            <td><a href="<?php echo base_url().'file/'.$val->file_krs?>" class="btn btn-info" download>Download</a></td>
                                            <td><?php echo $val->nama_dosen_pem1?></td>
                                            <td><?php echo $val->nama_dosen_pem2?></td>
                                            <td bgcolor="#ffff00">
                                                <b><?php echo $val->status?></b>
                                            </td>
                                            <td>
                                                <form method="post" action="ftambah_nilai_seminarta1">
                                                    <input type="hidden" name="id_daftar_ta1" value="<?php echo $val->id_daftar_ta1?>">
                                                    <input type="hidden" name="nim" value="<?php echo $val->nim?>">
                                                    <input type="submit" name="submit" value="Nilai Seminar TA 1" class="btn btn-info ">
                                                </form>
                                            </td>
                                            <td>
                                                <form method="post" action="#">
                                                    <!-- <input type="hidden" name="id_daftar_ta1" value="<?php echo $val->id_daftar_ta1?>">
                                                    <input type="hidden" name="nim" value="<?php echo $val->nim?>"> -->
                                                    <input type="submit" name="submit" value="UBAH" class="btn btn-info ">
                                                </form>
                                            </td>
                                            <td>
                                               
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

        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cetak Sesuai Periode</h4>
      </div>

      <!-- untuk modal select -->
      <div class="modal-body">
      <form method="POST" action="cetak_daftarta1">
        Pilih periode : <select name="cetakperiode">
            <option>--- PILIH PERIODE ---</option>
            <option value="2016/2017">2016/2017</option>
            <option value="2017/2018">2017/2018</option>
        </select><br><br>
        <button type="submit" class="btn bg-deep-orange waves-effect">Cetak</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>