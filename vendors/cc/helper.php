<?php
/**
 * Feature Name:    Helpers for ChriCo-Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */

/**
 * Helper Function to print the Icons in Theme-Templates
 *
 * @since   0.1
 * @param   String $icon
 *
 * @return  String
 */
function chrico_get_icon( $icon ){
	// old one

	$markup = '<svg class="icon icon-%1$s"><use xlink:href="#icon-%1$s"></use></svg>';
	$output = sprintf(
		$markup,
		esc_attr( $icon )
	);
	return apply_filters( 'chrico_get_icon', $output, $icon, $args, $markup );
}


/**
 * Adding our svg-icons to wp_head
 *
 * @wp-hook wp_head
 * @return  Void
 */
function chrico_the_svg_icons() {
	?>
	<svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="752" height="80" viewBox="0 0 752 80">
		<symbol id="icon-aquarell" viewBox="0 0 32 32">
			<path d="M30.938-1.938c-1.688-1.125-11.125 9.438-15.813 16.25-2.625 3.75-3.25 5.5-3 6.563l-1.25 2.938c-6.188 0.438-10.125 6-10.125 6 3.125-0.313 4-0.063 8.375 0.188 4.125 0.25 4.75-2.063 4.875-4.438l2.063-1.938c1.063-0.063 2.563-1.313 5.188-5.063 4.688-6.813 11.375-19.313 9.688-20.5z"></path>
		</symbol>
		<symbol id="icon-andy-family" viewBox="0 0 32 32">
			<path d="M12.25 6.625c0.188 0 0.313-0.063 0.5-0.188 0.125-0.125 0.188-0.313 0.188-0.5s-0.063-0.375-0.188-0.5c-0.188-0.125-0.313-0.188-0.5-0.188s-0.375 0.063-0.5 0.188c-0.125 0.125-0.188 0.313-0.188 0.5s0.063 0.375 0.188 0.5c0.125 0.125 0.313 0.188 0.5 0.188zM19.75 6.625c0.188 0 0.375-0.063 0.5-0.188s0.188-0.313 0.188-0.5c0-0.188-0.063-0.375-0.188-0.5s-0.313-0.188-0.5-0.188c-0.188 0-0.313 0.063-0.5 0.188-0.125 0.125-0.188 0.313-0.188 0.5s0.063 0.375 0.188 0.5c0.188 0.125 0.313 0.188 0.5 0.188zM5.25 9.938c0.5 0 0.938 0.125 1.313 0.5s0.5 0.813 0.5 1.313v7.688c0 0.5-0.125 0.938-0.5 1.25-0.375 0.375-0.813 0.563-1.313 0.563s-0.938-0.188-1.313-0.563c-0.313-0.313-0.5-0.75-0.5-1.25v-7.688c0-0.5 0.188-0.938 0.5-1.313 0.375-0.375 0.813-0.5 1.313-0.5zM24.188 10.25v11.875c0 0.563-0.188 1-0.563 1.438-0.375 0.375-0.813 0.563-1.375 0.563h-1.313v4.063c0 0.5-0.188 0.938-0.563 1.25-0.375 0.375-0.813 0.563-1.313 0.563s-0.938-0.188-1.313-0.563c-0.313-0.313-0.5-0.75-0.5-1.25v-4.063h-2.5v4.063c0 0.5-0.188 0.938-0.5 1.25-0.375 0.375-0.813 0.563-1.313 0.563s-0.938-0.188-1.313-0.563c-0.313-0.313-0.5-0.75-0.5-1.25l-0.063-4.063h-1.313c-0.5 0-1-0.188-1.375-0.563-0.375-0.438-0.563-0.875-0.563-1.438v-11.875zM20.063 3c1.25 0.688 2.313 1.563 3.063 2.75s1.125 2.438 1.125 3.875h-16.5c0-1.438 0.375-2.688 1.125-3.875s1.813-2.063 3.063-2.75l-1.25-2.313c-0.063-0.188-0.063-0.313 0.063-0.375 0.188-0.063 0.313 0 0.375 0.125l1.313 2.375c1.125-0.5 2.313-0.75 3.563-0.75s2.438 0.25 3.563 0.75l1.313-2.375c0.063-0.125 0.188-0.188 0.375-0.125 0.125 0.063 0.125 0.188 0.063 0.375zM28.563 11.75v7.688c0 0.5-0.188 0.938-0.5 1.25-0.375 0.375-0.813 0.563-1.313 0.563s-0.938-0.188-1.313-0.563c-0.375-0.313-0.5-0.75-0.5-1.25v-7.688c0-0.5 0.125-0.938 0.5-1.313s0.813-0.5 1.313-0.5c0.5 0 0.938 0.125 1.313 0.5 0.313 0.375 0.5 0.813 0.5 1.313z"></path>
		</symbol>
		<symbol id="icon-reisen" viewBox="0 0 32 32">
			<path d="M28 0.875c0.5 0.625 0.625 1.5 0.188 2.625-0.375 1.125-1 2.188-1.875 3.063l-2.875 2.875 2.813 12.438c0.063 0.25 0 0.438-0.188 0.563l-2.313 1.75c-0.063 0.063-0.188 0.125-0.313 0.125-0.063 0-0.125-0.063-0.125-0.063-0.188 0-0.313-0.125-0.375-0.25l-5-9.063-4.625 4.625 0.938 3.438c0.063 0.188 0 0.375-0.125 0.563l-1.688 1.688c-0.125 0.125-0.25 0.188-0.438 0.188h-0.063c-0.125-0.063-0.313-0.125-0.375-0.25l-3.375-4.5-4.5-3.375c-0.188-0.063-0.25-0.188-0.25-0.375s0.063-0.313 0.125-0.5l1.75-1.688c0.125-0.125 0.25-0.188 0.375-0.188s0.125 0 0.188 0l3.438 1 4.625-4.625-9.063-5c-0.188-0.125-0.25-0.25-0.313-0.438 0-0.188 0.063-0.375 0.188-0.5l2.25-2.25c0.188-0.188 0.375-0.25 0.563-0.188l11.875 2.875 2.875-2.875c0.875-0.875 1.875-1.563 3.063-1.938 1.125-0.375 2-0.313 2.625 0.25z"></path>
		</symbol>
		<symbol id="icon-allerlei" viewBox="0 0 32 32">
			<path d="M29.875 2.188c0.313-0.125 0.5-0.063 0.688 0.063s0.25 0.375 0.125 0.625c0 0.125-0.813 3.438-2.313 9.938-1.438 6.438-2.25 9.813-2.313 10.063-0.063 0.313-0.25 0.5-0.5 0.625s-0.5 0.125-0.75 0c0 0-7.938-4.313-7.938-4.313s-0.938-0.5-0.938-0.5c0 0 0.688-0.875 0.688-0.875 8.25-8.938 12.5-13.5 12.625-13.625 0.063-0.063 0.063-0.188-0.063-0.25-0.125-0.125-0.188-0.125-0.25-0.063 0 0-17.625 12.875-17.625 12.875s-3.563-1.375-3.563-1.375c0 0-6.125-2.438-6.125-2.438-0.25-0.125-0.375-0.25-0.375-0.438 0-0.125 0.125-0.25 0.375-0.375 0.188-0.063 4.875-1.75 14.125-5s13.938-4.938 14.125-4.938zM11.25 25.438c0 0 0-6.5 0-6.5s5.125 2.625 5.125 2.625c-2.75 2.438-4.313 3.813-4.563 4.063-0.375 0.313-0.563 0.25-0.563-0.188z"></path>
		</symbol>
		<symbol id="icon-search" viewBox="0 0 32 32">
			<path d="M18.188 1.313c-5.688 0-10.25 4.625-10.25 10.25 0 1.938 0.5 3.75 1.438 5.313l-4.938 4.938c-0.5 0.5-0.875 1.25-0.875 2.063 0 1.563 1.313 2.813 2.875 2.813 0.75 0 1.5-0.313 2-0.875v0.063l5.125-5.125c1.375 0.688 2.938 1.063 4.625 1.063 5.625 0 10.25-4.563 10.25-10.25 0-5.625-4.625-10.25-10.25-10.25zM18.25 17.75c-3.563 0-6.438-2.813-6.438-6.375 0-3.5 2.875-6.375 6.438-6.375 3.5 0 6.375 2.875 6.375 6.375 0 3.563-2.875 6.375-6.375 6.375z"></path>
		</symbol>
		<symbol id="icon-technik" viewBox="0 0 32 32">
			<path d="M20.563 14c0-1.25-0.438-2.313-1.313-3.25-0.938-0.875-2-1.313-3.25-1.313s-2.313 0.438-3.25 1.313c-0.875 0.938-1.313 2-1.313 3.25s0.438 2.313 1.313 3.25c0.938 0.875 2 1.313 3.25 1.313s2.313-0.438 3.25-1.313c0.875-0.938 1.313-2 1.313-3.25zM29.688 12.063v3.938c0 0.188 0 0.313-0.125 0.438-0.063 0.125-0.188 0.188-0.375 0.25l-3.25 0.5c-0.25 0.625-0.5 1.188-0.75 1.625 0.438 0.563 1.063 1.375 1.938 2.438 0.125 0.125 0.188 0.313 0.188 0.438 0 0.188-0.063 0.313-0.188 0.438-0.313 0.438-0.875 1.063-1.75 1.938-0.875 0.813-1.438 1.25-1.688 1.25-0.125 0-0.313-0.063-0.438-0.188l-2.5-1.938c-0.5 0.313-1.063 0.5-1.625 0.688-0.188 1.625-0.375 2.75-0.5 3.313-0.063 0.375-0.313 0.5-0.625 0.5h-4c-0.125 0-0.313 0-0.438-0.125s-0.188-0.25-0.188-0.375l-0.5-3.313c-0.563-0.188-1.125-0.375-1.625-0.625l-2.5 1.875c-0.125 0.125-0.25 0.188-0.438 0.188s-0.313-0.063-0.438-0.188c-1.5-1.375-2.5-2.375-2.938-3-0.125-0.125-0.125-0.25-0.125-0.438 0-0.125 0-0.25 0.125-0.375 0.188-0.25 0.5-0.688 0.875-1.188 0.438-0.563 0.75-1 1-1.313-0.313-0.563-0.563-1.188-0.75-1.75l-3.25-0.5c-0.188 0-0.313-0.063-0.375-0.188-0.125-0.125-0.125-0.25-0.125-0.438v-3.938c0-0.188 0-0.313 0.125-0.438 0.063-0.125 0.188-0.188 0.313-0.25l3.313-0.5c0.188-0.5 0.438-1.063 0.75-1.625-0.5-0.688-1.125-1.5-1.938-2.438-0.125-0.188-0.188-0.313-0.188-0.438s0.063-0.25 0.188-0.438c0.313-0.438 0.875-1.063 1.75-1.875 0.875-0.875 1.438-1.313 1.688-1.313 0.125 0 0.313 0.063 0.438 0.188l2.5 1.938c0.5-0.313 1.063-0.5 1.625-0.688 0.188-1.625 0.375-2.75 0.5-3.313 0.063-0.375 0.313-0.5 0.625-0.5h4c0.125 0 0.313 0 0.438 0.125s0.188 0.25 0.188 0.375l0.5 3.313c0.563 0.188 1.125 0.375 1.625 0.625l2.5-1.875c0.125-0.125 0.25-0.188 0.438-0.188s0.313 0.063 0.438 0.188c1.563 1.438 2.563 2.438 2.938 3.063 0.125 0.063 0.125 0.188 0.125 0.375 0 0.125 0 0.25-0.125 0.375-0.188 0.25-0.5 0.688-0.875 1.188-0.438 0.563-0.75 1-1 1.313 0.313 0.563 0.563 1.125 0.75 1.75l3.25 0.5c0.188 0 0.313 0.063 0.375 0.188 0.125 0.125 0.125 0.25 0.125 0.438z"></path>
		</symbol>
		<symbol id="icon-kochbuch" viewBox="0 0 32 32">
			<path d="M8.563 22.25h13.625v3.5h-13.625zM21.313 5.063v0.063c-0.75 0-1.5 0.125-2.188 0.438s-1.313 0.75-1.875 1.313c-0.5 0.5-0.938 1.188-1.25 1.875-0.313 0.75-0.438 1.5-0.438 2.313-0.063-0.813 0.063-1.563 0.313-2.313s0.688-1.5 1.188-2.063c0.563-0.625 1.188-1.125 1.875-1.5 0.313-0.125 0.625-0.25 0.875-0.313-0.875-1.563-2.5-2.625-4.438-2.625-2.75 0-5.063 2.313-5.063 5.125 0 0 0 0 0 0.063-0.25-0.063-0.5-0.063-0.813-0.063-2.5 0-4.5 2-4.5 4.438 0 1.938 1.188 3.563 2.875 4.188l0.688 3.438v2.313h13.625v-2.313l0.688-3.313c2.313-0.688 4.063-2.813 4.063-5.438 0-3.063-2.5-5.625-5.625-5.625z"></path>
		</symbol>
		<symbol id="icon-comment" viewBox="0 0 32 32">
			<path d="M32 14c0 2.063-0.688 4-2.125 5.75s-3.375 3.125-5.813 4.125c-2.5 1.063-5.188 1.563-8.063 1.563-0.813 0-1.688-0.063-2.563-0.125-2.375 2.063-5.125 3.5-8.25 4.313-0.563 0.125-1.25 0.25-2 0.375-0.25 0-0.438 0-0.563-0.188-0.188-0.125-0.25-0.25-0.313-0.5v0c-0.063-0.063-0.063-0.125 0-0.25 0-0.063 0-0.125 0-0.125 0-0.063 0.063-0.125 0.125-0.188l0.063-0.188c0 0 0.063-0.063 0.125-0.125 0.125-0.125 0.125-0.188 0.188-0.188 0.063-0.063 0.25-0.313 0.5-0.625 0.313-0.313 0.5-0.5 0.625-0.625 0.125-0.188 0.313-0.375 0.563-0.75 0.25-0.313 0.438-0.625 0.563-0.875 0.188-0.313 0.313-0.625 0.5-1.063s0.313-0.875 0.5-1.375c-1.875-1.063-3.375-2.375-4.438-3.938s-1.625-3.188-1.625-5c0-1.563 0.438-3 1.25-4.438 0.875-1.438 2-2.625 3.438-3.625 1.438-1.063 3.125-1.875 5.125-2.438 1.938-0.625 4-0.938 6.188-0.938 2.875 0 5.563 0.5 8.063 1.563 2.438 1 4.375 2.375 5.813 4.125s2.125 3.688 2.125 5.75z"></path>
		</symbol>
		<symbol id="icon-unsere-mitbewohner" viewBox="0 0 32 32">
			<path d="M27.125 12.875c1.625-0.125 2.75-0.813 3.125-1.813-0.563 0.313-2.375 0.75-3.375 0.375-0.063-0.25-0.125-0.5-0.125-0.688-0.813-2.813-3.375-5.063-6.125-4.75 0.188-0.125 0.438-0.188 0.688-0.25 0.25-0.125 2.063-0.438 1.75-1.063-0.25-0.5-2.375 0.438-2.813 0.563 0.563-0.188 1.438-0.563 1.563-1.188-0.813 0.125-1.625 0.5-2.25 1.063 0.188-0.25 0.375-0.5 0.438-0.813-2.188 1.375-3.5 4.188-4.563 6.938-0.813-0.813-1.5-1.438-2.125-1.75-1.813-1-4-2-7.438-3.25-0.063 1.125 0.563 2.625 2.5 3.625-0.438-0.063-1.188 0.063-1.813 0.188 0.25 1.313 1.063 2.375 3.25 2.875-1 0.063-1.5 0.313-2 0.813 0.5 0.875 1.563 1.938 3.563 1.688-2.188 1-0.875 2.75 0.938 2.5-3.125 3.125-7.938 2.938-10.688 0.25 7.25 9.875 23 5.875 25.313-3.688 1.813 0.063 2.813-0.563 3.438-1.25-1 0.125-2.438 0-3.25-0.375z"></path>
		</symbol>
		<symbol id="icon-handarbeit" viewBox="0 0 32 32">
			<path d="M17.125 14c0.313 0 0.625 0.125 0.813 0.313 0.25 0.25 0.375 0.5 0.375 0.813s-0.125 0.625-0.375 0.813c-0.188 0.25-0.5 0.375-0.813 0.375s-0.563-0.125-0.813-0.375c-0.188-0.188-0.313-0.5-0.313-0.813s0.125-0.563 0.313-0.813c0.25-0.188 0.5-0.313 0.813-0.313zM22.5 15.125l9.063 7.125c0.313 0.25 0.5 0.563 0.438 1s-0.25 0.75-0.625 0.938l-2.313 1.125c-0.125 0.063-0.313 0.125-0.5 0.125s-0.375-0.063-0.563-0.125l-12.313-6.938-1.938 1.188c-0.125 0.063-0.188 0.063-0.25 0.063 0.188 0.625 0.25 1.188 0.188 1.75-0.063 0.938-0.438 1.813-1 2.625-0.563 0.875-1.375 1.563-2.375 2.188-1.563 1-3.188 1.5-4.938 1.5-1.625 0-2.938-0.438-3.938-1.375-1.063-1-1.563-2.25-1.438-3.688 0.125-0.875 0.438-1.75 1-2.625 0.625-0.875 1.375-1.563 2.375-2.188 1.563-1 3.188-1.5 4.938-1.5 1 0 1.875 0.188 2.688 0.5 0.125-0.125 0.25-0.25 0.438-0.375l2.125-1.313-2.125-1.313c-0.188-0.063-0.313-0.188-0.438-0.375-0.813 0.375-1.688 0.563-2.688 0.563-1.75 0-3.375-0.5-4.938-1.5-1-0.625-1.75-1.375-2.375-2.188-0.563-0.875-0.875-1.75-1-2.625-0.063-0.75 0.063-1.375 0.313-2.063 0.25-0.625 0.625-1.188 1.125-1.625 1-0.938 2.313-1.438 3.938-1.438 1.75 0 3.375 0.5 4.938 1.5 1 0.625 1.813 1.375 2.375 2.188 0.563 0.875 0.938 1.75 1 2.688 0.063 0.563 0 1.125-0.188 1.688 0.063 0 0.125 0.063 0.25 0.125l1.938 1.188 12.313-6.938c0.188-0.125 0.375-0.125 0.563-0.125s0.375 0 0.5 0.125l2.313 1.125c0.375 0.188 0.563 0.5 0.625 0.938 0.063 0.375-0.125 0.75-0.438 1zM10.313 10.5c0.563-0.5 0.688-1.125 0.375-1.938-0.25-0.75-0.875-1.5-1.875-2.063-1.063-0.75-2.25-1.063-3.438-1.063-0.875 0-1.563 0.188-2 0.625-0.563 0.5-0.688 1.125-0.375 1.938s0.938 1.5 1.875 2.063c1.125 0.75 2.25 1.063 3.438 1.063 0.875 0 1.563-0.188 2-0.625zM8.813 23.813c1-0.625 1.625-1.313 1.875-2.125 0.313-0.75 0.188-1.375-0.375-1.875-0.438-0.438-1.125-0.688-2-0.688-1.188 0-2.313 0.375-3.438 1.063-0.938 0.625-1.563 1.313-1.875 2.125-0.313 0.75-0.188 1.375 0.375 1.875 0.438 0.438 1.125 0.688 2 0.688 1.188 0 2.375-0.375 3.438-1.063zM12 12.875l1.688 1v-0.188c0-0.438 0.25-0.75 0.625-1l0.25-0.125-1.438-0.875-0.438 0.5c-0.063 0-0.125 0.063-0.188 0.188s-0.125 0.188-0.188 0.188c-0.063 0.063-0.063 0.063-0.125 0.063 0 0.063 0 0.063 0 0.063zM16 16.875l1.688 0.563 13.188-10.313-2.313-1.125-13.688 7.688v2l-2.875 1.75 0.188 0.125c0 0.063 0.063 0.063 0.125 0.125 0 0.063 0.063 0.125 0.188 0.188 0.063 0.125 0.125 0.188 0.188 0.25l0.438 0.438zM28.563 24.313l2.313-1.188-9.313-7.25-3.125 2.438c-0.063 0.063-0.125 0.063-0.25 0.125z"></path>
		</symbol>
		<symbol id="icon-unser-reich" viewBox="0 0 32 32">
			<path d="M26.875 23.625c0-0.563-0.438-1-0.938-1h-19.875c-0.5 0-0.938 0.438-0.938 1v1.188c0 0.563 0.438 1 0.938 1h19.875c0.5 0 0.938-0.438 0.938-1zM7.875 10.313v0 0c-0.188-0.188-0.438-0.25-0.688-0.25-0.563 0-1 0.438-1.063 1v0 9.375h0.063c0 0.5 0.438 0.938 1 0.938 0 0 0 0 0 0v0h17.625v-0.063c0 0 0 0 0 0 0.5 0 0.938-0.375 1-0.875h0.063v-0.125c0 0 0 0 0 0v-9.063c0-0.063 0-0.125 0-0.188 0-0.625-0.5-1.063-1.063-1.063-0.25 0-0.438 0.063-0.625 0.25v0h-0.063c0 0.063-0.063 0.063-0.063 0.125l-2.25 2.188-5.063-5.063c-0.188-0.188-0.438-0.313-0.75-0.313s-0.563 0.125-0.75 0.313v0l-5.125 5.063-2.125-2.188c-0.063 0-0.063-0.063-0.125-0.063zM23.375 13v0h-0.063zM9.063 6.688c0 1.063-0.813 1.938-1.938 1.938-1.063 0-1.938-0.875-1.938-1.938s0.875-1.938 1.938-1.938c1.125 0 1.938 0.875 1.938 1.938zM26.688 6.688c0 1.063-0.875 1.938-1.938 1.938s-1.938-0.875-1.938-1.938c0-1.063 0.875-1.938 1.938-1.938s1.938 0.875 1.938 1.938zM18.063 4.125c0 1.063-0.875 1.938-1.938 1.938s-1.938-0.875-1.938-1.938c0-1.063 0.875-1.938 1.938-1.938s1.938 0.875 1.938 1.938z"></path>
		</symbol>
		<symbol id="icon-android" viewBox="0 0 32 32">
			<path d="M27 10c-1.1 0-2 0.9-2 2v8c0 1.1 0.9 2 2 2s2-0.9 2-2v-8c0-1.1-0.9-2-2-2zM3 10c-1.1 0-2 0.9-2 2v8c0 1.1 0.9 2 2 2s2-0.9 2-2v-8c0-1.1-0.9-2-2-2zM6 23c0 1.657 1.343 3 3 3h1v4c0 1.1 0.9 2 2 2s2-0.9 2-2v-4h2v4c0 1.1 0.9 2 2 2s2-0.9 2-2v-4h1c1.657 0 3-1.343 3-3v-11h-18v11zM18.706 2.797l1.266-2.431c0.064-0.122 0.016-0.274-0.106-0.337s-0.274-0.016-0.337 0.106l-1.285 2.468c-1.006-0.389-2.1-0.603-3.244-0.603s-2.237 0.214-3.244 0.603l-1.285-2.468c-0.063-0.122-0.215-0.17-0.337-0.106s-0.17 0.215-0.106 0.337l1.266 2.432c-2.832 1.282-4.883 3.987-5.238 7.203h17.889c-0.355-3.216-2.406-5.921-5.238-7.203zM11 8.45c-0.801 0-1.45-0.649-1.45-1.45s0.649-1.45 1.45-1.45 1.45 0.649 1.45 1.45c-0 0.801-0.649 1.45-1.45 1.45zM19 8.45c-0.801 0-1.45-0.649-1.45-1.45s0.649-1.45 1.45-1.45 1.45 0.649 1.45 1.45c0 0.801-0.649 1.45-1.45 1.45z"></path>
		</symbol>
	</svg>
	<?php
}