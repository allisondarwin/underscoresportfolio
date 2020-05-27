<?php
/**
 * The template for displaying the homepage
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores-portfolio
 */

get_header();
?>

	<main id="primary" class="site-main homepage">
		<div class="site-content hero-content">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );?>
				<a class="cta-button" href="<?php echo site_url('/#/') ?>">View Work</a><?php

				// If comments are open or we have at least one comment, load up the comment template.
				 if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div><!--- end .site-content -->
	</main><!-- #main -->

<?php
get_footer();
