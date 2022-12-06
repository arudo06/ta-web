<?php

require_once 'functions.php';
session_start();
// error_reporting(0);
$userLevel = 'guest';
$userName = null;
if (isset($_SESSION['login'])) {
    if ($_SESSION['level'] == 'admin') {
        header('Location: http://localhost/ta/admin/home.php');
    } else {    
        $userLevel = $_SESSION['level'];
        $userName = $_SESSION['name'];
    }
}
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Buycar</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	    <!-- Start Header Area -->
		<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.cart"><img src="img/logo.png" alt="" style="height: 70px; font-weight: 70;""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
							<li class="nav-item"><a href="category.php" class="nav-link">Belanja</a></li>
							<li class="nav-item><a href="">
							<?php if ($userLevel != 'user') : ?>
							<li class="nav-item"><a href="login.php" class="nav-link">Masuk</a></li>
							<?php else : ?>
								<li class="nav-item"><a href="logout.php" class="nav-link">Keluar</a></li>
							<?php endif; ?>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Toyota Raize 2021-2022</h1>
									<p>Toyota Raize 2021 - 2022 ditawarkan dalam 6 varian - mulai Rp 229,80Juta hingga Rp 299,20Juta ,varian 
										entry levelnya yaitu 2021 Toyota Raize 1.2L G M/T Rp 229,80Juta dan varian tertingi Toyota Raize
										 yaitu 2021 Toyota Raize 1.0TG Sport CVT TSS ditawarkan dengan harga Rp 299,20Juta.</p>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/toyota_raize_banner.png" alt="">
								</div>
							</div>
						</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Pegiriman Gratis</h6>
						<p>untuk semua pesanan</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>kebijakan pengembalian</h6>
						<p>untuk semua pesanan</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>Dukungan 24/7</h6>
						<p>Untuk semua pesanan</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Pembayaran Aman</h6>
						<p>untuk semua pesanan</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Mobil Terbaru</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p1.jpg" alt="">
							<div class="product-details">
								<h6>Toyota Yaris</h6>
								<h6>G CVT 3 AB 2022</h6>
								<div class="price">
									<h6>Rp 295,80 Juta</h6>
								</div>
								<div class="prd-bottom">
								<a href="single-product.php" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p2.jpg" alt="">
							<div class="product-details">
								<h6>Honda Brio Satya</h6>
								<h6>S M/T 2022</h6>
								<div class="price">
									<h6>Rp 156,90 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Lihat detail</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p3.jpg" alt="">
							<div class="product-details">
								<h6>Daihatsu Rocky</h6>
								<h6>1.0 R TC MT</h6>
								<div class="price">
									<h6>Rp 214,2 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Lihat detail</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p4.jpg" alt="">
							<div class="product-details">
								<h6>Kia Carens</h6>
								<h6>1.5MPI Premiere 2022</h6>
								<div class="price">
									<h6>Rp 389,00 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Lihat detail</p>
									</a>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p5.jpg" alt="">
							<div class="product-details">
								<h6>Mercedes-Benz S-class</h6>
								<h6>C 200 AM G FINAL EDITION 2021</h6>
								<div class="price">
									<h6>Rp 890,00 Juta</h6>	
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Lihat detail</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p6.jpg" alt="">
							<div class="product-details">
								<h6>Honda HR-V</h6>
								<H6>1.5 L S 2022</H6>
								<div class="price">
									<h6>355,90 Juta</h6>
								</div>
								<div class="prd-bottom">			
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Lihat detail</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p7.jpg" alt="">
							<div class="product-details">
								<h6>Mitsubushi Xpander</h6>
								<H6>GLS MT 2022</H6>
								<div class="price">
									<h6>Rp 253,40 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Lihat detail</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p8.jpg" alt="">
							<div class="product-details">
								<h6>Suzuki Ertiga</h6>
								<H6>GA MT 2022</H6>
								<div class="price">
									<h6>Rp 225,10 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">Lihat detail</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Mobil Terpopuler </h1>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p9.jpg" alt="">
							<div class="product-details">
								<h6>Toyota Raize</h6>
								<h6>1,2 L G M/T 2021</h6>
								<div class="price">
									<h6>Rp 229,80 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p3.jpg" alt="">
							<div class="product-details">
								<h6>Daihatsu Rocky</h6>
								<H6>1.0 R TC MT</H6>
								<div class="price">
									<h6>Rp 214,20 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p10.jpg" alt="">
							<div class="product-details">
								<h6>Honda Civic</h6>
								<H6>1.5 L TURBO</H6>
								<div class="price">
									<h6>Rp 533,00 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p2.jpg" alt="">
							<div class="product-details">
								<h6>Honda Brio Satya</h6>
								<h6>S M/T 2022</h6>
								<div class="price">
									<h6>Rp 156,90 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p1.jpg" alt="">
							<div class="product-details">
								<h6>Toyota Yaris</h6>
								<h6>G CVT 3 AB 2022</h6>
								<div class="price">
									<h6>Rp 295,80 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p11.jpg" alt="">
							<div class="product-details">
								<h6>Hyundai Palisade</h6>
								<h6>Prime 2022</h6>
								<div class="price">
									<h6>Rp 842,00 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p8.jpg" alt="">
							<div class="product-details">
								<h6>Suzuki Ertiga</h6>
								<h6>GA MT 2022</h6>
								<div class="price">
									<h6>Rp 225,10 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p6.jpg" alt="">
							<div class="product-details">
								<h6>Honda HR-V</h6>
								<h6>1.5 L S 2022</h6>
								<div class="price">
									<h6>Rp 355,90 Juta</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Tentang Kita</h6>
						<p>
							Buycar merupakan situs yang mempermudahkan pelanggan untuk membeli serta melihat
							mobil secara online.
						</p>
					</div>
				</div>
				<div class="col-lg-5  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="single-footer-widget">
						<h6>Ikuti Kita</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="https://www.instagram.com/lnld__/?a=YmMyMTA2M2Y%3D"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>