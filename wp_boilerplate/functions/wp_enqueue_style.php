<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.3
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();


	/* Register Styles */
	wp_register_style( 'reset', get_theme_file_uri( '/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'flexslider', get_theme_file_uri( '/assets/css/flexslider.css'), null, '2.7.1', 'screen' );
	wp_register_style( 'flickity', get_theme_file_uri( '/assets/css/flickity.css'), null, '2.1.0', 'screen' );
	wp_register_style( 'fontawesome', get_theme_file_uri( '/assets/css/fontawesome.css'), null, '5.2.0', 'screen' );
	wp_register_style( 'main_style', get_theme_file_uri( '/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'style_stardust', get_theme_file_uri( '/assets/css/style_stardust.css'), null, 'null', 'screen' );

	wp_register_style( 'fake_css', get_theme_file_uri( '/assets/css/fake_css.css'), null, 'null', 'screen' );
	

	/* Enqueue Styles */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_style( 'flickity' );
	}

	if ( $theme_options['fontawesome'] ) {
		wp_enqueue_style( 'fontawesome' );
	}

	wp_enqueue_style( 'style_stardust' );

	global $post;

	if (is_page() && ($post -> post_parent)){
		wp_enqueue_style( 'fake_css' );
	}

	

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
