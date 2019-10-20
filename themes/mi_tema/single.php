<?php get_header() ?>

<!-- header -->
<header class="header header__single" id="home">
	<div class="header__container">
		<?php get_template_part('_includes/header', 'logo') ?>
		<h3 class="header__text1"><?php echo get_bloginfo('description') ?></h3>
	</div>
</header>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

			<section class="mb-5">
				<div class="container my-3">
					<a href="<?php echo home_url(); ?>" class="btn btn-color btn-sm my-5">Volver a <i class="fas fa-home"></i></a>
					<h2 class="text-center my-3"><?php the_title() ?></h2>
					<?php the_content() ?>

				</div>
			</section>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_footer() ?>
