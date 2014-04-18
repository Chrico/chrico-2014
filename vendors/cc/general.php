<?php
/**
 * Feature Name:    General Template Helpers for ChriCo-Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */


/**
 * callback to register our thumbnail-sizes
 *
 * @since    0.1
 * @created 22.12.204, cb
 * @updated 22.12.204, cb
 *
 * @wp-hook init
 *
 * @return Void
 */
function cc_register_tn_sizes() {
	// 	Various thumbnail sizes
	set_post_thumbnail_size( 120, 120, TRUE );
	add_image_size( 'cc-thumbnail-master', 480, 220, TRUE );
}

/**
 * getting the script suffix
 *
 * @since    0.1
 * @created 10.01.2014, cb
 * @updated 10.01.2014, cb
 *
 * @return  String $suffix
 */
function cc_get_script_suffix(){
	return defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
}

/**
 * adding custom body-classes
 *
 * @since   0.1
 * @created 19.01.2014, cb
 * @updated 19.01.2014, cb
 *
 * @wp-hook body_class
 * @param   Array $classes
 * @return  Array $classes
 */
function cc_filter_body_class( Array $classes = array() ){

	$slug = '';
	if( is_singular() ){
		$post = get_post();

		if( $post !== null ){

			$terms = wp_get_post_categories( $post->ID );

			if( !is_wp_error( $terms ) ){

				$term_id = $terms[ 0 ];
				$category = get_category( $term_id );

				if( !is_wp_error( $category ) ){

					$slug = $category->slug;

				}
			}

		}

	}
	else if( is_category() || is_archive() ){
		$category = get_category( get_query_var( 'cat' ) );

		if( !is_wp_error( $category ) ){

			$slug = $category->slug;

		}

	}


	if( $slug !== '' ){
		$classes[] = 'category-' . $slug;
	}

	return $classes;
}