<?php get_header() ?>

<header class="header" id="home">
		<div id="carouselHeader" class="carousel slide carousel-fade d-none d-lg-block" data-ride="carousel">
			<div class="carousel-inner">

				<?php $arg = array(
				 'post_type'		 => 'slider',
				 'posts_per_page' => 3,
				 'order' => 'ASC'
				 );

				 $get_arg = new WP_Query( $arg );

				 while ( $get_arg->have_posts() ) {
				 $get_arg->the_post();
				 ?>

				 <!-- Content -->

				<div class="carousel-item <?php if ( $get_arg->current_post == 0 ) : ?>active<?php endif; ?>">
					<?php the_post_thumbnail('carousel-images', array('class' => 'd-block w-100 h-auto')); ?>
				</div>

				 <?php } wp_reset_postdata(); ?>

			</div>
		</div>

		<div class="header__container">
			<?php get_template_part('_includes/header', 'logo') ?>
			<h3 class="header__text1"><?php echo get_bloginfo('description') ?></h3>
		</div>
	</header>

	<!-- servicios -->
	<section class="service" id="services">
		<div class="container service__container">
			<h1 class="service__text1">Servicios</h1>
			<div class="card-deck">



				<?php $arg = array(
				 'post_type'		 => 'post',
				 'category_name'	 => '',
				 'posts_per_page' => -1,
				 );

				 $get_arg = new WP_Query( $arg );

				 while ( $get_arg->have_posts() ) {
				 $get_arg->the_post();
				 ?>

				 <!-- Content -->
				 <div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="0">
					 <?php get_template_part('_includes/service', 'construccion') ?>
					 <div class="card-body">
						 <h5 class="card-title mb-3"><?php the_title(); ?></h5>
						 <p class="card-text service__text2 text-justify"><?php the_excerpt(); ?></p>
						 <a href="<?php the_permalink(); ?>" class="btn service__btn">Conocer más</a>
					 </div>
				 </div>

				 <div class="w-100 d-none d-sm-block d-lg-none">
				 <!-- wrap every 2 on sm-->
			 	 </div>

				 <?php } wp_reset_postdata(); ?>



			</div>
		</div>
	</section>

	<!-- Proyectos -->

	<section class="proyect" id="proyects">
		<div class="container proyect__container">
			<h1 class="proyect__text1">Nuestros Proyectos</h1>
			<div class="row">

				<?php $arg = array(
				 'post_type'		 => 'project',
				 'category_name'	 => '',
				 'posts_per_page' => 3,
				 'order' => 'DESC'
				 );

				 $get_arg = new WP_Query( $arg );

				 while ( $get_arg->have_posts() ) {
				 $get_arg->the_post();
				 ?>

				 <!-- Content -->
				 <div class="col-lg-4 col-md-6 col-xs-12">
					 <div class="proyect__block wow animated rotateInDownRight" data-wow-duration="1s" data-wow-delay="0.5s">
						 <?php the_post_thumbnail('projects', array('class' => 'image w-100 proyect__works-thumb')) ?>
						 <div class="proyect__works-caption"><?php the_title() ?></div>
					 </div>
				 </div>

				 <?php } wp_reset_postdata(); ?>

				 <?php $arg = array(
 				 'post_type'		 => 'project',
 				 'category_name'	 => '',
 				 'posts_per_page' => 3,
 				 'order' => 'ASC'
 				 );

 				 $get_arg = new WP_Query( $arg );

 				 while ( $get_arg->have_posts() ) {
 				 $get_arg->the_post();
 				 ?>

 				 <!-- Content -->
 				 <div class="col-lg-4 col-md-6 col-xs-12">
 					 <div class="proyect__block wow animated rotateInDownLeft" data-wow-duration="1s" data-wow-delay="0.5s">
 						 <?php the_post_thumbnail('projects', array('class' => 'image w-100 proyect__works-thumb')) ?>
 						 <div class="proyect__works-caption"><?php the_title() ?></div>
 					 </div>
 				 </div>

 				 <?php } wp_reset_postdata(); ?>

			</div>
			<a href="proyectos" class="btn proyect__btn">Ver más</a>
		</div>
	</section>

<?php get_footer() ?>