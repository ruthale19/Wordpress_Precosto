<?php get_header() ?>

<!-- header -->
	<header class="header  pt-0" id="home">
		<div class="header__container">
			<?php get_template_part('_includes/header', 'logo') ?>
			<h3 class="header__text1"><?php echo get_bloginfo('description') ?></h3>
		</div>
	</header>

	<?php if ( $post_type == 'project' ) { ?>

		<div class="container px-5">
			<a href="<?php echo home_url(); ?>" class="btn btn-color btn-letter btn-sm my-5 mr-2">Volver a <i class="fas fa-home"></i></a>
			<a href="proyectos" class="btn btn-color btn-letter btn-sm my-5">Volver a proyectos <i class="far fa-folder-open"></i></a>

				<h3 class="text-center my-5 font-weight-bold single-project__text1"> <?php the_field( 'obra' ); ?> </h3>

				<div class="text-center my-5">
					<?php $image1 = get_field( 'image1' ); ?>
					<?php if ( $image1 ) { ?>
						<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" style="width: 600px; height: 400px;"/>
					<?php } ?>
				</div>

				<div class="text-center my-5">
					<?php $image2 = get_field( 'image2' ); ?>
					<?php if ( $image2 ) { ?>
						<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" style="width: 600px; height: 400px;"/>
					<?php } ?>
				</div>

				<div class="text-center my-5">
					<?php $image3 = get_field( 'image3' ); ?>
					<?php if ( $image3 ) { ?>
						<img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" style="width: 600px; height: 400px;"/>
					<?php } ?>
				</div>

				<div class="text-center my-5">
					<?php $image4 = get_field( 'image4' ); ?>
					<?php if ( $image4 ) { ?>
						<img src="<?php echo $image4['url']; ?>" alt="<?php echo $image['alt']; ?>" style="width: 600px; height: 400px;"/>
					<?php } ?>
				</div>

			</div>

		<?php } wp_reset_query(); ?>

	<?php get_footer() ?>
