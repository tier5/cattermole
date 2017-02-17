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

if(isset($_GET['page']) && $_GET['page']!=""){
	$page = $_GET['page'];
	$next_page = $page+1;
	$prev_page = $page-1;
	
}else{
	$next_page = 2;
	$prev_page = 2;
}
$blog_args = array(
	'post_type' => 'post',
	'posts_per_page' => 2,
	'post_status' => 'publish'
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
                  <h2 class="blog-heading"><?php echo get_the_title();?></h2>
                  <div class="blog-pic">
                    <a href="blog-description.html"><img src="<?php echo($blog_image[0]!="")?$blog_image[0]: get_template_directory_uri()."/images/blog-pic.jpg";?>" alt="img"></a>
                  </div>
                  <p>Date:<?php echo get_the_date();?></p>
                  <p>

                    <?php echo get_the_content();?>
                  </p>
                  <div class="share-blog">

                    <ul>
                        <li>SHARE:</li>
                       <!--  <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/tweet-icon.jpg" alt="tweet"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/facebook-icon.jpg" alt="Facebook"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/in-icon.jpg" alt="in"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/google-icon.jpg" alt="Google"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/mail-icon.jpg" alt="mail"></a></li> -->
                         <?php echo do_shortcode('[simple-social-share]');?>
                    </ul>
                  </div>
                </div> 
            <?php endwhile;?>
                <?php }?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="nxt-prev">
                            <ul>
                                <li><a href="<?php echo site_url();?>/blog?page=<?php echo $prev_page?>">Previous</a></li>
                                <li><a href="<?php echo site_url();?>/blog?page=<?php echo $next_page?>">Next</a></li>
                            </ul>  
                        </div>
                        </div>
                
                </div>  
              </div>
             <!--  <div class="col-md-4">
                  <div class="contact-box">
                      <h3 class="align-center">Contact Us</h3>
                      <p class="align-center">About the firm text goes here</p>
                      <form>
                          <div class="form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" name="" placeholder="Your First Name">
                          </div>
                          <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" name="" placeholder="Your Last Name">
                          </div>
                          <div class="form-group">
                            <label>Email Address</label>
                            <input class="form-control" type="text" name="" placeholder="Your Email Addres">
                          </div>
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input class="form-control" type="text" name="" placeholder="Your Phone number">
                          </div>
                          <div class="form-group">
                            <label>State</label>
                            <select class="form-control">
                              <option>State goes here</option>
                              <option>State goes here</option>
                              <option>State goes here</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Message</label>
                            <textarea placeholder="Your Message"></textarea>
                          </div>
                          <div class="form-group">
                             <input type="submit" value="Send Message"> 
                          </div>  
                      </form>  
                  </div>
              </div> -->
              <div class="col-md-4 col-sm-4">
                  <div class="contact-box">
                      <h3 class="align-center">Contact Us</h3>
              <?php echo do_shortcode('[contact-form-7 id="56" title="Sidebar Contact"]');?>
              </div>
              </div>
          </div>
          
        </div>  
    </div>


<?php get_footer(); ?>
