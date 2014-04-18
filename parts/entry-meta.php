<?php
/**
 * Post meta data
 *
 * @package    ChriCo
 * @subpackage Templateparts
 */

if ( is_page() )
	return;
?>
<p class="entry-meta">
	<?php
		// Translators: used between list items, there is a space after the comma.
		$categories_list = get_the_category_list( __( ', ', CC_TEXTDOMAIN ) );

		$date = sprintf(
			'<time class="entry-date" datetime="%1$s">%2$s</time>',
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		// comments
		$comment_number = get_comments_number();




		$comment_text = '<a href="' . get_comments_link() .'" title="'. __( 'Das denkt Ihr über diesen Beitrag', CC_TEXTDOMAIN ) . '">';
		$comment_text .= $comment_number;
		$comment_text .= ' <i class="icon icon-comment" aria-hidden="true"></i>';
		$comment_text .= ' <span class="screen-reader-text">';
		$comment_text .= _n( 'Meinung', 'Meinungen', $comment_number, CC_TEXTDOMAIN );
		$comment_text .= '</a>';

		// Translators: 1 is category, 2 is the date and 3 is the author's name, 4 is the comment link
		printf(
			__( 'Schublade: %1$s | %2$s | %3$s', CC_TEXTDOMAIN ),
			$categories_list,
			$date,
			$comment_text
		);
	?>
</p>