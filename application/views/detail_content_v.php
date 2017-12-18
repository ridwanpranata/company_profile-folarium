	<!-- ===========================================
		 Start "Main Container" Section
		 ============================================ -->
		 <div id="main-container">
		 	<div id="main">

			<!-- ===========================================
				 Start "Product Detail" Section
				 ============================================ -->

				 <section class="flat-section grey-background product-detail" >
				 	<div class="container">
				 		<div class="row">
				 			<div class="col-xs-12 col-sm-8 col-md-9">
				 				<div class="flat-section-title">
				 					<div class="col-xs-12">
				 						<h3>
				 							<?php 
				 							echo $products->content_product_title; 
				 							$thistitle = $products->content_product_title 
				 							?>
				 						</h3>
				 						<p>
				 							<?php echo $products->content_product_detail; ?>
				 						</p>
				 					</div><!-- end col-xs-12 -->
				 				</div><!-- end flat-section-title -->
				 				<div class="flat-section-content">
				 					<div class="col-xs-12">
				 						<div class="more-features-right-box">
				 							<div class="col-md-8 col-xs-12">
				 								<?php if($products->content_product_pict2 != NULL) { ?>
				 									<img class="img-responsive" src="<?php echo base_url();?>assets/admin/img/products/detail-pict/main-pict/<?php echo $products->content_product_pict2; ?>" alt="">
				 								<?php } else { ?>
				 									<img class="img-responsive" src="<?php echo base_url();?>assets/admin/img/products/<?php echo $products->content_product_pict; ?>" alt="">
				 								<?php } ?>
				 							</div><!-- end col-md-8 col-xs-12 -->
				 							<div class="col-md-4 col-xs-12">
				 								<div class="detail-icon-list">
													<?php foreach ($getListDetail as $key): ?>
														<img class="img-responsive" src="<?php echo base_url();?>assets/admin/img/products/detail-pict/<?php echo $key->content_listDetail_item ?>" alt="">
													<?php endforeach ?>

				 								</div>
				 							</div><!-- end col-md-4 col-xs-12 -->
				 							<div class="col-md-8 col-xs-12">
				 								<?php if($products->content_product_proposal != NULL){ ?>
				 								<a role="button" class="download-company-profile featured-button col-xs-12" href="<?php echo base_url();?>assets/admin/file/product-proposal/<?php echo $products->content_product_proposal; ?>" download="Folarium - Proposal <?php echo $products->content_product_title; ?>">
				 									<i class="fa fa-cloud-download"></i> Download
				 									<hr>
				 									Proposal <?php echo $products->content_product_title; ?>.pdf
				 								</a>
				 								<?php } else { ?>
				 									<a role="button" class="download-company-profile featured-button col-xs-12">
				 									<i class="fa fa-cloud-download"></i> Download
				 									<hr>
				 									Proposal <?php echo $products->content_product_title; ?>.pdf
				 								</a>
				 								<?php } ?>
				 							</div><!-- end col-md-8 col-xs-12 -->
				 						</div><!-- end more-features-right-box -->
				 					</div><!-- end col-xs-12 -->
				 				</div><!-- end flat-section-content -->
				 			</div><!-- end col-xs-12 col-sm-8 col-md-9 -->

				 			<div class="col-xs-12 col-sm-4 col-md-3">
				 				<div class="flat-section-content side-detail-product">
				 					<h3>Other Products</h3>
									<?php $count = 0; ?>
				 					<?php foreach ($getAllDetail as $key): ?>
				 						<?php if($key->content_product_title != $thistitle ){ ?>
				 							<?php if($count < 3) { ?>
						 						<div class="other-product"> 
						 							<div class="other-product-image">
						 								<?php if($key->content_product_othersPict != NULL) { ?>
							 								<a href="<?php echo base_url();?>detail_c/detailContent/<?php echo $key->content_product_title; ?> ">
								 								<img class="img-responsive" src="<?php echo base_url();?>assets/admin/img/products/others-product/<?php echo $key->content_product_othersPict; ?>" alt="">
							 								</a>
						 								<?php } else { ?>
						 									<a href="<?php echo base_url();?>detail_c/<?php echo $key->content_product_title; ?> ">
								 								<img class="img-responsive" src="<?php echo base_url();?>assets/admin/img/products/<?php echo $key->content_product_pict; ?>" alt="">
							 								</a>
						 								<?php } ?>
						 							</div>  
						 						</div>
						 					<?php } ?>
				 							<?php $count++; ?>
				 						<?php } ?>

				 					<?php endforeach ?>

				 				</div><!-- end flat-section-content side-detail-product-->

				 			</div><!-- end col-xs-12 col-sm-4 col-md-3 -->
				 		</div><!-- end row -->
				 	</div><!-- end container -->
				 </section><!-- end product-detail section -->

			<!-- ===========================================
				 End "Product Detail" Section
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