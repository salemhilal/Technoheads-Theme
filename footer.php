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
    </div><!-- #main .site-main -->
  </div> <!-- .row -->
   
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
  </div><!-- #page .hfeed .site -->
   
  <?php wp_footer(); ?>
  
  <!-- Scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="wp-content/themes/Technoheads-theme/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fitvids.js"></script>

  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/app.js"></script>

</body>
</html>