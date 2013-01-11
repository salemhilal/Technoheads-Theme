<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Technoheads
* @since Technoheads 0.0.1
*/
?>
      <div class="navigation col">
        <nav class="site-navigation main-navigation" role="navigation">
          <?php include (TEMPLATEPATH . '/searchform.php'); ?>
          <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
      </div>