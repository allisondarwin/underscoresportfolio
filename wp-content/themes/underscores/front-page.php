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
		</div><!--- end .site-content .hero-content -->
	</main><!-- #main -->

	<section class="homepage-services">
		<div class="site-content">
			<h2>How can I help?</h2>
			<ul class="service-items">
				<li>placeholder item</li>
				<li>placeholder item</li>
				<li>placeholder item</li>
			</ul>
		</div>
	</section><!--end adwd services-->

<?php
get_footer();
