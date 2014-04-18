<?php
/**
 * The loop file for the home-template.
 *
 * @package ChriCo
 * @subpackage Templateparts
 */

global $wp_query;

$i = 1;
/* Start the Loop */
while ( have_posts() ) : the_post();

	if( $i === 1 ){
		$template = 'single';
	}
	else{
		$template = get_post_format();
	}

	// in_array( $i, array( 2, 4, 5, 8, 10  ) )
	if( $i !== 0 && $i%2 === 0 ){
		echo '<div class="clearfix">';
	}

	get_template_part( 'parts/content', $template );

	$i++;

	// in_array( $i, array( 3+1, 5+1, 7+1, 9+1, 11+1  ) )
	// we have to use > instead of >= to compare $i with the post_count
	if( $i%2 === 0 && $i > 3 || $i > $wp_query->post_count ){
		echo '</div>';
	}

endwhile;