<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
			$gallery_images = CFS()->get( 'wedding_albums_images' );
			foreach ( $gallery_images as $image ) :
			?>
			<img class="" src="<?php	echo $image['wedding_album_single_image']; ?>" alt="">	
			<?php
			endforeach;
			?>



			<?php the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
