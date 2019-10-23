<?php get_header() ?>

<?php get_template_part('_includes/nav', 'principal') ?>

<!-- header -->
	<header class="header" id="home">
		<div class="header__container">
			<?php get_template_part('_includes/header', 'logo') ?>
			<h3 class="header__text1"><?php echo get_bloginfo('description') ?></h3>
		</div>
	</header>

	<h1 class="text-center m-5">Error 404:</h1>
	<h2 class="text-center m-5">Página no encontrada</h2>

<?php get_footer() ?>
