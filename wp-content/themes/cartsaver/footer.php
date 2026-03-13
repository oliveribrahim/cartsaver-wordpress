<?php
/**
 * Theme footer.
 *
 * Bridges WordPress' get_footer() with the block-based footer markup
 * stored in parts/footer.html.
 *
 * @package cartsaver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Output the footer HTML pre-rendered in header.php (before wp_head fired).
global $cartsaver_footer_html;
echo $cartsaver_footer_html;

wp_footer();
?>
</body>
</html>
