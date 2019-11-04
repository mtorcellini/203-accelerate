<?php
/**
 * The template for displaying the case study archive
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

            <?php query_posts('post_type=case_studies&order=ASC'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
                <?php $services = get_field('services');
					$client = get_field('client');
					$link = get_field('site_link');
					$image_1 = get_field('image_1');
					$size = "medium"; ?>
                <article>
                    <aside class="case-study-sidebar">
                        <h2><?php the_title(); ?></h2>
                        <h4><?php echo $services; ?></h4>
				        <?php the_excerpt(); ?>
                        <a class="read-more-link" href="<?php the_permalink(); ?>">View Project &rsaquo;</a>
                    </aside>
                    <aside class="case-study-sidebar">
                        <figure>
                            <?php echo wp_get_attachment_image($image_1, $size); ?>
                        </figure>
                    </aside>
                </article>
			<?php endwhile; // end of the loop. ?>
            <?php wp_reset_query(); ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
