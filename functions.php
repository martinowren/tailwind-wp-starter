<?php
/**
 * WPMODEVSTARTER functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WPMODEVSTARTER
 */

if ( ! function_exists( 'WPMODEVSTARTER_setup' ) ) {

	function WPMODEVSTARTER_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'menus' );
		add_theme_support( 'post-thumbnails' );
	}



	register_nav_menu('Hovedmeny', 'Hovedmeny');
}
add_action( 'after_setup_theme', 'WPMODEVSTARTER_setup' );


function WPMODEVSTARTER_scripts() {
	$THEMEVERSION = 3;
	wp_enqueue_style( 'roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap', array(), 1);
	wp_enqueue_style( 'mainstyle', get_template_directory_uri() . '/style.min.css', array(), $THEMEVERSION);
	wp_enqueue_script( 'mainscripts', get_template_directory_uri() . '/assets/scripts/custom.min.js', array(), $THEMEVERSION);
}

add_action( 'wp_enqueue_scripts', 'WPMODEVSTARTER_scripts' );



function customExcerptLength( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'customExcerptLength', 10);


function disableStandardColorPalette() {
	add_theme_support( 'editor-color-palette', 		[
		[
			'name'  => esc_html__( 'Mørkeblå', 'WPMODEVSTARTER' ),
			'slug'  => 'morkebla',
			'color' => '#112639',
		],
		[
			'name'  => esc_html__( 'Hvit', 'WPMODEVSTARTER' ),
			'slug'  => 'white',
			'color' => '#ffffff',
		],
		[
			'name'  => esc_html__( 'Turkis NY', 'WPMODEVSTARTER' ),
			'slug'  => 'turkis-ny',
			'color' => '#00A889',
		],
		[
			'name'  => esc_html__( 'Turkis', 'WPMODEVSTARTER' ),
			'slug'  => 'turkis-gammel',
			'color' => '#18BC9C',
		],

	] );
}
add_action( 'after_setup_theme', 'disableStandardColorPalette' );