
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="ico-user"></span> siswa Muslim</h4>
                        
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

                    
          <form action="<?php echo site_url('siswa_muslim/tampil_siswa/action_add') ?>" class="collapse" id="form-task" data-parsley-validate method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Nama</label>
                                <input type="text" name="nama" class="form-control" required placeholder="Masukan Nama">
                            </div>
                            <div class="col-sm-4">
                                <div>
                                    <label class="control-label">Kelas</label>
                                    <input type="text" name="kelas" class="form-control" requireD placeholder="Masukan Kelas">
                                </div>
                            </div>
                                <div class="col-sm-4">
                                <div>
                                    <label class="control-label">Aktifitas Dakwah</label>
                                  <br>
                                         <div class="col-md-3">            

                                           <input type="checkbox" value="Aktif" name="aktifitas_dakwah" <?php echo set_checkbox('aktifitas_dakwah','Aktif'); ?>> Aktif
                                </div>
                                          <div class="col-md-3">
                                             <input type="checkbox" value="Pasif" name="aktifitas_dakwah" <?php echo set_checkbox('aktifitas_dakwah','Pasif'); ?>> Pasif
                                </div>                                         
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Ekonomi</label>
                      <select data-placeholder="Pilih Golongan Ekonomi" placeholder="Pilih Golongan Ekonomi" class="form-control" name="ekonomi" required class="select-clear">
                    <option value="Mampu">Mampu</option>
                    <option value="Kurang-mampu">Kurang Mampu</option>
                    </select>
                            </div>
                            <div class="col-sm-4">
                                <label class="control-label">Beasiswa</label>
                                   <select data-placeholder="Pilih Beasiswa" placeholder="Pilih Beasiswa" class="form-control" name="beasiswa" required class="select-clear">
                    
                    <option value="Di bantu">Di bantu</option>
                    <option value="Tidak Dibantu">Tidak Dibantu</option>
                    </select>
                            </div>
                            <div class="col-sm-4">
                                <label class="control-label">Aktifitas Akademis</label>
                                  <select data-placeholder="Pilih Aktivitas Akademis" placeholder="Pilih Aktivitas Akademis" class="form-control" name="aktifitas_akademis" required class="select-clear">
                    
                    <option value="Baik Sekali">Baik Sekali</option>
                    <option value="Baik">Baik</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Kurang">Kurang</option>
                    <option value="Sangat Kurang">Sangat Kurang</option>
                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Jenis Kelamin</label>
                                 <br>
                                  <div class="col-md-3">
                                     <span class="radio custom-radio custom-radio-warning">  
                                                <input type="radio" id="customradio1" value="Laki-Laki" name="jenis_kelamin"> 
                                                <label for="customradio1">&nbsp;&nbsp;Laki-Laki</label>   
                                            </span>
                                  </div>
                                  <div class="col-md-3">
                                       <span class="radio custom-radio custom-radio-teal">  
                                                <input type="radio" id="customradio2" value="Perempuan" name="jenis_kelamin">
                                                <label for="customradio2">&nbsp;&nbsp;Perempuan</label>   
                                            </span>
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

                            <!--/ panel heading/header -->
                            <!-- table responsive -->
                            <div class="table-responsive">
                        <div class="panel-toolbar pl10" style="margin-bottom: 30px;margin-top:6px;">
                                <div class="checkbox custom-checkbox pull-left">  
                                    <input type="checkbox" id="customcheckbox-one0" value="1" data-toggle="checkall" data-target="#table1" onclick="do_this()">  
                                    <label for="customcheckbox-one0">&nbsp;&nbsp;Pilih Semua</label>  
                                </div>
                            </div>
                            <form action="<?php echo site_url('siswa_muslim/tampil_siswa/checkbox') ?>" method="post">
                                <table class="table table-hover table-bordered">

                                    <thead>
                                        <tr>
                                            <th width="1%"><input class="btn btn-info btn-sm" type="hidden" id="toggle" value="Select All" onclick="do_this()" value="select all"></th>
                                            <th>No</th>
                                            <th style="width:12%">Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kelas</th>
                                            <th>Ekonomi</th>
                                            <th>Beasiswa</th>
                                            <th>Aktifitas Dakwah</th>
                                            <th>Aktifitas Akademis</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <?php if ($muslim->num_rows() > 0){ ?>
                                    
                                    <?php
                                        $no=1;
                                     foreach ($muslim->result() as $key) {?>
                                    <tbody>
                                <tr>
                                            <td>
                                       <div class="checkbox custom-checkbox nm">  
                                          <input type="checkbox" name="id[]" id="customcheckbox-one<?php echo"$no";?>" value="<?php echo $key->id; ?>" data-toggle="selectrow" data-target="tr" data-contextual="warning">  
                                          <label for="customcheckbox-one<?php echo"$no";?>"></label>   
                                      </div>
                                  </td>
                                            <td><?php echo $this->uri->segment(3)+$no; ?></td>
                                            <td><?php echo $key->nama; ?></td>
                                            <td><?php echo $key->jenis_kelamin; ?></td>
                                            <td><?php echo $key->kelas ?></td>
                                            <td><?php echo $key->ekonomi ?></td>
                                            <td><?php echo $key->beasiswa ?></td>
                                            <td><?php echo $key->aktifitas_dakwah; ?></td>
                                            <td><?php echo $key->aktifitas_akademis; ?></td>
                                         
                                             <td>
                                    <a class="btn btn-danger btn-xs" href="<?php echo site_url('siswa_muslim/tampil_siswa/delete/'.$key->id) ?>" onclick="return confirm('apakah anda yakin ingin mengahapus nya?')"><span class="ico-remove3"></span></a>

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
                                        <?php if ($sort->num_rows() > 0){ ?>
                                            
                                        
                                        <?php foreach ($sort->result() as $key) {?>
                                            
                                      
                                        <div class="media-list">
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                   <img src="<?php echo base_url(); ?>assets/image/user.png" class="img-circle" alt="" / height="40px" width="40px">
                                                </span> 
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta"><?php echo ($key->jenis_kelamin) ?></span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading"><?php echo ($key->nama) ?></span>
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

            <?php foreach ($muslim->result() as $data){ ?>
            <div class="modal fade bs-example-modal-sm" id="myModalmd<?=$data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog modal-md">
                      <form action="<?php echo site_url('siswa_muslim/tampil_siswa/action_update'); ?>" method="post">
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
                             <label class="control-label">Nama</label>
                                <input name="nama" type="text" class="form-control" placeholder="Masukan Nama" value="<?php echo $data->nama; ?>">
                        </div>
                        <div class="col-sm-6">
                         <label class="control-label">Kelas</label>
                                 <input name="kelas" type="text" class="form-control" placeholder="Masukan Ketua Osis" value="<?php echo $data->kelas; ?>">
                        </div>
                    </div>
                </div>

                  <div class="form-group">
    <div class="row">
        <div class="col-sm-6">
               <label class="control-label">Aktifitas Akademis</label>
                        <div >
                          <select data-placeholder="Pilih Aktiitas Akademis" placeholder="Pilih Aktiitas Akademis"  name="ekonomi" required class="select-clear form-control">
                            <option value="">-- Pilih --</option>
                            <option value="Kurang Mampu" <?php if($data->ekonomi =='Kurang Mampu'){echo "selected";} ?>>Kurang Mampu</option>
                            <option value="Mampu" <?php if($data->ekonomi =='Mampu'){echo "selected";} ?>>Mampu</option>
                           
                          </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                       <label class="control-label">Beasiswa</label>
                        <div >
                          <select data-placeholder="Pilih Aktiitas Akademis" placeholder="Pilih Aktiitas Beasiswa"  name="beasiswa" required class="select-clear form-control">
                            <option value="">-- Pilih --</option>
                            <option value="Di bantu" <?php if($data->beasiswa =='Di bantu'){echo "selected";} ?>>Di Bantu</option>
                            <option value="Tidak Dibantu" <?php if($data->beasiswa =='Tidak Dibantu'){echo "selected";} ?>>Tidak Dibantu</option>
                           
                          </select>
                        </div>
                    </div>
                </div>
            </div>

                   <div class="form-group">
                <label class="control-label">Jenis Kelamin</label><br><br>
                <div class="col-md-3">
                  <input type="radio" required value="Laki-laki" <?php if($data->jenis_kelamin =='Laki-laki'){echo "checked";} ?> name="jenis_kelamin"> Laki Laki
                </div>
                <div class='col-md-3'>
                  <input type="radio" required value="Perempuan" <?php if($data->jenis_kelamin =='Perempuan'){echo "checked";} ?> name="jenis_kelamin"> Perempuan
                </div>
              </div>
                  <br>

                             <div class="form-group">
                <label class="control-label">Aktifitas Dakwah</label><br><br>
                <div class="col-md-3">
                  <input type="checkbox"  value="Aktif" <?php if($data->aktifitas_dakwah =='Aktif'){echo "checked";} echo set_checkbox('aktifitas_dakwah','Aktif');?> name="aktifitas_dakwah"> Aktif
                </div>
                <div class='col-md-3'>
                  <input type="checkbox"  value="Pasif" <?php if($data->aktifitas_dakwah =='Pasif'){echo "checked";} echo set_checkbox('aktifitas_dakwah','Pasif'); ?> name="aktifitas_dakwah"> Pasif
                </div>
              </div><br>
            <div class="form-group">
            <label class="control-label">Aktifitas Akademis</label>
            <div >
              <select data-placeholder="Pilih Aktiitas Akademis" placeholder="Pilih Aktiitas Akademis"  name="aktifitas_akademis" required class="select-clear form-control">
                <option value="">-- Pilih --</option>
                <option value="Baik Sekali" <?php if($data->aktifitas_akademis =='Baik Sekali'){echo "selected";} ?>>Baik Sekali</option>
                <option value="Baik" <?php if($data->aktifitas_akademis =='Baik'){echo "selected";} ?>>Baik</option>
                <option value="Sedang" <?php if($data->aktifitas_akademis =='Sedang'){echo "selected";} ?>>Sedang</option>
                <option value="Kurang" <?php if($data->aktifitas_akademis =='Kurang'){echo "selected";} ?>>Kurang</option>
                <option value="Sangat Kurang" <?php if($data->aktifitas_akademis =='Sangat Kurang'){echo "selected";} ?>>Sangat Kurang</option>
              </select>
            </div>
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
