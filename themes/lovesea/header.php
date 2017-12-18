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

	<nav class="fixed-menu">
		<button id="toggle-menu-button" class="toggle-menu-button">&#9776;</button>
		<ul id="menu-list" class="menu-list">
			<li id="menu-item"><a href="<?php echo get_home_url(); ?>">home</a></li>
			<li class="menu-item"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'weddings' ) ) ); ?>">weddings</a></li>
			<img class="nav-logo"  src="<?php echo get_template_directory_uri() . '/images/lovesea_logo_monogram.svg' ?>">
			<li class="menu-item"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ) ) ); ?>">about</a></li>
			<li class="menu-item"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'connect' ) ) ); ?>">connect</a></li>
		</ul>	
	</nav>


				<!-- <nav id="site-navigation" class="main-navigation" role="navigation"> -->
				<!-- <a class="toggle-nav" href="#">&#9776;</a> -->


<!--
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
-->
				<!-- </nav>#site-navigation -->
			</header><!-- #masthead -->
			

			<div id="content" class="site-content">
