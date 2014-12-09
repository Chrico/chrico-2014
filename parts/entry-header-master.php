<?php
/**
 * Entry header.
 *
 * @package ChriCo
 * @subpackage Templateparts
 */
?>
<header class="entry-header">

	<?php if ( ! is_singular() ) : ?>
		<a href="<?php the_permalink() ?>" title="<?php echo esc_attr( the_title() ) ?>" rel="bookmark">
	<?php endif; ?>

		<?php get_template_part( 'parts/entry', 'image-master' ); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>

	<?php if ( ! is_singular() ) : ?>
		</a>
	<?php endif; ?>

	<?php get_template_part( 'parts/entry', 'meta' ); ?>

</header>