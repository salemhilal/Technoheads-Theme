<?php
/**
 * Theme functions and definitions
 * 
 * @package Technoheads
 * @since Technoheads 0.0.1
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 * @since Technoheads 0.0.1
 */
if (!isset($content_width)) 
  $content_width = 654; /* pixels */

if (!function_exists('technoheads_setup' )):

  function technoheads_setup() {
    require(get_template_directory() . '/inc/template-tags.php');
    require(get_template_directory() . '/inc/tweaks.php');

    load_theme_textdomain('shape', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');
    add_theme_support('post-formats', array('aside'));

    register_nav_menus( array(
      'primary' => __('Primary Menu', 'technoheads')
    ));
  }
endif;
add_action('after_setup_theme', 'technoheads_setup');

// Enqueue scripts and styles
function shape_scripts(){
  wp_enqueue_style('style', get_stylesheet_uri());

  if(is_singular() && comments_open() && get_option('thread_comments')){
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('small-menu', get_template_directory_uri() . '/js/small-menu.js', array('jquery'), '20120206', true);

  if(is_singular() && wp_attachment_is_image()){
    wp_enqueue_script('keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array('jquery'), '20120202');
  }
}
add_action('wp_enqueue_scripts', 'shape_scripts');