<?php
/**
 * Single post content template part.
 *
 * @package cartsaver
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title text-4xl font-bold tracking-tight">', '</h1>' ); ?>
	</header>

	<div class="entry-content prose max-w-none">
		<?php the_content(); ?>
	</div>
</article>
