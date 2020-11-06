
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class=" ico-group"></span> TIM</h4>
                    </div>
                    <div class="page-header-section">

                         <div class="toolbar">
                               
                                <button class="btn btn-teal btn-sm" data-toggle="collapse" data-target="#form-task"><span class="ico-plus-circle2"></span>Tambah</button>
                        </div>
                    </div>

                              <form action="<?php echo site_url('tim/home_tim/add_data')?>" class="collapse" id="form-task" data-parsley-validate method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Divisi/Seksi</label>
                                <input type="text" name="seksi_divisi" class="form-control" required placeholder="Masukan Nama">
                            </div>
                            <div class="col-sm-4">
                                <div>
                                    <label class="control-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" requireD placeholder="Masukan Kelas">
                                </div>
                            </div>
                                <div class="col-sm-2">
                                <div>
                                    <label class="control-label">Image</label>
                                  
                                        <input  type="file" name="userfile">
                              
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="reset" class="btn btn-teal">Reset</button>
                        <button type="submit" class="btn btn-success">Add Task</button>
                    </div>
                </form>
                </div>
                <!-- Page Header -->
              <div id="alert" class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
              <div id="alert" class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>

                <div class="row">
                    <div class="col-md-12">

                            <form action="<?php echo site_url('tim/home_tim/checkbox'); ?>" method="post" class="panel form-horizontal form-bordered" name="form-password" enctype="multipart/form-data">
                                    <div class="panel-body pt0 pb0">
                                        <div class="form-group header bgcolor-default">
                                            <div class="col-md-12">
                                                <h4 class="semibold mt0 mb5 pull-right" >Tim Sekolah</h4>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <?php if ($tim->num_rows()){ ?>
                                            
                                        
                <?php foreach ($tim->result() as $data) :?>

                <div class="col-md-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="text-center mb15">
                                        <img class="img-rounded img-bordered-primary" src="<?php 
                    if(empty($data->image)){

                        echo base_url();?>assets/image/images/avatar.png ?>
                    <?php 
                    }
                    else{ 
                        echo base_url();?>assets/image/images/<?php echo $data->image; 
                    }?>" alt="" width="100px" height="100px">
                                    </li>
                                    <li class="text-center mb10">
                                        <h4 class="semibold ellipsis nm"><?php echo $data->nama; ?></h4>
                                        <p class="text-muted nm"><?php echo $data->seksi_divisi; ?></p>

                                    </li>
                                    <li class="text-center">
                                  <ul class="list-inline">
                                                    <li><a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalmd<?=$data->id;?>"> <i class=" ico-pencil2" title="Edit"></i></a></li>
                                            <li><a class="btn btn-danger btn-sm" href="<?php echo site_url('tim/home_tim/delete/'.$data->id); ?>" onclick="return confirm('   Apakah Anda Yakin Ingin Menghapus Data Tersebut')"><span class="ico-remove3"></a></li>
             
                                                  </ul>                
                                            </ul>
                                        </div>
                                        <!--/ panel body -->
                                    </div>
                                    <!--/ END Widget Panel -->
                                </div>
                              </form>
                    <?php endforeach; ?>
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

            <?php foreach ($tim->result() as $data){ ?>
            <div class="modal fade bs-example-modal-sm" id="myModalmd<?=$data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" >
                    <div class="modal-dialog modal-md">
                      <form action="<?php echo site_url('tim/update'); ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3 class="semibold modal-title"><span class="ico-stack-list"></span> Ubah</h3>
                            </div>
                                <div class="modal-body">
                                <div class="panel-body">
                                     <input type="hidden" name="id" readonly class="form-control" value="<?=$data->id;?>">
                       
                                <label class="control-label">Divisi/Seksi</label>
                                <input name="seksi_divisi" type="text" class="form-control" placeholder="Masukan Seksi Divisi" value="<?php echo $data->seksi_divisi; ?>">
                    
                    
                                <label class="control-label">Nama</label>
                                <input name="nama" type="text" class="form-control" placeholder="Masukan Nama" value="<?php echo $data->nama; ?>">
                    
                    
                        <label class="control-label">Gambar</label><br>
                        <img src="<?php 

                    if(empty($data->image)){

                        echo base_url();?>assets/image/images/avatar.png ?>
                    <?php 
                    }
                    else{ 
                        echo base_url();?>assets/image/images/<?php echo $data->image; 
                    }?>" alt="" width="100px" height="100px" class="img4">
                    
                    <br>
                                <label class="control-label">Image</label>
                                <input name="image" type="file" class="form-control" >
                            </div>
                              </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class=" ico-close3"></span> Close</button>
                                <button type="submit" class="btn btn-primary"> <span class="ico-save"></span> Save changes</button>
                            </div>
                             </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
            <?php } ?> 