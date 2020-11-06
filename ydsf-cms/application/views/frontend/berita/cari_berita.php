<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	 <title>Falah - Frontend</title>
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/frontend/favicon.ico">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/css/theme-styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/css/blocks.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/css/widgets.css">

	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">

	<!-- Styles for Plugins -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/Frontend/css/swiper.min.css">

</head>
<body class="crumina-grid">



<div id="hellopreloader"></div>

<header class="header animated headroom--not-bottom slideDown headroom--top" id="site-header">

	<div class="header-lines-decoration">
		<span class="bg-secondary-color"></span>
		<span class="bg-blue"></span>
		<span class="bg-blue-light"></span>
		<span class="bg-orange-light"></span>
		<span class="bg-red"></span>
		<span class="bg-green"></span>
		<span class="bg-secondary-color"></span>
	</div>

	<div class="container">

		<a href="#" id="top-bar-js" class="top-bar-link"><svg class="utouch-icon utouch-icon-arrow-top"><use xlink:href="#utouch-icon-arrow-top"></use></svg></a>
			<div class="header-content-wrapper">

			<div class="site-logo">
				<a href="<?php echo site_url('frontend_berita/f_berita_terbaru'); ?>" class="full-block"></a>
				<img src="<?php echo base_url(); ?>assets/Frontend/img/logo.png" alt="Utouch">
				<div class="logo-text">
					<div class="logo-title">falah</div>
					<div class="logo-sub-title">sekolah app</div>
				</div>
			</div>

			<nav id="primary-menu" class="primary-menu">

				<!-- menu-icon-wrapper -->

				<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
					<span class="mob-menu--title">Menu</span>
					<span id="menu-icon-wrapper" class="menu-icon-wrapper">
						<svg width="1000px" height="1000px">
							<path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
							<path id="pathE" d="M 300 500 L 700 500"></path>
							<path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
						</svg>
					</span>
				</a>

				<ul class="primary-menu-menu">
					<li>
						<a href="<?php echo site_url('frontend_berita/f_berita_terbaru'); ?>" class="active">Home</a>
					</li>
					<li>
						<a href="<?php echo site_url('frontend_sekolah/f_daftar_sekolah'); ?>">Daftar Sekolah</a>
					</li>
					<li>
						<a href="<?php echo site_url('frontend_berita/f_berita'); ?>" class="active">Berita</a>
					</li>
				</ul>
				<ul>
					<li>
						<a href="<?php echo site_url('config/login'); ?>" class="btn btn-x-small btn--green-light">Login</a>
					</li>
				</ul>
				<ul class="nav-add">
					<li class="search search_main">
						<a href="#" class="js-open-search-standard">
							<svg class="utouch-icon utouch-icon-search"><use xlink:href="#utouch-icon-search"></use></svg>
						</a>
					</li>
				</ul>
				<div class="search-standard">
					<form id="search-header" action="<?php echo site_url('frontend_berita/cari'); ?>" method="post">
						<input class="search-input" name="cari" placeholder="cari daftar sekolah" autocomplete="off" type="search" autofocus>
						<button type="submit" class="form-icon">
							<svg class="utouch-icon utouch-icon-search"><use xlink:href="#utouch-icon-search"></use></svg>
						</button>
						<span class="close js-search-close form-icon">
							<svg class="utouch-icon utouch-icon-cancel-1"><use xlink:href="#utouch-icon-cancel-1"></use></svg>
						</span>
					</form>
				</div>
				</nav>

			</div>

		</div>

    <script type="text/javascript">
    $(document).ready(function(){
        $(" #alert" ).fadeOut(4000);
    });
    </script>

    <style>
    	
    	
.center { text-align: center;
 }
  .pagination { 
  	display: inline-block;
  	 } .pagination a , .pagination strong{
  	  color: black;
  	  float: left; 
  	  padding: 5px 10px;
  	  text-decoration: none; 
  	  transition: background-color .2s;
  	  border: 1px solid #ddd;
  	  margin: 0 2px;
  	       }
  	        .pagination a.active, .pagination strong{
	  background-color: #4CAF50;
	  color: white;
	  border: 1px solid #4CAF50; 
	} 
	  .pagination a:hover:not(.active), .pagination strong{
	   background-color: #ddd;
	   color: white; float: left;
	   padding: 5px 10px; 
	   text-decoration: none;
	   transition: background-color .2s;
	   border: 1px solid #ddd;
	   margin: 0 2px;
	   background: #3585F1;
  	             }
    #datatable-buttons thead tr th{
        background: #2A3F54;
        text-align: center;
        vertical-align: center;
        color:white;
        border:2px solid #2A3F54;
    }
    
    
    </style>

</header>

<!-- ... End Header -->



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
						<a href="<?php echo site_url('frontend_berita/f_berita_terbaru'); ?>">Pages</a>
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


	<!-- Curriculum Events -->
		<center><b><?php echo $message; ?></b></center>

	<section class="medium-padding50">
		<div class="container">
			<div class="row">
				<div class="curriculum-event-wrap">
					<?php foreach ($berita->result() as $value) {
					?>
					<a href="<?php echo site_url('frontend_berita/f_detail_berita/'.$value->id); ?>">
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="curriculum-event c-primary" data-mh="curriculum">
							<div class="curriculum-event-thumb">
								<img src="<?php echo base_url(); ?>assets/image/images/<?php echo $value->image; ?>" alt="image" widht="220px" height="220px">
							</div>
							<div class="curriculum-event-content">
								<div class="icon-text-item display-flex">
									<svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
									<div class="text"><?php echo tgl_jam_sql($value->tanggal); ?> - <?php echo $value->username; ?></div>
								</div>
								<a href="<?php echo site_url('frontend_berita/f_detail_berita/'.$value->id); ?>" class="h5 title"><?php echo word_limiter($value->judul,5); ?></a>
							</div>
						</div>
					</div>
					</a>
				<?php } ?>

				</div>
				<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
					<?php echo $this->pagination->create_links(); ?>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Curriculum Events -->

</div>
