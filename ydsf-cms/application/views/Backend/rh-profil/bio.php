
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Profile / account settings</h4>
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <!-- Left / Top Side -->
                    <div class="col-lg-3">
                         <div id="alert" class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
                              <div id="alert" class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                        <!-- tab menu -->
                        <ul class="list-group list-group-tabs">
                            <li class="list-group-item active"><a href="#profile" data-toggle="tab"><i class="ico-user2 mr5"></i> Profile</a></li>
                            <li class="list-group-item"><a href="<?php echo site_url('profil/profile'); ?>"><i class="ico-archive2 mr5"></i> Account</a></li>
                            <li class="list-group-item"><a href="<?php echo site_url('profil/profile'); ?>"><i class="ico-key2 mr5"></i> Password</a></li>
                        </ul>
                        <!-- tab menu -->

                        <hr><!-- horizontal line -->

                        <!-- figure with progress -->
                        <ul class="list-table">
                            <li style="width:70px;">
                                <img class="img-circle img-bordered" src="<?php echo base_url();?>assets/image/avatar/avatar.png" alt="" width="65px">
                            </li>
                            <li class="text-left">
                                <h5 class="semibold ellipsis mt0"><?php echo $this->session->userdata('username'); ?></h5>
                                <div style="max-width:200px;">
                                    <b><span class="pull-left">Profile Setting</span></b>
                                    <p class="text-muted clearfix nm">
                                        
                                        
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <!--/ figure with progress -->

                        <hr><!-- horizontal line -->
                    </div>
                    <!--/ Left / Top Side -->

                    <!-- Left / Bottom Side -->
                    <div class="col-lg-9">
                        <!-- START Tab-content -->
                        <div class="tab-content">
                            <!-- tab-pane: profile -->
                            <div class="tab-pane active" id="profile">
                                <!-- form profile -->
                                <form action="<?php echo site_url('profil/edit_profil'); ?>" class="panel form-horizontal form-bordered"  method="post" enctype="multipart/form-data">
                                    <div class="panel-body pt0 pb0">
                                        <div class="form-group header bgcolor-default">
                                            <div class="col-md-12">
                                                <h4 class="semibold text-primary mt0 mb5">Profile</h4>
                                                <p class="text-default nm">This information appears on your public profile, search results, and beyond.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Photo</label>
                                            <div class="col-sm-9">
                                                <div class="btn-group pr5">
                                                   <img src="<?php echo base_url();?>assets/image/images-sekolah/<?php echo $detail['image']; ?>" alt="" width="120px" height="100px">
                                                </div><br><br>
                                               <input type="file" name="image">
                                            </div>
                                       
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">ID Rohis</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" readonly value="<?php echo $this->session->userdata('id_rohis'); ?>">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">BG Data</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control"  readonly value="<?php echo $this->session->userdata('bg_data'); ?>">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Sekolah</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $detail['nama_sekolah']; ?>">
                                                
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Alamat Surat</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="alamat_surat" value="<?php echo $detail['alamat_surat']; ?>">
                                                
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Long</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="long" value="<?php echo $detail['long']; ?>">
                                                
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Lat</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="lat" value="<?php echo $detail['lat']; ?>">
                                                
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">RT</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="rt" value="<?php echo $detail['rt']; ?>">
                                                
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label">RW</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="rw" value="<?php echo $detail['rw']; ?>">
                                                
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label">Desa</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="desa" value="<?php echo $detail['desa']; ?>">
                                                
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label">Kecamatan</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="kecamatan" value="<?php echo $detail['kecamatan']; ?>">
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label">Kabupaten</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="kabupaten" value="<?php echo $detail['kabupaten']; ?>">
                                                
                                            </div>
                                        </div>
                                          
                                    </div>
                                    <div class="panel-footer">
                                        <button type="reset" class="btn btn-default">Reset</button>
                                       <button type="submit" name="submit" class="btn btn-primary btn-sm"><span class="ico-save"></span> Simpan</button>
                                    </div>
                                </form>
                                <!--/ form profile -->
                            </div>
                            <!--/ tab-pane: profile -->

                            <!-- tab-pane: account -->
                            <div class="tab-pane" id="account">
                                <!-- form account -->
<!--                                 <form action="<?php echo site_url('profil/edit_bio'); ?>" method="post" class="panel               form-horizontal form-bordered" name="form-account">
                                    <div class="panel-body pt0 pb0">
                                        <div class="form-group header bgcolor-default">
                                            <div class="col-md-12">
                                                <h4 class="semibold text-primary mt0 mb5">Account</h4>
                                                <p class="text-default nm">Change your basic account and language settings.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">ID Rohis</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" readonly value="<?php echo $this->session->userdata('username'); ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">BG Data</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" readonly value="<?php echo $this->session->userdata('bg_data'); ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Depan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="nama_depan" value="<?php echo $detail['nama_depan']; ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Belakang</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="nama_belakang" value="<?php echo $detail['nama_belakang']; ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Perusahaan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $detail['nama_perusahaan']; ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Negara</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="negara"  value="<?php echo $detail['negara']; ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Alamat 1</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="alamat1"  value="<?php echo $detail['alamat1']; ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Alamat2</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="alamat2"  value="<?php echo $detail['alamat2']; ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Kota</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="kota"  value="<?php echo $detail['kota']; ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Provinsi</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="provinsi"  value="<?php echo $detail['provinsi']; ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Kode Pos</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="kode_pos"  value="<?php echo $detail['kode_pos']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="reset" class="btn btn-default">Reset</button>
                                        <button type="submit" class="btn btn-primary">Save change</button>
                                    </div>
                                </form> -->
                                <!--/ form account -->
                            </div>
                            <!--/ tab-pane: account -->

                            <!-- tab-pane: password -->
                            <div class="tab-pane" id="password">
                                <!-- form password -->
                                <form action="<?php echo site_url('profil/ubah_password'); ?>" method="post" class="panel form-horizontal form-bordered" name="form-password">
                                    <div class="panel-body pt0 pb0">
                                        <div class="form-group header bgcolor-default">
                                            <div class="col-md-12">
                                                <h4 class="semibold text-primary mt0 mb5">Password</h4>
                                                <p class="text-default nm">Change your password or recover your current one.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Username</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" value="<?php echo $this->session->userdata('username'); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Password Lama</label>
                                            <div class="col-sm-5">
                                                <input type="password" class="form-control" name="password" placeholder="Masukan Password Lama Anda">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Password Baru</label>
                                            <div class="col-sm-5">
                                                <input type="password" class="form-control" name="password2" placeholder="Masukan Password Baru Anda">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="reset" class="btn btn-primary" >Reset</button>
                                        <button type="submit" class="btn btn-primary">Save change</button>
                                    </div>
                                </form>
                            </div>
                            <!--/ tab-pane: password -->
                        </div>
                        <!--/ END Tab-content -->
                    </div>
                    <!--/ Left / Bottom Side -->
                </div>
                <!--/ END row -->
            </div>
            <!--/ END Template Container -->
