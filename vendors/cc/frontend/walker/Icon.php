<?php
/**
 * Feature Name:    
 * Version:		    0.1
 * Author:		    Inpsyde GmbH for MarketPress.com
 * Author URI:	    http://inpsyde.com/
 */

class CC_Walker_Icon extends Walker_Nav_Menu  {

	/**
	 * callback to generate custom start elements
	 *
	 * @since   0.1
	 * @created 10.01.2014, cb
	 * @updated 10.01.2014, cb
	 *
	 * @param   String  $output
	 * @param   WP_Post $item
	 * @param   Integer $depth
	 * @param   Array $args
	 * @param   Integer $current_object_id
	 *
	 * @return  Void
	 */
	function start_el( &$output, $item, $depth = 0, $args = Array(), $current_object_id = 0 ) {

		$nav_item_class = $args->menu . '-navigation-item';
		$sanitized_title= sanitize_title( $item->title );

		// passed classes
		$classes        = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[]      = $nav_item_class;
		$classes[]      = $sanitized_title . '-navigation-item';
		$classes        = apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item );
		$classes        = implode( ' ', $classes );
		$classes        = esc_attr( $classes );

		// build html
		$output .= '<li class="' . $classes . '">';

		// link attributes
		$attributes = array();
		if( ! empty( $item->attr_title ) && $item->attr_title !== $item->title )
			$attributes[ 'title' ] = esc_attr( $item->attr_title );

		if( ! empty( $item->url ) )
			$attributes[ 'href' ] = esc_url( $item->url );
		else
			$attributes[ 'href' ] = esc_url( get_permalink( $item->ID ) );

		$attr = '';
		foreach( $attributes as $key => $value ){
			$attr = $key . '="' . $value . '"';
		}

		$item_output = $args->before;
		$item_output .= '<a ' . $attr . '>';
		$item_output .=  $args->link_before;
		$item_output .=   chrico_get_icon( $sanitized_title, array( 'viewbox' => '0 0 36 36' ) );
		$item_output .=   '<span class="' . $nav_item_class . '-title">' . apply_filters( 'the_title', $item->title, $item->ID ) . '</span>';
		$item_output .=  $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

}