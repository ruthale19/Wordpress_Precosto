<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

			<section class="mb-5">
				<div class="container my-3">
					<a href="servicios" class="btn btn-color btn-sm my-5">Volver a servicios <i class="fas fa-home"></i></a>
					<h2 class="text-center my-5"><?php the_title() ?></h2>
					<?php the_content() ?>
				</div>
			</section>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_footer() ?>
