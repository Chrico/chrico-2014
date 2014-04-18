<?php
/**
 * Entry header.
 *
 * @package ChriCo
 * @subpackage Templateparts
 */
?>
<header class="entry-header">

		<?php if ( ! is_singular() ){ // archives ?>
			<a href="<?php the_permalink() ?>" title="<?php echo esc_attr( the_title() ) ?>" rel="bookmark">
		<?php } // fi ?>

			<?php get_template_part( 'parts/entry', 'image-master' ); ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>

		<?php if ( ! is_singular() ){ // archives ?>
			</a>
		<?php } // fi ?>

	</h2>

	<?php get_template_part( 'parts/entry', 'meta' ); ?>

</header>