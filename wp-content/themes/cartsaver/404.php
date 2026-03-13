<?php
/**
 * 404 template.
 *
 * @package Rocketcart
 */

get_header();
?>

	<main id="main" class="site-main flex-1 flex items-center justify-center">
		<div class="text-center px-4 py-20">
			<h1 class="text-6xl font-bold text-foreground mb-4">404</h1>
			<p class="text-lg text-muted-foreground mb-8"><?php esc_html_e( 'Page not found.', 'cartsaver' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center gap-2 bg-primary text-primary-foreground px-6 py-3 rounded-xl font-medium hover:opacity-90 transition-opacity">
				<?php esc_html_e( 'Back to Home', 'cartsaver' ); ?>
			</a>
		</div>
	</main>

<?php
get_footer();
