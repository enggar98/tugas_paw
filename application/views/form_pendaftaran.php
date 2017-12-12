<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Pendaftaran</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url();?>assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo base_url();?>assets/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url();?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url();?>assets/index.html">PENDAFTARAN</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <div class="container" style="margin-top:100px;">
            <div class="block-header">
                <h2>
                    DAFTAR AKUN  
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SILAHKAN DAFTAR DISINI...</h2>
                        </div>
                        <div class="body">                            
                            <form id="form_validation" action="<?=base_url('login/insert_pendaftaran')?>" method="POST">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" placeholder="Username" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nim" placeholder="NIM" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tmp_lahir" placeholder="Tempat Lahir" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Pilih Tanggal Lahir" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control show-tick" name="jk" required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" name="alamat" placeholder="Alamat" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no_hp" placeholder="Nomor Telepon" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!--<select class="form-control show-tick" name="peminatan" required>
                                        <option value="">-- Pilih Peminatan --</option>
                                        <option value="SCDM">SCDM</option>
                                        <option value="SIE">SIE</option>
                                    </select>-->
                                </div>
                                <div class="form-group">
                                    <!--<select class="form-control show-tick" name="id_dosen_wali" required>
                                        <option value="">-- Pilih Dosen Wali --</option>
                                          <?php
                                              foreach($dosen as $datadosen) {

                                                echo "<option  value='".$datadosen[0]."'>".$datadosen[1]."</option>'";
                                              }
                                           ?>
                                    </select>-->
                                </div>
                                <input name="tambah" type="submit" class="btn btn-primary" value="SIMPAN">
                                <input name="reset" type="reset" class="btn btn-default btn-default" value="RESET">
                                <a href="<?php echo base_url();?>login" class="btn btn-primary" style="">LOGIN</a> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--#END# DateTime Picker -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin_sidebar.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/js/pages/forms/basic-form-elements.js"></script> -->

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {   
            $('#tgl_lahir').bootstrapMaterialDatePicker({format : 'YYYY-MM-DD', weekStart : 0, time: false });    
        }); 
    </script>
</body>
</html>