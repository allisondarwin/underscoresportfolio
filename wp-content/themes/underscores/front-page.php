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
				<a class="cta-button" href="<?php echo site_url('/contact/') ?>">Get in Touch</a><?php

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
			<h2>What do you need help with?</h2>
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

	<section id="work" class="featured-work">
		<div class="site-content">
			<h2>Featured Projects</h2>
				<ul class="homepage-featured-work">
					<?php query_posts('posts_per_page=4&post_type=case_studies'); ?>
						<?php while ( have_posts() ) : the_post();
							$featured_work_image = get_field('case_study_image_1');
							$size = 'full';?>
							<li class="individual-featured-work">
								<figure class="featured-work-image">
									<a href="<?php the_permalink(); ?>">
										<?php echo wp_get_attachment_image($featured_work_image, $size); ?>
									</a>
								</figure>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</li>
						<?php endwhile; ?>
					<?php wp_reset_query(); //resets the altered query back to the original ?>
				</ul>
		</div>
	</section>

	<section id="testimonials" class="homepage-testimonials">
		<div class="site-content">
			<h2>Clients Say...</h2>
			<div class="testimonial-items">
				<article class="individual-testimonial">
					<p class="testimonial-content">"Allison is absolutely outstanding. She built a beautiful, modern, SEO friendly website for my mom's cleaning business. Not only did she do that but, she also educated me and created a reference guide for me. She truly listens to what you need and enhances to something so much better than you imagined. Also, she is very prompt and communicative. I am definitely working with her in the future."</p>
					<p class="testimonial-name">Cecy's Cleaning</p>
				</article>
			</div>
		</div>
	</section>

	<section id="about" class="about-section">
		<div class="site-content">
			<h2>About Me</h2>
			<div class="about-content">
				<div class="about-text">
					<?php the_field('about_description'); ?>
				</div>
				<figure class="about-profile-picture">
					<?php $profile_image = get_field('about_image');
								$profile_image_size = 'medium';
					   echo wp_get_attachment_image($profile_image, $profile_image_size); ?>
				</figure>
			</div>
		</div>
	</section>

	<section class="homepage-contact">
		<div class="site-content">
			<h2>Want a website that looks great and grows your business?</h2>
			<h3>I can help.</h3>
			<a class="cta-button" href="<?php echo site_url('/contact/') ?>">Contact Me</a>
		</div>
	</section>

<?php
get_footer();
