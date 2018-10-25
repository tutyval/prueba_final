<?php
/* registro de funciones css*/

function dl_image_sizes( $sizes ) {
	$add_sizes = array(
		'slideshow'		=> __( 'Tamaño del slideshow' ),
		'custom_logo'	=> __( 'Tamaño personalizado del logo' )
	);
	return array_merge( $sizes, $add_sizes );
}

if ( function_exists( 'add_theme_support' ) ) {
	add_image_size( 'post', 400, 400, true );			// Personalización del tamaño del slideshow
	add_image_size( 'articulo', 800, 600, true );		// Personalización del tamaño del logo
	add_filter( 'image_size_names_choose', 'dl_image_sizes' );
}

function register_enqueue_style() {
	$theme_data = wp_get_theme();

	/* Registrando estilos */
	wp_register_style('tabla', get_parent_theme_file_uri('/assets/css/style.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style('Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
	wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css'
		);

	/* Enqueue estilos */

	
	
	wp_enqueue_style('Bootstrap');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('tabla');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style');


/* registro de funciones js*/

function register_enqueue_scripts () {
	$theme_data = wp_get_theme();

	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );

	/* Registrando scripts */

	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', null, '3.3.1', true );
	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true );
	wp_register_script('bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), '4.1.1', true );
	wp_register_script( 'scripts', get_theme_file_uri('assets/js/scripts.js'), array('jquery'), null, true );

	/* Enqueue script */
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('popper');
	wp_enqueue_script('bootstrapcdn');
	wp_enqueue_script('scripts');
	
}

add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );
