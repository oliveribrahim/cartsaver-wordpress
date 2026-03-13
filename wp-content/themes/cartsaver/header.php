<?php
/**
 * Theme header.
 *
 * Bridges WordPress' get_header() with the block-based header markup
 * stored in parts/header.html.
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $cartsaver_footer_html;

$theme = get_stylesheet();

$cartsaver_header_html = do_blocks(
	'<!-- wp:template-part {"slug":"header","theme":"' . esc_attr( $theme ) . '"} /-->'
);

$cartsaver_footer_html = do_blocks(
	'<!-- wp:template-part {"slug":"footer","theme":"' . esc_attr( $theme ) . '"} /-->'
);
?>
	<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<?php
wp_body_open();
echo $cartsaver_header_html;

