<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package ChriCo
 */
?>
<div id="sidebar-footer" class="site-sidebar clearfix" role="complementary">
	<div id="sidebar-footer-1">
		<?php
		if ( is_active_sidebar( 'cc-sidebar-footer-1' ) ) :
			dynamic_sidebar( 'cc-sidebar-footer-1' );
		endif;
		?>
	</div>
	<div id="sidebar-footer-2">
		<?php
		if ( is_active_sidebar( 'cc-sidebar-footer-2' ) ) :
			dynamic_sidebar( 'cc-sidebar-footer-2' );
		endif;
		?>
	</div>
	<div id="sidebar-footer-3">
		<?php
		if ( is_active_sidebar( 'cc-sidebar-footer-3' ) ) :
			dynamic_sidebar( 'cc-sidebar-footer-3' );
		endif;
		?>
	</div>
</div>