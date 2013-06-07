<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Technoheads
 * @since Technoheads 0.0.1
 */

get_header(); ?>

  <!-- div id="primary" class="content-area">
    <div id="content" class="site-content" role="main" -->

<div class="main-container">    
  <div class="container">
    <div class="twelve columns offset-by-two">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php //technoheads_content_nav( 'nav-above' ); ?>

        <?php get_template_part( 'content', 'single' ); ?>

        <?php technoheads_content_nav( 'nav-below' ); ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || '0' != get_comments_number() )
            comments_template( '', true );
        ?>

      <?php endwhile; /* end of the loop.*/ ?>

    	<div class="row">
      	<?php get_footer(); ?>
    	</div>

    </div>
  </div>
</div>
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>