<?php
/**
 * Template Name:Blog Page
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

$blog_id = 11;
$post = get_post($blog_id); 
$title =  $post->post_title;
$image = wp_get_attachment_image_src( get_post_thumbnail_id($blog_id), 'full');

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$blog_args = array(
	'post_type' => 'post',
	'posts_per_page' => 2,
	'post_status' => 'publish',
  'paged' =>  $paged
	);
$blog_query = new WP_Query($blog_args);
?>

<div class="small-banner">
      <img src="<?php echo ($image[0]!="")? $image[0]:get_template_directory_uri()."/images/firm-overview-banner.jpg";?>" alt="img">
      <h1><?php echo $title;?></h1>
    </div>
    <div class="main blog-page">
        <div class="container">
          <div class="row">
              <div class="col-md-8">
              <?php if($blog_query->have_posts()){?>
              	<?php while($blog_query->have_posts()):$blog_query->the_post();?>
              		<?php $blog_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()));?>
                <div class="single-blog">
                  <h2 class="blog-heading"><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h2>
                  <div class="blog-pic">
                    <a href="<?php echo get_permalink();?>"><img src="<?php echo($blog_image[0]!="")?$blog_image[0]: get_template_directory_uri()."/images/blog-pic.jpg";?>" alt="img"></a>
                  </div>
                  <p>Date:<?php echo get_the_date();?></p>
                  <p>

                    <?php echo get_the_content();?>
                  </p>
                  <div class="share-blog">

                    <ul>
                        <li>SHARE:</li>
                        <?php echo do_shortcode('[simple-social-share]');?>
                    </ul>
                  </div>
                </div> 
            <?php endwhile; wp_reset_postdata(); ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="nxt-prev">
                            <ul>

                                <li><?php next_posts_link( 'Next', $blog_query->max_num_pages );?></li>
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
                       <p class="align-center">About the firm text goes here</p>
              <?php echo do_shortcode('[contact-form-7 id="56" title="Sidebar Contact"]');?>
              </div>
              </div>
          </div>
          
        </div>  
    </div>


<?php get_footer(); ?>
