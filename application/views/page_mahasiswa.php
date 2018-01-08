        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   KELOLA MAHASISWA
                    <small>Teknik Informatika <a href="https://if.uinsgd.ac.id/" target="_blank">| UIN Bandung</a></small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA DOSEN
                    <small>Teknik Informatika <a href="https://if.uinsgd.ac.id/" target="_blank">| UIN Bandung</a></small>
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
                                <table class="table table-bordered table-striped table-hover js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>ID Mahasiswa</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>No Tlp</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Status</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data_mahasiswa->result() as $key => $val): ?>
                                        <tr>
                                            <td><?php echo $val->id_mhs?></td>
                                            <td><?php echo $val->nim?></td>
                                            <td><?php echo $val->nama?></td>
                                            <td><?php echo $val->no_hp?></td>
                                            <td><?php echo $val->tmp_lahir?></td>
                                            <td><?php echo $val->tgl_lahir?></td>
                                            <td><?php echo $val->jk?></td>
                                            <td><?php echo $val->status_mhs?></td>
                                            <td><?php echo $val->alamat?></td>
                                            <td><?php echo $val->email?></td>
                                            <td>
                                                <form method="post" action="fupdate_mahasiswa">
                                                    <input type="hidden" name="id_mhs" value="<?php echo $val->id_mhs?>">
                                                    <input type="submit" name="submit" value="Edit" class="btn btn-info ">
                                                </form>
                                                <form method="post" action="hapus_mahasiswa">
                                                    <input type="hidden" name="id_mhs" value="<?php echo $val->id_mhs?>">
                                                    <input type="submit" name="submit" value="Hapus" class="btn btn-danger ">
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
       