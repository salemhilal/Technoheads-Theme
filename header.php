<?php
/**
 * Theme header.
 * Displays the <head> section and everything up and until div#main.
 * 
 * @package Technoheads
 * @since Technoheads 0.0.1
 */
?><!DOCTYPE html>

<!--[if lt IE 7]>      <html  <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html  <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html  <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html  <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php
    // Print the <title> tag based on what is being viewed.
    global $page, $paged;

    wp_title('|', true, 'right');

    // Add the blog name.
    bloginfo('name');

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if($site_description && (is_home() || is_front_page())){
      echo " | $site_description";
    }

    // Add a page number if necessary: 
    if($paged >= 2 || $page >= 2){
      echo ' | ' . sprintf(__('Page %s', 'Technoheads'), max($paged, $page));
    }

  ?></title>
  <meta name="description" content=<?php bloginfo('description'); ?> />
  <meta name="viewport" content="width=device-width" />

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.min.css" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!-- Begin wordpress header -->
  <?php wp_head(); ?>
  <!-- End wordpress header -->

  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body <?php body_class(); ?>>
  <!--[if lt IE 7]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->

  <div id="page" class="hfeed site page">
    <div class="row heading">
      <div class="header column">
        <header id="masthead" class="site-header" role="banner">
          <hgroup>
            <div class="site-title">
              <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display') ); ?>" rel="home">
                <!-- <?php bloginfo('name'); ?> -->
                <h1>Techno<span class="heads">heads.</span></h1> 
              </a>
            </div>
            <!-- <h2 class="site-description">
              <?php bloginfo('description'); ?>
            </h2> -->
          </hgroup>
          
        </header>
      </div>
    </div>

    <div class="row">
      <div class="navigation col">
        <nav class="site-navigation main-navigation" role="navigation">
          <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
      </div>
      <div id="main" class="site-main main_content col">

