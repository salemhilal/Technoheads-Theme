<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Technoheads
* @since Technoheads 0.0.1
*/
?>
<div id="secondary" class="widget-area sidebar-container" role="complementary">
  <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display') ); ?>" rel="home">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo2.svg" class="logo-image">
  </a>
  <header class="row title-group">
    <h1 class="site-title">
      <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display') ); ?>" rel="home">
        <?php bloginfo('name'); ?>
      </a>
    </h1>

    <h2 class="site-description subheader">
      <?php bloginfo('description'); ?>
    </h2>
  </header>

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
 
  	<!-- Do this if you want to split pages and categories. --
    <aside id="categories" class="widget">
      <h1 class="widget-title"><?php _e( 'Categories', 'technoheads' ); ?></h1>
      <ul>
        <?php wp_list_categories( array( 'number' => 5, 'child_of' => 0, 'title_li' => '') ); ?>
      </ul>
    </aside>
  	<aside id="pages" class="widget">
      <ul>
			 <?php wp_list_pages( array( 'number' => 5, 'child_of' => 0, 'title_li' => '') ); ?> 
      </ul>
		</aside>
  	-->

    <!--aside id="archives" class="widget">
      <h1 class="widget-title"><?php _e( 'Archives', 'technoheads' ); ?></h1>
      <ul>
        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
      </ul>
    </aside-->

  <?php endif; // end sidebar widget area ?>
  <div class="container mobile-footer">
    <div class="row">
      <div class="sixteen columns">
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
    </div>
  </div>
</div><!--#secondary .widget-area  -->