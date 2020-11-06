
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="ico-stack4"></span> Rincian Berita</h4>
                    </div>
                    <div class="page-header-section">
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START Row -->
                <div class="row">
                    <!-- START left / top side -->
                    <div class="col-lg-9">
                        <!-- Blog post #1 -->
                        <article class="panel overflow-hidden">
                            <!-- Owl Carousel -->
                            <header id="carousel1" class="owl-carousel">
                                <div class="image"><img src="<?php 
                    if(empty($detail_info['image'])){
                        echo base_url();?>assets/image/images/avatar.png ?>
                    <?php 
                    }
                    else{ 
                        echo base_url();?>assets/image/images/<?php echo $detail_info['image']; 
                    }?>" height="10%" width="100%"></div>
                            </header>
                            <!--/ Owl Carousel -->

                            <!-- Content -->
                            <section class="panel-body">
                                <div class="row">
                                    <!-- post date -->
                                    <div class="col-xs-3 col-sm-1 col-md-1 pr0">
                                        <div class="panel widget">
                                            <div class="pa10">
                                                <h4 class="bold nm text-primary text-center"><?php echo justtanggal($detail_info['tanggal']) ?></h4>
                                            </div>
                                            <hr class="nm">
                                            <div class="pa10 bgcolor-default">
                                                <p class="semibold nm text-default text-center"><?php echo  bulan(justbulan($detail_info['tanggal']),1); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ post date -->

                                    <!-- post content -->
                                    <div class="col-xs-9 col-sm-11 col-md-11">
                                        <!-- heading -->
                                        <h4 class="mt0"><a href="javascript:void(0);" class="text-primary"><?php echo $detail_info['judul'] ?></a></h4>
                                        <!--/ heading -->

                                        <!-- text -->
                                        <div class="text-default">
                                   
                                            <p><?php echo $detail_info['konten_berita'] ?></p>
                                        </div>
                                        <!--/ text -->
                                        <!-- meta -->
                                        <p class="meta mt15 mb0">
                                            <a href="javascript:void(0);"></a><!-- comments -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">In </span><a href="javascript:void(0);"><?php echo $detail_info['kategori_berita'] ?></a><!-- category -->
                                           
                                        </p>
                                        <!--/ meta -->
                                    </div>
                                    <!--/ post content -->
                                </div>
                            </section>
                            <!--/ Content -->

                        </article>
                        <!--/ Blog post #1 -->
                    </div>
                    <!--/ END left / top side -->

                    <!-- START right / bottom side -->
                    <div class="col-lg-3">
                        <!-- Tabbed content -->
                        <div class="row">
                                
                                   <div class="row">
                            <div class="col-xs-12">
                                <h5 class="semibold mt0 text-primary">Berdasarkan Data Terbaru</h5>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#popular" data-toggle="tab">Recent</a></li>
                                    
                                </ul>
                                <div class="tab-content panel nm">
                                    <div class="tab-pane active pl0 pr0" id="popular">
                                        <!-- Media list -->
                                        <?php foreach ($sort->result() as $key) {?>
                                            
                                      
                                        <div class="media-list">
                                            <a href="<?php echo site_url('akses_superadmin/view_detail/'.$key->id) ?>" class="media border-dotted">
                                                 <span class="pull-left">
                                                  <img src="<?php 
                    if(empty($key->image)){

                        echo base_url();?>assets/image/images/avatar.png ?>
                    <?php 
                    }
                    else{ 
                        echo base_url();?>assets/image/images/<?php echo $key->image; 
                    }?>" height="40px" width="40px;"'>
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta"><?php echo tgl_jam_sql($key->tanggal) ?></span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading"><?php echo $key->kategori_berita ?></span>
                                                </span>
                                            </a>
                                        </div>

                                        <?php } ?>
                                        <!--/ Message list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Tabbed content -->
                    </div>
                    <!--/ END right / bottom side -->
                </div>
                <!--/ END Row -->
            </div>
            <!--/ END Template Container -->