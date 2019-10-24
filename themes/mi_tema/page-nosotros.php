<?php get_header() ?>

<?php get_template_part('_includes/nav', 'principal') ?>


<!-- header -->
	<header class="header" id="home">
		<div class="header__container">
			<?php get_template_part('_includes/header', 'logo') ?>
			<h3 class="header__text1"><?php echo get_bloginfo('description') ?></h3>
		</div>
	</header>

	<!-- Nosotros -->

	<section class="us" id="us">
		<div class="container us__container">
			<?php the_post() ?>
			<h1 class="us__text1"><?php the_title(); ?></h1>

			<div class="us__text2">
						<?php the_content() ?>
			</div>
			<div class="card-deck us__card mb-0">
				<div class="card card-border mb-4 ml-0">
					<h4 class="us__title">Nuestra Misión</h4>
					<div class="card-body us__body us__text2">
						<p class="card-text"><?php the_field( 'mision' ); ?></p>
					</div>
				</div>
				<div class="card card-border mb-4 mr-0">
					<h4 class="us__title">Nuestra Visión</h4>
					<div class="card-body us__body us__text2">
						<p class="card-text"><?php the_field( 'vision' ); ?></p>
					</div>
				</div>
			</div>
			<div class="card-deck us__card mt-0  us__text2">
				<div class="card card-border mb-4 mx-0">
					<h4 class="us__title">Nuestros Valores</h4>
					<div class="card-body us__body us__text2">
						<p class="card-text"><?php the_field( 'valores' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer() ?>
