<?php
/**
 * The template for displaying all pages.
 *
 * @package ChriCo
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'parts/content', 'single' ); ?>

	<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer();