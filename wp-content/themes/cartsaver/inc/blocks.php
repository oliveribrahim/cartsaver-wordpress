<?php
/**
 * ACF Block registration.
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register custom block category.
 */
function cartsaver_block_categories( array $categories ) {
	array_unshift(
		$categories,
		array(
			'slug'  => 'cartsaver',
			'title' => __( 'cartsaver', 'cartsaver' ),
			'icon'  => 'rocket',
		)
	);

	return $categories;
}
add_filter( 'block_categories_all', 'cartsaver_block_categories' );

/**
 * Auto-register all ACF blocks found in the blocks directory.
 */
function cartsaver_register_blocks() {
	$block_dirs = glob( cartsaver_DIR . '/blocks/*/block.json' );

	if ( ! $block_dirs ) {
		return;
	}

	foreach ( $block_dirs as $block_json ) {
		register_block_type( dirname( $block_json ) );
	}
}
add_action( 'init', 'cartsaver_register_blocks' );


