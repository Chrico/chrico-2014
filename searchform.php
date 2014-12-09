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
			<?php echo chrico_get_icon( 'search' ); ?>
			<span class="screen-reader-text"><?php _e( 'Search', 'theme_chrico' ); ?></span>
		</a>
	</div>
	<div id="site-search-form" itemscope itemtype="http://schema.org/WebSite">
		<?php
		$search_url = esc_url( home_url( '/' ) );
		?>
		<meta itemprop="url" content="<?php echo $search_url; ?>"/>
		<form class="inline-form" action="<?php echo $search_url; ?>" role="search" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
			<meta itemprop="target" content="<?php echo $search_url; ?>?s={s}"/>
			<label for="s"<?php
				/**
				 * Look for search term.
				 *
				 * If the search field has a value, this gets an additional class.
				 */
				if ( '' !== get_search_query() ) :
					echo ' class="has-value"';
				endif;
				?>>
				<span><?php
				echo _x(
					'Ich suche...',
					'Search field label (ellipsis)',
					'theme_chrico'
				);
				?></span>
				<input itemprop="query-input" id="s" name="s" type="text" class="search-input" value="<?php the_search_query(); ?>" />
			</label>
			<div class="search-submit">
				<input type="submit" value="<?php
				echo _x(
					'finden',
					'Search form submit button',
					'theme_chrico'
				);
				?>" />
			</div>
		</form>
	</div>
</div>