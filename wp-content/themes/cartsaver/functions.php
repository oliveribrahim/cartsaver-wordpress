<?php
/**
 * cartsaver Theme Functions
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'cartsaver_VERSION', '1.0.0' );
define( 'cartsaver_DIR', get_template_directory() );
define( 'cartsaver_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function cartsaver_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 250,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	// Required for FSE navigation block
	add_theme_support( 'block-templates' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support( 'responsive-embeds' );

	register_nav_menus(
		array(
			// 'primary' => __( 'Primary Menu', 'cartsaver' ),
			'primary' => __( 'Primary Navigation', 'cartsaver' ),
			'footer'                  => __( 'Footer Menu', 'cartsaver' ),
		)
	);
}
add_action( 'after_setup_theme', 'cartsaver_setup' );

/**
 * Register and enqueue block styles and scripts
 */
function cartsaver_enqueue_assets() {
	// --- Register and enqueue CSS ---
	wp_register_style(
		'cartsaver-block-style',
		cartsaver_URI . '/assets/css/app.css',
		array(),
		cartsaver_VERSION
	);
	wp_enqueue_style('cartsaver-block-style');

	// --- Register and enqueue JS ---
	wp_register_script(
		'cartsaver-script',
		cartsaver_URI . '/assets/js/app.js',
		array(), // dependencies if any
		cartsaver_VERSION,
		true // load in footer
	);
	wp_enqueue_script('cartsaver-script');
}
add_action( 'wp_enqueue_scripts', 'cartsaver_enqueue_assets' );
add_action( 'enqueue_block_editor_assets', 'cartsaver_enqueue_assets' );




/**
 * Register ACF Options page (Theme Options).
 * Appears in the WP admin sidebar under "Theme Options".
 * Fields saved here are read with get_field( 'field_name', 'option' ).
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page(
		array(
			'page_title' => 'Theme Options',
			'menu_title' => 'Theme Options',
			'menu_slug'  => 'cartsaver-theme-options',
			'capability' => 'manage_options',
			'icon_url'   => 'dashicons-admin-customizer',
			'position'   => 60,
			'redirect'   => false,
		)
	);
}


wp_enqueue_script(
    'cartsaver-embla',
    get_template_directory_uri() . '/assets/js/embla.min.js',
    [],
    null,
    true
);


/**
 * Include theme files.
 */
require_once cartsaver_DIR . '/inc/helpers.php';
require_once cartsaver_DIR . '/inc/blocks.php';

