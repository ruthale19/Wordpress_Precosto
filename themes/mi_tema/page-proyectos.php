<?php get_header() ?>

<?php get_template_part('_includes/nav', 'principal') ?>


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
					<button type="button" class="btn btn-outline color mx-2 waves-effect btn-menu mb-2 all" data-filter="all">Todos</button>
					<button type="button" class="btn btn-outline color mx-2 waves-effect btn-menu mb-2 1" data-filter="1">Construcción</button>
					<button type="button" class="btn btn-outline color mx-2 waves-effect btn-menu mb-2 2" data-filter="2">Remodelación</button>
					<button type="button" class="btn btn-outline color mx-2 waves-effect btn-menu mb-2 3" data-filter="3">Mantención</button>
					<button type="button" class="btn btn-outline color mx-2 waves-effect btn-menu mb-2 4" data-filter="4">Estructuras Metálicas</button>
				</div>
			</div>

			<div class="row gallery" id="gallery">

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

				 <?php
						if ( has_category('construccion')) {
						    // code...
					 			echo '<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 1">' ;
								echo '<a href="';
								the_permalink();
								echo '">';
								echo '<div class="proyect__block">';
		 						 the_post_thumbnail('projects', array('class' => 'image w-100 proyect__works-thumb'));
		 						echo '<div class="proyect__works-caption">';
								the_title();
		 					  echo '</div>';
		 				    echo '</div>';
								echo '</a>';
								echo '</div>';

						} else if ( has_category('remodelacion')) {
						    // code...
								echo '<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 2">' ;
								echo '<a href="';
								the_permalink();
								echo '">';
								echo '<div class="proyect__block">';
								 the_post_thumbnail('projects', array('class' => 'image w-100 proyect__works-thumb'));
								echo '<div class="proyect__works-caption">';
								the_title();
								echo '</div>';
								echo '</div>';
								echo '</a>';
								echo '</div>';

						} else if ( has_category('mantencion')) {
					      // code...
								echo '<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 3">' ;
								echo '<a href="';
								the_permalink();
								echo '">';
								echo '<div class="proyect__block">';
								 the_post_thumbnail('projects', array('class' => 'image w-100 proyect__works-thumb'));
								echo '<div class="proyect__works-caption">';
								the_title();
								echo '</div>';
								echo '</div>';
								echo '</a>';
								echo '</div>';

				     } else {
				        // code...
								echo '<div class="col-lg-4 col-md-6 col-xs-12 gallery__img 4">' ;
								echo '<a href="';
								the_permalink();
								echo '">';
								echo '<div class="proyect__block">';
								the_post_thumbnail('projects', array('class' => 'image w-100 proyect__works-thumb'));
								echo '<div class="proyect__works-caption">';
							  the_title();
								echo '</div>';
								echo '</div>';
								echo '</a>';
								echo '</div>';
				}
				 ?>

				 <?php } wp_reset_postdata(); ?>

					</div>
			</div>
	</section>


<?php get_footer() ?>
