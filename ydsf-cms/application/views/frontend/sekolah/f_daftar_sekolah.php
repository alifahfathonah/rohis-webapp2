
<div class="header-spacer"></div>

<div class="content-wrapper">

	<div class="container">
		<div class="row">
			<div class="breadcrumbs-wrap inline-items with-border">
				<a href="#" class="btn btn--transparent btn--round">
					<svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
				</a>

				<ul class="breadcrumbs">
					<li class="breadcrumbs-item">
					<a href="<?php echo site_url('frontend_berita/f_berita_terbaru'); ?>">Pages</a>
						<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
					</li>
					<li class="breadcrumbs-item active">
						<span>Daftar Sekolah</span>
						<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
					</li>
				</ul>
			</div>
		</div>
	</div> 
	<section class="medium-padding50">
		<div class="container">
			<div class="row">
				<div class="curriculum-event-wrap">
					<?php foreach ($daftar->result() as $data) {
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
	</section>


	<!-- ... end Curriculum Events -->

</div>
<!-- Footer -->

