<?php
/**
 * Template Name:Direction Page
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
?>
<div class="small-banner">
      <img src="<?php echo get_template_directory_uri();?>/images/firm-overview-banner.jpg" alt="img">
      <h1>Directions</h1>
    </div>
<div class="main">
        <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="location-info">
                      <h2>Our Location Information</h2>
                      <p>Address:</p>
                      <p>1300 South El Camino Real</p>
                      <p>Suite 300</p>
                      <p>San Mateo, CA</p>
                      <p>94402-2971</p>
                  </div>
                  <div class="location-map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.013663082178!2d-122.31947194942553!3d37.55474187970097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f9e5df059b1cf%3A0x6f9ca493afe07bbb!2s1300+S+El+Camino+Real+%23300%2C+San+Mateo%2C+CA+94402%2C+USA!5e0!3m2!1sen!2suk!4v1487148510654" width="1900" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

                  </div>
              </div>
               <div class="col-md-4">
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
