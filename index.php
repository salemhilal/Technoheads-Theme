<?php
/**
 * The main template file.
 * 
 * @package Technoheads
 * @since Technoheads 0.0.1
 */

get_header(); ?>

  <?php get_sidebar(); ?>

  
  <div id="page" class="hfeed site page row clear">
    
      <div class="before-padding col"></div>

      <div id="main" class="site-main main_content col">

        <div id="primary" class="content-area">
          <div id="content" class="site-content">
          <?php if(have_posts()) : ?>
            <?php technoheads_content_nav('nav-above'); ?>
            <?php /* The Loop */ ?>
            <?php while ( have_posts() ) : the_post() ?>
              <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile; ?>
            <?php technoheads_content_nav('nav-below'); ?>
          <?php else : ?>
            <?php get_template_part('no-results', 'index'); ?>
          <?php endif ?>
          </div><!-- #content -->
        </div><!-- #primary -->
      </div><!-- #main -->
      <div class="after-padding col"></div> 
  </div><!-- .hfeed .site .page -->

<?php get_footer(); ?>