<?php get_header() ?>

<!-- header -->
	<header class="header  pt-0" id="home">
		<div class="header__container">
			<?php get_template_part('_includes/header', 'logo') ?>
			<h3 class="header__text1"><?php echo get_bloginfo('description') ?></h3>
		</div>
	</header>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

			<section class="mb-5">
				<div class="container px-5">
					<a href="servicios" class="btn btn-color btn-sm mt-5">Volver a servicios <i class="fas fa-hard-hat"></i></a>
					<h2 class="text-center p-5 single__text1"><?php the_title() ?></h2>
					<div class="px-5 single__text1 text-justify">
						<?php the_content() ?>
					</div>
				</div>
			</section>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_footer() ?>
