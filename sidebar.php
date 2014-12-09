<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package ChriCo
 */
?>

<div id="sidebar-entry" class="sidebar-entry clearfix" role="complementary">
	<?php
	if ( is_active_sidebar( 'cc-sidebar-entry' ) ) :
		dynamic_sidebar( 'cc-sidebar-entry') ;
	endif;
	?>
</div>