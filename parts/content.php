<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package ChriCo
 * @subpackage Templateparts
 */
?>
<article <?php post_class(  ); ?>>
	<div class="entry clearfix">

		<?php get_template_part( 'parts/entry', 'header' ); ?>

		<?php get_template_part( 'parts/entry', 'image' ); ?>

		<?php get_template_part( 'parts/entry', 'content' ) ?>

	</div>
</article>