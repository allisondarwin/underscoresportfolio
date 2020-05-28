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
			<?php
			while ( have_posts() ) :
				the_post();

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

  <section class="case-study-content">
    <div class="site-content">
      <div class="case-study-text">
        <h3><span>Client:</span> <?php the_field('case_study_client'); ?></h3>
        <p><span>The problem:</span> <?php the_field('case_study_problem'); ?></p>
        <p><span>The solution:</span> <?php the_field('case_study_solution'); ?></p>
        <p><span>The results:</span> <?php the_field('case_study_results'); ?></p>
      </div>
      <div class="case-study-images">
      </div>
    </div>
  </section>

<?php

get_footer();
