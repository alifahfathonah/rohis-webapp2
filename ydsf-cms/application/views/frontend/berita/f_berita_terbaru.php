
<div class="header-spacer"></div>

<!-- ... End Header -->

<div class="content-wrapper">


	<section class="background-cover bg-blue-lighteen bg-12 align-center medium-padding120">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">
						<div class="crumina-module crumina-heading">
							<h2 class="heading-title">Selamat datang di Website <br> <span class="c-primary">Sekolah app</span></h2>
						</div>
					</div>
				</div>
			</div>
	</section>


 	<!-- Curriculum Events -->
	<section class="medium-padding100">
		<div class="container">
			<div class="row">
				<div class="curriculum-event-wrap">
					<?php foreach ($daftar_sekolah->result() as $data) {
						if($data->long!="" and $data->lat!="")
						{
					?>
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="curriculum-event c-primary" data-mh="curriculum">
								<div id="map_canvas"></div>

									<iframe class="embed-responsive-item" src="<?php echo base_url()?>frontend_sekolah/maps/<?php echo $data->id; ?>" allowfullscreen style="border:none;cursor:none;overlay:none; overflow:hidden;width:100%;height:150px;margin-left:10px;"></iframe>
							<div class="curriculum-event-content">
									<a href="<?php echo site_url('frontend_sekolah/f_detail_sekolah/'.$data->id); ?>" class="h5 title"><?php echo $data->nama_sekolah; ?></a>


								<div class="icon-text-item display-flex">
									<div class="author-info">
											<a href="<?php echo site_url('frontend_sekolah/f_detail_sekolah/'.$data->id); ?>" class="h6"><?php echo $data->desa ?>, <?php echo $data->kabupaten ?>, <?php echo $data->rt; ?>, <?php echo $data->rw; ?>, <?php echo $data->kecamatan ?></a>
											<div class="author-company"><?php echo $data->alamat_surat ?></div>
										</div>
								</div>
							</div>
						</div>
					</div>
					</a>
				<?php }
						} ?>

				</div>
				<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
					 <?php echo $this->pagination->create_links(); ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3>Berita Terbaru</h3>

					<div class="swiper-container top-navigation" data-show-items="3">
						<div class="swiper-wrapper">
							<?php foreach ($berita_terbaru->result() as $data) {
						?>
						<a href="<?php echo site_url('frontend_berita/f_detail_berita/'.$data->id) ?>">
							<div class="swiper-slide">
								<div class="curriculum-event c-primary"  >
										<div class="curriculum-event-thumb">
											<img src="<?php echo base_url();?>assets/image/images/<?php echo $data->image; ?>" alt="">
										</div>
										</a>
							<div class="curriculum-event-content">
								<div class="icon-text-item display-flex">
									<svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
									<div class="text"><?php echo tgl_jam_sql($data->tanggal); ?> - <?php echo $data->username; ?></div>
								</div>
								<a href="<?php echo site_url('frontend_berita/f_detail_berita/'.$data->id); ?>" class="h5 title"><?php echo word_limiter($data->judul,5); ?></a>
							</div>
									</div>
							</div>

							<?php } ?>
				
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ... end Curriculum Events -->



</div>

