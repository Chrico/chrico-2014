<?php
/**
 * Render the search form.
 *
 * This file will be used by the search widget too.
 *
 * @package ChriCo
 */
?>
<div id="site-search">
	<div id="site-search-button">
		<a href="#site-search-form" role="button" aria-controls="site-search-form">
			<i class="icon icon-search" aria-hidden="true"></i>
			<span class="screen-reader-text"><?php _e( 'Search', CC_TEXTDOMAIN ); ?></span>
		</a>
	</div>
	<div id="site-search-form">
		<form class="inline-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
			<label for="s"<?php
				/**
				 * Look for search term.
				 *
				 * If the search field has a value, this gets an additional class.
				 */
				if( '' !== get_search_query() )
					echo ' class="has-value"';
				?>>
				<span><?php
				echo _x(
					'Ich suche...',
					'Search field label (ellipsis)',
					CC_TEXTDOMAIN
				);
				?></span>
				<input id="s" name="s" type="text" class="search-input" value="<?php the_search_query(); ?>" />
			</label>
			<div class="search-submit">
				<input type="submit" value="<?php
				echo _x(
					'finden',
					'Search form submit button',
					CC_TEXTDOMAIN
				);
				?>" />
			</div>
		</form>
	</div>
</div>