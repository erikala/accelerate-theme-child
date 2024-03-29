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
      <h3><?php echo $hero_text; ?><h3>
    <?php endwhile; // end of the loop. ?>
  </div><!-- .main-content -->
</div>

<?php
$hero_text = get_field('hero_text');
$icon_1 = get_field('icon_1');
$service_title_1 = get_field('service_title_1');
$service_description_1 = get_field('service_description_1');
$icon_2 = get_field('icon_2');
$service_title_2 = get_field('service_title_2');
$service_description_2 = get_field('service_description_2');
$icon_3 = get_field('icon_3');
$service_title_3 = get_field('service_title_3');
$service_description_3 = get_field('service_description_3');
$icon_3 = get_field('icon_4');
$service_title_3 = get_field('service_title_4');
$service_description_3 = get_field('service_description_4');
$size = "full";
?>

<article class="about-services">
      <div id="services">
        <h4>Our services</h4>
        <p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
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

          <div id="social-media-strategy">
              <div class="social-media-text">
                  <h5><?php echo $service_title_3; ?></h5>
                      <p><?php echo $service_description_3; ?><p>
              </div>
              <?php if ($icon_3) {
                        echo wp_get_attachment_image( $icon_3, $size );
                        } ?>
              </div>

              <div id="design-development">
                  <div class="design-text">
                      <h5><?php echo $service_title_4; ?></h5>
                          <p><?php echo $service_description_4; ?><p>
                  </div>
                  <?php if ($icon_4) {
                            echo wp_get_attachment_image( $icon_4, $size );
                            } ?>
              </div>

  </article>

    </div><!-- .main-content -->

   </div><!-- #primary -->

<?php get_footer(); ?>
