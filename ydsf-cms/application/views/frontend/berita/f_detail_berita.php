
<div class="header-spacer"></div>

<div class="content-wrapper">


	<!-- Breadcrcumbs -->

	<div class="container">
		<div class="row">
			<div class="breadcrumbs-wrap inline-items with-border">
				<a href="#" class="btn btn--transparent btn--round">
					<svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
				</a>

				<ul class="breadcrumbs">
					<li class="breadcrumbs-item">
						<a href="<?php echo site_url('frontend_berita/f_berita'); ?>">Pages</a>
						<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
					</li>
					<li class="breadcrumbs-item active">
						<span>Berita</span>
						<svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- ... end Breadcrcumbs -->


	<!-- Blog posts-->
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
				<article class="hentry post post-standard has-post-thumbnail sticky post-standard-details">

					<div class="post-thumb">
						<img src="<?php echo base_url() ?>assets/image/images/<?php echo $view_detail['image']; ?>" alt="post">
					</div>

					<div class="post__content">

						<div class="post__date">


							<time class="published" datetime="2017-03-20 12:00:00">
								<a href="#" class="number"><?php echo justtanggal($view_detail['tanggal']);?></a>
								<span class="month"><?php echo bulan(justbulan($view_detail['tanggal']),1).' '.justtahun($view_detail['tanggal']);?></span>
							</time>

						</div>

						<div class="post__content-info">

							<h3 class="post__title entry-title"><?php echo $view_detail['judul']; ?></h3>

							<div class="post-additional-info">
								<span class="post__author author vcard">
									By
									<a href="#" class="fn"><?php echo $view_detail['username']; ?></a>
								</span>
								<span class="category">
									
									<p>In <b><?php echo $view_detail['kategori_berita']; ?></b></p>
								</span>
							</div>

						</div>
						<p><?php echo $view_detail['konten_berita']; ?>
						</p>

					</div>

				</article>
			<br/>
			<br/>
			<br/>
			<br/>


			</div>

			<!-- Sidebar-->

			<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
				<aside aria-label="sidebar" class="sidebar sidebar-right">
<!-- 
					<aside class="widget w-search">
						<h5 class="widget-title">Search form</h5>
						<form method="get">
							<div class="with-icon">
								<input name="name" placeholder="Type and hit Enter..." type="text">
								<svg class="utouch-icon utouch-icon-search"><use xlink:href="#utouch-icon-search"></use></svg>
							</div>
						</form>
					</aside> -->

					<aside class="widget w-latest-news">
						<h5 class="widget-title">Latest News</h5>

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="latest">
								<ul class="latest-news-list">
									<?php foreach ($akses_detail as $data) {?>
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>
												<a href="<?php echo site_url('frontend_berita/f_detail_berita/'.$data->id); ?>">
												<div class="post-thumb-small">
													<img src="<?php echo base_url() ?>assets/image/images/<?php echo $data->image; ?>" alt="news">
												</div>
												</a>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="<?php echo site_url('frontend_berita/f_detail_berita/'.$data->id); ?>"><?php echo $data->kategori_berita; ?></a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-02-02T16:31:34+00:00"><?php echo tgl_jam_sql($data->tanggal); ?></time>
														
													</span>
												</div>
											</header>
										</article>
									</li>
									<?php } ?>
								</ul>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="popular">
								<ul class="latest-news-list">
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>

												<div class="post-thumb">
													<img src="<?php echo base_url() ?>assets/Frontend/img/l-news2.jpg" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">The Important Standard Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-03-16T16:31:34+00:00">16 March 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>

												<div class="post-thumb">
													<img src="<?php echo base_url() ?>assets/Frontend/img/l-news3.png" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">Quote Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-02-28T16:31:34+00:00">28 February 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									<li>
										<article itemscope="" itemtype="http://schema.org/NewsArticle" class="latest-news-item">
											<header>

												<div class="post-thumb">
													<img src="<?php echo base_url() ?>assets/Frontend/img/l-news1.jpg" alt="news">
												</div>
												<div class="post-additional-info">
													<h6 class="post__title entry-title" itemprop="name">
														<a href="17_news_details.html">Video Post Format</a>
													</h6>
													<span class="post__date">
														<time class="entry-date published updated" datetime="2017-03-23T16:31:34+00:00">23 March 2017</time>
													</span>
												</div>
											</header>
										</article>
									</li>
									
								</ul>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="comments">
								<p class="product-description-text">
									Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
								</p>
							</div>
						</div>

					</aside>


<!-- 					<aside class="widget w-tags">
						<h5 class="widget-title">Categories</h5>
						<ul class="tags-list">
							<li>
								<a href="#">App</a>
							</li>
							<li>
								<a href="#">WordPress</a>
							</li>
							<li>
								<a href="#">UI Kit</a>
							</li>
							<li>
								<a href="#">Innovation</a>
							</li>
							<li>
								<a href="#">Trends</a>
							</li>
							<li>
								<a href="#">Startup</a>
							</li>
							<li>
								<a href="#">Marketing</a>
							</li>
							<li>
								<a href="#">WordPress Themes</a>
							</li>
						</ul>
					</aside>
 -->

				</aside>


			</div>

			<!-- End Sidebar-->

		</div>
	</div>

	<!-- End Blog posts-->

</div>

<script>
      function initMap() {
        var sby = {lat: -7.2827193, lng: 112.6467019};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: sby
        });
        var marker = new google.maps.Marker({
          position: sby,
          map: map
        });
      }
    </script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA8lI_PTqYG5gI7_KIl3wcoKD5vU1iGkI&callback=initMap">
</script>