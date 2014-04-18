<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ChriCo
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'parts/content', 'single' ); ?>

<?php endwhile; ?>

<?php get_footer();