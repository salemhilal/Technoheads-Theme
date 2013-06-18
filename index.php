<?php
/**
 * The main template file.
 * 
 * @package Technoheads
 * @since Technoheads 0.0.1
 */

get_header(); ?>

  <div class="main-container">
    
    <div class="container">

      <div id="primary" class="twelve columns offset-by-two">
        <header class="row mobile-title-group">
          <h1 class="mobile-site-title">
            <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display') ); ?>" rel="home">
              <?php bloginfo('name'); ?>
            </a>
          </h1>
          <h2 class="site-description subheader">
            <?php bloginfo('description'); ?>
          </h2>
        </header>
        
        <?php /* Query and loop */
					// Get theme options
					$options = get_option('calcium_options');

					if($options['start_date'] != ''){
						// Filter out the nonsense from my old blog posts.
  	        function filter_where($where = '') {
              global $options;

  	          $where .= " AND post_date >= '{$options['start_date']}'";
  	          return $where;
	          }
	
						// Attach the filter and query for posts
          	add_filter('posts_where', 'filter_where');
          	query_posts($query_string);
					}
					// Loop through posts, if any.
          if(have_posts()) : 
         
            while ( have_posts() ) : 
              the_post();
              get_template_part('content', get_post_format());
          	endwhile;
          
						// Bottom nav
          	technoheads_content_nav('nav-below');

          else :
            get_template_part('no-results', 'index');
          endif ?>

        <div class="row">
          <div class="end-icon">&#x2756;</div>
          <?php get_footer(); ?>
        </div>
      </div>


    </div>
  </div>


  <?php get_sidebar(); ?>
