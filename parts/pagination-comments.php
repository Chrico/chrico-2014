<?php
/**
 * Pagination for comments.
 *
 * @package ChriCo
 * @subpackage Templateparts
 */
?>
<nav id="comment-pagination" class="clearfix" role="navigation">
	<?php
    paginate_comments_links(
        array(
			'mid_size' 	=> 2,
			'type' 		=> 'list',
			'prev_text'	=> sprintf(
				'<div class="nav-previous">%s</div>',
				__( '&larr; Older Comments', 'theme_chrico' )
				),
			'next_text'	=> sprintf(
				'<div class="nav-next">%s</div>',
				__( 'Newer Comments &rarr;', 'theme_chrico' )
				),
        )
    );
	?>
</nav>