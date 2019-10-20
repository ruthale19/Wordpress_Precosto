<?php get_header() ?>

<header class="header" id="home">
		<div id="carouselHeader" class="carousel slide carousel-fade d-none d-lg-block" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/carousel11.jpg" class="d-block w-100 header__img" alt="img_carousel1">
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/carousel2.jpg" class="d-block w-100 header__img" alt="img_carousel2">
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/carousel3.jpg" class="d-block w-100 header__img" alt="img_carousel3">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="header__container">
			<img src="<?php echo get_theme_file_uri() ?>/assets/images/logo_edificio.png" alt="logo_edificio" class="text-center header__logo">
			<h3 class="header__text1">Experiencia a su alcance</h3>
		</div>
	</header>

	<!-- servicios -->
	<section class="service" id="services">
		<div class="container service__container">
			<h1 class="service__text1">Servicios</h1>
			<div class="card-deck">
				<div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="0">
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/house.svg" class="card-img-top img-fluid service__img" alt="img_construction">
					<div class="card-body">
						<h5 class="card-title mb-5">Construcción</h5>
						<p class="card-text service__text2">Elaboramos su Proyecto, desde el diseño hasta la entrega de la obra terminada.</p>
						<a href="single-construccion.html" class="btn service__btn">Conocer más</a>
					</div>
				</div>
				<div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="1s">
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/house_rem.svg" class="card-img-top img-fluid service__img" alt="img_remodelacion">
					<div class="card-body">
						<h5 class="card-title mb-5">Remodelación</h5>
						<p class="card-text service__text2">Realizamos mejoras a su inmueble, tanto en interiores como exteriores.</p>
						<a href="single-remodelacion.html" class="btn service__btn">Conocer más</a>
					</div>
				</div>
				<div class="w-100 d-none d-sm-block d-lg-none">
					<!-- wrap every 2 on sm-->
				</div>
				<div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="2s">
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/house_main.svg" class="card-img-top img-fluid service__img" alt="img_mantencion">
					<div class="card-body">
						<h5 class="card-title mb-5">Mantención</h5>
						<p class="card-text service__text2">Cubrimos las necesidades de mantención periódica de sus instalaciones.</p>
						<a href="single-mantencion.html" class="btn service__btn">Conocer más</a>
					</div>
				</div>
				<div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="3s">
					<img src="<?php echo get_theme_file_uri() ?>/assets/images/fence.svg" class="card-img-top img-fluid service__img" alt="img_estructura">
					<div class="card-body">
						<h5 class="card-title mb-4">Estructuras Metálicas</h5>
						<p class="card-text service__text2">Realizamos la fabricación y montaje de su estructura metálica.</p>
						<a href="single-estructura.html" class="btn service__btn">Conocer más</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Proyectos -->

	<section class="proyect" id="proyects">
		<div class="container proyect__container">
			<h1 class="proyect__text1">Nuestros Proyectos</h1>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-xs-12  pics animation">
					<div class="proyect__block wow animated rotateInDownLeft" data-wow-duration="1s" data-wow-delay="0.5s">
						<div class="proyect__works-thumb" id="work-1"></div>
						<div class="proyect__works-caption">Remodelación</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="proyect__block wow animated rotateInDownLeft" data-wow-duration=".8s" data-wow-delay="1s">
						<div class="proyect__works-thumb" id="work-2"></div>
						<div class="proyect__works-caption">Remodelación</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="proyect__block wow animated rotateInDownLeft" data-wow-duration=".8s" data-wow-delay="1.5s">
						<div class="proyect__works-thumb" id="work-3"></div>
						<div class="proyect__works-caption">Construcción</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="proyect__block wow animated rotateInDownRight" data-wow-duration=".8s" data-wow-delay="1.5s">
						<div class="proyect__works-thumb" id="work-4"></div>
						<div class="proyect__works-caption">Construcción</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="proyect__block wow animated rotateInDownRight" data-wow-duration=".8s" data-wow-delay="1s">
						<div class="proyect__works-thumb" id="work-5"></div>
						<div class="proyect__works-caption">Estructura Metálica</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12">
					<div class="proyect__block wow animated rotateInDownRight" data-wow-duration=".8s" data-wow-delay="0.5s">
						<div class="proyect__works-thumb" id="work-6"></div>
						<div class="proyect__works-caption">Mantenimiento</div>
					</div>
				</div>
			</div>
			<a href="proyect.html" class="btn proyect__btn">Ver más</a>
		</div>
	</section>

<?php get_footer() ?>
