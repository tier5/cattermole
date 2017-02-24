<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();
$practice_args = array(
  
   'post_type' => 'practice-area',
   'posts_per_page' => 6,
   'post_status' => 'publish',
   'order' => 'ASC'
);

$practice_query = new WP_Query($practice_args);
 ?>

<?php while(have_posts()):the_post();?>
  <?php $area_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');?>
  <div class="small-banner">
      <img src="<?php echo get_template_directory_uri();?>/images/firm-overview-banner.jpg" alt="img">
      <h1><span><img src="<?php echo $area_image[0]!='' ? $area_image[0] : '' ;?>" alt="img"></span><?php echo get_the_title();?></h1>
    </div>

    <div class="main">
        <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <?php echo get_the_content();?>
                  
                  </div>
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
<?php endwhile;?>
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <div class="row">
              <div class="practice-area inner-practice">

                   <?php if($practice_query->have_posts()):?>
           
                <?php while($practice_query->have_posts()):$practice_query->the_post();?>
                  <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');?>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <a href="<?php echo get_permalink();?>"><img src="<?php echo ($image[0]!="")?$image[0]:'';?>" alt="img"></a>
                  <div class="practice-txt">
                    <a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a>
                  </div>
                </div>
              <?php endwhile;?>
            
              <?php endif;?> 
              </div> 
              </div> 
            </div>
        </div>
    </div>

<?php get_footer(); ?>
