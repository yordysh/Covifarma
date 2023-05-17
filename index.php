<?php
require_once "mantenedor/DataBaseA.php";
require_once "mantenedor/registrar.php";
$conexion = new DataBase();
$dats = $conexion->Conectar();

$mostrar = new m_almacen();
$data = $mostrar->MostrarAlmacenMuestra();
$contador = 0;
?>

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

	<!--==== Iconos ICOMOON =====-->
	<link rel="stylesheet" href="assets/js/icons/style.css" />

	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<script src="assets/js/datos.js"></script>

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
	<main>
		<?php
		error_reporting(E_ALL ^ E_NOTICE);

		if ($_POST['Buscar']) {
			$xlista = $_POST['category'];
			if ($xlista == "zona") { ?>
				<section>
					<div class="container g-4 mt-100 row">
						<div class="row g-4 top-div">
							<center><label class="title">ZONAS/ÁREAS</label></center>
						</div>
						<div class="main">
							<form id="formulario" method="post" action="mantenedor/insertarZona.php">

								<!-- Text input -->
								<div class="form-outline mb-4">

									<input type="text" id="codigo" class="form-control" name="codigo" />
									<label class="form-label">Código</label>
								</div>

								<!-- Text input -->
								<div class="form-outline mb-4">
									<input type="text" id="nombreArea" class="form-control" name="nombreArea">
									<label class="form-label">Nombre de área</label>
								</div>

								<!-- Text input -->
								<div class="form-outline mb-4">
									<input type="text" id="fecha" class="form-control" name="fecha" />
									<label class="form-label">Fecha</label>
								</div>

								<!-- Email input -->
								<div class="form-outline mb-4">
									<input type="text" id=" version" class="form-control" name="version" />
									<label class="form-label">Version</label>
								</div>

								<!-- Submit button -->
								<input type="submit" name="insert" class="btn btn-primary" value="Guardar">
							</form>
							<div class="table-responsive " style="overflow: scroll;height: 600px; margin-top:100px;">
								<table id="tbalmacen" class="table table-sm mb-3 table-hover">
									<thead>
										<tr>
											<th class="thtitulo" scope="col">CODIGO</th>
											<th class="thtitulo" scope="col">NOMBRE DE AREA</th>
											<th class="thtitulo" scope="col">FECHA</th>
											<th class="thtitulo" scope="col">VERSION</th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php if (!empty($data)) {
											// foreach ($data as $lista) {  
										?>
											<?php foreach ($data as $lista) : ?>
												<tr>
													<td><?php echo $lista->codigo ?></td>
													<td><?php echo $lista->nombreArea ?></td>
													<td><?php echo $lista->fecha ?></td>
													<td><?php echo $lista->version ?></td>
													<td> <a href="mantenedor/editar.php?id=<?php echo $lista->id; ?>" class="btn btn-success" name="editar"><i class="icon-edit"></i></a> </td>
													<td> <a href="mostrar.php?id=<?php echo $lista->id; ?>" class="btn btn-danger" name="borrar"><i class="icon-trash"></i></a> </td>

												</tr>
											<?php
											endforeach;
											?>
										<?php
											// }
										} else { ?>
											<tr>
												<td colspan="7">No se encontro lista...</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</section>
				<?php
			} else {
				if ($xlista == "infra") { ?>
					<section>
						<div class="container g-4 mt-100 row">
							<div class="row g-4 top-div">
								<center><label class="title">INFRAESTRUCTURA, ACCESORIOS COMPLEMENTARIOS</label></center>
							</div>
							<div class="main">
								<form method="post" action="mantenedor/insertarZona.php">

									<!-- Text input -->
									<div class="form-outline mb-4">

										<input type="text" id="form6Example3" class="form-control" name="codigo" />
										<label class="form-label">Código</label>
									</div>

									<!-- Text input -->
									<div class="form-outline mb-4">
										<input type="text" id="form6Example3" class="form-control" name="nombreArea">
										<label class="form-label">Nombre de accesorio</label>
									</div>

									<!-- Text input -->
									<div class="form-outline mb-4">
										<input type="text" id="form6Example4" class="form-control" name="fecha" />
										<label class="form-label">Días</label>
									</div>
									<!-- Submit button -->
									<input type="submit" name="insert" class="btn btn-primary" value="Guardar">
								</form>
								<div class="table-responsive " style="overflow: scroll;height: 600px; margin-top:100px;">
									<table id="tbalmacen" class="table table-sm mb-3 table-hover">
										<thead>
											<tr>
												<th class="thtitulo" scope="col">CODIGO</th>
												<th class="thtitulo" scope="col">NOMBRE DE ACCESORIO</th>
												<th class="thtitulo" scope="col">FECHA</th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php if (!empty($data)) {

											?>
												<?php foreach ($data as $lista) : ?>
													<tr>
														<td><?php echo $lista->codigo ?></td>
														<td><?php echo $lista->nombreArea ?></td>
														<td><?php echo $lista->fecha ?></td>
														<td> <a href="mantenedor/editar.php?id=<?php echo $lista->id; ?>" class="btn btn-success" name="editar"><i class="icon-edit"></i></a> </td>
														<td> <a href="mostrar.php?id=<?php echo $lista->id; ?>" class="btn btn-danger" name="borrar"><i class="icon-trash"></i></a> </td>

													</tr>
												<?php
												endforeach;
												?>
											<?php
											} else { ?>
												<tr>
													<td colspan="7">No se encontro lista...</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</section>
		<?php
				}
			}
		}
		?>

	</main>

	<!--====== SEARCH PART START ======-->

	<!--====== SEARCH PART END ======-->

	<!--====== CATEGORY LIST PART START ======-->
	<!-- <section class="category-list-area pt-130">
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
	</section> -->
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

		<!--==== Highlight table row on mouse click JS ====-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script>
			//========= glightbox ====-->
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