<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores-portfolio
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-content">
			<div class="site-info">
				<p><?php bloginfo('description'); ?></p>
				<p>&copy; <?php bloginfo('title'); ?> 2020
			</div><!-- .site-info -->
			<div class="social-media">
				<ul class="social-media-menu">
					<li><a href="https://www.facebook.com/webdesignbyallison" target="_blank">Facebook</a></li>
					<li><a href="https://www.instagram.com/webdesignbyallison/" target="_blank">Instagram</a></li>
				</ul>
			</div><!-- end social media-->
		</div><!-- end .site-content -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
