<?php 
require_once('./handlers/db.php');
$news=getWhere('news', 'status = 1');
$sponsored=getAll('sponsored');
$products=getAll('products');
if(isset($_SESSION['id'])){
	$id= $_SESSION['id'];
	$customer=getOnce('customer',"id = $id");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Ps-Khan jjj</title>

	
	

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="index.php">Home</a>
								</li>
								<li><a href="shop.php">Shop</a>
									<ul class="sub-menu">
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="single-product.php">Single Product</a></li>
										<li><a href="cart.php">Cart</a></li>
									</ul>
								</li>
								<li><a href="news.php">News</a>
								</li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="login.php">Login</a></li>
										<li><a href="register.php">registration</a></li>
										<li><a href="profile.php">profile</a></li>
										<li><a href="myorder.php">myorder</a></li>
										<li><a href="addproduct.php">add product</a></li>
										<li><a href="WaitingList.php">Waiting list</a></li>
										<li><a href="orderList.php">Order list</a></li>										
										<li><a href="404.php">404 page</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									<i>	<a class="login" href="login.php"><i class="fas fa-user"></i></a>
									<ul class="sub-menu">
										<?php if(isset($_SESSION['login'])){?>

											<li><a href="handlers/logout.php"> Logout</a></li>
											<li><a class="text-white" href="#"><?php "welcome".$customer['name'] ?></a></li>

											<?php } else { ?>
										<li><a href="login.php">Login</a></li>
										<li><a href="register.php">Customer Registration</a></li>
										<li><a href="registerOwner.php"> Products Owner's Registration</a></li>
										<?php }  ?>
										</ul>										
								</i>
									</div>
								</li>
							


								
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Trusted & Organic</p>
									<h1>Welcome to Ps-khan</h1>
								<div class="hero-btns">
									<a href="shop.php" class="boxed-btn">Ps-khan collection</a>
									<a href="contact.php" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- single home slider -->
			<div class="single-homepage-slider homepage-bg-3">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 offset-lg-1 text-right">
							<div class="hero-text">
								<div class="hero-text-tablecell">
									<p class="subtitle">Fresh Everyday</p>
								<h1>100% Organic Collection</h1>
									
									<div class="hero-btns">
										<a href="shop.php" class="boxed-btn">Visit Shop</a>
										<a href="contact.php" class="bordered-btn">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<!-- single home slider -->
	<!--	<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Trusted & Organic</p>
								<h1>Welcome to</h1>
							
								<div class="hero-btns">
									<a href="shop.php" class="boxed-btn">Fruit Collection</a>
									<a href="contact.php" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		
	
	</div>
	<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-tag"></i>
						</div>
						<div class="content">
							<h3>Coupon </h3>
							<p>Use the Coupon Code</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<!-- <div class="testimonail-section mt-80 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
				
					<div class="testimonial-sliders">
					<?php foreach($products as $product):?>
						<div class="single-testimonial-slider">
							<div class="product-img">
							<div class="client-avater2" > <img src="<?= $product['img']?>  " /> </div>
							<div class="client-meta ">
								<h4><?= $product['name']?> </h4>
								<p class="ttestimonial-body">
								<?= $product['description']?></p>
								<h3><?= $product['price']?> </h3>
								
								<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
								
							</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					
				</div>
			</div>
		</div>
	</div> -->
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> off per kg
                                </span>
                            </div>
                        </div>
						<img src="assets/img/a.jpg" alt="">
                    	
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>On the occasion of Eid-aladha </h4>
                    <div class="text">30% off grape leaves for this month</div>
                    <!-- Timer-->
                    <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2022/7/10"><div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
                	
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-80 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
				
					<div class="testimonial-sliders">
					<?php foreach($sponsored as $index=>$sponsore):?>
						<div class="single-testimonial-slider">
							<div class="client-avater">
							<img src="<?= $sponsore['img']?>" alt=" " />
							</div>
							<div class="client-meta">
								<h4><?= $sponsore['title']?> </h4>
								<p class="testimonial-body">
								<?= $sponsore['description']?>
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/watch?v=LT29lZ2RyS8" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
					
						<h2>We are <span class="orange-text">PS Khan</span></h2>
						
						<p>We work to support the local product and start-up companies in Palestine. We provide Palestinian-made products that are difficult to find abroad for expatriates. Welcome to our website.</p>
						<a href="about.php" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->

	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h2>July sale is on! <br> with big <span class="orange-text">Discount...</span></h2>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="shop.php" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- latest news 
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h2><span class="orange-text">Our</span> News</h2>
						<p></p>
					</div>
				</div>
			</div>

			<div class="row">
			<div class="grid">
		
				<div class="g-col-4 ">
				<?php foreach($news as $index=>$new):?>
					<div class="single-latest-news">
						<a href="single-news.php"><img src="<?= $new['img']?>" alt=" " class="latest-news-bg "/></a>
						<div class="news-text-box2">
							<h3><a href="single-news.php"><?= $new['Title']?></a></h3>
							<p class="blog-meta">
								<span class="date"><i class="fas fa-calendar"></i><?= $new['created_at']?></span>
							</p><?= $new['description']?></p>
							
							<a href="single-news.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
				</div>
			</div>
						<?php endforeach; ?>
					</div>
					
				</div>
				</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.php" class="boxed-btn">More News</a>
				</div>
			</div>
		</div>
	</div>
	end latest news -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
					<?php foreach($sponsored as $index=>$sponsore):?>
						<div class="single-logo-item">
						<img src="<?= $sponsore['img']?>" alt=" " />
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

<!-- footer -->
<div class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="footer-box about-widget">
					<h2 class="widget-title">About us</h2>
					<p>we are a Palestinian company that offers original Palestinian products from its original producers with the best quality and lowest prices .</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-box get-in-touch">
					<h2 class="widget-title">Get in Touch</h2>
					<ul>
						<li>Palestine

						</li>
						<li>Phone: +970 568 321 610</li>
						<li>Email: Ps-khan@gmail.com

						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-box pages">
					<h2 class="widget-title">Pages</h2>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Shop</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-box subscribe">
					<h2 class="widget-title">Subscribe</h2>
					<p>Subscribe to our mailing list to get the latest updates.</p>
					<form action="index.php">
						<input type="email" placeholder="Email">
						<button type="submit"><i class="fas fa-paper-plane"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end footer -->

<!-- copyright -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<p>Copyrights &copy; 2022 - <a href="https://imransdesign.com/">Ps-khan</a>,  All Rights Reserved.<br>
					Distributed By - <a href="https://themewagon.com/">AAUP</a>
				</p>
			</div>
			<div class="col-lg-6 text-right col-md-12">
				<div class="social-icons">
					<ul>
						<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>