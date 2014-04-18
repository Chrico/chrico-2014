<?php
/**
 * Template-File for Header-Navigation
 *
 * @package ChriCo
 * @subpackage Templateparts
 */
?>
<nav id="site-navigation" class="main-navigation" role="navigation">
<?php
	$nav_args = array(
		'theme_location'    => 'cc_header',
		'menu_class'        => 'nav-menu clearfix',
		'menu'              => 'main',
		'walker'            => new CC_Walker_Icon()
	);
	wp_nav_menu( $nav_args );
?>
</nav>
