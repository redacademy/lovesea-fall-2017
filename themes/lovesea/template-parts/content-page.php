<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

<div id="storyteller" class="storyteller">
	<h1>We are story tellers.</h1>
	<p>With a photojournalistic style, we capture both the story and romance of your wedding.</p>
	<button class="browse-wedding"></button> 
</div>

<div class="observer">
	<h1>We are observers.</h1>
	<p>We work in the background, capturing even the tiniest of details, to tell your story.</p>
	<button class="aboutus"></button>
</div>

<div class="friend">
	<h1>We are your friend.</h1>
	<p>We get to know you and your story to perfectly document what’s important to you.</p>
	<button class="connect"></button>
</div>

<div class="instagram-carousel-container"> 
	<h2>follow along on <span class="instagram"> Instagram</span> </h2>
	<div class="instagram-carousel">
	</div>
</div>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
