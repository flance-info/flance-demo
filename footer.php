<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


$custom_logo_url = get_theme_mod('custom_logo_setting');
?>


	<div id="pro-box">
			<div class="pro-section pro-fixed">
				<div class="wrap">
					<a class="logo-url" href="https://stylemixthemes.com/zoom-meetings-webinar-plugin/" target="_blank"><img src="<?php echo esc_url($custom_logo_url); ?>" alt="WordPress eRoom – Zoom Meetings &amp; Webinar Demo">
						<div class="extra-links">
								</div>
						<div>
							<a class="button free" href="https://wordpress.org/plugins/eroom-zoom-meetings-webinar/" target="_blank">Lite Version</a>
							<a class="button pro" href="https://stylemixthemes.com/zoom-meetings-webinar-plugin/" target="_blank">Pro Version</a>
						</div>
					</a></div>
			</div>
		</div>
<?php wp_footer(); ?>

</body>
</html>
