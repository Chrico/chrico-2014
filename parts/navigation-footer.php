<?php
/**
 * Template-File for Footer-Navigation
 *
 * @package ChriCo
 * @subpackage Templateparts
 */
?>
<nav id="footer-navigation" class="footer-navigation" role="navigation">
<?php
	$nav_args = array(
		'theme_location'    => 'cc_footer',
		'menu_class'        => 'nav-menu clearfix',
		'menu'              => 'footer',
	);
	wp_nav_menu( $nav_args );
?>
</nav>
