<?php
/**
 * Entry header.
 *
 * @package ChriCo
 * @subpackage Templateparts
 */
?>
<header class="entry-header">
	<h2 class="entry-title">
		<?php
		if ( ! is_singular() ) : // archives
		?>
		<a href="<?php the_permalink() ?>" title="<?php echo esc_attr( the_title() ) ?>" rel="bookmark">
			<?php the_title(); ?>
		</a>
		<?php
		else :
			// no links to the currently seen page
			the_title();
		endif;
		?>
	</h2>

	<?php get_template_part( 'parts/entry', 'meta' ); ?>

</header>