<?php
/**
 * Template Name:Testimonial Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();

$testi_id = 74;
$post = get_post($testi_id); 
$title =  $post->post_title;
$image = wp_get_attachment_image_src( get_post_thumbnail_id($testi_id), 'full');

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$test_args = array(
	'post_type' => 'testimonial',
	'posts_per_page' => 4,
	'post_status' => 'publish',
  'paged' =>  $paged
	);
$test_query = new WP_Query($test_args);

$practice_args = array(
  
   'post_type' => 'practice-area',
   'posts_per_page' => 6,
   'post_status' => 'publish',
   'order' => 'ASC'
);

$practice_query = new WP_Query($practice_args);
?>

<div class="small-banner">
      <img src="<?php echo ($image[0]!="")? $image[0]:get_template_directory_uri()."/images/firm-overview-banner.jpg";?>" alt="img">
      <h1><?php echo $title;?></h1>
    </div>
    <div class="main">
        <div class="container">
          <div class="row">
              <div class="col-md-8">
              <h2>
                  What Our Clients Say About Us
                  </h2>
              <?php if($test_query->have_posts()){?>
              	<?php while($test_query->have_posts()):$test_query->the_post();?>
              		<?php $test_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()));?>
                
                  <div class="single-testimonial">
                    <p>
                      <?php echo get_the_content();?>
                    </p>
                    
                    <div class="client-name">- <?php echo get_the_title();?></div>
                  </div>
                  
            <?php endwhile; wp_reset_postdata(); ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="nxt-prev">
                            <ul>

                                <li><?php next_posts_link( 'Next', $test_query->max_num_pages );?></li>
                                <li><?php previous_posts_link( 'Previous' );?></li>
                                
                            </ul>  
                        </div>
                        </div>
                
                </div>  
              </div>
              <?php }?>
             <div class="col-md-4 col-sm-4">
                  <div class="contact-box">
                      <h3 class="align-center">Contact Us</h3>
              <?php echo do_shortcode('[contact-form-7 id="56" title="Sidebar Contact"]');?>
              </div>
              </div>
          </div>
          
        </div>  
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="practice-area inner-practice">
                  <div class="row">

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
