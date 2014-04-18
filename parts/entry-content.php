<?php
/**
 * Render post content
 *
 * @package ChriCo
 * @subpackage Templateparts
 */
?>
<div class="entry-content">
	<?php get_template_part( 'parts/entry', 'excerpt' ); ?>
	<?php
	if( is_singular() ){
		the_content();

		get_template_part( 'parts/entry', 'author-meta' );

		comments_template( '', true );

	}
	?>
</div>