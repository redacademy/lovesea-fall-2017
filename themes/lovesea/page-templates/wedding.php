<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php if ( have_posts() ) : ?>
		 
				<?php /* The loop */ ?>
<div id="mansonry-loop">
				<?php while ( have_posts() ) : the_post(); ?>
				
		<?php get_template_part( 'template-parts/content', 'masonry' ); ?>
		<?php endwhile; ?>
</div>
	<?php the_posts_navigation(); ?>
	<?php else : ?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>
				
	<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
