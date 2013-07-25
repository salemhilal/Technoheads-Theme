<?php
/**
 * Theme header.
 * Displays the <head> section and everything up and until div#main.
 *
 * @package Technoheads
 * @since Technoheads 0.0.1
 */
?><!DOCTYPE html>

<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <!--meta name="viewport" content="width=device-width" /-->
  <meta name="viewport" content="width=device-width, user-scalable=no" />
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
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
  <![endif]-->

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/base.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/layout.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/skeleton.css">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Google analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3331012-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>