
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="ico-stack4"></span> Berita</h4>
                        
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                               
                                <button class="btn btn-danger btn-sm" data-toggle="collapse" data-target="#form-task"><span class="ico-plus-circle2"></span>Tambah</button>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                              <form action="<?php echo site_url('berita/data_berita/action_add') ?>" class="collapse" id="form-task" data-parsley-validate method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Pembuat</label>
                                <input type="text" name="tanggal" class="form-control" readonly class="tanggal" required value="<?php echo $this->session->userdata('username'); ?>">
                            </div>
                            <div class="col-sm-4">
                                <div>
                                    <label class="control-label">Judul</label>
                                    <input type="text" name="judul" class="form-control" requireD placeholder="Masukan Judul">
                                </div>
                            </div>
                              <div class="col-sm-2">
                                <label class="control-label">Gambar</label>
                                 <br>
                                    <input type="file" name="userfile" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                              <div class="col-sm-4">
                                <label class="control-label">Konten Berita</label>
                                 <br>
                                   <textarea name="konten_berita" id="" cols="30" rows="10"></textarea>
                            </div>
                           <div class="col-sm-4">
                                <div>
                                    <label class="control-label">Kategori Berita</label>
                                    <input type="text" name="kategori_berita" class="form-control" requireD placeholder="Masukan Berita">
                                </div>
                              
                            </div>
                            <div class="col-sm-4">
                                <label class="control-label">Tanggal</label>
                                 <br>
                                    <input type="text" name="tanggal" class="tanggal form-control" placeholder="Masukan tanggal">
                            </div>
                          
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-teal">Reset</button>
                        <button type="submit" class="btn btn-success">Add Task</button>
                    </div>
                </form>

                </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                    <div id="alert" class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
                      <div id="alert" class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                      </div>
                      
                <!-- START Row -->
                <div class="row">
                    <!-- START left / top side -->
                    <div class="col-lg-8">
                        <!-- Blog post #1 -->
                        <div class="row">
                            <div class="col-xs-12">
                                             <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel panel-teal">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-equalizer"></i></span></h3>
                            </div>


                            <!--/ panel heading/header -->
                            <!-- table responsive -->
                            <div class="table-responsive">
                        <div class="panel-toolbar pl10" style="margin-bottom: 30px;margin-top:6px;">
                                <div class="checkbox custom-checkbox pull-left">  
                                    <input type="checkbox" id="customcheckbox-one0" value="1" data-toggle="checkall" data-target="#table1" onclick="do_this()">  
                                    <label for="customcheckbox-one0">&nbsp;&nbsp;Pilih Semua</label>  
                                </div>
                            </div>
                            <form action="<?php echo site_url('berita/data_berita/checkbox') ?>" method="post">
                                <table class="table table-hover table-bordered">

                                    <thead>
                                        <tr>
                                            <th width="1%"><input class="btn btn-info btn-sm" type="hidden" id="toggle" value="Select All" onclick="do_this()" value="select all"></th>
                                            <th width="1%">No</th>
                                            <th width="7%">Pembuat</th>
                                            <th width="25%">Judul</th>
                                            <th width="15%">Kategori Berita</th>
                                            <th width="15%">Tanggal</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <?php if ($berita->num_rows() > 0){ ?>
                                    
                                    <?php
                                        $no=1;
                                     foreach ($berita->result() as $key) {?>
                                    <tbody>
                                <tr>
                                            <td>
                                       <div class="checkbox custom-checkbox nm">  
                                          <input type="checkbox" name="id[]" id="customcheckbox-one<?php echo"$no";?>" value="<?php echo $key->id; ?>" data-toggle="selectrow" data-target="tr" data-contextual="warning">  
                                          <label for="customcheckbox-one<?php echo"$no";?>"></label>   
                                      </div>
                                  </td>
                                            <td><?php echo $this->uri->segment(3)+$no; ?></td>
                                            <td><?php echo $this->session->userdata('username'); ?></td>
                                            <td><?php echo $key->judul; ?></td>
                                            <td><?php echo $key->kategori_berita; ?></td>
                                            <!-- <td><?php echo tgl_jam_sql($key->tanggal); ?></td> -->
                                            <td><?php echo $key->tanggal; ?></td>
                                             <td>
                                    <a class="btn btn-danger btn-xs" href="<?php echo site_url('berita/delete_one/'.$key->id) ?>" onclick="return confirm('apakah anda yakin ingin mengahapus nya?')"><span class="ico-remove3"></span></a>

                                                 <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalmd<?=$key->id;?>"> <i class=" ico-pencil2" title="Edit"></i></a>
                                             </td>
                                        </tr>
                
                                    </tbody>
                                    <?php $no++; } ?>
                                    <tr>
                                <td colspan="10">
                  <button class="btn btn-danger btn-sm" type="submit" name="delete"  value="Delete Data" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Tersebut')"><span class="ico-remove3"></span>Hapus yang dipilih</button>
                     <center ><?php echo $this->pagination->create_links(); ?></center>
                </td>
                                    </tr>
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
                                </table>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                    
                </div>
                <!--/ END row -->
                            </div>
                        </div>
                        <!--/ Blog post #1 -->
                    </div>
                    <!--/ END left / top side -->

                    <!-- START right / bottom side -->
                    <div class="col-lg-4">
                      <!-- panel -->
                        <div class="panel">

                            <?php if ($sort->num_rows() > 0){ ?>
                                
                            
                               <?php foreach ($sort->result() as $key => $value) {?>
                            <div class="panel-body">
                                <div class="table-layout nm">
                                    <div class="col-xs-3 text-center valign-top">
                                        <img src="<?php 
                                        if(empty($value->image)){

                                            echo base_url();?>assets/image/images/avatar.png ?>
                                        <?php 
                                        }
                                        else{ 
                                            echo base_url();?>assets/image/images/<?php echo $value->image; 
                                        }?>
                                        " alt="" width="90%" height="80px">
                                    </div>
                                    <div class="col-xs-9">
                                        <h5 class="semibold mt0"><?php echo $value->kategori_berita ?></h5>
                                        <p ><?php echo word_limiter($value->konten_berita,30); ?></p>
                                        <a href="<?php echo site_url('berita/view_detail/'.$value->id); ?>">Lihat Selengkapnya...</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <?php } ?>
                            <?php }else{?>
                                          <div class="panel-body">
                                <div class="table-layout nm">
                                    <div class="col-xs-12 text-center valign-top">
                                             <div class="panel-body text-center">
                                            <h1 class="semibold longshadow text-center text-default fsize32 mb10 mt0">WHOOPS!!</h1>
                                            <h5 class="semibold text-primary text-center nm">SORRY,NO DATA THIS PAGE...</5>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                                <?php } ?>
                        </div>
                        <!--/ panel -->

                    </div>
                    <!--/ END right / bottom side -->
                </div>
                <!--/ END Row -->
            </div>
            <!--/ END Template Container -->
        </section>
        <!--/ END Template Main -->


            <?php foreach ($berita->result() as $data){ ?>
            <div class="modal fade bs-example-modal-sm" id="myModalmd<?=$data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog modal-md">
                      <form action="<?php echo site_url('berita/data_berita/update'); ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3 class="semibold modal-title"><span class="ico-stack-list"></span> Ubah</h3>
                            </div>
                                <div class="modal-body">
                                <div class="panel-body">
                             <input type="hidden" name="id" required class="form-control" value="<?=$data->id;?>">

                                     <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                         <label for="">Pembuat</label>
                                    <input type="text" class="form-control" required readonly value="<?php echo $this->session->userdata('username'); ?>">
                                                </div>
                                                <div class="col-sm-6">
                                                   <label for="">Tanggal</label>
                                    <input type="text" name="tanggal" required class="tanggal form-control" value="<?=$data->tanggal?>">
                                                </div>
                                            </div>
                                        </div>
                                              <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                     <label for="">Judul</label>
                                    <input type="text" name="judul" required class="form-control" value="<?=$data->judul;?>">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Kategori Berita</label>
                                    <input type="text" name="kategori_berita" required class="form-control" value="<?=$data->kategori_berita?>">
                                                </div>
                                            </div>
                                        </div>

                              
                                <div class="form-group">
                                    <label for="">Konten Berita</label>
                                    <textarea name="konten_berita" cols="10" rows="10"><?=$data->konten_berita?></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="">Gambar</label>
                                   <div><img src="<?php 
                                    
                                        echo base_url();?>assets/image/images/<?php echo $data->image;
                                   
                                    ?>" height="100px" width="100px;" alt="" class='img4'></div>
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