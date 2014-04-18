<?php
/**
 * Post thumbnail for a post
 *
 * @package ChriCo
 * @subpackage Templateparts
 */

if ( !has_post_thumbnail() )
	return;
?>
<figure class="entry-thumbnail">
	<a href="<?php the_permalink() ?>" title="<?php echo esc_attr( the_title() ) ?>" rel="bookmark">
		<?php the_post_thumbnail( 'thumbnail' ); ?>
	</a>
</figure>