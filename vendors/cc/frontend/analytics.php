<?php
/**
 * Feature Name:    Analytics Functions for our Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */

/**
 * Helper-Function to add Google Analytics to wp_footer
 * @wp-hook wp_footer
 * @return  void
 */
function cc_filter_wp_footer_add_google_analytics(){
	?>
	<script>
		var _gaq = _gaq || [];
		_gaq.push(['_require', 'inpage_linkid', '//www.google-analytics.com/plugins/ga/inpage_linkid.js']);
		_gaq.push(['_setAccount', 'UA-37470854-1']);
		_gaq.push(['_gat._anonymizeIp']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<?php
}