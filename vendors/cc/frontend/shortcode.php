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
function cc_shortcode_video( $attr, $content ){

	extract(
		shortcode_atts(
			array(
			     'site'	=>	'youtube',
			     'id'	=>	null,
			     'w'		=>	'600',
			     'h'		=>	'370'
			),
			$attr
		)
	);

	if ( $id === null ) {
		return '';
	}

	if ( $site === "youtube" ) {
		$src = 'https://www.youtube-nocookie.com/embed/' . $id;
	}
	else if ( $site === "vimeo" ) {
		$src = 'https://player.vimeo.com/video/' . $id;
	}

	return '<div class="video-container"><iframe width=" ' . $w . '" height="' . $h . '" src="' . $src . '" class="video iframe-' . $site . '"></iframe></div>';

}