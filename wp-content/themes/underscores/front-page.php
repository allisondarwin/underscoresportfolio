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
				<a class="cta-button" href="<?php echo site_url('/#/') ?>">Get in Touch</a><?php

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
			<h2>How can I help you?</h2>
			<div class="service-items">
				<article class="individual-service-item">
					<figure class="service-icon">
						<i class="fas fa-desktop"></i>
					</figure>
					<h3><?php the_field('first_service_title'); ?></h3>
					<p><?php the_field('first_service_description'); ?></p>
				</article>
				<article class="individual-service-item">
					<figure class="service-icon">
						<i class="far fa-edit"></i>
					</figure>
					<h3><?php the_field('second_service_title'); ?></h3>
					<p><?php the_field('second_service_description'); ?></p>
				</article>
				<article class="individual-service-item">
					<figure class="service-icon">
						<i class="fas fa-bullhorn"></i>
					</figure>
					<h3><?php the_field('third_service_title'); ?></h3>
					<p><?php the_field('third_service_description'); ?></p>
				</article>
			</div>
		</div>
	</section><!--end adwd services-->

<?php
get_footer();
