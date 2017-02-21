<?php
/**
 * The template for displaying all single posts and attachments
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
 ?>

<?php while(have_posts()):the_post();?>
	<?php $blog_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()));?>
	<div class="small-banner">
      <img src="<?php echo ($image[0]!="")? $image[0]:get_template_directory_uri()."/images/firm-overview-banner.jpg";?>" alt="img">
      <h1><?php echo get_the_title();?></h1>
    </div>
    <div class="main blog-page">
        <div class="container">
          <div class="row">
              <div class="col-md-8">
                <div class="single-blog">
                  
                  <div class="blog-pic-single">
                    <a href="blog-description.html"><img src="<?php echo($blog_image[0]!="")?$blog_image[0]: get_template_directory_uri()."/images/blog-pic.jpg";?>" alt="img"></a>
                  </div>
                  <p>Date:<?php echo get_the_date();?></p>
                  <div class="share-blog">

                    <ul>
                        <li>SHARE:</li>
                        <?php echo do_shortcode('[simple-social-share]');?>
                    </ul>
                  </div>
                  <p>

                     <?php echo get_the_content();?>
                  </p>
                  
                </div> 
                
               <!--  <div class="row">
                    <div class="col-md-12">
                        <div class="nxt-prev">
                            <ul>
                                <li><a href="blog.html">Previous</a></li>
                                
                            </ul>  
                        </div>
                        </div>
                
                </div>   -->
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
<?php get_footer(); ?>
