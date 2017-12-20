<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package lovesea_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function lovesea_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'lovesea_body_classes' );

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
		min-height: 300px;
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
	min-height: 300px;
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
	min-height: 300px;
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
		min-height: 300px;
		background-position: center;
		background-size: cover;
	}";
	
	wp_add_inline_style( 'lovesea', $wedding_hero_css);
	
	}
	add_action( 'wp_enqueue_scripts', 'wedding_hero_image' );
	// wedding_hero_css

	// wedding page hero image

	function album_hero_image() {
		
			if (! is_singular( 'gallery' ) ) {
				return;
			}
		
		$image = CFS()->get('single_wedding_hero_image');
		
		if ( ! $image ) {
			return;
		}
		
		$album_hero_css = ".single-gallery .page-header {
			background-image: url({$image});
			min-height: 300px;
			background-position: center;
			background-size: cover;
		}";
		
		wp_add_inline_style( 'lovesea', $album_hero_css);
		}
		add_action( 'wp_enqueue_scripts', 'album_hero_image' );


// 404 page
		function error_hero_image() {
			
				if (! is_404() ) {
					return;
				}
			
			$image = CFS()->get('404_hero_image');
			
			if ( ! $image ) {
				return;
			}
			
			$error_hero_css = ".error404 .hero {
				background-image: url({$image});
				min-height: 350px;
				background-position: center;
				background-size: cover;
			}";
			
			wp_add_inline_style( 'lovesea', $error_hero_css);
			}
			add_action( 'wp_enqueue_scripts', 'error_hero_image' );
	


			add_action( 'rest_api_init', 'rest_api_filter_add_filters' );
			
			 /**
				* Add the necessary filter to each post type
				**/
			function rest_api_filter_add_filters() {
				foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $post_type ) {
					add_filter( 'rest_' . $post_type->name . '_query', 'rest_api_filter_add_filter_param', 10, 2 );
				}
			}
			
			/**
			 * Add the filter parameter
			 *
			 * @param  array           $args    The query arguments.
			 * @param  WP_REST_Request $request Full details about the request.
			 * @return array $args.
			 **/
			function rest_api_filter_add_filter_param( $args, $request ) {
				// Bail out if no filter parameter is set.
				if ( empty( $request['filter'] ) || ! is_array( $request['filter'] ) ) {
					return $args;
				}
			
				$filter = $request['filter'];
			
				if ( isset( $filter['posts_per_page'] ) && ( (int) $filter['posts_per_page'] >= 1 && (int) $filter['posts_per_page'] <= 100 ) ) {
					$args['posts_per_page'] = $filter['posts_per_page'];
				}
			
				global $wp;
				$vars = apply_filters( 'query_vars', $wp->public_query_vars );
			
				foreach ( $vars as $var ) {
					if ( isset( $filter[ $var ] ) ) {
						$args[ $var ] = $filter[ $var ];
					}
				}
				return $args;
			}