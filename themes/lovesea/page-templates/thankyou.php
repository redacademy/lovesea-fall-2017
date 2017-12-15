<?php

/** Template Name: Thank You */

get_header(); ?>
<div class="thank_you_hero_image">
      <img src= '<?php echo CFS()->get( 'thank_you_hero_image' );	?>'>
      </div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>