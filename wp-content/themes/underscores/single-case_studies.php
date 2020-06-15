<?php
/**
 * The template for displaying single case studies
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores-portfolio
 */

get_header();
?>

	<main id="primary" class="site-main single-case-study">
		<div class="site-content hero-content">
			<?php while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );?>
        <h2><?php the_field('case_study_services'); ?></h2><?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div><!-- end .site-content -->
	</main><!-- #main -->

  <article class="case-study-content">
    <div class="site-content">
      <div class="case-study-text">
				<?php
					$client = get_field('case_study_client');
					$services = get_field('case_study_services');
					$completion_date = get_field('case_study_completion_date');
					$client_description = get_field('case_study_client_description');
					$objective = get_field('case_study_objective');
					$solution = get_field('case_study_solution');
					$results = get_field('case_study_results');
					$link = get_field('case_study_link');
					$testimonial = get_field('case_study_testimonial')?>
        <h3><span>Client:</span> <?php echo $client ?></h3>
				<h4><?php echo $services ?></h4>
				<h4>Completion date: <?php echo $completion_date ?></h4>
				<p><?php echo $client_description ?></p>
        <p><span>The objective:</span> <?php echo $objective ?></p>
        <p><span>The solution:</span> <?php echo $solution ?></p>
				<?php if ($results) { ?>
        	<p><span>The results:</span> <?php echo $results ?></p>
				<?php } ?>
				<?php if ($link) { ?>
					<p class="visit-live-site-link"><a href='<?php echo $link ?>' target='_blank'>Visit Live Site &gt;</a></p>
				<?php } ?>
				<?php if ($testimonial) { ?>
					<p class="client-$testimonial"><span>Client says:</span> <em><?php echo $testimonial ?></em></p>
				<?php } ?>
      </div>
      <div class="case-study-images">
				<?php
					//$image_1 = get_field('case_study_image_1');
					$image_2 = get_field('case_study_image_2');
					$image_3 = get_field('case_study_image_3');
					$image_4 = get_field('case_study_image_4');
					$size = 'full'; ?>
				<?php	/*if ($image_1) {
						echo wp_get_attachment_image($image_1, $size);
					}*/?>
				<?php	if ($image_2) {
						echo wp_get_attachment_image($image_2, $size);
					}?>
				<?php	if ($image_3) {
						echo wp_get_attachment_image($image_3, $size);
					}?>
				<?php	if ($image_4) {
						echo wp_get_attachment_image($image_4, $size);
					}?>
      </div>
    </div>
  </article>

	<nav id="navigation" class="site-content">
			<div class="post-navigation"><a href="https://allisondarwin.com/#work">&larr; <span class="back-to-work-link">Back to work</span></a></div>
	</nav>

<?php

get_footer();
