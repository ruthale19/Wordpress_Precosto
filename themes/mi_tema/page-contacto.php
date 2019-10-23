<?php get_header() ?>

<?php get_template_part('_includes/nav', 'principal') ?>


<!-- header -->
	<header class="header" id="home">
		<div class="header__container">
			<?php get_template_part('_includes/header', 'logo') ?>
			<h3 class="header__text1"><?php echo get_bloginfo('description') ?></h3>
		</div>
	</header>

	<section class="contact" id="contact">
	<div class="container contact__card pb-0">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Contáctenos</h2>
			</div>
		</div>

		<?php the_post() ?>
		<?php the_content(); ?>

		<?php if ( is_active_sidebar( 'contact-widget' ) ) { ?>
			<?php dynamic_sidebar( 'contact-widget' ); ?>
		<?php }; ?>

	</div>
</section>

<?php get_footer() ?>
