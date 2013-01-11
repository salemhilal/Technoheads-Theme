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
  <footer class="footer-wrapper clear">
    <div class="page">
      <div id="secondary" class="row widget-area clear" role="complementary">
        <?php do_action( 'before_sidebar' ); ?>

        <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
          <aside id="categories" class="widget col">
            <h2 class="widget-title"><?php _e( 'Archives', 'technoheads' ); ?></h2>
            <ul>
              <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
          </aside>

          <aside id="archives" class="widget col">
            <h2 class="widget-title"><?php _e( 'Archives', 'technoheads' ); ?></h2>
            <ul>
              <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
          </aside>             
      
          <aside id="meta" class="widget col">
            <h2 class="widget-title"><?php _e( 'Meta', 'technoheads' ); ?></h2>
            <ul>
              <?php wp_register(); ?>
              <li><?php wp_loginout(); ?></li>
              <?php wp_meta(); ?>
            </ul>
          </aside>

        <?php endif; // end sidebar widget area ?>
      </div><!-- #secondary .widget-area -->

      <div id="colophon" class="site-footer row clear" role="contentinfo">
        <div class="site-info">
          <?php do_action( 'technoheads_credits' ); ?>
          <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'technoheads' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'technoheads' ), 'WordPress' ); ?></a>
          <span class="sep"> | </span>
          <?php printf( __( 'Theme: %1$s by %2$s.', 'technoheads' ), '<a href="https://github.com/bichiliad/Technoheads-Theme">Technoheads</a>', '<a href="http://technoheads.org/" rel="designer">Salem</a>' ); ?>
          <span class="sep"> | </span>
          &copy;2012 Salem Hilal.
        </div><!-- .site-info -->
      </div><!-- #colophon .site-footer -->
    </div><!-- .page -->
  </footer><!-- .footer-wrapper -->

  <?php wp_footer(); ?>

  <!-- Scripts -->
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fitvids.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/app.js"></script>

</body>
</html>