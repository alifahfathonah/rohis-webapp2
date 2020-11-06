
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="ico-list-alt"></span> Daftar Rohis</h4>
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
                <form action="<?php echo site_url('akses_superadmin/add_rohis');?>" class="collapse" id="form-task" data-parsley-validate method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Username</label>
                                <input type="text" name="username" class="form-control" required placeholder="Masukan Username">
                            </div>
                            <div class="col-sm-4">
                                <div>
                                    <label class="control-label">Password</label>
                                    <input type="password" name="password" required class="form-control" placeholder="Masukan Password">
                                </div>
                            </div>
                                      <div class="col-sm-4">
                                          <label for="">Tanggal</label>
                        <input type="text" name="date" class="form-control tanggal1" required placeholder="Masukan Tanggal">
                                      </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Hakakses</label>
                                     <select data-placeholder="Pilih Hakakses" required placeholder="Pilih Hakakses" class="form-control" name="hakakses" required class="select-clear">
                                    <option placeholder="Pilih">-- Pilih --</option>
                                    <option value="superadmin">Superadmin</option>
                                    <option value="admin">Admin</option>
                                    </select>
                                    
                            </div>
                             <div class="col-sm-4">
                                <label class="control-label">ID Rohis</label>
                                <input name="id_rohis" type="number" class="form-control" placeholder="Masukan Target">
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
   
                        <div class="panel-heading">
                            <!-- panel toolbar -->
                            <form class="navbar-form navbar-right"  action="<?php echo site_url('akses_superadmin/cari'); ?>" method="post">
                            <div class="panel-toolbar">
                            
                                <div class="input-group">
                                    <div class="has-icon">
                                        <input type="text" class="form-control" placeholder="Cari" name="cari">
                                        <i class="ico-search form-control-icon"></i>
                                    </div>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default">Search</button>
                                    </div>
                                </div>
                            </div>
                             </form>
                        </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">

                                <h3 class="panel-title"><span  class="panel-icon mr5"><i class="ico-equalizer"></i></span> 
                            </div>
                               <div class="panel-toolbar-wrapper pl0 pt5 pb5">
                            <div class="panel-toolbar pl10">
                                <div class="checkbox custom-checkbox pull-left">  
                                    <input type="checkbox" id="customcheckbox-one0" value="1" data-toggle="checkall" data-target="#table1" onclick="do_this()">  
                                    <label for="customcheckbox-one0">&nbsp;&nbsp;Pilih Semua</label>  
                                </div>
                            </div>
                            <div class="panel-toolbar text-right">
                              
                            </div>
                        </div>

   
    		<form action="<?php echo site_url('akses_superadmin/checkbox'); ?>" method="post">
    		<table class="table table-hover table-bordered table-striped">
			<tr>
          			<th width="3%"><input class="btn btn-info btn-sm" type="hidden" id="toggle" value="Select All" onclick="cek_this()" value="select all"></th>
			           <th>No</th>
                <th>Username</th>
                <th>Tanggal</th>
                <th >Hakakses</th>
                <th>Status</th>
                <th width="13%">Aksi</th>
			</tr>
			<?php if ($control_admin->num_rows() > 0 ) { ?>
			
			<?php $no=1; foreach ($control_admin->result() as $data) : ?>
			<tr>
				 <td>
                   <div class="checkbox custom-checkbox nm">  
                      <input type="checkbox" name="id_rohis[]" id="customcheckbox-one<?php echo"$no";?>" value="<?php echo $data->id_rohis; ?>" data-toggle="selectrow" data-target="tr" data-contextual="warning">  
                      <label for="customcheckbox-one<?php echo"$no";?>"></label>   
                  </div>
                </td>
                </td>
				<td><?php echo $this->uri->segment('3')+$no; ?></td>
                <td><?php echo $data->username; ?></td>
                <td><?php echo tgl_jam_sql($data->date); ?></td>
                <td><?php echo $data->hakakses; ?></td>
                <td>
                    
 <?php if($data->status==1){
                  echo "<span class='label label-success'> Aktif</span>";
                  $site=site_url('akses_superadmin/deadindividu/'.$data->id);
                  $teks="Nonaktifkan Data";
                  $icon="switch";
                  $class="warning";
                }elseif($data->status==2){
                  echo "<span class='label label-danger'>Tidak Aktif</span>";
                  $site=site_url('akses_superadmin/onindividu/'.$data->id);
                  $teks="Aktifkan Data";
                  $icon="switch";
                  $class="default";
                  $onclick = "confirm('Anda Yakin Akan Merubah Status Data Ini')";
                }else{
                  echo "<label class='label label-primary> Lainnya</label>";
                  $site=site_url('akses_superadmin/onindividu/'.$data->id);
                  $teks="Aktifkan Data";
                  $icon="switch";
                  $class="default";
                            }
                     ?>
                </td>
				           <td>	
                       <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalmd<?=$data->id;?>"> <i class=" ico-pencil2" title="Edit"></i></a>
                      <button class="btn btn-danger btn-sm" type="submit" name="delete"  value="Delete Data" onclick="return confirm('Apakah Anda Yakin Ingin Mengahapus Data Tersebut')"><span class="ico-trash" ></span></button>

                         <a href="<?php echo $site; ?>" onclick="return confirm('Anda Yakin Akan Merubah Status Data Ini');" class="btn  btn-<?=$class;?> btn-sm tooltips " data-popup="tooltip" data-original-title="<?php echo $teks; ?>" 
                          data-placement="top"><i class="ico-<?=$icon?>"></i></a>

				             </td>
            			</tr>
            			<?php $no++; endforeach;?>
            			<tr>
                        <td colspan="10">
                                 <button class="btn btn-danger btn-sm" type="submit" name="delete"  value="Delete Data" onclick="return confirm('Apakah Anda Yakin Ingin Mengahapus Data Tersebut')"><span class="ico-trash"></span> Hapus yang dipilih</button>
                         <center ><?php echo $this->pagination->create_links(); ?></center>
                        </td>

            			</tr>

            			<?php }else{ ?>
            			<tr><?php 
            						echo '<tr>';
            				 echo "<tr><td colspan='10'  style='text-align: center; font-weight: bold'><span class='  ico-notification2'></span> Data tidak ditemukan</td></tr>";
            						echo '<tr>';
            			 ?></tr>
            			<?php }?>
            			</table>
            		</form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->
            </div>
            <!--/ END Template Container -->

   <?php foreach ($control_admin->result() as $data){ ?>
            <div class="modal fade bs-example-modal-sm" id="myModalmd<?=$data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog modal-md">
                      <form action="<?php echo site_url('akses_superadmin/edit_rohis'); ?>" method="post">
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
                                                     <label for="">Username</label>
                                <input type="text" name="username" class="form-control" value="<?=$data->username;?>">
                                                </div>
                                        </div>
                                  
                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="">ID Rohis</label>
                                <input type="number" name="id_rohis" class="form-control" value="<?=$data->id_rohis?>">
                                                </div>
                                            </div>
                                        </div>

                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                   <label for="">Tanggal</label>
                                <input type="text" name="date" class="form-control tanggal" value="<?=$data->date?>">
                                                </div>
                                                <div class="col-sm-6">
                                                       <label class="control-label">Hakakses</label>
                                <div >
                                  <select data-placeholder="Pilih Hakakses" placeholder="Pilih Hakakses"  name="hakakses" required class="select-clear form-control">
                                    <option value="">-- Pilih --</option>
                                    <option value="superadmin" <?php if($data->hakakses =='superadmin'){echo "selected";} ?>>superadmin</option>
                                    <option value="admin" <?php if($data->hakakses =='admin'){echo "selected";} ?>>admin</option>
                                   
                                  </select>
                                </div>
                                                </div>
                                            </div>
                                        </div>
                            
                               <div class="form-group">
                               
                            </div>
                              <div class="form-group">

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

              <div id="bs-modal-md" class="modal fade">
                    <div class="modal-dialog modal-md">
                     <form action="<?php echo site_url('akses_superadmin/add_rohis'); ?>" method="post">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3 class="semibold modal-title "><span class=" ico-box-add"></span> Tambah Data</h3>
                            </div>
                          <div class="modal-body">
                                <div class="panel-body">
                                   <div class="form-group">
                                <label class="control-label">Username</label>
                                <input name="username" type="text" required class="form-control" placeholder="Masukan Username">
                    </div>
                     <div class="form-group">
                                <label class="control-label">Password</label>
                                <input name="password" type="text" required class="form-control" placeholder="Masukan Password">
                    </div>
                     <div class="form-group">
                                <label class="control-label">ID Rohis</label>
                                <input name="id_rohis" type="number" required class="form-control" placeholder="Masukan ID Rohis">
                    </div>
                     <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="text" name="date" class="form-control tanggal" placeholder="Masukan Tanggal">
                            </div>
                        <div class="form-group">
                    <label class="control-label">Hakakses</label>
                     <select data-placeholder="Pilih Hakakses" required placeholder="Pilih Hakakses" class="form-control" name="hakakses" required class="select-clear">
                    <option placeholder="Pilih">-- Pilih --</option>
                    <option value="superadmin">Superadmin</option>
                    <option value="admin">Admin</option>
                    </select>
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
