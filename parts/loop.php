<?php
/**
 * The main template file.
 *
 * @package ChriCo
 * @subpackage Templateparts
 */

global $wp_query;
$i = 0;
/* Start the Loop */
while ( have_posts() ) : the_post();

	// in_array( $i, array( 2, 4, 5, 8, 10  ) )
	if( $i%2 === 0 ){
		echo '<div class="clearfix">';
	}

	get_template_part( 'parts/content', get_post_format() );

	$i++;

	// in_array( $i, array( 3+1, 5+1, 7+1, 9+1, 11+1  ) )
	if( $i%2 === 0 || $i >= $wp_query->post_count ){
		echo '</div>';
	}

endwhile;