<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package ChriCo
 * @subpackage Templateparts
 */
?>
<article <?php post_class(  ); ?>>
	<div class="entry clearfix">
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'Nothing Found', 'chrico' ); ?></h1>
		</header>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'chrico' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</article>
