<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Change WP logo on wp-admin login

function lovesea_login_logo() {
	echo '<style type="text/css">                                                                   
			#login h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/lovesea_logo_text.svg) !important; 
			background-size: 265px 250px;
			height: 250px;
			width: 265px;
		}                            
	</style>';
}
add_action('login_head', 'lovesea_login_logo');

// About hero image
function lovesea_dynamic_css() {
	
if ( ! is_page_template( 'page-templates/about.php') ) {
	return;
}
$image = CFS()->get( 'about_header_image' );
if (! $image ) {
	return;
}
$hero_css = ".page-template-about .custom-hero {
	background: url({$image});
	background-size: auto 100vh;
	height: 100vh;
	width: auto;
}";
wp_add_inline_style( 'lovesea-style', $hero_css );
}

add_action( 'wp_enqueue_scripts', 'lovesea_dynamic_css' );
	