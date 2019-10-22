<?php

// Register Custom Post Type
function service_post_type() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Services', 'text_domain' ),
		'name_admin_bar'        => __( 'Service', 'text_domain' ),
		'archives'              => __( 'Archivos del servicio', 'text_domain' ),
		'attributes'            => __( 'Atributos del servicio', 'text_domain' ),
		'parent_item_colon'     => __( 'Servicio principal:', 'text_domain' ),
		'all_items'             => __( 'Todos los servicios', 'text_domain' ),
		'add_new_item'          => __( 'Agrega un nuevo servicio', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo servicio', 'text_domain' ),
		'edit_item'             => __( 'Editar servicio', 'text_domain' ),
		'update_item'           => __( 'Actualizar servicio', 'text_domain' ),
		'view_item'             => __( 'Ver servicio', 'text_domain' ),
		'view_items'            => __( 'Ver servicios', 'text_domain' ),
		'search_items'          => __( 'Buscar servicio', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el servicio', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este servicio', 'text_domain' ),
		'items_list'            => __( 'Lista de servicios', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de servicios', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de servicios', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'text_domain' ),
		'description'           => __( 'Post dedicado a servicios', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'service_post_type', 0 );

?>
