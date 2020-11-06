
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="ico-money"></span> Pengeluaran</h4>
                    </div>

                         <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                               
                                <button class="btn btn-danger btn-sm" data-toggle="collapse" data-target="#form-task"><span class="ico-plus-circle2"></span>Tambah</button>
                            
            
                            </ol>
                        </div>
                        
                    </div>

                                           <!-- add new task form -->
                <form action="<?php echo site_url('keuangan/pengeluaran_tambah');?>" class="collapse" id="form-task" data-parsley-validate method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" required placeholder="Masukan Deskripsi">
                            </div>
                            <div class="col-sm-4">
                                <div>
                                    <label class="control-label">Saldo</label>
                                    <input type="number" name="saldo" required class="form-control" placeholder="Masukan Format Angka">
                                </div>
                            </div>
                                      <div class="col-sm-4">
                                          <label for="">Tanggal</label>
                        <input type="text" name="tanggal" class="form-control tanggal1" required placeholder="Masukan Tanggal">
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
                    <div id="alert" class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
                      <div id="alert" class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                <!-- START row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-layout">
                            <!-- Left / Top Side -->
                            <div class="col-lg-3 panel bgcolor-default valign-top">
                                <ul class="list-unstyled text-center pa15">
                                    <li>
                                       <img src="<?php echo base_url(); ?>assets/image/user.png" class="img-circle" alt="" / height="90px" width="90px">
                                    </li>
                                    <li>
                                        <h4 class="semibold mb0 mt15"><?php echo $this->session->userdata('username') ?></h4>
                                        <p class="nm"><?php echo $this->session->userdata('hakakses') ?></p>
                                        <br/>
                                        <p class="semibold text-primary nm">ID Rohis : <?php echo $this->session->userdata('id_rohis'); ?> </p>
                                    </li>
                                </ul>
                            </div>
                            <!--/ Left / Top Side -->
                            <!-- Left / Bottom Side -->
                            <div class="col-lg-9 panel">
                                <!-- panel body -->
                                <br><br><br><br>
                                <!-- panel body -->
                                <hr class="nm">
                                <!-- panel body -->
                                <div class="panel-body">
                                    <ul class="list-table">
                                    <div class="panel-toolbar p20">
                                <div class="checkbox custom-checkbox pull-left">  
                                    <input type="checkbox" id="customcheckbox-one0" value="1" data-toggle="checkall" data-target="#table1" onclick="do_this()">  
                                    <label for="customcheckbox-one0">&nbsp;&nbsp;Pilih Semua</label>  
                                </div>
                            </div>
                                        <li class="text-right">
                                            <p class="semibold text-primary nm"></p>
                                            
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel body -->
                                <!-- panel table -->
                                <div class="table-responsive">
                                    <form action="<?php echo site_url('keuangan/checkbox_pengeluaran') ?>" method="post">

                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                  <th width="5%"> <input class="btn btn-warning btn-sm" type="hidden" id="toggle" value="Select All" onclick="do_this()" value="select all"></th>
                                                <th width="5%">NO</th>
                                                <th>Deskripsi</th>
                                                <th  class="text-center">Tanggal</th>
                                                <th width="15%" class="text-center">Saldo</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($pengeluaran->num_rows() > 0){ ?>
                                            <?php $no=1; foreach ($pengeluaran->result() as $value) {?>
                                            <tr>
                                                 <td>  <div class="checkbox custom-checkbox nm">  
                                                <input type="checkbox" name="id[]" id="customcheckbox-one<?php echo"$no";?>" value="<?php echo $value->id; ?>" data-toggle="selectrow" data-target="tr" data-contextual="warning">  
                                                <label for="customcheckbox-one<?php echo"$no";?>"></label>   
                                                 </div></td>
                                                <td class="valign-top text-center"><?php echo $this->uri->segment(3)+$no;?>.</td>
                                                <td>
                                                    
                                                    <span class="text-default"><?php echo $value->deskripsi; ?></span>
                                                </td>
                                                <td class="valign-top text-center"><span><?php echo tgl_jam_sql($value->tanggal) ?></span></td>
                                                <td class="valign-top text-center text-primary"><span class="bold"><?php echo number_format($value->saldo,2) ?></span></td>
                                                <td class="valign-top text-center"><span class="text-primary bold">
                                                      <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalmd<?=$value->id;?>"> <i class=" ico-pencil2" title="Edit"></i></a>

                                                     <a class="btn btn-danger btn-sm" href="<?php echo site_url('keuangan/delete_one1/'.$value->id) ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><span class="ico-trash"></span></a>
                                                </span></td>
                                            </tr>
                                            <?php $no++; } ?>
                                         <tr>
                                    <td colspan="9">
                                            <button class="btn btn-danger btn-sm" type="submit" name="delete"  value="Delete Data" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Tersebut')"><span class="ico-trash"></span>Hapus yang dipilih</button>

                                        <center ><?php echo $this->pagination->create_links(); ?></center>
                                   </td>
                                    </tr>
                                        </tbody>
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
                                <!--/ panel table -->
                                <!-- panel footer -->
                                <div class="panel-footer">
                                    <ul class="list-table pa10">
                                        <li>
                                            <h5 class="semibold nm text-default">TOTAL KESELURUHAN PENGELUARAN</h5>
                                        </li>
                                        <li class="text-right">
                                            <?php

                                            $query = $this->db->query("SELECT SUM(saldo) as Total FROM rh_pengeluaran WHERE id_rohis='".$this->session->userdata('id_rohis')."'");
                                            $data = $query->result();
                                             ?> 
                                            <h4 class="semibold nm text-danger">Rp. <?php echo number_format($data[0]->Total,2);?></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ Left / Bottom Side -->
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <hr><!-- horizontal line -->

            
            <?php foreach ($pengeluaran->result() as $data){ ?>
            <div class="modal fade bs-example-modal-sm" id="myModalmd<?=$data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog modal-md">
                      <form action="<?php echo site_url('keuangan/edit_pengeluaran'); ?>" method="post">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3 class="semibold modal-title"><span class="ico-stack-list"></span> Ubah</h3>
                            </div>
                                <div class="modal-body">
                                <div class="panel-body">
                                           <input type="hidden" name="id" readonly class="form-control" value="<?=$data->id;?>">
                    
                                    <input type="hidden" name="id" readonly class="form-control" value="<?=$data->id;?>">
                                   <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="text" name="tanggal" class="tanggal form-control" value="<?=$data->tanggal;?>">
                                </div>
                       
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" value="<?=$data->deskripsi?>">
                                </div>
                                  <div class="form-group">
                                    <label for="">Saldo</label>
                                    <input type="text" name="saldo" class="form-control" value="<?=$data->saldo?>">
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

              <div id="bs-modal-md" class="modal fade">
                    <div class="modal-dialog modal-md">
                     <form action="<?php echo site_url('keuangan/pengeluaran_tambah'); ?>" method="post">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3 class="semibold modal-title "><span class=" ico-box-add"></span> Tambah Data</h3>
                            </div>
                          <div class="modal-body">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="">Tanggal</label>
                                        <input type="text" name="tanggal" class="tanggal1 form-control" placeholder="Masukan Tanggal">
                                    </div>
                                      <div class="form-group">
                                        <label for="">Deskprisi</label>
                                        <input type="text" name="deskripsi" class="form-control" placeholder="Masukan Deskprisi">
                                    </div>
                                     <div class="form-group">
                                        <label for="">Saldo</label>
                                        <input type="number" name="saldo" class="form-control" placeholder="Masukan Saldo">
                                    </div>
                            </div>
                              </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class=" ico-close3"></span> Batal</button>
                                <button type="submit" class="btn btn-primary "><span class="ico-save"></span> Simpan</button>
                            </div>
                        </div>
                          </form>
                    </div>
                </div>
