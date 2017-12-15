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
		
		<div class="tab-gallery-wrapper">
     
		 <ul class="wedding-tab-links">
				<li class="active"><a class="categories"href="#label1"><?php
              $props = CFS()->get_field_info( 'wedding_tab_one' );
              echo $props['label'];
              ?></a></li>
				<li><a class="categories" href="#label2"><?php
              $props = CFS()->get_field_info( 'wedding_tab_two' );
              echo $props['label'];
              ?></a></li>
				<li><a class="categories" href="#label3"><?php
              $props = CFS()->get_field_info( 'wedding_tab_three' );
              echo $props['label'];?></a></li>
			</ul>
</div> <!-- .tab-gallery-wrapper -->

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<div class="wedding-album-gallery-pages">	
			<?php
			$loop = CFS()->get( 'wedding_albums_images' );
			if(isset($loop)):
				foreach ( $loop as $row ) :
			?> 

		<div class="wedding-gallery-image">

		<?php $popup_image = "popup-". get_the_post_thumbnail_url( $post->ID, 'large' ); ?>
		<a class="btn"  href="#" data-popup-open="<?php echo $popup_image?>">

			<img class="wedding-photo" src="<?php echo $row['wedding_album_single_image']; ?>" alt="">
			</a> <!-- .btn -->

			<div class="popup" data-popup="<?php echo $popup_image?>">
					<div class="popup-inner">
             <img class="popup-image" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>">
							
						 <a class="popup-close" data-popup-close="<?php echo $popup_image?>" href="#">x</a>
								</div> <!-- .popup-inner -->
							</div> <!-- .popup -->

			


		</div>	<!-- .wedding-gallery-image -->
		
		<?php
				endforeach;
			endif;
			?>


    </div>
		<button class="about-us">
			<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ) ) ); ?>" rel="About Us">About us</a>
		</button> <!-- .about-us button -->

   
		
			<?php the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
