<?php
/**
 * The template for displaying Comments
 *
 * @package ChriCo
*/


if ( post_password_required() )
	return;
?>
<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<?php _e( 'Das denkt Ihr über diesen Beitrag:', 'theme_chrico' ) ?>
		</h2>

		<ol id="commentlist">
			<?php wp_list_comments(
				array(
			        'type'      => 'comment',
			        'callback'  => 'cc_the_comment',
			        'style'     => 'ol'
				)
			); ?>
		</ol>

		<?php
		/**
		 * Include comments pagination like above.
		 */
		get_template_part( 'parts/pagination', 'comments' );
		?>

	<?php endif; // have_comments() ?>
	
	<?php
	/**
	* Pings with favicons.
	*
	* @link http://wordpress.stackexchange.com/a/96596/23011
	*/
	if ( $num = cc_get_count_pings() ) :
	?>
	<h4 id="pingbacks"><?php
		printf(
			_nx(
				'Ein pingback',
				'%d pingbacks',
				$num,
				'Pingbacks title',
				'theme_chrico'
			),
			$num
		);
		?></h4>
	<ol class="pinglist">
		<?php
		/**
		 * Custom callback applied adding pings as URLs with favicon.
		 */
		wp_list_comments(
			array (
			      'type'        => 'pings',
			      'style'       => 'ul',
			      'callback'    => 'cc_the_pings'
			)
		);
		?></ol>
	<?php
	endif;

	if ( comments_open() ){
		$comment_form_args = array(
			'title_reply' => __( 'Lass uns Deine Meinung wissen!', 'theme_chrico' ),
			'comment_notes_after'   => ''
		);
		comment_form( $comment_form_args );
	}



	?>
</div>