<?php
/**
 * The template for displaying all pages.
 * Template Name: front-page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- <img class="front-center-logo" src='/images/Lovesea_logo_text.svg' alt="cool" > -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

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

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
