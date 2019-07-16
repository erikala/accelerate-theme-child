<?php
/**
 * The template for displaying the case studies archive page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
  				$image1 = get_field('image1');
					$size = "full";
					$services = get_field('services');
			?>

		<article class="case-study-archive">

				<aside class="case-study-archive-sidebar">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
						<h5><?php echo $services; ?></h5>
						<?php the_excerpt(); ?>
						<p class="case-study-link"><strong><a href="<?php the_permalink(); ?>">View Project ›</a></strong></p>
				</aside>

				<div class="case-study-archive-images">
						<a href="<?php the_permalink(); ?>">
						<?php if($image1) {
						echo wp_get_attachment_image( $image1, $size );
						} ?></a>
				</div>

		</article>

		<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
