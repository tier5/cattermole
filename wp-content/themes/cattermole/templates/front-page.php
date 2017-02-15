<?php
/**
 * Template Name:Front Page
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

$id=4; 
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); 
$image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full');



$practice_args = array(
  
   'post_type' => 'practice-area',
   'posts_per_page' => 6,
   'post_status' => 'publish',
   'order' => 'ASC'
);

$practice_query = new WP_Query($practice_args);

$about_id=41; 
$about_post = get_post($about_id); 
$about_title = $about_post->post_title;
$about_content = apply_filters('the_content', $about_post->post_content); 
$about_image = wp_get_attachment_image_src( get_post_thumbnail_id($about_id), 'full');



?>

	<div class="banner">
        <img src="<?php echo($image[0]!="")?$image[0]: get_template_directory_uri().'/images/home-banner.jpg';?>" alt="img">

        <div class="caption">
        <?php if($content !=""):?>
          <?php echo $content;?>
        <?php else:?>
          <div class="caption-top">
              Law office of<br> Gregory C. Cattermole
          </div>
          <div class="caption-bottom">
              Personal Injury Attorneys <br>
        For California
          </div>
        <?php endif;?>
        </div>   
    </div>
    <div class="practice-area">
        <div class="container">
            <h2>A Selection Of Our Practice Areas</h2>
            <?php if($practice_query->have_posts()):?>
            <div class="row">
                <?php while($practice_query->have_posts()):$practice_query->the_post();?>
                  <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');?>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <img src="<?php echo ($image[0]!="")?$image[0]:'';?>" alt="img">
                  <div class="practice-txt">
                    <?php echo get_the_title();?>
                  </div>
                </div>
              <?php endwhile;?>
            </div>
            <?php endif;?>  
        </div>  
    </div> 
    <div class="bodypart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h2 class="align-center"><?php echo $about_title;?></h2>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-sm-push-8">
                            <div class="sample-pic">
                              <img src="<?php echo ($about_image[0]!="")?  $about_image[0]:get_template_directory_uri().'/images/picture1.jpg';?>" alt="img">
                            </div>
                        </div>

                        <div class="col-md-8 col-sm-8 col-sm-pull-4">
                            <?php echo $about_content;?>
                        </div>
                          
                    </div>
                    <div class="row our-contact">
                        <?php dynamic_sidebar('sidebar-2');?>
                    </div> 

                </div>
            </div>  
        </div>
    </div>

    
    <div class="map">  
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.013663082178!2d-122.31947194942553!3d37.55474187970097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f9e5df059b1cf%3A0x6f9ca493afe07bbb!2s1300+S+El+Camino+Real+%23300%2C+San+Mateo%2C+CA+94402%2C+USA!5e0!3m2!1sen!2suk!4v1487148510654" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div> 
    <div class="call-no">
        <?php dynamic_sidebar('sidebar-3');?>
    </div> 


<?php get_footer(); ?>
