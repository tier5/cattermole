<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cattermole I Homepage</title>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	

	
		<header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <div class="logo">
                        <a href="<?php echo site_url();?>">
                        <img src="<?php echo get_template_directory_uri();?>/images/law-office-of-gregory-c-cattermole.jpg" alt="law-office-of-gregory-c-cattermole" title="law-office-of-gregory-c-cattermole">
                        </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="phone-no">
                          <a href="tel:3102779945"><?php dynamic_sidebar('sidebar-5');?></a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="header-bottom">
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </div>
        <div class="mobile-menu">
          <div class="container">
            <div class="row">
              <div class="col-xs-3 border-right">
                  <div class="menu-button">
                    <a href="#"  onclick="toggle_visibility('foo');">  
                    <img src="<?php echo get_template_directory_uri();?>/images/menu-icon.jpg" alt="img">
                     Menu
                    </a> 
                  </div>
              </div>
              <div class="col-xs-3 border-right">
                  <div class="menu-button">
                    <a href="tel:310-277-9945">  
                    <img src="<?php echo get_template_directory_uri();?>/images/call-icon.jpg" alt="img">
                     Phone
                    </a> 
                  </div>
                  
              </div>
              <div class="col-xs-3 border-right">
                  <div class="menu-button">
                    <a href="<?php echo site_url().'/direction';?>">  
                    <img src="<?php echo get_template_directory_uri();?>/images/location-icon.jpg" alt="img">
                     Location
                    </a> 
                  </div>
                  
              </div>
              <div class="col-xs-3">
                  <div class="menu-button">
                    <a href="<?php echo site_url().'/contact-us';?>">  
                    <img src="<?php echo get_template_directory_uri();?>/images/contact-icon.jpg" alt="img">
                     Contact
                    </a> 
                  </div>
                   
              </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div id="foo">
                    <div class="mobile-menu">
                       <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                    </div>  
                </div>
            
            </div>  
            </div>
          </div>  
        </div>  
    </header>

		<?php //get_sidebar(); ?>
	

	<div id="content" class="site-content">
