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
</body></html>