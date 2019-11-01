<?php
/**
 * The template for displaying a single case study
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php $services = get_field('services');
						$client = get_field('client');
						$link = get_field('site_link');
						$image_1 = get_field('image_1');
						$image_2 = get_field('image_2');
						$image_3 = get_field('image_3'); 
						$size = "full"; ?>

				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?></h2>
						<h4><?php echo $services; ?></h4>
						<h4><span><?php echo $client; ?></span></h4>
						<?php the_content(); ?>
						<a class="read-more-link" href="<?php echo $link; ?>" rel="noopener noreferrer" target="_blank">Visit Live Site &rsaquo;</a>
					</aside>
					<aside class="case-study-sidebar">
						<?php if ($image_1) { 
							echo wp_get_attachment_image($image_1, $size);
						} ?>
						<?php if ($image_2) { 
							echo wp_get_attachment_image($image_2, $size);
						} ?>		
						<?php if ($image_3) { 
							echo wp_get_attachment_image($image_3, $size);
						} ?>
					</aside>
				</article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->


	</div><!-- #primary -->

	<nav id="navigation" class="container">
	<div class="left"><a href="<?php echo site_url() ?>">&larr; <span>Back to work</span></a></div>
	</nav>

<?php get_footer(); ?>
