<?php
/**
 * Template Name:Firm Page
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

$firm_id = 7;
$post = get_post($firm_id); 
$title =  $post->post_title;
$content =  $post->post_content;
$image = wp_get_attachment_image_src( get_post_thumbnail_id($firm_id), 'full');

$ourpeople_args = array(
  
   'post_type' => 'our-people',
   'posts_per_page' => 6,
   'post_status' => 'publish',
   'order' => 'DESC'
);

$ourpeople_query = new WP_Query($ourpeople_args);

?>
 <div class="small-banner">
      <img src="<?php echo($image[0]!="")?$image[0]: get_template_directory_uri().'/images/home-banner.jpg';?>" alt="img">
      <h1><?php echo $title;?></h1>
    </div>
    <div class="main">
        <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <?php echo $content;?>
                  <div class="row">
                        <div class="our_people">
                            <h2>Our People </h2>
                            <?php if($ourpeople_query->have_posts()):?>
                                <?php while($ourpeople_query->have_posts()):$ourpeople_query->the_post();?>
                                  <?php $people_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full');?>

                            <div class="col-md-4 col-sm-4 single-pic">
                                <figure><a href="<?php echo get_permalink();?>"><img src="<?php echo $people_image[0]!=''?$people_image[0]:get_template_directory_uri().'/images/our-people.jpg';?>" alt="img"></a></figure>
                                <figurecaption>
                                  <a href="<?php echo get_permalink();?>"><?php echo get_the_title();?><br>(<?php echo get_field( "designation", get_the_ID());?>)</a>
                                </figurecaption>
                            </div>
                          <?php endwhile;?>
                          <?php endif;?>
                             
                        </div>
                  </div> 


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
<?php get_footer(); ?>
