<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lovesea_Theme
 */

if ( ! function_exists( 'lovesea_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function lovesea_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // lovesea
add_action( 'after_setup_theme', 'lovesea_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function lovesea_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lovesea_content_width', 640 );
}
add_action( 'after_setup_theme', 'lovesea_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lovesea_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lovesea_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function lovesea_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'lovesea_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function lovesea() {
	wp_enqueue_style( 'lovesea', get_stylesheet_uri() );


	wp_enqueue_style( 'lovesea-owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css');

	wp_enqueue_script( 'jquery');

	wp_enqueue_script('lazy-load', 'https://cdnjs.cloudflare.com/ajax/libs/unveil/1.3.0/jquery.unveil.min.js', array('jquery'), false, true);
	wp_enqueue_script( 'menu-toggle', get_template_directory_uri() . '/build/js/nav-bar.min.js', array('jquery'), false, true);

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/build/js/scripts.min.js', array('jquery'), false, true);

	wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/build/js/smoothscroll.min.js', array('jquery'), false, true);

	wp_enqueue_script('lovesea-accordion', get_template_directory_uri() . '/build/js/accordion.min.js', array('jquery'), false, true);

	wp_enqueue_script( 'lovesea-spectra', 'https://cdnjs.cloudflare.com/ajax/libs/spectragram/1.0.3/spectragram.min.js', array('jquery'), false, false );
	
	wp_enqueue_script( 'lovesea-owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js', array('jquery', 'lovesea-spectra'), false, true );
	
	wp_enqueue_script( 'lovesea-instagram', get_template_directory_uri() . '/build/js/ls-instagram.min.js', array('jquery', 'lovesea-spectra', 'lovesea-owl',), false, true );
	
	wp_enqueue_script( 'lovesea-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}



function register_my_menus() {
  register_nav_menus(
    array(
      'new-menu' => __( 'New Menu' ),
      'another-menu' => __( 'Another Menu' ),
      'an-extra-menu' => __( 'An Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


add_action( 'wp_enqueue_scripts', 'lovesea' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


