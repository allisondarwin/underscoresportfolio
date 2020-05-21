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
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscores-portfolio' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'underscores-portfolio' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscores-portfolio' ), 'underscores-portfolio', '<a href="http://underscores.me/">Underscores.me</a>' );
					?>
			</div><!-- .site-info -->
		</div><!-- end .site-content -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
