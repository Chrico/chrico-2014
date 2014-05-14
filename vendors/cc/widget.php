<?php
/**
 * Feature Name:    Widget Functions for ChriCo-Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */


/**
 * Callback to register the Widgets
 *
 * @since   0.1
 * @created 03.12.2013, cb
 * @updated 03.12.2103, cb
 *
 * @wp-hook widgets_init
 *
 * @return  Array
 */
function cc_widgets_init() {

	// Define widget areas
	$sidebars = array(
		array(
		   'name' => __( 'Post-Widget-Bereich', 'theme_chrico' ),
		   'id' => 'cc-sidebar-entry',
		   'description' => __( 'Sidebar für Detail-Seiten', 'chrico' ),
		   'before_widget' => '<aside id="%1$s" class="widget clear %2$s">',
		   'after_widget' => '</aside>',
		   'before_title' => '<h3 class="widget-title"><span>',
		   'after_title' => '</span></h3>',
		),
		array(
		   'name' => __( 'Footer Widget-Bereich 1', 'theme_chrico' ),
		   'id' => 'cc-sidebar-footer-1',
		   'description' => __( 'Sidebar den Footer Bereich 1', 'theme_chrico' ),
		   'before_widget' => '<aside id="%1$s" class="widget clear %2$s">',
		   'after_widget' => '</aside>',
		   'before_title' => '<h3 class="widget-title"><span>',
		   'after_title' => '</span></h3>',
		),
		array(
			'name' => __( 'Footer Widget-Bereich 2', 'theme_chrico' ),
			'id' => 'cc-sidebar-footer-2',
			'description' => __( 'Sidebar den Footer Bereich 2', 'theme_chrico' ),
			'before_widget' => '<aside id="%1$s" class="widget clear %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title"><span>',
			'after_title' => '</span></h3>',
		),
		array(
			'name' => __( 'Footer Widget-Bereich 3', 'theme_chrico' ),
			'id' => 'cc-sidebar-footer-3',
			'description' => __( 'Sidebar den Footer Bereich 3', 'theme_chrico' ),
			'before_widget' => '<aside id="%1$s" class="widget clear %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title"><span>',
			'after_title' => '</span></h3>',
		)
	);


	// Create widget areas
	foreach ( $sidebars as $id => $args ) {
		register_sidebar( array(
				'name'			=> $args[ 'name' ],
				'id'			=> $args[ 'id' ],
				'description'	=> $args[ 'description' ],
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}

	// Return a value for unit tests
	return $GLOBALS[ 'wp_registered_sidebars' ];
}