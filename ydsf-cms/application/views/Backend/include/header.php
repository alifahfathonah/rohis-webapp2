<!DOCTYPE html>

<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Falah - Backend</title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/xeditable/css/xeditable.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/xeditable/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css">
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/css/summernote.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/layout.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/uielement.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/datepicker.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/modernizr/js/modernizr.js"></script>
         <script src="<?php echo base_url('assets/javascript/tinymce/tinymce.min.js');?>"></script>

                     <script>
                    tinymce.init({selector:'textarea'});
                    
                    $(function(){
                        $(".tanggal1").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $(".tanggal2").datepicker({
                            format:'yyyy-mm-dd' 
                        });
                        
                        $(".tanggal").datepicker({
                            format:'yyyy-mm-dd'
                        });
                    })
            </script>
              <style>
               .img4{
                 width:60px;
                 height:70px;
                transition: all 0.5s;
                -o-transition: all 0.5s;
                -moz-transition: all 0.5s;
                -webkit-transition: all 0.5s;
                }
                .img4:hover {
                  transition: all 3s;
                  -o-transition: all 3s;
                  -moz-transition: all 3s;
                  -webkit-transition: all 3s;
                  transform: scale(3);
                  -moz-transform: scale(3);
                  -o-transform: scale(3);
                  -webkit-transform: scale(3);
                  box-shadow: 2px 2px 6px rgba(0,0,0,2);
                }
            </style>


   <script type="text/javascript">

        function do_this(){
            var checkboxes = document.getElementsByName('id[]');
            var button = document.getElementById('toggle');
            
            if(button.value == 'Select All'){
                for(var i in checkboxes){
                    checkboxes[i].checked = 'TRUE';
                }
                button.value = 'Deselect';
            }else{
                for(var i in checkboxes){
                    checkboxes[i].checked = '';
                }
                button.value = 'Select All';
            }
        }

    </script>

       <script type="text/javascript">

        function cek_this(){
            var checkboxes = document.getElementsByName('id_rohis[]');
            var button = document.getElementById('toggle');
            
            if(button.value == 'Select All'){
                for(var i in checkboxes){
                    checkboxes[i].checked = 'TRUE';
                }
                button.value = 'Deselect';
            }else{
                for(var i in checkboxes){
                    checkboxes[i].checked = '';
                }
                button.value = 'Select All';
            }
        }

    </script>

    <script type="text/javascript">
    $(document).ready(function(){
        $(" #alert" ).fadeOut(4000);
    });
    </script>
    </head>

    <!-- START Body -->
    <body>
        <!-- START Template Header -->
        <header id="header" class="navbar">
            <!-- START navbar header -->
            <div class="navbar-header">
                <!-- Brand -->
                <a class="navbar-brand" href="javascript:void(0);">
                    <span class="logo-figure"></span>
                    <span class="logo-text"></span>
                </a>
                <!--/ Brand -->
            </div>
            <div class="navbar-toolbar clearfix">
                <!-- START Left nav -->
                <ul class="nav navbar-nav navbar-left">
                    <!-- Sidebar shrink -->
                    <li class="hidden-xs hidden-sm">
                        <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                            <span class="meta">
                                <span class="icon"></span>
                            </span>
                        </a>
                    </li>
                    <li class="navbar-main hidden-lg hidden-md hidden-sm">
                        <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                            <span class="meta">
                                <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                            </span>
                        </a>
                    </li>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Profile dropdown -->
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                            <span class="meta">
                                <span class="avatar"><img src="<?php echo base_url(); ?>assets/image/user.png" class="img-circle" alt="" /></span>
                                <span class="text hidden-xs hidden-sm pl5"><?php echo $this->session->userdata('username'); ?>

                                </span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="divider"></li>
                            </li>
                            <li><a href="<?php echo site_url('config/login'); ?>"><span class="icon"><i class="ico-exit"></i></span> Sign Out</a></li>
                        </ul>
                    </li>
        
                </ul>
                <!--/ END Right nav -->
            </div>
            <!--/ END Toolbar -->

        <div id="bs-modal-ss" class="modal fade">
                    <div class="modal-dialog modal-sm">
                     <form action="<?php echo site_url('profil/ubah_password'); ?>" method="post">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3 class="semibold modal-title "><span class="ico-stackexchange"></span> Ubah Password</h3>
                            </div>
                          <div class="modal-body">
                                <div class="panel-body">
                                   <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" readonly value="<?php echo $this->session->userdata('username'); ?>">
                                </div>
                                   <div class="form-group">
                                    <label for="">Password Lama</label>
                                    <input type="password" name="password" class="form-control" required placeholder="Masukan Password Lama Anda">
                                </div>
                                <div class="form-group">
                                    <label for="">Password Baru</label>
                                    <input type="password" name="password2" class="form-control" required placeholder="Masukan Password Baru Anda">
                                </div>
                            </div>
                              </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class=" ico-close3"></span> Batal</button>
                                <button type="submit" class="btn btn-primary btn-sm"><span class="ico-save"></span> Simpan</button>
                            </div>
                        </div>
                          </form>
                    </div>
                </div>


        </header>
        <aside class="sidebar sidebar-left sidebar-menu">
            <!-- START Sidebar Content -->
            <section class="content slimscroll">
                <h5 class="heading">Main Menu</h5>
                <!-- START Template Navigation/Menu -->
                <ul class="topmenu topmenu-responsive" data-toggle="menu">
                   
                                    <li >
                        <a href="<?php echo site_url('aktivitas_rohis/jadwal_kegiatan'); ?>" data-toggle="submenu" data-target="#table" data-parent=".topmenu">
                            <span class="figure"><i class=" ico-calendar4"></i></span>
                            <span class="text">Kegiatan</span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="table" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Kegiatan</li>
                        </ul>
                    </li>
                
                    <li >
                        <a href="<?php echo site_url('tim/show_tim'); ?>" data-toggle="submenu" data-target="#table" data-parent=".topmenu">
                            <span class="figure"><i class=" ico-group"></i></span>
                            <span class="text">Tim</span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="table" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Tim</li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                          <li >
                        <a href="<?php echo site_url('berita/data_berita'); ?>" data-toggle="submenu" data-target="#table" data-parent=".topmenu">
                            <span class="figure"><i class=" ico-stack4"></i></span>
                            <span class="text">Berita</span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="table" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Berita</li>
                        </ul>
                    </li>
                            <li >
                        <a href="<?php echo site_url('siswa_muslim/tampil_siswa'); ?>" data-toggle="submenu" data-target="#table" data-parent=".topmenu">
                            <span class="figure"><i class="ico-user"></i></span>
                            <span class="text">Siswa</span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="table" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Siswa</li>
                        </ul>
                    </li>
                <li>
                        <a href="javascript:void(0);" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-money"></i></span>
                            <span class="text">Keuangan</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="components" class="submenu collapse">
                            <li class="submenu-header ellipsis">Keuangan</li>
                               <li >
                                <a href="<?php echo site_url('keuangan/tampil_pemasukan'); ?>">
                                    <span class="text">Pemasukan</span>
                                </a>
                            </li>
                            <li >
                                <a href="<?php echo site_url('keuangan/laporan_pemasukan'); ?>">
                                    <span class="text">Laporan Pemasukan</span>
                                </a>
                            </li>
                            <li >
                                <a href="<?php echo site_url('keuangan/tampil_pengeluaran'); ?>">
                                    <span class="text">Pengeluaran</span>
                                </a>
                            </li>
                               <li >
                                <a href="<?php echo site_url('keuangan/laporan_pengeluaran'); ?>">
                                    <span class="text">Laporan Pengeluaran</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                           <li >
                        <a href="<?php echo site_url('upload/upload_test'); ?>" data-toggle="submenu" data-target="#table" data-parent=".topmenu">
                            <span class="figure"><i class=" ico-images"></i></span>
                            <span class="text">Gambar</span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="table" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Upload</li>
                        </ul>
                    </li>
                    </ul>
                </section>
            </aside>