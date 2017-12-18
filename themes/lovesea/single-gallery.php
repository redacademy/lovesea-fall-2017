<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <header class=".page-header">
   <img src="<?php echo CFS()->get( 'single_wedding_hero_image' ); ?>">
    </header>
		<div class="tab-gallery-wrapper">
     
		 <ul id="back-to-top" class="wedding-tab-links">
				<li class="active"><a class="categories" href="<?php echo esc_url( get_permalink( get_page_by_title( 'wedding' ) ) ); ?>">galleries</a></li>
							
			</ul>
			</div><!-- .tab-gallery-wrapper -->

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
  				<div class="portrait-container" id="label2" class="label">
			
				<div id="label2" class="tab-portraits" class="label">
				
				<?php
			$loop = CFS()->get( 'portrait_album_' );
			if(isset($loop)):
				foreach ( $loop as $row ) :
			?> 
  
	<img class="portrait-photo" src="<?php echo $row['portrait_album_image']; ?>" alt="portrait">
		<?php
				endforeach;
			endif;
			?>

			 				</div> <!-- .portraits  -->
						</div> <!-- portrait container --> 
			 
  
			 <div id="label3" class="tab-details" class="label">

			 <?php
			$loop = CFS()->get( 'detail_album' );
			if(isset($loop)):
				foreach ( $loop as $row ) :
			?> 
  
	<img class="portrait-photo" src="<?php echo $row['detail_album_images']; ?>" alt="portrait">
		<?php
				endforeach;
			endif;
			?>


			    </div> <!-- .tab-details  -->

		</div>
		
		<div class="back-to-top">
			<a href="#back-to-top">back to top</a>
		</div>
    <div class="about-us-button-wrapper">
		<button class="about-us">
			<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ) ) ); ?>" rel="About Us">About us</a>
		</button> <!-- .about-us button -->
    </div>
	 

		<div class="nav-links">
	<?php previous_post_link('%link', '&lt; previous album'); ?> 
<?php next_post_link('%link', 'next album &gt;'); ?>
		</div>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
