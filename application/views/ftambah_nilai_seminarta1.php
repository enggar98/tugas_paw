<div class="container-fluid">
    <div class="block-header">
        <h2>
            KELOLA NILAI SEMINAR TA 2
        </h2>
    </div>
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>FORM UPDATE NILAI SIDANG</h2>
                </div>
                <div class="body">
                    <form id="form_validation" method="POST" action="insert_nilai_seminarta1"> 
                         <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nim" value="<?php echo $nim?>" >
                                <label class="form-label">NIM</label>
                            </div>
                        </div> 
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama" value="<?php echo $nama?>" >
                                <label class="form-label">Nama</label>
                            </div>
                        </div> 
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="peminatan" value="<?php echo $peminatan?>" >
                                <label class="form-label">Peminatan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="judul_penelitian" value="<?php echo $judul_penelitian?>" required>
                                <label class="form-label">Judul Penelitian</label>
                            </div>
                        </div> 
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="judul_perbaikan" value="<?php echo $judul_perbaikan?>" required>
                                <label class="form-label">Judul Perbaikan</label>
                            </div>
                        </div>         
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <label>Dosen Pembimbing 1</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama_dosen_pem1" class="form-control" value="<?php echo $nama_dosen_pem1?>" placeholder="Dosen Pembimbing 1" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="materi_penelitian_pem1" class="form-control" placeholder="Materi Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  name="pemahaman_pem1" class="form-control" placeholder="Teori Penunjang & Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pencapaian_target_pem1" class="form-control" placeholder="Pencapaian Target" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="aspek_kedisiplinan_pem1" class="form-control" placeholder="Aspek Kedisiplinan" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pemahaman_penelitian_pem1" class="form-control" placeholder="Pemahaman Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="kedalaman_teori_pem1" class="form-control" placeholder="Kedalaman Teori Keilmuan" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="metode_penelitian_pem1" class="form-control" placeholder="Metode Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="analisis_hasil_penelitian_pem1" class="form-control" placeholder="Analisis Hasil Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="teknik_presentasi_pem1" class="form-control" placeholder="Teknik Presentasi" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="teknik_penulisan_pem1" class="form-control" placeholder="Teknik Penulisan" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pemahaman_pengembangan_pl_pem1" class="form-control" placeholder="Pemahaman Pengembangan Perangkat Lunak" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Dosen Pembimbing 2</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama_dosen_pem2" class="form-control" value="<?php echo $nama_dosen_pem2?>" placeholder="Dosen Pembimbing 2" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="materi_penelitian_pem2" class="form-control" placeholder="Materi Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pemahaman_pem2" class="form-control" placeholder="Teori Penunjang & Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pencapaian_target_pem2" class="form-control" placeholder="Pencapaian Target" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="aspek_kedisiplinan_pem2" class="form-control" placeholder="Aspek Kedisiplinan" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pemahaman_penelitian_pem2" class="form-control" placeholder="Pemahaman Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="kedalaman_teori_pem2" class="form-control" placeholder="Kedalaman Teori Keilmuan" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="metode_penelitian_pem2" class="form-control" placeholder="Metode Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="analisis_hasil_penelitian_pem2" class="form-control" placeholder="Analisis Hasil Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="teknik_presentasi_pem2" class="form-control" placeholder="Teknik Presentasi" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="teknik_penulisan_pem2" class="form-control" placeholder="Teknik Penulisan" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pemahaman_pengembangan_pl_pem2" class="form-control" placeholder="Pemahaman Pengembangan Perangkat Lunak" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Dosen Penguji 1</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama_dosen_peng1" class="form-control" placeholder="Dosen Penguji 1" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pemahaman_penelitian_peng1" class="form-control" placeholder="Pemahaman Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="kedalaman_teori_peng1" class="form-control" placeholder="Kedalaman Teori Keilmuan" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="metode_penelitian_peng1" class="form-control" placeholder="Metode Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="analisis_hasil_penelitian_peng1" class="form-control" placeholder="Analisis Hasil Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="teknik_presentasi_peng1" class="form-control" placeholder="Teknik Presentasi" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="teknik_penulisan_peng1" class="form-control" placeholder="Teknik Penulisan" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pemahaman_pengembangan_pl_peng1" class="form-control" placeholder="Pemahaman Pengembangan Perangkat Lunak" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Dosen Penguji 2</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama_dosen_peng2" class="form-control" placeholder="Dosen Penguji 2" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pemahaman_penelitian_peng2" class="form-control" placeholder="Pemahaman Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="kedalaman_teori_peng2" class="form-control" placeholder="Kedalaman Teori Keilmuan" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="metode_penelitian_peng2" class="form-control" placeholder="Metode Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="analisis_hasil_penelitian_peng2" class="form-control" placeholder="Analisis Hasil Penelitian" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="teknik_presentasi_peng2" class="form-control" placeholder="Teknik Presentasi" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="teknik_penulisan_peng2" class="form-control" placeholder="Teknik Penulisan" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="pemahaman_pengembangan_pl_peng2" class="form-control" placeholder="Pemahaman Pengembangan Perangkat Lunak" />
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- #END# Basic Validation -->