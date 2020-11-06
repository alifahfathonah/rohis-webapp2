
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="ico-cog"></span> Profil Setting</h4>
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                         <div id="alert" class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
                              <div id="alert" class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>

                        <div class="panel panel-primary">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                            
                                <h3 class="panel-title"><span class="ico-cog"></span> Profil Setting</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <form action="<?php echo site_url('profil/edit_profil'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">ID Rohis</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" readonly="" value="<?php echo $this->session->userdata('id_rohis') ?>">
                                        </div>
                                    </div>
                                       <div class="form-group">
                                        <label class="col-sm-3 control-label">BG Data</label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly class="form-control" value="<?php echo $this->session->userdata('bg_data'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Sekolah</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_sekolah" class="form-control" placeholder="Masukan Nama Sekolah" value="<?php echo $detail->nama_sekolah; ?>">
                                            <?php   ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Alamat Surat</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="alamat_surat" class="form-control" placeholder="Masukan Alamat Surat" value="<?php echo $detail->alamat_surat; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <label class="col-sm-3 control-label">Long</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="long" class="form-control" placeholder="Masukan Long" value="<?php echo $detail->long; ?>">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">Lat</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="lat" class="form-control" placeholder="Masukan Lat" value="<?php echo $detail->lat; ?>">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">RT</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="rt" class="form-control" placeholder="Masukan RT" value="<?php echo $detail->rt; ?>">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">RW</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="rw" class="form-control" placeholder="Masukan RW" value="<?php echo $detail->rw; ?>">
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-sm-3 control-label">Desa</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="desa" class="form-control" placeholder="Masukan Desa" value="<?php echo $detail->desa; ?>">
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-sm-3 control-label">Kecamatan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kecamatan" class="form-control" placeholder="Masukan Kecamatan" value="<?php echo $detail->kecamatan; ?>">
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-sm-3 control-label">Kabupaten</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kabupaten" class="form-control" placeholder="Masukan Kabupaten" value="<?php echo $detail->kabupaten; ?>">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">Gambar</label>
                                        <div class="col-sm-9">
                                           <img src="<?php echo base_url(); ?>assets/image/images-sekolah/<?php echo $detail->image; ?>" alt="" widht="200px" height="150px">
                                        </div>
                                    </div>
                                   
                                      <div class="form-group">
                                        <label class="col-sm-3 control-label">Gambar</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" >
                                        </div>
                                    </div>


                                    </div>
                                    <div class="panel-footer">
                                        <div class="form-group no-border">
                                            <label class="col-sm-3 control-label"></label>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-primary pull-right btn-sm"><span class="ico-save"></span> Simpan</button>
                                                <button type="reset" class="btn btn-danger pull-right btn-sm" style="margin-right: 5px;"><span class=" ico-loop"></span> Reset</button>
                                            </div>
                                        </div> 
                                    </div>
                                </form>
                            </div>
                            <!-- panel body -->
                        </div>
                        <!--/ END form panel -->
                    </div>
                </div>
                <!--/ END row -->