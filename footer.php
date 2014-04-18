<?php
/**
 * The template for displaying the footer.
 *
 * @package ChriCo
 */
?>
		<?php if( !is_singular() ) { ?>
			<?php get_template_part( 'parts/pagination', 'site' ); ?>
		<?php } ?>

			</div> <?php /* site-content-inner */ ?>
		</main> <?php /* site-content */ ?>

		<footer id="site-footer" role="contentinfo">
			<?php get_sidebar( 'footer' ); ?>
			<?php get_template_part( 'parts/navigation', 'footer' ); ?>
		</footer>

	</div> <?php /* site-wrapper */ ?>
</div> <?php /* site */ ?>

<?php wp_footer(); ?>

<script>
	var _gaq = _gaq || [];
	_gaq.push(['_gat._anonymizeIp']);
	_gaq.push(['_setAccount', 'UA-37470854-1']);
	_gaq.push(['_trackPageview']);
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
</body></html>