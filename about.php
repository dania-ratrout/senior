<?php 
require_once('../Ps-Khan/handlers/db.php');
$sponsored=getAll('sponsored');
$team=getAll('team');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>About</title>

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
	<div class="top-header-area2" id="sticker">
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
								<li class="current-list-item"><a href="index.php">Home</a></li>
								<li><a href="shop.php">Shop</a></li>
                                <li><a href="news.php">News</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="about.php">About</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									<i>	<a class="login" href="login.php"><i class="fas fa-user"></i></a>
									<ul class="sub-menu">
										<?php if(isset($_session['login'])){?>

											<li><a href="index.php"> Logout</a></li>

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
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<!-- <div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>We sale Palestinian products</p>
						<h1>About Us</h1>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end breadcrumb section -->
<!-- featured section -->
<div class="feature-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 mt-150">
				<div class="featured-text">
					<h2 class="pb-3 text-start ">Why <span class="orange-text">Ps-khan</span></h2>
					<div class="row">
						
							<div class="marjan">
						
						<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
							<div class="list-box d-flex">
								<div class="list-icon">
									<i class="fas fa-shipping-fast"></i>
								</div>
								<div class="content">
									<h3>Home Delivery</h3>
									<p>Fast and safe delivery</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
							<div class="list-box d-flex">
								<div class="list-icon">
									<i class="fas fa-money-bill-alt"></i>
								</div>
								<div class="content">
									<h3>Free Shipping</h3>
							<p>When order over $75</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
							<div class="list-box d-flex">
								<div class="list-icon">
									<i class="fas fa-briefcase"></i>
								</div>
								<div class="content">
									<h3>Custom Box</h3>
									<p>Encapsulated safe products assortment</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="list-box d-flex">
								<div class="list-icon">
									<i class="fas fa-sync-alt"></i>
								</div>
								<div class="content">
									<h3>Coupon </h3>
							<p>Use the Coupon Code</p>
								</div>
							</div>
						</div>
					</div>
						<!---->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end featured section -->


	<!-- shop banner
	<section class="shop-banner">
    	<div class="container">
        	<h2>August sale is on! <br> with big <span class="orange-text">Discount...</span></h2>
            <div class="sale-percent"><span>Sale! <br> Upto</span>40% <span>off olives oil</span></div>
            <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>
	 end shop banner -->

	<!-- team section -->
	<div class="mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h2>Our <span class="orange-text">Team</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
			<?php foreach($team as $index=>$t):?>
			<div class="col-lg-4 col-md-6">	
					<div class="single-team-item">
						<div class="team-bg team"><img src="<?= $t['img']?>" alt=" " /></div>
						<h4><?= $t['name']?>  <span><?= $t['job']?> </span></h4>
						<ul class="social-link-team">
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>	
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- end team section -->

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
						<li><a href="shop.php">Shop</a></li>
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