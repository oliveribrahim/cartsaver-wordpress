<?php
/**
 * Default content template part.
 *
 * @package cartsaver
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title text-2xl font-bold"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
	</header>

	<div class="entry-content prose max-w-none">
		<?php the_excerpt(); ?>
	</div>
</article>
