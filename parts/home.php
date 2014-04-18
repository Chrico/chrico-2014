<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @since Crico Theme 0.1a
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php $template = is_paged() ? '' : 'home';	?>
	<?php get_template_part( 'parts/loop', $template ); ?>

<?php else : ?>

	<?php get_template_part( 'parts/content', 'none' ); ?>

<?php endif; ?>

<?php get_footer();