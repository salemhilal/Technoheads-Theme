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
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1400);


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

// Register wigetized area and update sidebar with default widgets
function technoheads_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Primary Widget Area', 'technoheads' ),
    'id' => 'sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ) );
 
  register_sidebar( array(
    'name' => __( 'Secondary Widget Area', 'technoheads' ),
    'id' => 'sidebar-2',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ) );
}
add_action( 'widgets_init', 'technoheads_widgets_init' );

// Theme options page stuff
function setup_theme_admin_menus(){
  add_submenu_page('themes.php', 'Calcium Settings', 'Calcium Settings', 
          'manage_options', 'calcium-settings', 'theme_calcium_settings');

}
function theme_calcium_settings(){
  // Check to see that the current user has the right permissions.
  if ( !current_user_can( 'manage_options' ) )  {
    wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
?>
  <div class="wrap">
    <?php screen_icon('themes'); ?> <h2>Calcium Settings</h2>
    <form method="POST" action="options.php">
      <?php settings_fields('calcium_options'); ?>
      <?php do_settings_sections('calcium'); ?>

      <input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
    </form> 
  </div>
<?php
}

add_action("admin_menu", "setup_theme_admin_menus");


// Initializes the calcium settings page
function calcium_admin_init(){
	register_setting( 'calcium_options', 'calcium_options', 'calcium_options_validate' );
	add_settings_section('calcium_main', 'Loop Settings', 'calcium_section_text', 'calcium');
	add_settings_field('calcium_text_string', 'Hide Posts Before:', 'Calcium_setting_string', 'calcium', 'calcium_main');
}
add_action('admin_init', 'calcium_admin_init');

// Calcium section text
function calcium_section_text() {
	echo '<p>These settings modify the behavior of the loop.</p>';
}

// Settings string for calcium
function calcium_setting_string() {
	$options = get_option('calcium_options');
	echo "<input id='calcium_start_date' name='calcium_options[start_date]' size='40' type='text' value='{$options['start_date']}' placeholder='yyyy-mm-dd'/>";
}

// Checks to see if date is of form yyyy-mm-dd
function validateDate( $postedDate ) {
   if (preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', $postedDate, $datebit)) {
      return checkdate($datebit[2] , $datebit[3] , $datebit[1]);
   } else {
      return false;
   }
} 

// validates calcium_options
function calcium_options_validate($input) {
	$newinput['start_date'] = trim($input['start_date']);
	if(!validateDate($newinput['start_date'])) {
		$newinput['start_date'] = '';
	}
	return $newinput;
}





