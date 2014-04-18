<?php
/**
 * Feature Name:    Post Functions for solingen-Theme
 * Version:		    0.1
 * Author:		    Inpsyde GmbH for MarketPress.com
 * Author URI:	    http://inpsyde.com/
 */

/**
*  Paginated posts navigation. Used instead of next_posts()/previous_posts(). Displays an unordered list.
 *
 * @todo add filter and args to function
 *
 * @since	0.1
 * @created	03.12,2013, cb
 * @updated	03.12,2013, cb
 *
 * @global $wp_query
 * @return String
*/
function cc_get_posts_pagination() {
	global $wp_query;

	$paginated = $wp_query->max_num_pages;

	if ( $paginated < 2 )
		return '';

	$current = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	$format  = get_option( 'permalink_structure' ) ? 'page/%#%/' : '&page=%#%';
	$args    = array(
		'base' 		=> get_pagenum_link( 1 ) . '%_%',
		'current' 	=> $current,
		'format' 	=> $format,
		'mid_size' 	=> 2,
		'total' 	=> $paginated,
		'type' 		=> 'list',
	);

	return paginate_links( $args );
}


/**
 * Callback for the excerpt_more
 *
 * @since	0.1
 * @created	03.12,2013, cb
 * @updated	03.12,2013, cb
 *
 * @wp-hook excerpt_more
 *
 * @param   Integer $length
 * @return  String
 */
function cc_filter_excerpt_more( $length ) {
	return '';
}


/**
 * Adding +1 to the "posts_per_page" on home.php
 *
 * @since      0.1
 * @created    03.12,2013, cb
 * @updated    03.12,2013, cb
 *
 * @wp-hook    pre_get_posts
 *
 * @param       WP_Query $query
 * @return      WP_Query $query
 */
function cc_filter_pre_get_posts( WP_Query $query ) {

	if( !$query->is_main_query() ) {
		return;
	}

	if( $query->is_home() || $query->is_front_page()  ){

		if( !$query->is_paged() ){
			$posts_per_page = get_option('posts_per_page') + 1;
			$query->set( 'posts_per_page', $posts_per_page );
		}
	}

	return $query;

}
