<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php while(have_posts()):the_post();?>
	<?php $people_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');?>
	<div class="small-banner">
      <img src="<?php echo get_template_directory_uri();?>/images/firm-overview-banner.jpg" alt="img">
      <h1><?php echo get_the_title();?></h1>
    </div>
    <div class="main">
        <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="profile-image">
                  <img src="<?php echo $people_image[0]!='' ? $people_image[0]: get_template_directory_uri().'/images/profile-image.jpg' ?>" alt="img">
                  </div>  
                 <?php echo get_the_content();?>


					</div>
          <?php endwhile;?>
               <div class="col-md-4 col-sm-4">
                  <div class="contact-box">
                      <h3 class="align-center">Contact Us</h3>
                       <p class="align-center">About the firm text goes here</p>
              <?php echo do_shortcode('[contact-form-7 id="56" title="Sidebar Contact"]');?>
              </div>
              </div>
          </div>

        </div>  
    </div>

<?php get_footer(); ?>
