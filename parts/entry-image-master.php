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
	<?php the_post_thumbnail( 'cc-thumbnail-master' ); ?>
	<?php
	$thumb_id   = get_post_thumbnail_id();
	$thumb      = get_post( $thumb_id );
	if( $thumb->post_excerpt !== '' ) { ?>
		<figcaption class="entry-figcaption"><?php echo $thumb->post_excerpt; ?></figcaption>
	<?php } ?>
</figure>