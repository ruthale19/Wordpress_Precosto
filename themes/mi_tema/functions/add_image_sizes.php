<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'custom_logo'	=> __( 'Tamaño personalizado del logo' ),
		'custom_header'	=> __( 'Tamaño personalizado del logo en header' ),
		'carousel-images'	=> __( 'Para las imágenes del carousel superior' ),
		'custom_service'	=> __( 'Tamaño personalizado de img service' ),
		'projects'	=> __( 'Tamaño personalizado de img proyectos' ),
		'custom_map'	=> __( 'Tamaño personalizado del mapa' ),
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'custom_logo', 158, 60, true );		// Personalización del tamaño del logo
	add_image_size( 'custom_header', 150, 153, true );		// Personalización del tamaño del logo header
	add_image_size( 'carousel-images', 1280, 400, true );		// Personalización del tamaño del carousel-images
	add_image_size( 'custom_service', 80, 96, true );		// Personalización del tamaño de img service
	add_image_size( 'projects', 360, 240, true );		// Personalización del tamaño de img proyect
	add_image_size( 'custom_map', 400, 300, true );		// Personalización del tamaño de map

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
