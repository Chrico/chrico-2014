<?php
/**
 * Render post content
 *
 * @package ChriCo
 * @subpackage Templateparts
 */
?>
<div class="entry-content">
	<?php

	if ( !is_page() ):
		get_template_part( 'parts/entry', 'excerpt' );
	endif;

	if ( is_singular() ) :
		the_content();
		get_template_part( 'parts/entry', 'author-meta' );
		comments_template( '', true );
	endif;
	?>
</div>