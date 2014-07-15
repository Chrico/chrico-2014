<?php
/**
 * Feature Name:    Script Functions for ChriCo-Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */

/**
 * Enqueue styles and scripts.
 *
 * @wp-hook wp_enqueue_scripts
 *
 * @since   0.1
 * @created 03.12.2013, cb
 * @updated 03.12.2103, cb
 *
 * @return  Void
 */
function cc_wp_enqueue_scripts() {

	$scripts = cc_get_scripts();

	foreach ( $scripts as $handle => $script ) {

		wp_enqueue_script(
			$handle,
			$script[ 'src' ],
			$script[ 'deps' ],
			$script[ 'version' ],
			$script[ 'in_footer' ]
		);

	}

}




/**
 * Returning our Scripts
 *
 * @since   0.1
 *
 * @return  Array
 */
function cc_get_scripts(){

	$suffix = cc_get_script_suffix();


	// $handle => array( 'src' => $src, 'deps' => $deps, 'version' => $version, 'in_footer' => $in_footer )
	$scripts = array();

	// adding the magnific-js
	$scripts[ 'chrico' ] = array(
		'src'       => get_template_directory_uri() . '/assets/js/core' . $suffix . '.js',
		'deps'      => array( 'jquery' ),
		'version'   => NULL,
		'in_footer' => TRUE
	);

	return apply_filters( 'cc_get_scripts', $scripts );
}


/**
 * Adding html5shiv to the header for older IE's
 *
 * @since   1.0.1
 * @wp-hook wp_print_scripts
 * @return  void
 */
function chrico_filter_wp_print_scripts_add_html5shiv(){
	echo '<!--[if lt IE 9]><script src="' . get_template_directory_uri() . '/assets/js/html5shiv.js"></script><![endif]-->';
	echo '<script async> document.documentElement.className = document.documentElement.className.replace("no-js","js");</script>';
}