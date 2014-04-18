<?php
/**
 * Feature Name:    Template-Helpers for Gallery on ChriCo-Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */

/**
 * Callback to build a pretty caption
 *
 * @since    0.1
 * @created 22.12.204, cb
 * @updated 22.12.204, cb
 *
 * @wp-hook img_caption_shortcode
 *
 * @param   String $output
 * @param   Array $attr
 * @param   String $content
 *
 * @return String
 */
function cc_filter_img_caption_shortcode( $output, $attr, $content ) {

	/* We're not worried abut captions in feeds, so just return the output here. */
	if ( is_feed() )
		return $output;

	/* Merge the defaults with user input. */
	$attr = shortcode_atts(
		array(
		     'id' => '',
		     'align' => '',
		     'width' => '',
		     'caption' => ''
		),
		$attr
	);

	/* If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. */
	if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
		return $content;

	/* Set up the attributes for the caption <div>. */
	$attributes = ( !empty( $attr['id'] ) ? ' id="' . esc_attr( $attr['id'] ) . '"' : '' );
	$attributes .= ' class="wp-caption ' . esc_attr( $attr['align'] ) . ' chrico-gallery"';

	/* Open the caption <div>. */
	$output = '<figure' . $attributes .'>';
	$output .= do_shortcode( $content );
	$output .= '<figcaption>' . $attr['caption'] . '</figcaption>';
	$output .= '</figure>';

	return $output;
}

/**
 * Callback to build a pretty gallery
 *
 * @since    0.1
 * @created 22.12.204, cb
 * @updated 22.12.204, cb
 *
 * @wp-hook post_gallery
 *
 * @param   String $output
 * @param   Array $attr
 *
 * @return String
 */
function cc_filter_post_gallery( $output, $attr ) {

	$post = get_post();

	extract(
		shortcode_atts(
			array(
			     'order'      => 'ASC',
			     'orderby'    => 'menu_order ID',
			     'id'         => $post->ID,
			     'itemtag'    => 'figure',
			     'icontag'    => '',
			     'captiontag' => '',
			     'columns'    => 3,
			     'size'       => 'thumbnail',
			     'include'    => '',
			     'exclude'    => ''
			),
			$attr
		)
	);

	if( !empty( $id ) ){
		$id = intval($id);
	}

	if ( !empty($include) ) {
		$include = preg_replace( '/[^0-9,]+/', '', $include );
		$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	}
	elseif ( !empty($exclude) ) {
		$exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
		$attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}
	else {
		$attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}

	if ( empty($attachments) ){
		return '';
	}

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment )
			$output .= wp_get_attachment_link($att_id, $size, true) . "\n";
		return $output;
	}

	$output .= '<div class="clearfix chrico-gallery">';
	$i = 0;
	foreach ( $attachments as $id => $attachment ) {

		$origin_attachment = wp_get_attachment_image_src( $id, 'large' );

		$caption = '';
		if( trim( $attachment->post_content ) ){
			$caption = $attachment->post_content;
		}
		else if( trim( $attachment->post_title ) ){
			$caption = $attachment->post_title;
		}

		$output .= '<' . $itemtag. ' class="wp-caption alignleft">';
		$output .=  '<a href="' . $origin_attachment[ 0 ] . '" title="' . esc_attr( $caption ) . '">';
		$output .=   wp_get_attachment_image( $id, 'thumbnail' );
		$output .=   '</a>';
		$output .= '</' . $itemtag. '>';

	}
	$output .= '</div>';

	return $output;
}