<?php
/**
 * functions.php to init the Theme
 *
 * @package ChriCo
 */


/**
 * Contains the cc-Theme-Textdomain
 *
 * @since   0.1
 * @created 03.12.2013, cb
 * @updated 03.12.2013, cb
 *
 * @var String
 */
define( 'CC_TEXTDOMAIN', 'chrico' );

add_action( 'after_setup_theme', 'cc_setup', 0 );

/**
 * Callback on theme_init
 *
 * @since   0.1
 * @created 03.12.2013, cb
 * @updated 03.12.2013, cb
 *
 * @wp-hook after_setup_theme
 * @return  Void
 */
function cc_setup() {

	$vendor_dir = __DIR__ . '/vendors/';

	load_theme_textdomain(
		CC_TEXTDOMAIN,
		get_template_directory() . '/assets/languages'
	);

	// the theme support
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5' );

	// general template helpers
	include_once( $vendor_dir . 'cc/general.php' );
	add_filter( 'init', 'cc_register_tn_sizes' );
	add_filter( 'body_class', 'cc_filter_body_class');

	// navigation
	include_once( $vendor_dir . 'cc/navigation.php' );
	cc_register_nav_menus();

	// widget
	include_once( $vendor_dir . 'cc/widget.php' );
	add_action( 'widgets_init', 'cc_widgets_init' );

	// include all nav-walkers
	include_once( $vendor_dir . 'cc/frontend/walker/Icon.php' );

	if ( ! is_admin() ) {

		// scripts
		include_once( $vendor_dir . 'cc/frontend/script.php' );
		add_action( 'wp_enqueue_scripts', 'cc_wp_enqueue_scripts' );

		// styles
		include_once( $vendor_dir . 'cc/frontend/style.php' );
		add_action( 'wp_enqueue_scripts', 'cc_wp_enqueue_styles' );
		add_filter( 'style_loader_src', 'cc_filter_style_loader_src', 15, 2 );


		include_once( $vendor_dir . 'cc/frontend/shortcode.php' );
		add_shortcode( 'video', 'cc_shortcode_video' );

		// comments
		include_once( $vendor_dir . 'cc/frontend/comment.php' );

		// posts
		include_once( $vendor_dir . 'cc/frontend/post.php' );
		add_filter( 'excerpt_more', 'cc_filter_excerpt_more' );
		add_filter( 'pre_get_posts', 'cc_filter_pre_get_posts' );

		// gallery
		include_once( $vendor_dir . 'cc/frontend/gallery.php' );
		add_filter( 'img_caption_shortcode', 'cc_filter_img_caption_shortcode', 10, 3 );
		add_filter( 'post_gallery', 'cc_filter_post_gallery', 10, 2 );

		// remove some unused wp-stuff
		remove_action( 'wp_head', 'rsd_link');
		remove_action( 'wp_head', 'wp_generator');
		remove_action( 'wp_head', 'index_rel_link');
		remove_action( 'wp_head', 'wlwmanifest_link');
		remove_action( 'wp_head', 'feed_links_extra', 3);
		remove_action( 'wp_head', 'start_post_rel_link', 10, 0);
		remove_action( 'wp_head', 'parent_post_rel_link', 10, 0);
		remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0);
		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	}


}