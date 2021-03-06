<?php
/**
 * Post author meta data
 *
 * @package    ChriCo
 * @subpackage Templateparts
 */

// We require content in the author bio field
if ( get_post_type() !== 'post' || get_the_author_meta( 'description' ) === '' ) :
	return;
endif;
?>

<section class="entry-author clearfix">
	<h2 class="posted-by">
		<?php
		printf(
			'<span class="author-by entry-utility-prep">%1$s </span><cite class="fn">%2$s</cite>',
			_x( 'Über den Autor', 'Autor info box heading prefix', 'theme_chrico' ),
			get_the_author_meta( 'display_name' )
		);
		?>
	</h2>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ), 120 ); ?>
	<?php echo wpautop( get_the_author_meta( 'description' ) ); ?>
</section>