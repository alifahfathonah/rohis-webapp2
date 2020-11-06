
<div class="header-spacer"></div>

<div class="content-wrapper">

	<!-- menampilkan marker maps yang telah di inputkan sebelum nya  -->

	<div id="map" style="height:500px;"></div>
	<section class="negative-margin-top80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="course-details">
						<ul class="course-details-control" role="tablist">

							<li role="presentation" class="tab-control">
								<a href="#curriculum" role="tab" data-toggle="tab" class="control-item">Profil Sekolah</a>
							</li>
							<li role="presentation" class="tab-control">
								<a href="#kegiatan" role="tab" data-toggle="tab" class="control-item">Kegiatan</a>
							</li>

							<li role="presentation" class="tab-control">
								<a href="#gallery" role="tab" data-toggle="tab" class="control-item">Gallery</a>
							</li>

						</ul>
						
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="curriculum">
								<h3><?php echo $view_detail['nama_sekolah']; ?></h3>
								<ul class="curriculum-list">
									<li>
										<div class="lection">
											
											<a href="#" class="h6 title"><?php echo $view_detail['alamat_surat'] ?>, <?php echo $view_detail['rt'] ?>, <?php echo $view_detail['rw']; ?>, <?php echo $view_detail['desa'] ?>, <?php echo $view_detail['kecamatan']; ?>, <?php echo $view_detail['kabupaten']; ?></a>
										</div>
									</li>
									<li>
										<div class="lection">
											
											<a href="#" class="h6 title">Jumlah Total Siswa : <?php echo $this->db->count_all_results('rh_profil'); ?></a>
										</div>
									</li>
									<li>
										<div class="lection">
											
											<a href="#" class="h6 title">Jumlah Total Siswa Muslim :  <?php echo $this->db->count_all_results('rh_profil'); ?> </a>
											<?php 
		
 ?>
										</div>
									</li>
								</ul>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="kegiatan">
								<h5>Kegiatan Sekolah</h5>

								<div class="col-md-10 col-md-offset-2">
									<ul class="curriculum-list">

										<?php
											$no =1;
										 foreach ($detail_sekolah->result() as $key) :?>
										<li>

											<div class="lection">
												
												<a href="#" class="h6 title"><?php
												echo $no.' . ';
												 echo $key->nama_aktivitas; ?>
												 	
												 </a><br>
												
											</div>
										</li>
										<?php $no++; endforeach;  ?>
												
										
									</ul>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="gallery">
									<!-- Screenshots -->

									<section class="align-center">
										<div class="col-sm-10 com-sm-offset-2">
											<h4>Gallery Sekolah</h4><br/>
											<?php foreach ($detail_gallery->result() as $data) :?>
												
											
											<div class="col-lg-3 col-md-6 col-sm-6">
												<div class="screenshots-item">
													<img src="<?php echo base_url();?>assets/image/upload/<?php echo $data->image ?>" alt="logo">
													<div class="overlay-standard overlay--blue-dark"></div>
													<a href="<?php echo base_url();?>assets/image/upload/<?php echo $data->image; ?>" class="expand js-zoom-image">
														<svg class="utouch-icon utouch-icon-expand"><use xlink:href="#utouch-icon-expand"></use></svg>
														Expand
													</a>
												</div>
											</div>
										<?php endforeach; ?>
										
											<div class="row mb60">
												<div class="col-lg-12">
													  <center ><?php echo $this->pagination->create_links(); ?></center>
												</div>
											</div>
										</div>
									</section>

									<!-- ... end Screenshots -->
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>
