<?php get_header() ?>

<!-- header -->
	<header class="header">
		<div class="header__container">
			<?php get_template_part('_includes/header', 'logo') ?>
			<h3 class="header__text1"><?php echo get_bloginfo('description') ?></h3>
		</div>
	</header>

	<!-- Proyectos -->
	<section class="proyect" id="proyects">
		<div class="container proyect__container2">
			<h1 class="proyect__text1">Nuestros Proyectos</h1>
			<div class="row d-flex justify-content-center">
				<div class="col-md-12 mt-3">
					<button type="button" class="btn btn-outline-info mx-2 waves-effect btn-menu mb-2 all" data-filter="all">Todos</button>
					<button type="button" class="btn btn-outline-info mx-2 waves-effect btn-menu mb-2 1" data-filter="1">Construcción</button>
					<button type="button" class="btn btn-outline-info mx-2 waves-effect btn-menu mb-2 2" data-filter="2">Remodelación</button>
					<button type="button" class="btn btn-outline-info mx-2 waves-effect btn-menu mb-2 3" data-filter="3">Mantenimiento</button>
					<button type="button" class="btn btn-outline-info mx-2 waves-effect btn-menu mb-2 4" data-filter="4">Estructuras Metálicas</button>
				</div>
			</div>

				<?php $arg = array(
				 'post_type'		 => 'project',
				 'category_name'	 => '',
				 'posts_per_page' => -1
				 );

				 $get_arg = new WP_Query( $arg );

				 while ( $get_arg->have_posts() ) {
				 $get_arg->the_post();
				 ?>

				 <!-- Content -->
				 <div class="row gallery" id="gallery">


				 <?php
				 if(trim(get_the_title()) == 'construccion')?>{
					 <div class="col-lg-4 col-md-6 col-xs-12 gallery__img 1">
				 }


				 <div class="proyect__block" data-wow-duration="1s" data-wow-delay="0.5s">
					 <div class="proyect__works-thumb" id="work-1"></div>
					 <div class="proyect__works-caption"><?php the_title(); ?></div>
				 </div>
				 <?php } wp_reset_postdata(); ?>


					<div class="proyect__block" data-wow-duration="1s" data-wow-delay="0.5s">
						<div class="proyect__works-thumb" id="work-1"></div>
						<div class="proyect__works-caption">Remodelación</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 2">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1s">
						<div class="proyect__works-thumb" id="work-2"></div>
						<div class="proyect__works-caption">Remodelación</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 1">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1.5s">
						<div class="proyect__works-thumb" id="work-3"></div>
						<div class="proyect__works-caption">Construcción</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 1">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1.5s">
						<div class="proyect__works-thumb" id="work-4"></div>
						<div class="proyect__works-caption">Construcción</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 4">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1s">
						<div class="proyect__works-thumb" id="work-5"></div>
						<div class="proyect__works-caption">Estructura Metálica</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 3">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="0.5s">
						<div class="proyect__works-thumb" id="work-6"></div>
						<div class="proyect__works-caption">Mantenimiento</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 2">
					<div class="proyect__block" data-wow-duration="1s" data-wow-delay="0.5s">
						<div class="proyect__works-thumb" id="work-7"></div>
						<div class="proyect__works-caption">Remodelación</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 2">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1s">
						<div class="proyect__works-thumb" id="work-8"></div>
						<div class="proyect__works-caption">Remodelación</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 1">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1.5s">
						<div class="proyect__works-thumb" id="work-9"></div>
						<div class="proyect__works-caption">Construcción</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 4">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1.5s">
						<div class="proyect__works-thumb" id="work-10"></div>
						<div class="proyect__works-caption">Estructura Metálica</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 2">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1s">
						<div class="proyect__works-thumb" id="work-11"></div>
						<div class="proyect__works-caption">Remodelación</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 3">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="0.5s">
						<div class="proyect__works-thumb" id="work-12"></div>
						<div class="proyect__works-caption">Mantenimiento</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 4">
					<div class="proyect__block" data-wow-duration="1s" data-wow-delay="0.5s">
						<div class="proyect__works-thumb" id="work-13"></div>
						<div class="proyect__works-caption">Estructura Metálica</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 2">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1s">
						<div class="proyect__works-thumb" id="work-14"></div>
						<div class="proyect__works-caption">Remodelación</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 2">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1.5s">
						<div class="proyect__works-thumb" id="work-15"></div>
						<div class="proyect__works-caption">Remodelación</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 4">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1.5s">
						<div class="proyect__works-thumb" id="work-16"></div>
						<div class="proyect__works-caption">Estructura Metálica</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 2">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1s">
						<div class="proyect__works-thumb" id="work-17"></div>
						<div class="proyect__works-caption">Remodelación</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 4">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="0.5s">
						<div class="proyect__works-thumb" id="work-18"></div>
						<div class="proyect__works-caption">Estructura Metálica</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 4">
					<div class="proyect__block" data-wow-duration="1s" data-wow-delay="0.5s">
						<div class="proyect__works-thumb" id="work-19"></div>
						<div class="proyect__works-caption">Estructura Metálica</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 3">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1s">
						<div class="proyect__works-thumb" id="work-20"></div>
						<div class="proyect__works-caption">Mantenimiento</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 4">
					<div class="proyect__block" data-wow-duration=".8s" data-wow-delay="1.5s">
						<div class="proyect__works-thumb" id="work-21"></div>
						<div class="proyect__works-caption">Estructura Metálica</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php get_footer() ?>
