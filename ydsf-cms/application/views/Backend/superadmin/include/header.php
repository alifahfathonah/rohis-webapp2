<!DOCTYPE html>

<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Adminre - backend</title>
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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/layout.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/uielement.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/datepicker.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/modernizr/js/modernizr.js"></script>
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
         <script src="<?php echo base_url('assets/javascript/tinymce/tinymce.min.js');?>"></script>



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
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Profile dropdown -->
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                            <span class="meta">
                                <span class="avatar"><img src="<?php echo base_url(); ?>assets/image/user.png" class="img-circle" alt="" /></span>
                                <span class="text hidden-xs hidden-sm pl5"><?php echo $this->session->userdata('username'); ?></span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('config/login'); ?>"><span class="icon"><i class="ico-exit"></i></span> Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
                <!--/ END Right nav -->
            </div>
            <!--/ END Toolbar -->
        </header>
        <aside class="sidebar sidebar-left sidebar-menu">
            <!-- START Sidebar Content -->
        <section class="content slimscroll">
                <h5 class="heading">Main Menu</h5>
                <!-- START Template Navigation/Menu -->
                <ul class="topmenu topmenu-responsive" data-toggle="menu">
                    <li  class="active open">
                        <a href="<?php echo site_url('akses_superadmin/setting_rohis'); ?>" data-target="#dashboard" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-stack-list"></i></span>
                            <span class="text">Akun Rohis</span>
                            
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('akses_superadmin/dashboard'); ?>" data-toggle="submenu" data-target="#form" data-parent=".topmenu">
                            <span class="figure"><i class="ico-dashboard"></i></span>
                            <span class="text"> Dashboard</span>
                            
                        </a>
                    </li>
                      <li>
                        <a href="<?php echo site_url('akses_superadmin/tampil_berita'); ?>" data-toggle="submenu" data-target="#form" data-parent=".topmenu">
                            <span class="figure"><i class=" ico-stack4"></i></span>
                            <span class="text">Berita</span>
                            
                        </a>
                    </li>
                <li>
                        <a href="javascript:void(0);" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-money"></i></span>
                            <span class="text">Keuangan</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="components" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Keuangan</li>
                            <li >
                                <a href="<?php echo site_url('akses_superadmin/laporan_pemasukan'); ?>">
                                    <span class="text">Laporan Pemasukan</span>
                                </a>
                            </li>
                               <li >
                                <a href="<?php echo site_url('akses_superadmin/laporan_pengeluaran'); ?>">
                                    <span class="text">Laporan Pengeluaran</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>