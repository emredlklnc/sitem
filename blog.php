<?php 

include 'header.php';
include 'slider.php';


 ?>

	<!-- Start Page Header area 
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area">
						<h1 class="mu-page-header-title">Blog Archive</h1>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- End Page Header area -->

	<!-- Start Breadcrumb -->
	<div id="mu-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb mu-breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Blog Archive</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->

	
	<!-- Start main content -->
	<main>
		<!-- Start Blog -->
		<section id="mu-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-blog-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-8">
									<div class="mu-blog-left">
										<!-- start single item -->
										



  								<?php 
                           



                           					$sayfada=3;
                                  			$sorgu=$db->prepare("SELECT * FROM icerik");
                                  			$sorgu->execute();
                                  			$toplam_icerik=$sorgu->rowCount();


                                  			$toplam_sayfa=ceil($toplam_icerik/$sayfada);


                                  			$sayfa=isset($_GET['sayfa'])? (int) $_GET['sayfa']:1;

                                  			if ($sayfa<1)$sayfa=1; 
                                  			if ($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;

                                  			$limit=($sayfa-1)*$sayfada;


											$iceriksor=$db->prepare("select * from icerik order by icerik_zaman DESC limit $limit,$sayfada");
											$iceriksor->execute();




                                  while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC))
                                  { ?>



										<article class="mu-blog-item">
											<a href="#"><img src="<?php echo $icerikcek['icerik_resimyol']; ?>" alt="blgo image"></a>
											<div class="mu-blog-item-content">
												<ul class="mu-blog-meta">
													<li>BY: ADMIN </li>
													<li><?php echo $icerikcek['icerik_zaman']; ?></li>
													<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
													<li><i class="fa fa-heart-o"></i>250</li>
												</ul>
												<h1 class="mu-blog-item-title"><a href="#"><?php echo $icerikcek['icerik_baslik']; ?></a></h1>
												<p> <?php echo substr($icerikcek['icerik_detay'],0,150); ?>...</p>
												<a class="mu-blg-readmore-btn" href="<?=seo($icerikcek["icerik_baslik"]).'-'.$icerikcek["icerik_id"];?>">Devamını Oku<i class="fa fa-long-arrow-right"></i></a>
											</div>
										</article>

								<?php } ?>
										<!-- End single item -->

										<!-- start single item -->
										 
										<!-- End single item -->

										<!-- start single item -->
									
										<!-- End single item -->










										<!-- Start paginatin -->
										<nav aria-label="Page navigation example" class="mu-blog-pagination">
										  <ul class="pagination">




										    <li class="page-item">
										      <a class="page-link" href="blog.php?sayfa=1" aria-label="Previous">
										        <span aria-hidden="true" class="fa fa-long-arrow-left"></span>
										        <span class="sr-only">Previous</span>
										      </a>
										    </li>



										    <?php 

										    	$s=0;

										    	while ($s<$toplam_sayfa) {
										    		$s++; ?>

										    			<?php if ($s==$sayfa) { ?>



										    				<li class="page-item"><a class="page-link" href="blog.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a></li>
										    		<?php } else{  ?>	

														<li class="page-item"><a class="page-link" href="blog.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a></li>
													<?php } ?>

										    	<?php } ?>

										     


										  
										    






										    <li class="page-item">
										      <a class="page-link" href="blog.php?sayfa=2" aria-label="Next">
										       <span aria-hidden="true" class="fa fa-long-arrow-right"></span>
										        <span class="sr-only">Next</span>
										      </a>
										    </li>



										  </ul>
										</nav>




										<!-- End pagination -->
									</div>
								</div>
								<div class="col-md-4">
									<div class="mu-blog-sidebar">
										<!-- start Single Widget -->
										<div class="mu-sidebar-widget">
											<form class="mu-search-form">
												<input type="search" placeholder="Search">
												<button class="mu-search-submit-btn" type="submit"><i class="fa fa-search"></i></button>
											</form>
										</div>
										<!-- End single widget -->

										<!-- start Single Widget -->
										<div class="mu-sidebar-widget mu-sidebar-social-widget">
											<h2 class="mu-sidebar-widget-title">Follow us</h2>
											<div class="mu-social-media">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a class="mu-twitter" href="#"><i class="fa fa-twitter"></i></a>
												<a class="mu-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
												<a class="mu-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
												<a class="mu-youtube" href="#"><i class="fa fa-youtube"></i></a>
											</div>
										</div>
										<!-- End single widget -->

										<!-- start Single Widget -->
										<div class="mu-sidebar-widget">
											<h2 class="mu-sidebar-widget-title">Popular post</h2>
											<div class="mu-popular-content-widget">
												<div class="media">
												  <a href="#" class="mu-popular-post-img"><img src="assets/images/blog-img-1.jpg" alt="image"></a>
												  <div class="media-body">
												    <ul class="mu-blog-meta">
														<li>08 Nov 2017 </li>
														<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
														<li><i class="fa fa-heart-o"></i>250</li>
													</ul>
													<h3><a href="#">Donec placerat lorem ut destanse sollicitudin tincidunt.</a></h3>
												  </div>
												</div>

												<div class="media">
												  <a href="#" class="mu-popular-post-img"><img src="assets/images/blog-img-2.jpg" alt="image"></a>
												  <div class="media-body">
												    <ul class="mu-blog-meta">
														<li>08 Nov 2017 </li>
														<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
														<li><i class="fa fa-heart-o"></i>250</li>
													</ul>
													<h3><a href="#">Donec placerat lorem ut destanse sollicitudin tincidunt.</a></h3>
												  </div>
												</div>

												<div class="media">
												  <a href="#" class="mu-popular-post-img"><img src="assets/images/blog-img-3.jpg" alt="image"></a>
												  <div class="media-body">
												    <ul class="mu-blog-meta">
														<li>08 Nov 2017 </li>
														<li><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
														<li><i class="fa fa-heart-o"></i>250</li>
													</ul>
													<h3><a href="#">Donec placerat lorem ut destanse sollicitudin tincidunt.</a></h3>
												  </div>
												</div>
											</div>
											
										</div>
										<!-- End single widget -->

										<!-- start Single Widget -->
										<div class="mu-sidebar-widget">
											<h2 class="mu-sidebar-widget-title">Blog archives</h2>
											<ul class="mu-sidebar-widget-nav">
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>2017 (10)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>2016 (25)</a>
													<ul>
														<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>December</a></li>
														<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>November</a></li>
														<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>October</a></li>
														<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>September</a></li>
													</ul>
												</li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>2015 (86)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>2014 (105)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>2013 (17)</a></li>
											</ul>
											
										</div>
										<!-- End single widget -->

										<!-- start Single Widget -->
										<div class="mu-sidebar-widget">
											<h2 class="mu-sidebar-widget-title">Catagories</h2>
											<ul class="mu-sidebar-widget-nav">
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Web Design (38)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>User Interface (22)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Digital Marketing (152)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Mobile Deveplopment (542)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Events (48)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>E-commerce (23)</a></li>
												<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>News (24)</a></li>
											</ul>
										</div>
										<!-- End single widget -->

										<!-- start Single Widget -->
										<div class="mu-sidebar-widget">
											<h2 class="mu-sidebar-widget-title">Tags</h2>
											<div class="mu-tags">
												<a href="#">Web Design</a>
												<a href="#">Ecommerce</a>
												<a href="#">Events</a>
												<a href="#">Marketing</a>
												<a href="#">UI</a>
												<a href="#">UX</a>
												<a href="#">Mobile app</a>
												<a href="#">Web Development</a>
												<a href="#">Graphics Design</a>
												<a href="#">SEO</a>
											</div>
										</div>
										<!-- End single widget -->

										<!-- start Single Widget -->
										<div class="mu-sidebar-widget mu-sidebar-subscribe-widget">
											<h2 class="mu-sidebar-widget-title">News subscribe</h2>
											
										<form class="mu-subscribe-form">
											<input placeholder="Write your e-mail here" type="email">
											<button class="mu-subscribe-btn">Subscribe</button>
										</form>
									
										</div>
										<!-- End single widget -->

									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog --> 

	</main>
	
	<!-- End main content -->	
			
			
<?php 

include 'footer.php';
 ?>