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

get_header(); ?>

	<div class="banner">
        <img src="<?php echo get_template_directory_uri();?>/images/home-banner.jpg" alt="img">

        <div class="caption">
          <div class="caption-top">
              Law office of<br> Gregory C. Cattermole
          </div>
          <div class="caption-bottom">
              Personal Injury Attorneys <br>
        For California
          </div>
        </div>  
    </div>
    <div class="practice-area">
        <div class="container">
            <h2>A Selection Of Our Practice Areas</h2>
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <img src="<?php echo get_template_directory_uri();?>/images/motor-icon.jpg" alt="img">
                  <div class="practice-txt">
                    Motor Vehicle <br> Injuries
                  </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <img src="<?php echo get_template_directory_uri();?>/images/worker-icon.jpg" alt="img">
                  <div class="practice-txt">
                    Worker’s <br> Compensation
                  </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <img src="<?php echo get_template_directory_uri();?>/images/slip-icon.jpg" alt="img">
                  <div class="practice-txt">
                    Slip & Fall <br> Injuries
                  </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <img src="<?php echo get_template_directory_uri();?>/images/social-icon.jpg" alt="img">
                  <div class="practice-txt">
                      Social Security <br> Insurance
                  </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                  <img src="<?php echo get_template_directory_uri();?>/images/premise-icon.jpg" alt="img">
                  <div class="practice-txt">
                      Premise Liability <br> Injuries
                  </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                   <img src="<?php echo get_template_directory_uri();?>/images/public-icon.jpg" alt="img">
                   <div class="practice-txt">
                      Public <br> Transportation
                  </div>
                </div>

            </div>  
        </div>  
    </div> 
    <div class="bodypart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h2 class="align-center">About Our Personal Injury Law Firm</h2>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-sm-push-8">
                            <div class="sample-pic">
                              <img src="<?php echo get_template_directory_uri();?>/images/picture1.jpg" alt="img">
                            </div>
                        </div>

                        <div class="col-md-8 col-sm-8 col-sm-pull-4">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit, sed do eiusmod tempor incididunt ut labore et
                              dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut
                              aliquip ex ea commodo consequat.
                            </p>
                            <p>
                              Duis aute irure dolor in reprehenderit in voluptate
                              velit esse cillum dolore eu fugiat nulla pariatur.
                              Excepteur sint occaecat cupidatat non proident,
                              sunt in culpa qui officia deserunt mollit anim id est
                              laborum.
                            </p>
                        </div>
                          
                    </div>
                    <div class="row our-contact">
                        <h2 class="align-center">How To Reach Us</h2>
                          <div class="col-md-6 col-sm-6 address-panel">
                              <p>Address:</p>
                              <p>1300 South El Camino Real</p>
                              <p>Suite 300</p>
                              <p>San Mateo, CA</p>
                              <p>94402-2971</p>
                          </div>
                          <div class="col-md-4 col-sm-4 col-sm-offset-2 phoneno-panel">
                              <p>Phone:</p>
                              <p>(650) 345-6811</p>
                              <p>Fax:</p>
                              <p>(650) 345-6812</p>
                          </div>
                    </div> 

                </div>
            </div>  
        </div>
    </div>
    <div class="map">  
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1486549127362" width="1900" height="499" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div> 
    <div class="call-no">
        Call us today at (650) 345-6812
    </div> 

<?php get_footer(); ?>
