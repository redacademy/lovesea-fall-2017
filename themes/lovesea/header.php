<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->


				<!-- <nav class="desktop-nav"> -->
 
		
		<?php
		//  wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); 
		 ?>

<nav class="desktop-menu">
    <ul class="menu-items">
        <li class="current-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'weddings' ) ) ); ?>">Weddings</a></li>
        <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ) ) ); ?>">About</a></li>
        <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'connect' ) ) ); ?>">Connect</a></li>
    </ul>
		</nav>

		<a class="mobile-nav" href="#">&#9776;</a>
		<ul class="mobile-menu-items">
        <li class="mobile-item"><a href="<?php echo get_home_url(); ?>">Home</a></li>
        <li class="mobile-item"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'weddings' ) ) ); ?>">Weddings</a></li>
        <li class="mobile-item"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ) ) ); ?>">About</a></li>
        <li class="mobile-item"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'connect' ) ) ); ?>">Connect</a></li>
    </ul>



				<!-- <nav id="site-navigation" class="main-navigation" role="navigation"> -->
				<!-- <a class="toggle-nav" href="#">&#9776;</a> -->

					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				<!-- </nav>#site-navigation -->
			</header><!-- #masthead -->
			

			<div id="content" class="site-content">
