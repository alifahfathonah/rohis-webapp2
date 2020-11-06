
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="ico-calendar4"></span> Jadwal Kegiatan</h4>
                        
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
                    
                       <!-- add new task form -->
                <form action="<?php echo site_url('aktivitas_rohis/jadwal_kegiatan/add_action');?>" class="collapse" id="form-task" data-parsley-validate method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Ulama/Ustadz/Tokoh</label>
                                <input type="text" name="ulama_tokoh" class="form-control" required placeholder="Masukan Ulama/Ustadz/Tokoh">
                            </div>
                            <div class="col-sm-4">
                                <div>
                                    <label class="control-label">Nama Aktivitas</label>
                                    <input type="text" name="nama_aktivitas" required class="form-control" placeholder="Masukan Nama Aktivitas">
                                </div>
                            </div>
                                      <div class="col-sm-4">
                                          <label for="">Tanggal</label>
                        <input type="text" name="tanggal" class="form-control tanggal1" required placeholder="Masukan Tanggal">
                                      </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Tempat</label>
                                <input name="tempat" type="text" class="form-control" placeholder="Masukan Tempat">
                                   
                                    
                            </div>
                             <div class="col-sm-4">
                                <label class="control-label">Target</label>
                                <input name="target" type="text" class="form-control" placeholder="Masukan Target">
                            </div>
                            <div class="col-sm-4">
                                <label class="control-label">Jenis Kegiatan</label>
                             <select data-placeholder="Pilih Golongan aktivitas" class="form-control" name="kategori_aktivitas" required class="select-clear">

                                <option value="Kegiatan Rutin">Kegiatan Rutin</option>
                                <option value="Kegiatan Tambahan">Kegiatan Tambahan</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                             <div class="col-sm-4">
                                <label for="">Jam</label>
                                <input type="time" name="jam" placeholder="Masukan Jam" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-teal">Reset</button>
                        <button type="submit" class="btn btn-success">Add Task</button>
                    </div>
                </form>
                <!--/ add new task form -->
                </div>
                <!-- Page Header -->
                <div class="col-md-9 col-sm-12 col-xs12 ">
                    <div id="alert" class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
                      <div id="alert" class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                      </div>
                <!-- START Row -->
                <div class="row">
                    <!-- START left / top side -->
                    <div class="col-lg-9">
                        <!-- Blog post #1 -->
                        <div class="row">
                            <div class="col-xs-12">
                                             <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel panel-success">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-equalizer"></i></span></h3>
                            </div>

                            <div class="table-responsive">
                        <div class="panel-toolbar pl10" style="margin-bottom: 30px;margin-top:6px;">
                                <div class="checkbox custom-checkbox pull-left">  
                                    <input type="checkbox" id="customcheckbox-one0" value="1" data-toggle="checkall" data-target="#table1" onclick="do_this()">  
                                    <label for="customcheckbox-one0">&nbsp;&nbsp;Pilih Semua</label>  
                                </div>
                            </div>
                            <form action="<?php echo site_url('aktivitas_rohis/jadwal_kegiatan/checkbox') ?>" method="post">
                                <table class="table table-hover table-bordered">
                                     <?php if ($jadwal->num_rows() > 0){ ?>
                                    <thead>
                                        <tr>
                                            <th width="1%"><input class="btn btn-info btn-sm" type="hidden" id="toggle" value="Select All" onclick="do_this()" value="select all"></th>
                                            <th>No</th>
                                            <th style="width:12%">Ulama/Ustadz</th>
                                            <th>Nama Aktivitas</th>
                                            <th>Target</th>
                                            <th>Jenis Kegiatan</th>
                                            <th>Tempat</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <?php
                                        $no=1;
                                     foreach ($jadwal->result() as $key) {?>
                                    <tbody>
                                <tr>
                                            <td>
                                       <div class="checkbox custom-checkbox nm">  
                                          <input type="checkbox" name="id[]" id="customcheckbox-one<?php echo"$no";?>" value="<?php echo $key->id; ?>" data-toggle="selectrow" data-target="tr" data-contextual="warning">  
                                          <label for="customcheckbox-one<?php echo"$no";?>"></label>   
                                      </div>
                                  </td>
                                            <td><?php echo $this->uri->segment(3)+$no; ?></td>
                                            <td><?php echo $key->ulama_tokoh; ?></td>
                                            <td><?php echo $key->nama_aktivitas; ?></td>
                                            <td><?php echo $key->target ?></td>
                                            <td><?php echo $key->kategori_aktivitas ?></td>
                                            <td><?php echo $key->tempat; ?></td>
                                            <td><?php echo tgl_jam_sql($key->tanggal); ?></td>
                                            <td><?php echo $key->jam ?></td>
                                        <td>
                                    <a class="btn btn-danger btn-xs" href="<?php echo site_url('aktivitas_rohis/jadwal_kegiatan/delete/'.$key->id) ?>" onclick="return confirm('apakah anda yakin ingin mengahapus nya?')" title="Hapus"><span class="ico-remove3"></span></a>

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
                    <div class="col-lg-3">    
                        <!-- Tabbed content -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h5 class="semibold mt0 text-primary">Berdasarkan Data Terbaru</h5>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#popular" data-toggle="tab">Recent</a></li>
                                    
                                </ul>
                                <div class="tab-content panel nm">
                                    <div class="tab-pane active pl0 pr0" id="popular">
                                        <!-- Media list -->
                                        <?php if ($sort_jadwal->num_rows() > 0){?>
                                            
                                        <?php foreach ($sort_jadwal->result() as $key) {?>
                                            
                                        <div class="media-list">
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                 <span class="pull-left">
                                                   <img src="<?php echo base_url(); ?>assets/image/user.png" class="img-circle" alt="" / height="40px" width="40px">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta"><?php echo tgl_jam_sql($key->tanggal) ?> - <?php echo $key->jam ?></span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading"><?php echo word_limiter($key->nama_aktivitas,8) ?></span>
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
                                        <!--/ Message list -->
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


            <?php foreach ($jadwal->result() as $data){ ?>
            <div class="modal fade bs-example-modal-sm" id="myModalmd<?=$data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog modal-md">
                      <form action="<?php echo site_url('aktivitas_rohis/jadwal_kegiatan/update'); ?>" method="post">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3 class="semibold modal-title"><span class="ico-stack-list"></span> Ubah</h3>
                            </div>
                                <div class="modal-body">
                                <div class="panel-body">
                     <input type="hidden" name="id" readonly class="form-control" value="<?=$data->id;?>">

                       <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label class="control-label">Tanggal <span class="text-danger">*</span></label>
                                                    <input type="text" name="tanggal" class="form-control tanggal1" required value="<?=$data->tanggal;?>">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Jam</label>
                                                    <input type="time" name="jam" class="form-control" value="<?=$data->jam;?>">
                                                </div>
                                            </div>
                                        </div>

                    <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                   <label for="">Nama Aktivitas</label>
                        <input type="text" name="nama_aktivitas" class="form-control" value="<?=$data->nama_aktivitas;?>">
                                                </div>
                                                <div class="col-sm-6">
                            <label class="control-label">Aktifitas Akademis</label>
                        
                          <select data-placeholder="Pilih Aktiitas Akademis" placeholder="Pilih Aktiitas Akademis"  name="kategori_aktivitas" required class="select-clear form-control">
                            <option value="">-- Pilih --</option>
                            <option value="Kegiatan Rutin" <?php if($data->kategori_aktivitas =='Kegiatan Rutin'){echo "selected";} ?>>Kegiatan Rutin</option>
                            <option value="Kegiatan Tambahan" <?php if($data->kategori_aktivitas =='Kegiatan Tambahan'){echo "selected";} ?>>Kegiatan Tambahan</option>
                          </select>
                        </div>
                    </div>
                </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                 <label for="">Ulama/Ustadz/Tokoh yang dihadirkan</label>
                                <input type="text" name="ulama_tokoh" class="form-control" value="<?=$data->ulama_tokoh;?>">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Target</label>
            <input type="text" name="target" class="form-control" value="<?=$data->target;?>">
                            </div>
                        </div>
                    </div>

                        <div class="form-group">
                        <label for="">Tempat</label>
                        <input type="text" name="tempat" class="form-control" value="<?=$data->tempat;?>">
                    </div>
                            </div>
                              </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class=" ico-close3"></span> Close</button>
                                <button type="submit" class="btn btn-primary"> <span class="ico-save"></span> Save changes</button>
                            </div>
                             </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
            <?php } ?> 