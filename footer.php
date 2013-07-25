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

<div class="row mobile-footer">
    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

      <aside id="search" class="widget widget_search">
        <?php get_search_form(); ?>
      </aside>

      <aside id="places" class="widget">
        <ul>
          <?php wp_list_pages( array( 'title_li' => '') ); ?>
          <?php wp_list_categories( array( 'number' => 5, 'title_li' => '') ); ?>
        </ul>
      </aside>

    <?php endif; // end sidebar widget area ?>
</div>

<div class="row">
  <div class="end-icon">&#x2756;</div>
</div>

<div class="row">

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
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>

</body>
</html>