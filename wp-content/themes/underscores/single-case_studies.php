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
        <h3><span>Client:</span> <?php the_field('case_study_client'); ?></h3>
				<h4><?php the_field('case_study_services'); ?></h4>
        <p><span>The problem:</span> <?php the_field('case_study_problem'); ?></p>
        <p><span>The solution:</span> <?php the_field('case_study_solution'); ?></p>
        <p><span>The results:</span> <?php the_field('case_study_results'); ?></p>
				<p class="visit-live-site-link"><a href='#' target='_blank'>Visit Live Site</a></p>
      </div>
      <div class="case-study-images">
				<?php
					$image_1 = get_field('case_study_image_1');
					$image_2 = get_field('case_study_image_2');
					$image_3 = get_field('case_study_image_3');
					$size = 'full'; ?>
				<?php	if ($image_1) {
						echo wp_get_attachment_image($image_1, $size);
					}?>
				<?php	if ($image_2) {
						echo wp_get_attachment_image($image_2, $size);
					}?>
				<?php	if ($image_3) {
						echo wp_get_attachment_image($image_3, $size);
					}?>
      </div>
    </div>
  </article>

<?php

get_footer();
