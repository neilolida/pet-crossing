<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pet Crossing</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">


	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!-- small header-->
	<?php include './layout/small-header.php';?>
	<!-- -->

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"><span class="flaticon-pawprint-1 mr-2"></span>Pet Crossing</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>

						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Login</a></li>
							<li><a class="dropdown-item" href="#">Signup</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--  -->
	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
				data-scrollax-parent="true">
				<div class="col-md-11 ftco-animate text-center">
					<h1 class="mb-4">Highest Quality Care For Pets You'll Love </h1>
					<p><a href="#" class="btn btn-primary mr-md-4 py-3 px-4">Learn more <span
								class="ion-ios-arrow-forward"></span></a></p>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section bg-light ftco-no-pt ftco-intro">
		<div class="container">
			<div class="row">
				<div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
							<span><i class="fa-solid fa-syringe "></i></span>
                        </div>
                        <div class="media-body p-4">
                            <h3 class="heading">Pet Immunization</h3>
                            <p>Your description here</p>
                            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                        </div>
                    </div>
                </div>

				<div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
							<span><i class="fa-solid fa-tablets"></i></span>
                        </div>
                        <div class="media-body p-4">
                            <h3 class="heading">Pet Vitamins</h3>
                            <p>Your description here</p>
                            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                        </div>
                    </div>
                </div>

				<div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
                    <div class="d-block services text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
							<span><i class="fa-solid fa-shield-dog"></i></span>
                        </div>
                        <div class="media-body p-4">
                            <h3 class="heading">Pet Vaccine</h3>
                            <p>Your description here</p>
                            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
                        </div>
                    </div>
                </div>

			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-5 d-flex">
					<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
						style="background-image:url(images/about-1.jpg);">
					</div>
				</div>
				<div class="col-md-7 pl-md-5 py-md-5">
					<div class="heading-section pt-md-5">
						<h2 class="mb-4">Why Choose Us?</h2>
					</div>
					<div class="row">
						<div class="col-md-6 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-stethoscope"></span></div>
							<div class="text pl-3">
								<h4>Care Advices</h4>
								<p>Far far away, behind the word mountains, far from the countries.</p>
							</div>
						</div>
						<div class="col-md-6 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-customer-service"></span></div>
							<div class="text pl-3">
								<h4>Customer Supports</h4>
								<p>Far far away, behind the word mountains, far from the countries.</p>
							</div>
						</div>
						<div class="col-md-6 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-emergency-call"></span></div>
							<div class="text pl-3">
								<h4>Emergency Services</h4>
								<p>Far far away, behind the word mountains, far from the countries.</p>
							</div>
						</div>
						<div class="col-md-6 services-2 w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center"><span
									class="flaticon-veterinarian"></span></div>
							<div class="text pl-3">
								<h4>Veterinary Help</h4>
								<p>Far far away, behind the word mountains, far from the countries.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2>Pets Gallery</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end"
						style="background-image: url(images/gallery-1.jpg);">
						<a href="images/gallery-1.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Cat</span>
								<h2><a href="work-single.html">Persian Cat</a></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end"
						style="background-image: url(images/gallery-2.jpg);">
						<a href="images/gallery-2.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Dog</span>
								<h2><a href="work-single.html">Pomeranian</a></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end"
						style="background-image: url(images/gallery-3.jpg);">
						<a href="images/gallery-3.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Cat</span>
								<h2><a href="work-single.html">Sphynx Cat</a></h2>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end"
						style="background-image: url(images/gallery-4.jpg);">
						<a href="images/gallery-4.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Cat</span>
								<h2><a href="work-single.html">British Shorthair</a></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end"
						style="background-image: url(images/gallery-5.jpg);">
						<a href="images/gallery-5.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Dog</span>
								<h2><a href="work-single.html">Beagle</a></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="work mb-4 img d-flex align-items-end"
						style="background-image: url(images/gallery-6.jpg);">
						<a href="images/gallery-6.jpg"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="fa fa-expand"></span>
						</a>
						<div class="desc w-100 px-4">
							<div class="text w-100 mb-3">
								<span>Dog</span>
								<h2><a href="work-single.html">Pug</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<?php include './layout/footer.php';?>
	<!-- Footer end-->

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
	</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>



</body>

</html>