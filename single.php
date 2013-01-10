<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Technoheads
 * @since Technoheads 0.0.1
 */

get_header(); ?>
<div class="page">
  <div class="row clear">
    <div class="navigation col">
      <nav class="site-navigation main-navigation" role="navigation">
        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
      </nav>
    </div>
    <div id="main" class="site-main main_content col">
      <div id="primary" class="content-area">
        <?php while ( have_posts() ) : the_post(); ?>

          <?php technoheads_content_nav( 'nav-above' ); ?>

          <?php get_template_part( 'content', 'single' ); ?>

          <?php technoheads_content_nav( 'nav-below' ); ?>

          <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() )
              comments_template( '', true );
          ?>

        <?php endwhile; // end of the loop. ?>
      </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->
  </div><!-- .row -->
</div>
<div class="row">
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>