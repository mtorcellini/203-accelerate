<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<!-- print the $wp_query object <pre><?php //print_r($wp_query); exit; ?></pre> -->

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="featured-work site-content">
		<h4>Featured Work</h4>
		<div class="work-content">
		<ul>
			<?php query_posts('posts_per_page=3&orderby=date&order=ASC&post_type=case_studies'); ?>
			<?php while ( have_posts() ) : the_post();
				$image_1 = get_field('image_1');
				?>
			<li>
				<figure>
					<a href="<?php the_permalink() ?>" target="_blank"><?php echo wp_get_attachment_image($image_1, "medium"); ?></a>
				</figure>
				<h3><a href="<?php the_permalink() ?>" target="_blank"><?php the_title(); ?></a></h3>
			</li>
			<?php endwhile; ?>
		</ul>
			<?php wp_reset_query(); ?>
				
		</div>
	</section>

	
<?php get_footer(); ?>
