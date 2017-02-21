<?php
/**
 * Template Name:Contact Page
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
<div class="contact-bg">
        <div class="contact-overlay"></div>
        <div class="contact-main">
        <h1>Contact Us</h1>
         <p class="align-center">About the firm text goes here</p>
        <div class="col-md-6 col-sm-6 col-sm-offset-3">
<div class="contact-form">

<?php echo do_shortcode('[contact-form-7 id="47" title="Cattermole Contact"]');?>


</div>
 </div>
</div>
</div>
<?php get_footer(); ?>
