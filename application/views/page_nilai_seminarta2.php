
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    DATA NILAI SEMINAR TUGAS AKHIR 2
                    <small>Universitas Jenderal Achmad Yani <a href="https://datatables.net/" target="_blank">| UNJANI</a></small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <form method="post" action="form_tambah_dosen">
                                <input type="submit" name="submit" value="Tambah Data" class="btn bg-deep-orange waves-effect">
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
                                            <th>ID Nilai Seminar TA 2</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Peminatan</th>
                                            <th>Judul Penelitian</th>
                                            <th>Judul Perbaikan</th>
                                            <th>Dosen Pembimbing 1</th>
                                            <th>Materi Penelitian</th>
                                            <th>Pemahaman</th>
                                            <th>Pencapaian Target</th>
                                            <th>Aspek Kedisiplinan</th>
                                            <th>Pemahaman Penelitian</th>
                                            <th>Metode Penelitian</th>
                                            <th>Kedalaman Teori</th>
                                            <th>Analisis Hasil Penelitian</th>
                                            <th>Teknik Presentasi</th>
                                            <th>Teknik Penulisan</th>
                                            <th>Pemahaman Pengembangan PL</th>
                                            <th>Dosen Pembimbing 2</th>
                                            <th>Materi Penelitian</th>
                                            <th>Pemahaman</th>
                                            <th>Pencapaian Target</th>
                                            <th>Aspek Kedisiplinan</th>
                                            <th>Pemahaman Penelitian</th>
                                            <th>Metode Penelitian</th>
                                            <th>Kedalaman Teori</th>
                                            <th>Analisis Hasil Penelitian</th>
                                            <th>Teknik Presentasi</th>
                                            <th>Teknik Penulisan</th>
                                            <th>Pemahaman Pengembangan PL</th>
                                            <th>Dosen Penguji 1</th>
                                            <th>Pemahaman Penelitian</th>
                                            <th>Kedalaman Teori</th>
                                            <th>Metode Penelitian</th>
                                            <th>Analisis Hasil Penelitian</th>
                                            <th>Teknik Presentasi</th>
                                            <th>Teknik Penulisan</th>
                                            <th>Pemahaman Pengembangan PL</th>
                                            <th>Dosen Penguji 2</th>
                                            <th>Pemahaman Penelitian</th>
                                            <th>Kedalaman Teori</th>
                                            <th>Metode Penelitian</th>
                                            <th>Analisis Hasil Penelitian</th>
                                            <th>Teknik Presentasi</th>
                                            <th>Teknik Penulisan</th>
                                            <th>Pemahaman Pengembangan PL</th>
                                            <th>Aksi</th>
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
                                            <td><?php echo $val->materi_penelitian_pem1?></td>
                                            <td><?php echo $val->pemahaman_pem1?></td>
                                            <td><?php echo $val->pencapaian_target_pem1?></td>
                                            <td><?php echo $val->aspek_kedisiplinan_pem1?></td>
                                            <td><?php echo $val->pemahaman_penelitian_pem1?></td>
                                            <td><?php echo $val->metode_penelitian_pem1?></td>
                                            <td><?php echo $val->kedalaman_teori_pem1?></td>
                                            <td><?php echo $val->analisis_hasil_penelitian_pem1?></td>
                                            <td><?php echo $val->teknik_presentasi_pem1?></td>
                                            <td><?php echo $val->teknik_penulisan_pem1?></td>
                                            <td><?php echo $val->pemahaman_pengembangan_pl_pem1?></td>
                                            <td><?php echo $val->nama_dosen_pem2?></td>
                                            <td><?php echo $val->materi_penelitian_pem2?></td>
                                            <td><?php echo $val->pemahaman_pem2?></td>
                                            <td><?php echo $val->pencapaian_target_pem2?></td>
                                            <td><?php echo $val->aspek_kedisiplinan_pem2?></td>
                                            <td><?php echo $val->pemahaman_penelitian_pem2?></td>
                                            <td><?php echo $val->metode_penelitian_pem2?></td>
                                            <td><?php echo $val->kedalaman_teori_pem2?></td>
                                            <td><?php echo $val->analisis_hasil_penelitian_pem2?></td>
                                            <td><?php echo $val->teknik_presentasi_pem2?></td>
                                            <td><?php echo $val->teknik_penulisan_pem2?></td>
                                            <td><?php echo $val->pemahaman_pengembangan_pl_pem2?></td>
                                            <td><?php echo $val->nama_dosen_peng1?></td>
                                            <td><?php echo $val->pemahaman_penelitian_peng1?></td>
                                            <td><?php echo $val->kedalaman_teori_peng1?></td>
                                            <td><?php echo $val->metode_penelitian_peng1?></td>
                                            <td><?php echo $val->analisis_hasil_penelitian_peng1?></td>
                                            <td><?php echo $val->teknik_presentasi_peng1?></td>
                                            <td><?php echo $val->teknik_penulisan_peng1?></td>
                                            <td><?php echo $val->pemahaman_pengembangan_pl_peng1?></td>
                                            <td><?php echo $val->nama_dosen_peng2?></td>
                                            <td><?php echo $val->pemahaman_penelitian_peng2?></td>
                                            <td><?php echo $val->kedalaman_teori_peng2?></td>
                                            <td><?php echo $val->metode_penelitian_peng2?></td>
                                            <td><?php echo $val->analisis_hasil_penelitian_peng2?></td>
                                            <td><?php echo $val->teknik_presentasi_peng2?></td>
                                            <td><?php echo $val->teknik_penulisan_peng2?></td>
                                            <td><?php echo $val->pemahaman_pengembangan_pl_peng2?></td>
                                            <td><?php echo $val->angka_mutu?></td>
                                            <td>
                                                <form method="post" action="fupdate_dosen">
                                                    <!-- <input type="hidden" name="id_dosen" value="<?php echo $val->id_dosen?>"> -->
                                                    <input type="submit" name="submit" value="Edit" class="btn btn-info ">
                                                </form>
                                                <form method="post" action="hapus_dosen">
                                                    <!-- <input type="hidden" name="id_user" value="<?php echo $val->id_user?>"> -->
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
        </div>