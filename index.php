<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">

	<!--====== Title ======-->
	<title>Covifarma</title>

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="assets/images/covifarma-ico.ico" type="image/png">

	<!--====== Animate CSS ======-->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!--====== Tiny slider CSS ======-->
	<link rel="stylesheet" href="assets/css/tiny-slider.css">

	<!--====== glightbox CSS ======-->
	<link rel="stylesheet" href="assets/css/glightbox.min.css">

	<!--====== Line Icons CSS ======-->
	<link rel="stylesheet" href="assets/css/LineIcons.2.0.css">

	<!--====== Selectr CSS ======-->
	<link rel="stylesheet" href="assets/css/selectr.css">

	<!--====== Nouislider CSS ======-->
	<link rel="stylesheet" href="assets/css/nouislider.css">

	<!--====== Bootstrap CSS ======-->
	<link rel="stylesheet" href="assets/css/bootstrap-5.0.5-alpha.min.css">

	<!--====== Style CSS ======-->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--==== CDN Fontawesome CSS =====-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
	<!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

	<!--====== PRELOADER PART START ======-->

	<div class="preloader">
		<div class="loader">
			<div class="ytp-spinner">
				<div class="ytp-spinner-container">
					<div class="ytp-spinner-rotator">
						<div class="ytp-spinner-left">
							<div class="ytp-spinner-circle"></div>
						</div>
						<div class="ytp-spinner-right">
							<div class="ytp-spinner-circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--====== PRELOADER PART ENDS ======-->

	<!--====== HEADER PART START ======-->

	<header class="header_area">
		<div id="header_navbar" class="header_navbar">
			<div class="container position-relative">
				<div class="row align-items-center">
					<div class="col-xl-12">
						<nav class="navbar navbar-expand-lg">
							<a class="navbar-brand" href="index.html">
								<img id="logo" src="assets/images/logo/logo-covifarma.png" alt="Logo">
							</a>
							<div class="search-area">
								<div class="container">
									<div class="search-wrapper">
										<form action="" method="POST">
											<div class="row justify-content-center">
												<div class="col-lg-3 col-sm-5 col-10">
													<div class="search-input">
														<label for="category"><i class="lni lni-grid-alt theme-color"></i></label>
														<select name="category" id="category">
															<option value="none" selected disabled>Categoría</option>
															<option value="zona">Zona de areas</option>
															<option value="infra">Infraestructura, accesorios complementarios</option>
														</select>

													</div>
												</div>
												<div class="col-lg-2 col-sm-5 col-10">
													<div class="search-btn">
														<button class="main-btn btn-hover" name="Buscar" value="Buscar">Buscar <i class="lni lni-search-alt"></i></button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>

						</nav> <!-- navbar -->
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div> <!-- header navbar -->
	</header>

	<!--====== HEADER PART ENDS ======-->

	<?php require_once "mantenedor/operacion.php" ?>

	<!--====== SEARCH PART START ======-->

	<!--====== SEARCH PART END ======-->

	<!--====== CATEGORY LIST PART START ======-->
	<section class="category-list-area pt-130">
		<div class="container">
			<div class="category-list-wrapper">
				<div class="category-list-item">
					<a href="category.html">
						<div class="icon">
							<i class="lni lni-car"></i>
						</div>
						<h3>Zona área</h3>
					</a>
				</div>
				<div class="category-list-item">
					<a href="category.html">
						<div class="icon">
							<i class="lni lni-display"></i>
						</div>
						<h3>Accesorios</h3>
					</a>
				</div>

			</div>
		</div>
	</section>
	<!--====== CATEGORY LIST PART END ======-->


	<div class="mx-auto col-lg-9 col-xl-9 col-md-10 pt-60 mb-60">


		<!--====== BACK TOP TOP PART START ======-->
		<a href="#" class="back-to-top btn-hover"><i class="lni lni-chevron-up"></i></a>
		<!--====== BACK TOP TOP PART ENDS ======-->


		<!--====== Bootstrap js ======-->
		<script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>

		<!--====== Tiny slider js ======-->
		<script src="assets/js/tiny-slider.js"></script>

		<!--====== wow js ======-->
		<script src="assets/js/wow.min.js"></script>

		<!--====== glightbox js ======-->
		<script src="assets/js/glightbox.min.js"></script>

		<!--====== Selectr js ======-->
		<script src="assets/js/selectr.min.js"></script>

		<!--====== Nouislider js ======-->
		<script src="assets/js/nouislider.js"></script>

		<!--====== Main js ======-->
		<script src="assets/js/main.js"></script>

		<!--==== CDN Fontawesome JS ====-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script>
			//========= glightbox
			const myGallery = GLightbox({
				'href': 'assets/video/Free App Landing Page Template - AppLand.mp4',
				'type': 'video',
				'source': 'youtube', //vimeo, youtube or local
				'width': 900,
				'autoplayVideos': true,
			});

			//======== tiny slider for feature-product-carousel
			tns({
				slideBy: 'page',
				autoplay: false,
				mouseDrag: true,
				gutter: 20,
				nav: false,
				controls: true,
				controlsPosition: 'bottom',
				controlsText: [
					'<span class="prev"><i class="lni lni-chevron-left"></i></span>',
					'<span class="next"><i class="lni lni-chevron-right"></i></span>'
				],
				container: ".feature-product-carousel",
				items: 1,
				center: false,
				autoplayTimeout: 5000,
				swipeAngle: false,
				speed: 400,
				responsive: {
					768: {
						items: 2,
					},

					992: {
						items: 2,
					},

					1200: {
						items: 3,
					}
				}
			});

			//======== tiny slider for testimonial
			tns({
				slideBy: 'page',
				autoplay: false,
				mouseDrag: true,
				gutter: 20,
				nav: true,
				controls: false,
				container: ".testimonial-carousel",
				items: 1,
				center: false,
				autoplayTimeout: 5000,
				swipeAngle: false,
				speed: 400,
				responsive: {
					768: {
						items: 2,
					},
					1200: {
						items: 3,
					}
				}
			});
		</script>

</body>

</html>