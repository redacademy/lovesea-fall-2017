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

//Front page Hero Image

function front_page_hero_css() {
	if (! is_front_page('front-page.php' ) ) {
		return;
	}
	
$image = CFS()->get('front_header_image');

if ( ! $image ) {
	return;
}

$front_hero_css = ".home .hero {
	background-image: url({$image});
	background-repeat: no-repeat;
	background-size: cover;
	min-height: 90vh;
}";

wp_add_inline_style( 'lovesea', $front_hero_css);
}
add_action( 'wp_enqueue_scripts', 'front_page_hero_css' );
	

// About hero image
function about_header_image() {
	if (! is_page_template('page-templates/about.php' ) ) {
			return;
		}
	
	$image = CFS()->get('about_header_image');
	
	if ( ! $image ) {
		return;
	}
	
	$about_header_css = ".page-template-about .page-header {
		background-image: url({$image});
		min-height: 350px;
		background-position: center;
		background-size: cover;
	}";
	
	wp_add_inline_style( 'lovesea', $about_header_css);
	
	}
	
	add_action( 'wp_enqueue_scripts', 'about_header_image' );

// Connect hero image

function lovesea_load_connect_hero_css() {
	if (! is_page_template('page-templates/connect.php' ) ) {
		return;
	}


$image = CFS()->get('connect_hero_image');

if ( ! $image ) {
	return;
}

$connect_hero_css = ".page-template-connect .connect-hero {
	background-image: url({$image});
	background-repeat: no-repeat;
	background-size: cover;
	min-height: 350px;
}";

wp_add_inline_style( 'lovesea', $connect_hero_css);
}
add_action( 'wp_enqueue_scripts', 'lovesea_load_connect_hero_css' );

//Thank you hero image

function thank_you_hero_image() {
	if (! is_page_template('page-templates/connect.php' ) ) {
		return;
	}


$image = CFS()->get('	thank_you_hero_image');

if ( ! $image ) {
	return;
}

$thankyou_hero_css = ".page-template-thankyou .thankyou-hero {
	background-image: url({$image});
	background-repeat: no-repeat;
	background-size: cover;
	min-height: 350px;
}";

wp_add_inline_style( 'lovesea', $thankyou_hero_css);
}
add_action( 'wp_enqueue_scripts', 'thank_you_hero_image' );

// wedding page hero image


function wedding_hero_image() {
	
		if (! is_page_template('page-templates/wedding.php' ) ) {
			return;
		}
	
	$image = CFS()->get('wedding_hero_image');
	
	if ( ! $image ) {
		return;
	}
	
	$wedding_hero_css = ".page-template-wedding .page-header {
		background-image: url({$image});
		min-height: 350px;
		background-position: center;
		background-size: cover;
	}";
	
	wp_add_inline_style( 'lovesea', $wedding_hero_css);
	
	}
	add_action( 'wp_enqueue_scripts', 'wedding_hero_image' );
	// wedding_hero_css

	// wedding page hero image

	function album_hero_css() {
		
			if (! is_page('single-gallery.php' ) ) {
				return;
			}
		
		$image = CFS()->get('single_wedding_hero_image');
		
		if ( ! $image ) {
			return;
		}
		
		$album_hero_css = ".single-gallery .page-header {
			background-image: url({$image});
			min-height: 350px;
			background-position: center;
			background-size: cover;
		}";
		
		wp_add_inline_style( 'lovesea', $album_hero_css);
		}
		add_action( 'wp_enqueue_scripts', 'album_hero_css' );

