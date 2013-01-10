<?php
/**
* The Sidebar containing the main widget areas.
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
        <aside id="archives" class="widget col">
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
  