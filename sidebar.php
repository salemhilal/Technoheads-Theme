<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Technoheads
* @since Technoheads 0.0.1
*/
?>
<div id="secondary" class="widget-area sidebar-container" role="complementary">
	<img src="http://farm3.staticflickr.com/2847/9074324292_3ef7c2e087_o.jpg" class="logo-image"></img>
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
</div><!--#secondary .widget-area  -->

<!-- <div class="sidebar-container">
  <h1>sidebar</h1>
</div> -->