<?php
/**
 * The template for displaying case study archive.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores-portfolio
 */

get_header();
?>

	<main id="primary" class="site-main case-study-archive">
		<div class="site-content">
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post();
          $client = get_field('case_study_client');
					$services = get_field('case_study_services');
          $image_1 = get_field('case_study_image_1');
          $size = 'full';?>

          <article class="archive-case-study">
      		    <aside class="archive-case-study-sidebar">
            	   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            	   <h5><?php echo $services; ?></h5>
							   <?php the_excerpt(); ?>
							   <p class="archive-read-more-link"><a href="<?php the_permalink(); ?>">View Project &gt;</p></a>
      		    </aside>
      		    <div class="archive-case-study-images">
                  <a href="<?php the_permalink(); ?>">
							    <?php if($image_1) {
									echo wp_get_attachment_image($image_1, $size);
							    } ?>
                  </a>
      		    </div>
			    </article> <?php

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div><!--end .site-content>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
