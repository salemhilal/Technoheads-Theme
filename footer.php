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
            <h2 class="widget-title"><?php _e( 'Categories', 'technoheads' ); ?></h2>
              <?php wp_list_categories( array(
                'show_count' => 1,
                'title_li'   => '',
                'number'     => 10
              )); ?>   
          </aside>             
      
          <aside id="about" class="widget col">
            <h2 class="widget-title"><?php _e( 'Hello there', 'technoheads' ); ?></h2>
            My name is Salem, and I'm currently a student at <a href="http://www.cmu.edu">CMU</a>. 
            I make music, websites, and a mean cappucino. Talk to me <a href="http://twitter.com/technoheads">@technoheads</a>. I'll be sure to respond.             
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
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-3331012-6']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

</body>
</html>