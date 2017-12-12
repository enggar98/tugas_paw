
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA NILAI SEMINAR TUGAS AKHIR 1
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
                                <table class="table table-bordered table-striped table-hover js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>ID Nilai Seminar TA 2</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Peminatan</th>
                                            <th>Judul Penelitian</th>
                                            <th>Judul Perbaikan</th>
                                            <th>Dosen Pembimbing 1</th>
                                            <th>Dosen Pembimbing 2</th>
                                            <th>Dosen Penguji 1</th>
                                            <th>Dosen Penguji 2</th>
                                            <th>Angka Mutu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data_nilai_seminarta2->result() as $key => $val):?>
                                        <tr>
                                            <td><?php echo $val->id_nilai_seminarta2?></td>
                                            <td><?php echo $val->nama?></td>
                                            <td><?php echo $val->nim?></td>
                                            <td><?php echo $val->peminatan?></td>
                                            <td><?php echo $val->judul_penelitian?></td>
                                            <td><?php echo $val->judul_perbaikan?></td>
                                            <td><?php echo $val->nama_dosen_pem1?></td>
                                            <td><?php echo $val->nama_dosen_pem2?></td>
                                            <td><?php echo $val->nama_dosen_peng1?></td>
                                            <td><?php echo $val->nama_dosen_peng2?></td>
                                            <td><?php echo $val->angka_mutu?></td>
                                            
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