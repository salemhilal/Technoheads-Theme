<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Technoheads
 * @since Technoheads 0.0.1
 */

get_header(); ?>

  <?php get_sidebar(); ?>


  <div id="page" class="page row clear">

      <div class="before-padding col"></div>

      <div id="main" class="site-main main_content col">
        <div id="primary" class="content-area">
          <?php while ( have_posts() ) : the_post(); ?>

            <?php technoheads_content_nav( 'nav-above' ); ?>

            <?php get_template_part( 'content', get_post_format() ); ?>

            <?php technoheads_content_nav( 'nav-below' ); ?>

            <?php
              // If comments are open or we have at least one comment, load up the comment template
              if ( comments_open() || '0' != get_comments_number() )
                comments_template( '', true );
            ?>

          <?php endwhile; // end of the loop. ?>
        </div><!-- #primary -->
      </div><!-- #main-->

      <div class="after-padding col"></div>

  </div>
 
<?php get_footer(); ?>