<?php
/**
 * The template for displaying the About page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<div id="primary" class="home-page hero-content">
  <div class="main-content" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="aboutpage-hero">
        <?php the_content(); ?>

<?php
$hero_text = get_field('hero_text');
$page_title = get_field('page_title');
$page_description = get_field('page_description');
$icon_1 = get_field('icon_1');
$service_title_1 = get_field('service_title_1');
$service_description_1 = get_field('service_description_1');
$icon_2 = get_field('icon_2');
$service_title_2 = get_field('service_title_2');
$service_description_2 = get_field('service_description_2');
$icon_3 = get_field('icon_3');
$service_title_3 = get_field('service_title_3');
$service_description_3 = get_field('service_description_3');
$size = "full";
?>

<div id="hero-text">
						<h3><?php echo $hero_text; ?><h3>
					</div><!-- #hero-text -->
				</div><!-- #aboutpage-hero -->
  <?php endwhile; // end of the loop. ?>

<article class="about-services">
      <div id="services">
      		<h4><?php echo $page_title; ?></h4>
      			<p><?php echo $page_description; ?></p>
      </div>

      <div id="content-strategy">
      		<div class="content-text">
      				<h5><?php echo $service_title_1; ?></h5>
      					 <p><?php echo $service_description_1; ?><p>
      		</div>
      		<?php if ($icon_1) {
      							echo wp_get_attachment_image( $icon_1, $size );
      					} ?>
      </div>

      <div id="influencer-mapping">
          <div class="influencer-text">
              <h5><?php echo $service_title_2; ?></h5>
                  <p><?php echo $service_description_2; ?><p>
          </div>
          <?php if ($icon_2) {
                    echo wp_get_attachment_image( $icon_2, $size );
                    } ?>
          </div>
          
  </article>

    </div><!-- .main-content -->

   </div><!-- #primary -->

<?php get_footer(); ?>
