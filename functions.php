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