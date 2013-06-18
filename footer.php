<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the id=main div and all content after
*
* @package Technoheads
* @since Technoheads 0.0.1
*/
?>


<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="site-info">
    <?php do_action( 'technoheads_credits' ); ?>
    <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'technoheads' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'technoheads' ), 'WordPress' ); ?></a>
    <span class="sep"> | </span>
    <?php printf( __( 'Theme: %1$s by %2$s.', 'technoheads' ), 'Technoheads', '<a href="http://technoheads.org/" rel="designer">Salem</a>' ); ?>
    <span class="sep"> | </span>
    &copy;2012 Salem Hilal.
  </div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>

<!-- Scripts! -->
<script>
  jQuery(document).ready(function(){
    // For testing purposes.
  	jQuery(jQuery("#secondary li").splice(4)).hide();
    
  });
  
  jQuery(window).load(function(){
   	// fade in the sidebar after everything's loaded.	
    jQuery(".sidebar-container").fadeIn(200);
    
  });
  
      
</script>

</body>
</html>