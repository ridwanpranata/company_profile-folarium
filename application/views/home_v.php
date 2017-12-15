<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Tango - Responsive Multi-Purpose Landing Page">
	<meta name="keywords" content="Responsive, Startup, Onepage, Parallax, Landing, HTML, Business, Corporate">
	<meta name="author" content="Ridwan Pranata">
	
	<!-- Site title -->
	<title>Folarium | Marketing</title>

	<!-- Favicons and Touch Icons -->	
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/general-elements/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/images/general-elements/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/images/general-elements/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/images/general-elements/apple-touch-icon-114x114.png">

	


	<!-- First Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<!-- Font Awesome file -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
	<!-- Youtube Video file -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.mb.YTPlayer.min.css">
	<!-- Owl Carousel Css file -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.transitions.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.css">
	<!-- Animate Css file -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">
	<!-- Tooltip Css file -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/tooltipster.css">
	<!-- Magnific Popup Css file -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
	<!-- Google Fonts -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'>
	<!-- style of css file -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<!-- style of Custom Colors -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/color/lime2_skin.css">

	<!-- Style Switcher Stylesheets -->    
	<link href="<?php echo base_url();?>assets/css/switcher.css" rel="stylesheet">

	<!-- Style Slick Slider CSS File -->    
	<link href="<?php echo base_url();?>assets/css/slick.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/slick-theme.css" rel="stylesheet">

	<style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width:100%;
        margin: 0px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      /*width: 100%;*/
      display: 
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
  </style>



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE]>
	  <script src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
	  <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
	  <![endif]-->
	  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	</head>
	<body>

	<!-- ===========================================
		 Start "Loader" Section
		 ============================================ -->
		 <div id="website-loading">
		 	<div class="loading-effect">
		 		<div></div>
		 		<div></div>
		 		<div></div>
		 		<div></div>
		 		<div></div>
		 	</div><!-- end loading-effect -->
		 </div><!-- end website-loading -->
	<!-- ===========================================
		 End "Loader" Section
		 ============================================ -->

		 <span class="scroll-top"><i class="fa fa-angle-up"></i></span>

		 <div id="full-container">

	<!-- ===========================================
		 Start "Header" Section
		 ============================================ -->
		 <header data-scroll-index="0" id="header">

		 	<section class="nav">
		 		<div class="sub-nav">
		 			<div class="container">
		 				<div class="row">
		 					<div class="col-sm-7 col-xs-6">
		 						<div class="subnav-contact">
		 							<div class="phone-contact">
		 								<i class="fa fa-phone"></i>
		 								<small>Call Us:</small>
		 								<a href="tel:+62-812-3955-1114">(+62) 812 3955 1114</a> 
		 							</div><!-- end phone-contact -->
		 							<div class="email-contact hidden-sm hidden-xs">
		 								<i class="fa fa-envelope"></i>
		 								<small>Email:</small>
		 								<a href="mailto:marketing@folarium.co.id">marketing@folarium.co.id</a>	
		 							</div><!-- end email-contact -->
		 						</div><!-- end subnav-contact -->
		 					</div><!-- end col-xs-6 -->

		 					<div class="col-sm-5 col-xs-6">
		 						<div class="subnav-social">
		 							<ul class="social-icons hidden-xs">
		 								<li><a href="https://www.facebook.com/folarium/"><i class="fa fa-facebook"></i></a></li>
		 								<li><a href="https://www.instagram.com/folarium/"><i class="fa fa-instagram"></i></a></li>
		 								<li><a href="https://twitter.com/folariumTech"><i class="fa fa-twitter"></i></a></li>
		 							</ul><!-- social-icons -->
		 						</div><!-- end subnav-social -->
		 					</div><!-- end col-xs-6 -->
		 				</div><!-- end row -->
		 			</div><!-- end container -->
		 		</div><!-- end sub-nav -->

		 		<div class="main-nav" id="sticker">
		 			<div class="container">
		 				<div class="row">
		 					<div class="col-xs-12">
		 						<a class="logo scroll-to" href="body">
		 							<img src="<?php echo base_url();?>assets/admin/img/header/<?php echo $logo->content_header_pict; ?>" alt="">
		 							<h5><strong><?php echo $logo->content_header_title; ?></strong></h5>
		 							<p><?php echo $logo->content_header_desc; ?></p>
		 						</a><!-- end logo -->
		 						<nav id="main-menu">
		 							<ul class="main-menu">
		 								<li><a class="scroll-to" data-scroll-nav="0" href="#header">Home</a></li>
		 								<li><a class="scroll-to" data-scroll-nav="2" href="#why-folarium">Why Folarium</a></li>
		 								<li><a class="scroll-to" data-scroll-nav="3" href="#products">Product</a></li>
		 								<li><a class="scroll-to" data-scroll-nav="4" href="#promo">Promo</a></li>
		 								<li><a class="scroll-to" data-scroll-nav="5" href="#our-marketing">Our Marketing</a></li>
		 							</ul><!-- end main-menu -->
		 						</nav><!-- end nav -->
		 						<div class="nav-trigger">
		 							<i class="fa fa-bars"></i>
		 						</div><!-- end nav-trigger -->
		 						<div class="nav-mobile"></div><!-- end nav-mobile -->
		 					</div><!-- end col-xs-12 -->
		 				</div><!-- end row -->
		 			</div><!-- end container -->
		 		</div><!-- end main-nav -->				

		 	</section><!-- end nav -->

		 	<section class="header-featured-content">
		 		<div class="header-parallax" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0" data-parallax-background-image="<?php echo $header->content_header_pict; ?>" >
		 			<div class="pattern-overlay" data-pattern-overlay-darkness-opacity="0.0" data-pattern-overlay-background-image="yes"></div>
		 			<div class="color-overlay" data-background-color="#000000" data-background-color-opacity="0.75"></div><!-- end color-overlay -->
		 			<div class="header-featured-inner-content text-left">
		 				<div class="header-featured-centered-content">
		 					<div class="container">
		 						<div class="row">
		 							<div class="col-xs-12 col-md-7 col-lg-8">
		 								<h1><strong class="colored"><?php echo $header->content_header_title; ?></strong></h1>
		 								<div class="tlt1">
		 									<ul class="texts">
		 										<?php foreach ($headerList as $key): ?>
		 											<li><h1><?php echo $key->content_list_item; ?></h1></li>
		 										<?php endforeach ?>
		 									</ul>
		 								</div>
		 								
		 								<p>
		 									<?php echo $header->content_header_desc; ?>
		 								</p>
		 								<a class="featured-button scroll-to" href="#company-profile">Learn More</a>
		 							</div><!-- end col-xs-12 col-md-6 -->
		 						</div><!-- end row -->
		 					</div><!-- end container -->
		 				</div><!-- end header-featured-centered-content -->
		 			</div><!-- end header-featured-inner-content -->
		 		</div><!-- end header-parallax -->
		 	</section><!-- end header-featured-content -->

		 </header><!-- end header -->
	<!-- ===========================================
		 End "Header" Section
		 ============================================ -->


	<!-- ===========================================
		 Start "Main Container" Section
		 ============================================ -->
		 <div id="main-container">
		 	<div id="main">


			<!-- ===========================================
				 Start "Company Profile" Section
				 ============================================ -->

			 	<section data-scroll-index="9" id="company-profile" class="flat-section grey-background">
			 		<div class="container">
			 			<div class="row">
			 				<div class="flat-section-title">
			 					<div class="col-xs-12">
			 						<h3>
			 							<?php echo $cp->content_title; ?>
			 						</h3>

			 						<div class="title-line"></div>
			 						<p>
			 							<?php echo $cp->content_desc; ?>
			 						</p>
			 					</div><!-- end col-xs-12 -->
			 				</div><!-- end flat-section-title -->

			 				<div class="flat-section-content">
			 					<div class="col-xs-12 col-md-6">

			 						<ul class="more-features-slider">
			 							<?php foreach ($cpListSlideshow as $slideshow): ?>
			 								<li><img src="<?php echo base_url();?>assets/admin/img/products/<?php echo $slideshow->content_product_pict; ?>" alt=""></li>
			 							<?php endforeach ?>
			 						</ul><!-- end more-features-slider -->
			 					</div><!-- end col-xs-12 col-md-6 -->
			 					
			 					<div class="col-xs-12 col-md-6">
			 						<div class="more-features-right-box">
			 							<h3 style="margin:0px;"><?php echo $cp->content_sub_title; ?></h3>
			 							<p>
			 								<?php echo $cp->content_sub_desc; ?>
			 							</p>
			 							<ul class="check-list">
			 								<?php foreach ($cpList as $key2): ?>
			 									<li><i class="fa fa-check-square"></i><?php echo $key2->content_list_item; ?></li>
			 								<?php endforeach ?>
			 							</ul><!-- end check-list -->
			 							<div class="col-sm-2">
			 							</div>
			 							<div class="col-sm-8">
			 								<a role="button" class="featured-button col-xs-12 download-company-profile" href="<?php echo base_url();?>assets/admin/file/<?php echo $cp->content_proposal; ?>" download="Folarium Company Profile"><i class="fa fa-cloud-download"></i> Company Profile.pdf</a>
			 							</div>
			 							<div class="col-sm-2">
			 							</div>
			 						</div><!-- end more-features-right-box -->
			 					</div><!-- end col-xs-12 col-md-6 -->
			 				</div><!-- end flat-section-content -->
			 			</div><!-- end row -->
			 		</div><!-- end container -->
			 	</section><!-- end company-profile section -->
				 	
			<!-- ===========================================
				 End "Company Profile" Section
				 ============================================ -->			

			<!-- ===========================================
				 Start "What We Do Info" Section
				 ============================================ -->
				 <section data-scroll-index="1" id="what-we-do-info" class="flat-section">
				 	<div class="container">
				 		<div class="row">
				 			<div class="flat-section-title">
				 				<div class="col-xs-12">
				 					<h3 class="main-title-blue">
				 						<?php echo $circleTitle->main_content_title; ?>
				 					</h3>
				 				</div><!-- end col-xs-12 -->
				 			</div><!-- end flat-section-title -->
				 			<div class="flat-section-content">
				 				<?php foreach ($fortnership as $fortnershipItem): ?>
				 					<div class="col-xs-12 col-sm-6 col-md-4" style="height: 220px; margin-bottom: 20px">
				 						<div class="info-box-2">
				 							<img src="<?php echo base_url();?>assets/admin/img/fortnership/<?php echo $fortnershipItem->content_fortnership_pict; ?>" alt="">
				 							<h3><?php echo $fortnershipItem->content_fortnership_title; ?></h3>
				 							<p>
				 								<?php echo $fortnershipItem->content_fortnership_desc; ?>
				 							</p>
				 						</div><!-- end info-box-2 -->
				 					</div><!-- end col-xs-12 col-sm-6 col-md-4 -->
				 				<?php endforeach ?>
				 			</div><!-- end flat-section-content -->
				 		</div><!-- end row -->
				 	</div><!-- end container -->
				 </section><!-- end what-we-do-info -->
			<!-- ===========================================
				 End "What We Do Info" Section
				 ============================================ -->



			<!-- ===========================================
				 Start "Why Folarium" Section
				 ============================================ -->
				 <section data-scroll-index="2" id="why-folarium" class="flat-section">
				 	<div class="container">
				 		<div class="row">
				 			<div class="flat-section-title">
				 				<div class="col-xs-12">
									
				 					<h3 class="main-title-yellow"><?php echo $mben->main_content_title; ?></h3>
				 					<br>
				 					<p><?php echo $mben->main_content_desc; ?></p>
				 					
				 				</div><!-- end col-xs-12 -->
				 			</div><!-- end flat-section-title -->

				 			<div class="flat-section-content">

				 				<section class="regular slider" >
				 				
				 					<?php foreach ($benefit as $key): ?>

					 					<div class="col-xs-12 col-sm-6 col-md-4 why-folarium-box">
					 						<div class="info-box-1">
					 							<img src="<?php echo base_url();?>assets/admin/img/benefit/<?php echo $key->content_benefit_pict;?>" alt="">
					 							<h3><?php echo $key->content_benefit_title;?></h3>
					 							<p>
					 								<?php echo $key->content_benefit_desc;?>
					 							</p>
					 						</div><!-- end info-box-1 -->

					 					</div><!-- end col-xs-12 col-sm-6 col-md-4 -->
					 					
					 				<?php endforeach ?>
				 				
				 				  
				 				</section>
				 				
				 				    
				 				
				 			</div><!-- end flat-section-content -->

				 		</div><!-- end row -->
				 	</div><!-- end container -->			
				 </section><!-- end why-folarium section -->
			<!-- ===========================================
				 End "Why Folarium" Section
				 ============================================ -->


			<!-- ===========================================
				 Start "Products" Section
				 ============================================ -->

				 <section data-scroll-index="3" id="products" class="flat-section";>
				 	<div class="container">
				 		<div class="row">
				 			<div class="flat-section-title">
				 				<div class="col-xs-12">
				 					<h3 class="main-title-green" ><?php echo $mpd->main_content_title; ?></h3>
				 					<br>
				 					<p><?php echo $mpd->main_content_desc; ?></p>
				 				</div><!-- end col-xs-12 -->
				 			</div><!-- end flat-section-title -->
				 			<div class="flat-section-content">
				 				<div class="col-xs-12">
				 					<div class="row">
				 						<ul class="portfolio-items-list-2">
				 							
				 							
				 							<?php foreach ($product as $key): ?>

				 								<li data-id="id-1" class="col-xs-12 col-sm-6 col-md-4"> 
				 									<h2 class="products-title"> <?php echo $key->content_product_title; ?> </h2>
				 									
				 									<?php
				 									$bestSeller = $key->content_product_best; 
				 									?>
				 									<!-- give ribbon to bestseller -->
				 									<?php  	if($bestSeller == "yes") {?> 

				 									<div class="ribbon">
				 										<img src="<?php echo base_url();?>assets/images/files/products/ribbon.png" alt="">
				 									</div>

				 									<?php  } ?>
				 									
				 									<div class="products-title-line"></div>
				 									<div class="portfolio-item">
				 										<div class="portfolio-image">
				 											<img class="img-responsive" src="<?php echo base_url();?>assets/admin/img/products/<?php echo $key->content_product_pict; ?>" alt="">
				 										</div>
				 										<div class="portfolio-lightbox">
				 											<div class="portfolio-item-info">
				 												<h4><?php echo $key->content_product_title; ?></h4>
				 												<p><?php echo $key->content_product_desc; ?></p>
				 												<a data-toggle="modal" href="<?php echo base_url();?>detail_c/detailContent/<?php echo $key->content_product_title; ?>">
				 													<button type="button" class="btn btn-primary">Detail</button>
				 												</a>
				 												<a data-toggle="modal" href="https://www.google.co.id/?gws_rd=ssl">
				 													<button type="button" class="btn btn-primary">Demo</button>
				 												</a>
				 											</div>
				 										</div>	  
				 									</div><!-- end portfolio-item -->
				 								</li><!-- end col-xs-12 col-sm-6 col-md-4 -->

				 							<?php endforeach ?>

				 							
				 							<!-- Modal -->
				 							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				 								<div class="modal-dialog" role="document">
				 									<div class="modal-content">
				 										<div class="modal-header-2">
				 											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				 											<h4 class="modal-title" id="myModalLabel"><input type="text"></h4>
				 										</div>
				 										<div class="modal-body-2">
				 											<div class="video-container">
				 												<iframe id="modalVideo" width="640" height="360" src="" frameborder="0" allowfullscreen></iframe>
				 											</div>
				 										</div>
				 									</div>
				 								</div>
				 							</div> <!-- end modal -->

				 						</ul><!-- end portfolio-items-list -->
				 					</div><!-- end row -->
				 				</div><!-- end col-xs-12 -->
				 			</div><!-- end flat-section-content -->
				 		</div><!-- end row -->
				 	</div><!-- end container -->
				 </section><!-- end products -->
				 
				 
			<!-- ===========================================
				 End "Products" Section
				 ============================================ -->


			<!-- ===========================================
				 Start "Promo" Section
				 ============================================ -->
				 <section data-scroll-index="4" id="promo" class="flat-section">
				 	<div class="container">
				 		<div class="row">
				 			<div class="flat-section-title">
				 				<div class="col-xs-12">
				 					<h3 class="main-title-red" ><?php echo $mprom->main_content_title; ?></h3>
				 					<br>
				 					<p><?php echo $mprom->main_content_desc; ?></p>
				 				</div><!-- end col-xs-12 -->
				 			</div><!-- end flat-section-title -->

				 			<div class="flat-section-content">

				 					<div class="promo-container">
				 						<div class="col-sm-6 col-xs-12">
				 							<div class="promo-box">
				 								<h3><?php echo $promo1->content_promo_title?></h3>
				 								<div class="promo-box-background">
				 									<ul> 
				 										<?php foreach ($promo1List as $list): ?>
				 											<li><?php echo $list->content_list_item; ?></li>
				 										<?php endforeach ?>

				 									</ul>
				 								</div>
				 							</div>
				 						</div>
				 						<div class="col-sm-6 col-xs-12">
				 							<div class="promo-background">
				 								<img class="img-responsive" src="<?php echo base_url();?>assets/images/files/background/Thingking Men - Promo Background.png" alt="">
				 								<img class="img-responsive transparant" src="<?php echo base_url();?>assets/images/files/background/City Background 2.png" alt="">
				 							</div>
				 						</div>
				 						<span class="clearfix"></span>
				 						<hr>
				 					</div>

				 					<div class="promo-container">	
				 						<div class="col-sm-6 col-xs-12 side">
				 							<div class="promo-box">
				 								<h3><?php echo $promo2->content_promo_title; ?></h3>
				 								<div class="promo-box-background">
				 									<ul>
				 										<li>
				 											<img class="img-responsive" src="<?php echo base_url();?>assets/images/files/background/What u GET.png" alt="">
				 											<?php echo $promo2->content_promo_sub_title; ?>
				 											<ul class="sub-promo">
				 												<?php foreach ($promo2_1List as $promoGet): ?>
				 													<li><?php echo $promoGet->content_list_item; ?></li>
				 												<?php endforeach ?>
				 											</ul>
				 										</li>
				 										<li></li>
				 										<li>
				 											<img class="img-responsive" src="<?php echo base_url();?>assets/images/files/background/Get Free.png" alt="">
				 											<?php echo $promo2->content_promo_sub_title2; ?>
				 											<ul class="sub-promo">
				 												<?php foreach ($promo2_2List as $promoFree): ?>
				 													<li><?php echo $promoFree->content_list_item; ?></li>
				 												<?php endforeach ?>
				 											</ul>
				 										</li>
				 										<li></li>

				 									</ul>
				 								</div>


				 							</div>
				 						</div>

				 						<div class="col-sm-6 col-xs-12 side">
				 							<div class="promo-background-2">
				 								<img class="img-responsive" src="<?php echo base_url();?>assets/images/files/background/Thingking Men - Promo Background-3.png" alt="">
				 								<img class="img-responsive transparant" src="<?php echo base_url();?>assets/images/files/background/City Background.png" alt="">
				 							</div>
				 						</div>
				 						<span class="clearfix"></span>
				 						<hr>
				 					</div>
				 			</div><!-- end flat-section-content -->


				 		</div><!-- end row -->
				 	</div><!-- end container -->
				 </section><!-- end promo section -->
			<!-- ===========================================
				 End "Promo" Section
				 ============================================ -->



			<!-- ===========================================
				 Start "Our Marketing" Section
				 ============================================ -->
				 <section data-scroll-index="5" id="our-marketing" class="flat-section">
				 	<div class="container">
				 		<div class="row">

				 			<div class="flat-section-title">
				 				<div class="col-xs-12">

				 					<h3><?php echo $mmar->main_content_title; ?></h3>
				 					<div class="title-line"></div>
				 					<p>
				 						<?php echo $mmar->main_content_desc; ?>
				 					</p>
				 					
				 				</div><!-- end col-xs-12 -->
				 			</div><!-- end flat-section-title -->
				 			

				 		</div><!-- end row -->
				 	</div><!-- end container -->
				 </section><!-- end our-marketing -->
			<!-- ===========================================
				 End "Our Marketing" Section
				 ============================================ -->


				 <!--Start of Tawk.to Script-->
				 <script type="text/javascript">
				 	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
				 	(function(){
				 		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
				 		s1.async=true;
				 		s1.src='https://embed.tawk.to/5899890155c2fd09f848710a/default';
				 		s1.charset='UTF-8';
				 		s1.setAttribute('crossorigin','*');
				 		s0.parentNode.insertBefore(s1,s0);
				 	})();
				 </script>
				 <!--End of Tawk.to Script-->

				</div><!-- end main -->	
			</div><!-- end main-container -->

	<!-- ===========================================
		 End "Main Container" Section
		 ============================================ -->

	<!-- ===========================================
		 Start "Footer" Section
		 ============================================ -->
		 <footer id="footer">
		 	<div class="main-footer">
		 		<div class="container">
		 			<div class="row">
		 				<div class="col-md-6 col-xs-12">
		 					<!-- Marketing Infomation Section -->
		 					<div class="footer-box">
		 						<div class="flat-section-content">

				 				<?php foreach ($mar as $key): ?>

				 					<div class="col-sm-8 col-sm-offset-2 text-center col-md-6 col-md-offset-0 ">
				 						<div class="team-person">
				 							<img src="<?php echo base_url();?>assets/admin/img/user/<?php echo $key->user_pict; ?>" alt="">
				 							<div class="team-profil">
				 								<br>
				 								<h5 style="color: white;" ><?php echo $key->user_fname; ?> <?php echo $key->user_lname; ?></h5>
				 								<p><?php echo $key->user_dept; ?></p>
				 							</div><!-- end team-profile -->
				 						</div><!-- end team-person -->
				 					</div><!-- end col-xs-4 -->
				 					<div class="col-sm-12 col-md-6">
				 						<br><br>
				 						<p class="about-team-person">
				 							<?php echo $key->user_bio; ?>
				 						</p>
				 						<h5  style="color: white;" >Contacts :</h5>
				 						<ul class="contact-list">
				 							<li><span><i class="fa fa-envelope"></i></span> Email : <?php echo $key->user_email; ?></li>
				 							<li><span><i class="fa fa-phone"></i></span> Phone : <?php echo $key->user_phone; ?></li>
				 							<li><span><i class="fa fa-mobile"></i> </span> ID Line : <?php echo $key->user_line; ?></li>
				 							<li><span><i class="fa fa-mobile"></i> </span> Pin BB : <?php echo $key->user_pinbb; ?></li>
				 						</ul>
				 					</div>

				 				<?php endforeach ?>
				 			</div><!-- end flat-section-content -->
		 						
		 					</div><!-- end footer-box -->
		 				</div><!-- end col-xs-4 -->
		 				<div class="col-md-6 col-xs-12">
		 					<div class="footer-box">
		 						<h3>About Folarium</h3>
		 						<div>
		 							<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.6110708570177!2d110.39367351425157!3d-7.724810194431915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a577c8e7b7071%3A0x3db8b266217fa4dd!2sCV.+Folarium+Technomedia!5e0!3m2!1sen!2sid!4v1495446852149" class="col-sm-12" frameborder="0" style="border:0" allowfullscreen></iframe>
		 						</div>
		 						<div style="clear: both;"></div>
		 						<p>
		 							CV. Folarium Technomedia merupakan perusahaan IT yang selalu berinovasi disetiap layanannya guna mendukung kebutuhan bisnis pelanggan sesuai permasalahan global bisnis
		 						</p>
		 							<a class="featured-button-small scroll-to" href="#company-profile">Read More</a>
		 						
		 						<h3 class="footer-title">Contact US</h3>
		 						<div>
		 							<ul class="contact-info">
		 								<li>
		 									<i class="fa fa-map-marker"></i>
		 									<span>Address:</span>
		 									<a href="https://goo.gl/maps/zGJmrN9UvQv" target="_blank"> Jl. Kapten Haryadi No.117, Gg. Kantil, Sleman, Yogyakarta 55581</a>
		 								</li>
		 								<li>
		 									<i class="fa fa-phone"></i>
		 									<span>Phone:</span>
		 									<a href="tel:+6274-888-681">(+6274) 888 681</a>  
		 								</li>
		 								<li>
		 									<i class="fa fa-mobile"></i>
		 									<span>HandPhone:</span>
		 									<a href="tel:+62-812-3955-1114">(+62) 812 3955 1114</a>  
		 								</li>
		 								<li>
		 									<i class="fa fa-envelope"></i>
		 									<span>Email:</span>
		 									<a href="mailto:support@folarium.co.id">support@folarium.co.id</a>  
		 								</li>
		 							</ul><!-- end contact-info -->
		 						</div>

		 						<br>
		 						<br>
		 						<ul class="social-icons">
		 							<li><a href="https://www.facebook.com/folarium/"><i class="fa fa-facebook"></i></a></li>
		 							<li><a href="https://www.instagram.com/folarium/"><i class="fa fa-instagram"></i></a></li>
		 							<li><a href="https://twitter.com/folariumTech"><i class="fa fa-twitter"></i></a></li>
		 						</ul>
		 						
		 					</div><!-- end footer-box -->
		 				</div><!-- end col-xs-4 -->
		 			</div><!-- end row -->
		 		</div><!-- container -->
		 	</div><!-- end main-footer -->
		 	<div class="sub-footer">
		 		<div class="container">
		 			<div class="row">
		 				<div class="col-xs-12">
		 					<span class="copyright-message">2017 © <strong>Ridwan</strong>. All rights reserved.</span>						
		 					
		 				</div><!-- end col-xs-12 -->					
		 			</div><!-- end row -->
		 		</div><!-- end container -->
		 	</div><!-- end sub-footer -->
		 </footer><!-- end footer -->
	<!-- ===========================================
		 End "Footer" Section
		 ============================================ -->


		</div><!-- end full-container -->
<!-- ===========================================
	 End "Full Container" Section
	 ============================================ -->
	 
	<!-- ===========================================
		 Start "jQuery Files" Section
		 ============================================ -->
		 <!-- javascript Placed at the end of the document so the pages load faster -->
		 <!-- jQuery library -->
		 <script src="<?php echo base_url();?>assets/js/jquery-1.12.0.min.js"></script>

		<!-- Slick Slider JS File -->
		 <script src="<?php echo base_url();?>assets/js/slick.js"></script>

		 <script type="text/javascript">
		  $(document).on('ready', function() {
		    $(".regular").slick({
		      dots: true,
		      infinite: true,
		      slidesToShow: 3,
		      slidesToScroll: 1,
		      autoplay: true,
		      autoplaySpeed: 2000,
		      responsive: [
		          {
		            breakpoint: 1024,
		            settings: {
		              slidesToShow: 3,
		              slidesToScroll: 3,
		              infinite: true,
		              dots: true
		            }
		          },
		          {
		            breakpoint: 600,
		            settings: {
		              slidesToShow: 2,
		              slidesToScroll: 2
		            }
		          },
		          {
		            breakpoint: 480,
		            settings: {
		              slidesToShow: 1,
		              slidesToScroll: 1
		            }
		          }
		          // You can unslick at a given breakpoint now by adding:
		          // settings: "unslick"
		          // instead of a settings object
		        ]
		    });
		  });
		</script>
		 

		 

		 <!-- Youtube Video -->
		 <script src="<?php echo base_url();?>assets/js/jquery.mb.YTPlayer.min.js"></script>
		 <!-- Validator -->
		 <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
		 <!-- Parallax Plugin -->
		 <script src="<?php echo base_url();?>assets/js/jquery.stellar.min.js"></script>
		 <!-- Owl Carousel Slider -->
		 <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
		 <!-- Owl Jquery Easing -->
		 <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
		 
		 <!-- Tooltip -->
		 <script src="<?php echo base_url();?>assets/js/jquery.tooltipster.min.js"></script>
		 <!-- Sticky Navigation -->
		 <script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>
		 <!-- scrollIt Navigation -->
		 <script src="<?php echo base_url();?>assets/js/scrollIt.min.js"></script>
		 <!-- Placeholder -->
		 <script src="<?php echo base_url();?>assets/js/jquery.placeholder.min.js"></script>
		 <!-- Magnific Popup -->
		 <script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
		 <!-- Animation Text -->
		 <script src="<?php echo base_url();?>assets/js/jquery.lettering.js"></script>
		 <script src="<?php echo base_url();?>assets/js/jquery.textillate.js"></script>

		 <!-- Quicksand Portfolio -->
		 <script src="<?php echo base_url();?>assets/js/jquery.quicksand.js"></script>
		 <!-- <script src="<?php echo base_url();?>assets/js/jquery-animate-css-rotate-scale.js"></script> -->

		 

		 <!-- Bootstrap Js -->
		 <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>


		 <!-- Google Map -->
		 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA1vAzZpKh9vsQvF3e4MeClkyYB-MWtnA&callback=initMap"></script>

	 	 <!-- all Main Plugin -->
		 <script src="<?php echo base_url();?>assets/js/all.js"></script>
		
		
</body>
</html>