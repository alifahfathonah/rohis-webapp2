
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="ico-images"></span> Gambar</h4>
                    </div>
                     <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                               
                                <button class="btn btn-teal btn-sm" data-toggle="collapse" data-target="#form-task"><span class="ico-plus-circle2"></span>Tambah</button>
                        </div>
                    </div>


                  <form action="<?php echo site_url('upload/upload_test/action_add') ?>" class="collapse" id="form-task" data-parsley-validate method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Pembuat</label>
                                <input type="text" name="nama" class="form-control" readonly value="<?php echo $this->session->userdata('username'); ?>">
                            </div>
                            <div class="col-sm-4">
                                <div>
                                      <label class="control-label">Jam</label>
                                  <input type="time" name="jam" class="form-control">
                                    
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div>
                                    <label class="control-label">Tanggal</label>
                                      <input type="text" name="tanggal" class="tanggal form-control" placeholder="Masukan Tanggal">
                                </div>
                            </div>
                        </div>

                    </div>
                          <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Deskripsi</label>
                              <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-sm-3">
                                <label for="">Image</label>
                              <input type="file" name="userfile">
                            </div>
                     
                        </div>
                    </div>
              
                    <div class="form-group">
                        <button type="reset" class="btn btn-teal">Reset</button>
                        <button type="submit" class="btn btn-success">Add Task</button>
                    </div>
                </form>
                </div>
                  <div id="alert" class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
                      <div id="alert" class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                <div class="row">
                    <div class="col-md-12">
                    
                <!-- START Row -->
                <div class="row">
                    <!-- START left / top side -->
                    <div class="col-lg-9">
                        <!-- Blog post #2 -->
                    <?php if ($upload->num_rows() > 0) {?>
                    
                    
                        <?php foreach ($upload->result() as $data) {?>
                          
                        <div class="row">
                            <div class="col-xs-12">
                                <article class="panel overflow-hidden">
                                    <!-- Thumbnail -->
                                    <header class="thumbnail">
                                        <!-- media -->
                                        <div class="media">
                                            <img src="<?php 
                    if(empty($data->image)){

                        echo base_url();?>assets/image/images/placeholder.jpg ?>
                    <?php 
                    }
                    else{ 
                        echo base_url(); ?>/assets/image/upload/<?php echo $data->image;
                    }?>" alt="" width="100%" style="height: 50%">
                                          
                                        </div>
                                        <!--/ media -->
                                    </header>
                                    <!--/ Thumbnail -->

                            <!-- Content -->
                            <section class="panel-body">

                                <div class="row">
                                    <!-- post date -->
                                    <div class="col-xs-3 col-sm-1 col-md-1 pr0">
                                        <div class="panel widget">
                                            <div class="pa10">
                                                <h4 class="bold nm text-primary text-center"><?php echo $data->tanggal ?></h4>
                                            </div>
                                            <hr class="nm">
                                            <div class="pa10 bgcolor-default">
                                                <p class="semibold nm text-default text-center"><?php echo $data->tanggal ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ post date -->

                                    <!-- post content -->
                                    <div class="col-xs-9 col-sm-11 col-md-11">
                                        <!-- Meta & button -->  <!-- text -->
                                        <div class="text-default">
                                            <p><?php echo $data->deskripsi; ?></p>
                                            
                                        </div>
                                        <!--/ text -->
                                        <div class="table-layout mt15 mb0">
                                            <div class="col-sm-6">
                                                <!-- meta -->
                                                <p class="meta nm">
                                                    <span class="text-muted mr5 ml5">&#8226;</span>
                                                    <span class="text-muted">Time </span><a href="javascript:void(0);"><?php echo ($data->jam) ?></a><!-- category -->
                                                    <span class="text-muted mr5 ml5">&#8226;</span>
                                                    <span class="text-muted">By </span><a href="javascript:void(0);"><?php echo $this->session->userdata('username'); ?></a><!-- author -->
                                                </p>
                                                <!--/ meta -->
                                            </div>
                                             <div class="col-sm-6">
                                                 <a class="btn btn-teal btn-sm pull-right" data-toggle="modal" data-target="#myModalmd<?=$data->id;?>"> <i class=" ico-pencil2" title="Edit"></i> Update Data</a>

                                                 <a class="btn btn-danger btn-sm" href="<?php echo site_url('upload/delete/'.$data->id); ?>" style="margin-left: 120px" onclick="return confirm('apakah anda yakin ingin menghapus nya? ')"><span class="ico-remove3"></span>Remove Data</a>
                                            </div>
                                        </div>
                                        <!-- Meta & button -->
                                    </div>
                                    <!--/ post content -->
                                </div>
                            </section>
                            <!--/ Content -->
                                </article>
                            </div>
                        </div>
                        <!--/ Blog post #2 -->
                  <?php } ?>
                  <?php }else{?>
                        
                               <div class="col-lg-6 col-lg-offset-3">
                            <div class="panel panel-minimal" style="margin-top:10%;">
                                <!-- Upper Text -->
                                <div class="panel-body text-center">
                                    <i class="ico-file-remove2 longshadow fsize112 text-default"></i>
                                </div>
                                <div class="panel-body text-center">
                                    <h1 class="semibold longshadow text-center text-default fsize32 mb10 mt0">WHOOPS!!</h1>
                                    <h4 class="semibold text-primary text-center nm">SORRY,NO DATA THIS PAGE...</h4>
                                </div>
                                <!--/ Upper Text -->
                            </div>
                        </div>
              <?php } ?>
             
               <center ><?php echo $this->pagination->create_links(); ?></center>

                </div>
                    <div class="col-lg-3">
   
                                     <!-- Tabbed content -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h5 class="semibold mt0 text-primary">Berdasarkan Aktivitas Terbaru</h5>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#popular" data-toggle="tab">News Update</a></li>
                                </ul>
                                <div class="tab-content panel nm">
                                    <div class="tab-pane active pl0 pr0" id="popular">
                                        <!-- Media list -->
                                        <?php if ($tabbed->num_rows() > 0){ ?>
                                        <?php foreach ($tabbed->result() as $value) {?>
                                          
                                        <div class="media-list">
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">

                                            <img src="<?php 
                                                if(empty($value->image)){

                                                    echo base_url();?>assets/image/upload/placeholder.jpg ?>
                                                <?php 
                                                }
                                                else{ 
                                                    echo base_url(); ?>/assets/image/upload/<?php echo $value->image;
                                                }?>"  class="media-object" alt="" height="20%">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">       <span class="media-meta"><?php echo $value->tanggal ?> - <?php echo $value->jam; ?>
                                                     </span></span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading"><?php echo $this->session->userdata('username') ?></span>
                                                </span>
                                            </a>
                                        </div>                                        
                                        <?php } ?>
                                        <?php }else{?>
                                    <div class="media-list">
                                            <div class="panel-body text-center">
                                            <h1 class="semibold longshadow text-center text-default fsize32 mb10 mt0">WHOOPS!!</h1>
                                            <h5 class="semibold text-primary text-center nm">SORRY,NO DATA THIS PAGE...</h5>
                                        </div>
                                    </div>
                                        <?php } ?>
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

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->
        
            <?php foreach ($upload->result() as $data){ ?>
            <div class="modal fade bs-example-modal-sm" id="myModalmd<?=$data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog modal-md">
                      <form action="<?php echo site_url('upload/edit_gambar'); ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3 class="semibold modal-title"><span class="ico-stack-list"></span> Ubah</h3>
                            </div>
                                <div class="modal-body">
                                <div class="panel-body">
                             <input type="hidden" name="id" required class="form-control" value="<?=$data->id;?>">
                                   <div class="form-group">
                                    <label for="">Pembuat</label>
                                      <input type="text" name="username" readonly class="form-control" value="<?php echo $this->session->userdata('username'); ?>">
                                </div>
                             <div class="form-group">
                               <label for="">Tanggal</label>
                               <input type="text" name="tanggal" required class="tanggal form-control" value="<?=$data->tanggal?>">
                             </div>
                              <div class="form-group">
                               <label for="">Jam</label>
                               <input type="time" name="jam" required class="form-control" value="<?=$data->jam?>">
                             </div>
                                 
                                 <div class="form-group">
                                    <label for="">Gambar</label>
                                   <div><img src="<?php echo base_url();?>assets/image/upload/<?php echo $data->image; ?>" height="100px" width="100px;" alt="" class='img4'></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea name="deskripsi" id="" cols="30" rows="10"><?php echo $data->deskripsi ?></textarea>
                                </div>
                                  <div class="form-group">
                                    <label for="">Gambar Baru</label>
                                    <input type="file" name="image">
                                </div>
                            </div>
                              </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class=" ico-close3"></span> Close</button>
                                <button type="submit" class="btn btn-primary"> <span class="ico-save"></span> Save changes</button>
                            </div>
                             </form>
                        </div>
                    </div>
                </div>
            <?php } ?> 

