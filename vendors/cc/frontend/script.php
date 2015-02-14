<?php
/**
 * Feature Name:    Script Functions for ChriCo-Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */


/**
 * getting the script version for debug- or live-mode
 *
 * @return  string
 */
function cc_get_script_version() {
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		return time();
	}
	// getting the theme-data
	$theme_data = wp_get_theme();
	$version    = $theme_data->Version;
	return $version;
}

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
function cc_get_scripts() {
	$suffix = cc_get_script_suffix();

	// $handle => array( 'src' => $src, 'deps' => $deps, 'version' => $version, 'in_footer' => $in_footer )
	$scripts = array();

	// adding the magnific-js
	$scripts[ 'chrico' ] = array(
		'src'       => get_template_directory_uri() . '/assets/js/core' . $suffix . '.js',
		'deps'      => NULL,
		'version'   => cc_get_script_version(),
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
function cc_filter_wp_print_scripts_add_html5shiv() {
	echo '<!--[if lt IE 9]><script src="' . get_template_directory_uri() . '/assets/js/html5shiv.js"></script><![endif]-->';
	echo '<script async> document.documentElement.className = document.documentElement.className.replace("no-js","js");</script>';
}

/**
 * Adds the localstorage CSS-Script to header.
 *
 * @wp-hook wp_head
 *
 * @return void
 */
function cc_wp_head_css_localstorage_js(){
	$style_url = cc_get_webfont_css();
	?>
	<script>
		!function(e,t){
			var l="<?php echo $style_url; ?>";
			function a(e,t,a){e.addEventListener?e.addEventListener(t,a,!1):e.attachEvent&&e.attachEvent("on"+t,a)}function c(t){return e.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===t}function n(){if(e.localStorage&&e.XMLHttpRequest)if(c(l))o(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",l,!0),a(n,"load",function(){4===n.readyState&&(o(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=l)}),n.send()}else{var s=t.createElement("link");s.href=l,s.rel="stylesheet",s.type="text/css",t.getElementsByTagName("head")[0].appendChild(s),t.cookie="font_css_cache"}}function o(e){var a=t.createElement("style");a.innerHTML=e,t.getElementsByTagName("head")[0].appendChild(a)}e.localStorage&&localStorage.font_css_cache||t.cookie.indexOf("font_css_cache")>-1?n():a(e,"load",n)
		}(window,document);
	</script>
	<?php
}