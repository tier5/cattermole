<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Law Office of Gregory C. Cattermole</h5>
                    <div class="row">
                       <?php dynamic_sidebar('sidebar-4');?>
                    </div>
                </div>
                <div class="col-md-6">
                   <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?> 
                </div>
            </div>
            <div class="row copyrights">
                <div class="col-md-12 col-sm-12">
                  © 2017 Law Office of Gregory C. Cattermole
All Rights Reserved.
Developed by: <img src="<?php echo get_template_directory_uri();?>/images/media-smack.jpg" alt="img">
                
                </div>  
            </div>
        </div>  
    </footer>

</div><!-- .site -->


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>


    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
