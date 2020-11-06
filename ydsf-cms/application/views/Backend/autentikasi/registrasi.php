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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/xeditable/css/xeditable.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/xeditable/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css">    
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/layout.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/uielement.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/datepicker.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/modernizr/js/modernizr.js"></script>
         <script src="<?php echo base_url('assets/javascript/tinymce/tinymce.min.js');?>"></script>

    </head>
        
        <section id="main" role="main">
            <section class="container" style="margin-top: 150px;">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                         

                        <!-- Login form -->
                        <form class="panel" action="<?php echo site_url('config/registration') ?>" method="post">
                            <!-- Brand -->
                            <div class="text-center" style="margin-bottom:20px; margin-top:30px;">
                                <span class="logo-figure inverse"></span>
                                <span class="logo-text inverse"></span>
                                <h5 class="semibold text-muted mt-5">Login dengan akun anda.</h5>
                                        <?php echo $this->session->flashdata('message');  ?>
                            </div>
                            <!--/ Brand -->
                            <div class="panel-body">
                                <span class="semibold"><center> <?php echo $this->session->flashdata('error'); ?></center></span>
                                <div class="form-group">
                                    <div class="form-stack has-icon pull-right">
                                        <input name="username" type="text" class="form-control input-lg" placeholder="Username">
                                        <i class="ico-user2 form-control-icon"></i>
                                    </div>
                                          <div class="form-stack has-icon pull-right">
                                        <input name="email" type="text" class="form-control input-lg" placeholder="Email">
                                        <i class="ico-user2 form-control-icon"></i>
                                    </div>
                                    <div class="form-stack has-icon pull-right">
                                        <input name="password1" type="password" class="form-control input-lg" placeholder="Password">
                                        <i class="ico-lock2 form-control-icon"></i>
                                    </div>
                                     <div class="form-stack has-icon pull-right">
                                        <input name="password2" type="password" class="form-control input-lg" placeholder="Confirm your Password" >
                                        <i class="ico-lock2 form-control-icon"></i>
                                    </div>
                                </div>
                                
                                <div id="error-container" class="mb15"></div>
                                <div class="form-group nm">
                                    <button type="submit" class="btn btn-block btn-success"><span class="semibold">Masuk</span></button><br>

                                      <center><div class="mg-t-40 tx-center">You Have Account? <a href="<?php echo site_url('config/login'); ?>" class="tx-info">Sign In</a></div></center>
                                </div>
                            </div>
                        </form>

                        <hr>
                    </div>
                </div>
            </section>
            
        </section>
       
    <script type="text/javascript">
    $(document).ready(function(){
        $(" #alert" ).fadeOut(4000);
    });
    </script>