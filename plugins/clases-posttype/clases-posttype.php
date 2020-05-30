<?php
/*
Plugin Name: Gymfitness - Posttypes
Plugin URI:
Description: Añade posttype al sitio web gymfitness
Version: 1.0.0
Author: Alirio Gomez
Author URI:
Text Domain: gymfitness

*/
if(!defined('ABSPATH')) die(); //por seguridad poner esto
// Register Custom Post Type
function gymfitness_posttype() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Clases', 'gymfitness' ),
		'name_admin_bar'        => __( 'Clase', 'gymfitness' ),
		'archives'              => __( 'Archivos', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Clase padre:', 'gymfitness' ),
		'all_items'             => __( 'Toda las Clases', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar nueva Clase', 'gymfitness' ),
		'add_new'               => __( 'Agregar nueva', 'gymfitness' ),
		'new_item'              => __( 'Nueva clase', 'gymfitness' ),
		'edit_item'             => __( 'Editar clase', 'gymfitness' ),
		'update_item'           => __( 'Modificar clase', 'gymfitness' ),
		'view_item'             => __( 'Ver clase', 'gymfitness' ),
		'view_items'            => __( 'Ver clases', 'gymfitness' ),
		'search_items'          => __( 'Buscar clases', 'gymfitness' ),
		'not_found'             => __( 'No encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Agregar imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como imagen destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en clase', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en clase', 'gymfitness' ),
		'items_list'            => __( 'Lista de clases', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegacion de clases', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar clases', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Clases gymfitness', 'gymfitness' ),
		'description'           => __( 'Posttypes para gymfitness', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => true, //true = post y false = pagina
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gymfitness_clases', $args );

}
add_action( 'init', 'gymfitness_posttype', 0 );


function gymfitness_posttype_testimonial() {

	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Testimoniales', 'gymfitness' ),
		'name_admin_bar'        => __( 'Testimonial', 'gymfitness' ),
		'archives'              => __( 'Archivos', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Testimonial Padre:', 'gymfitness' ),
		'all_items'             => __( 'Todo los Testimonios', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar nuevo Testimonio', 'gymfitness' ),
		'add_new'               => __( 'Agregar nuevo', 'gymfitness' ),
		'new_item'              => __( 'Nuevo Testimonio', 'gymfitness' ),
		'edit_item'             => __( 'Editar Testimonio', 'gymfitness' ),
		'update_item'           => __( 'Modificar Testimonio', 'gymfitness' ),
		'view_item'             => __( 'Ver Testimonio', 'gymfitness' ),
		'view_items'            => __( 'Ver Testimoniales', 'gymfitness' ),
		'search_items'          => __( 'Buscar Testimonios', 'gymfitness' ),
		'not_found'             => __( 'No encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Agregar imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como imagen destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Testimonio', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonio', 'gymfitness' ),
		'items_list'            => __( 'Lista de Testimonios', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegacion de Testimonios', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Testimonios', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Testimonios gymfitness', 'gymfitness' ),
		'description'           => __( 'Posttypes para gymfitness', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => true, //true = post y false = pagina
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );

}
add_action( 'init', 'gymfitness_posttype_testimonial', 0 );