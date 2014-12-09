<?php
/**
 * Feature Name:    ShortCode Functions for ChriCo-Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */

/**
 * Shortcode for responsive Videos
 *
 * @since    0.1
 * @created  23.12.2013, cb
 * @updated  23.12.2013, cb
 *
 * @wp-hook add_shortcode
 *
 * @param   Array $attr
 * @param   String $content
 *
 * @return String
 */
function cc_shortcode_video( $attr, $content ) {

	$default_attr = array(
		'site'	=>	'youtube',
		'id'	=>	null,
		'w'		=>	'600',
		'h'		=>	'370'
	);

	$attr = shortcode_atts( $default_attr, $attr );

	if ( $attr[ 'id' ] === null ) {
		return '';
	}

	$src = '';
	if ( $attr[ 'site' ] === "youtube" ) {
		$src = 'https://www.youtube-nocookie.com/embed/' . $attr[ 'id' ];
	} else if ( $attr[ 'site' ] === "vimeo" ) {
		$src = 'https://player.vimeo.com/video/' . $attr[ 'id' ];
	}

	if ( $src === '' ) {
		return '';
	}

	return '<div class="video-container"><iframe width=" ' . $attr[ 'w' ] . '" height="' . $attr[ 'h' ] . '" src="' . $src . '" class="video iframe-' . $attr[ 'site' ] . '"></iframe></div>';
}