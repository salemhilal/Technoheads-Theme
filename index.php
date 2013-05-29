<?php
/**
 * The main template file.
 * 
 * @package Technoheads
 * @since Technoheads 0.0.1
 */

get_header(); ?>

  <?php get_sidebar(); ?>

  <div class="main-container">
    
    <div class="container">

      <div class="twelve columns offset-by-two">

        <div class="row">
          <h1>Hello there</h1>
          <h2>I'm Salem. I write on occasion.</h2>
        </div>


<!--   <div id="  primary" class="content-area">
    <div id="content" class="site-content"> -->
        <?php if(have_posts()) : ?>

          <? // php technoheads_content_nav('nav-above'); ?>

          <?php /* The Loop */ ?>
          <?php while ( have_posts() ) : the_post() ?>
            <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?>
          <?php technoheads_content_nav('nav-below'); ?>

        <?php else : ?>

          <?php get_template_part('no-results', 'index'); ?>

        <?php endif ?>

        <div class="row">
          <?php get_footer(); ?>
        </div>
      </div>


    </div>
  </div>
