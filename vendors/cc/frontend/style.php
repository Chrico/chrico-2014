<?php
/**
 * Feature Name:    Style Functions for ChriCo-Theme
 * Version:            0.1
 * Author:            Christian Brückner
 * Author URI:        http://www.chrico.info
 */

/**
 * Enqueue styles.
 *
 * @wp-hook wp_enqueue_scripts
 *
 * @since   0.1
 * @created 03.12.2013, cb
 * @updated 03.12.2103, cb
 *
 * @return  Void
 */
function cc_wp_enqueue_styles() {

	$styles = cc_get_styles();

	foreach ( $styles as $key => $style ) {
		wp_enqueue_style( $key, $style['src'], $style['deps'], $style['version'], $style['media'] );

	}
}


/**
 * Returning our Theme-Styles
 *
 * @since   0.1
 *
 * @return  Array
 */
function cc_get_styles() {

	$suffix = cc_get_script_suffix();

	// $handle => array( 'src' => $src, 'deps' => $deps, 'version' => $version, 'media' => $media )
	$styles = array();

	// adding the main-CSS
	$styles['chrico'] = array(
		'src'     => get_template_directory_uri() . '/assets/css/style' . $suffix . '.css',
		'deps'    => null,
		'version' => cc_get_script_version(),
		'media'   => null
	);

	return apply_filters( 'cc_get_styles', $styles );
}

/**
 * Returns the google webfonts css filename.
 *
 * @return string $url
 */
function cc_get_webfont_css() {

	$suffix     = cc_get_script_suffix();
	$query_args = array(
		'version' => cc_get_script_version()
	);

	$url = get_template_directory_uri() . '/assets/css/webfont' . $suffix . '.css';
	$url = add_query_arg( $query_args, $url );

	return $url;
}