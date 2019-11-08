<?php
/**
 * The template for displaying the about page
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<main id="about">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php $about_heading = get_field('about_heading');
					$about_description = get_field('about_description'); ?>

					<h3><?php echo $about_heading; ?></h3>
					<p><?php echo $about_description; ?></p>

			<?php endwhile; ?>

			<?php query_posts('post_type=services'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php $description = get_field('description');
						$image = get_field('image'); ?>

				<article class="row">
					<figure>
						<?php echo wp_get_attachment_image($image, $size); ?>
					</figure>
					<div>
						<h2><?php the_title(); ?></h2>
						<p><?php echo $description; ?></p>
					</div>
				</article>
				
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); ?>
			</main>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>



