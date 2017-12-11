<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="single-album-hero-image"><?php echo CFS()->get( 'single_wedding_hero_image' ); ?></div>
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<div class="wedding-album-gallery-pages">	
			<?php
			$loop = CFS()->get( 'wedding_albums_images' );
			foreach ( $loop as $row ) :
			?> 
			<div class="wedding-gallery-image"><img class="wedding-photo" src="<?php	echo $row['wedding_album_single_image']; ?>" alt="">
		 </div>	<!-- .wedding-gallery-image -->
			<?php
			endforeach;
			?>
    </div>
		<button class="about-us">
			<a href ="<?php get_permalink(); ?>" rel="About Us">About us</a>
		</button>
   <!-- .about-us button -->
		
			<?php the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
