<?php
/**
 * The template for displaying medium posts in Magazine Post widgets
 *
 * @package Chaser
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'medium-post clearfix' ); ?>>

	<?php chaser_post_image( 'chaser-thumbnail-medium' ); ?>

	<header class="entry-header">

		<?php chaser_magazine_entry_date(); ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	</header><!-- .entry-header -->

</article>
