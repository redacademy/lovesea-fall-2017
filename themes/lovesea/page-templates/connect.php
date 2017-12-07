<?php
/**
 * Template Name: Connect Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <!-- <div style="min-height:500px;background:url(<?php echo CFS()->get('connect_hero_image');?>);"></div> -->
      
    <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
  </div><!-- #primary -->
  
  <!-- TODO create a function similar to inhabitent extras.php for inline style -->
  


<?php get_footer(); ?>
