<?php
/**
 * Theme functions and definitions
 *
 * Sets up the theme and provides some helper functions including 
 * custom template tags, actions and filter hooks to change core functionality.
 *
 *
 * @package delighted_calligraphy
 */
/**
 * Set the content width
 */
/*if ( ! isset( $content_width ) ) :
    $content_width = 640;
endif;*/
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * To override delighted_calligraphy_setup() in a child theme, 
 * add your own delighted_calligraphy_setup to your child theme's functions.php file.
 */
if ( ! function_exists( 'delighted_calligraphy_setup' ) ):
    function delighted_calligraphy_setup() {
        // Make theme available for translation.
        // Translations can be filed in the /languages/ directory.
        load_theme_textdomain( 'delighted-calligraphy', get_template_directory() . '/languages' );
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        // Enable support for Post Thumbnails on posts and pages
        add_theme_support( 'post-thumbnails' );
        // Enable support for Post Formats.
        add_theme_support( 'post-formats', array( 
            'aside', 
            'image', 
            'video', 
            'quote', 
            'link' 
        ) );
        // Enable support for HTML5 markup.
        add_theme_support( 'html5', array(
            'comment-list',
            'search-form',
            'comment-form',
            'gallery',
        ) );
        // Enable support for editable menus via Appearance > Menus
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'delighted-calligraphy' )
        ) );
        
        // Add custom image sizes
            // add_image_size( &#039;name&#039;, 500, 300, true );
    }
endif; // delighted_calligraphy_setup
add_action( 'after_setup_theme', 'delighted_calligraphy_setup' );
/**
 * Register sidebars and widgetized areas
 */
function delighted_calligraphy_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar', 'delighted-calligraphy' ),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'delighted_calligraphy_widgets_init' );

/* ENQUEUE TITLE TAG
 ========================== */
function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

/* ENQUEUE SCRIPTS & STYLES
 ========================== */
function delighted_calligraphy_scripts() {
    // theme style.css file
    wp_enqueue_style( 'delighted-calligraphy-style', get_stylesheet_uri() );

    
    // threaded comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // Theme Scripts
    wp_enqueue_script(
      'theme-init',
      get_template_directory_uri() . '/assets/js/theme.js',
      array('jquery'), '3.1.1', true );

    // Slider Scripts
    if (is_page('styles')) {
        wp_enqueue_script(
            'slider-init',
            get_template_directory_uri() . '/assets/js/slider.js',
        array('jquery'), '3.1.1', true );
    }

}    
add_action('wp_enqueue_scripts', 'delighted_calligraphy_scripts');



// Google webfonts stylesheet
function wpb_add_google_fonts() {

    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Cormorant:400,400i|Lato:400,700', false);

}

add_action ('wp_enqueue_scripts', 'wpb_add_google_fonts');

/**
 * Remove the front-end admin bar for everybody, always
 */
show_admin_bar( false );
// Add TinyMCE buttons that are disabled by default
//function delighted_calligraphy_mce_buttons_2($buttons) {  
//  /**
//   * Add in a core button that's disabled by default
//   */
//  $buttons[] = 'justify'; // fully justify text
//  $buttons[] = 'hr'; // insert HR
//
//  return $buttons;
//}
//add_filter('mce_buttons_2', 'delighted_calligraphy_mce_buttons_2');
// Remove all colors except those custom colors specified from TinyMCE
//function delighted_calligraphy_change_mce_options( $init ) {
//  $custom_colors = '"#####1", "Color Name 1", "#####2", "Color Name 2", "#####3", "Color Name 3"';    
//  $init['textcolor_map'] = '['.$custom_colors.']';
//return $init;
//}
//add_filter('tiny_mce_before_init', 'delighted_calligraphy_change_mce_options');


// Comments & pingbacks display template
include('inc/functions/comments.php');







