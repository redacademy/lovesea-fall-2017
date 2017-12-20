<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <header class="page-header">
		</header>

		<div id="back-to-top" class="tab-gallery-wrapper">
     
		 <ul class="wedding-tab-links">
			 
				<li class="active"><a class="categories" href="<?php echo esc_url( get_permalink( get_page_by_title( 'weddings' ) ) ); ?>"><?php $props = CFS()->get_field_info( 'wedding_tab_one' ); echo $props['label'];?></a></li>
				<li><a class="categories" href="#label2"><?php
              $props = CFS()->get_field_info( 'wedding_tab_two', 74 );
              echo $props['label'];
              ?></a></li>
				<li><a class="categories" href="#label3"><?php
              $props = CFS()->get_field_info( 'wedding_tab_three', 74 );
              echo $props['label'];?></a></li>
							
			</ul> <!-- .wedding-tab-links -->
			
    <div class="single-album-page-content">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			
		
   
		<div id="label1" class="wedding-album-gallery-pages" class="active">	
			<?php
			$loop = CFS()->get( 'wedding_albums_images' );
			if(isset($loop)):
				foreach ( $loop as $row ) :
			?> 

		<div class="wedding-gallery-image">


		<a class="btn"  href="#" data-popup-open="<?php echo $row['wedding_album_single_image']; ?>">
			<img class="wedding-photo lazy" src="https://i.stack.imgur.com/PpGz3.png" data-src="<?php echo $row['wedding_album_single_image']; ?>" alt="">
		</a> <!-- .btn -->

			<div class="popup" data-popup="<?php echo $row['wedding_album_single_image']; ?>">
					<div class="popup-inner">
						 <img class="popup-image lazy" src="https://i.stack.imgur.com/PpGz3.png" data-src="<?php echo $row['wedding_album_single_image']; ?>">
							
						 <a class="popup-close" data-popup-close="<?php echo $row['wedding_album_single_image']; ?>" href="#">x</a>
								</div> <!-- .popup-inner -->
							</div> <!-- .popup -->


		</div>	<!-- .wedding-gallery-image -->
		
		<?php
				endforeach;
			endif;
			?>

		</div>


<div class="portrait-container" id="label2" class="label">
			
				<div id="label2" class="tab-portraits" class="label">

<?php
			$loop = CFS()->get( 'portrait_album_', 74 );
			if(isset($loop)):
				foreach ( $loop as $row ) :

?> 

	<a class="btn"  href="#" data-popup-open="<?php echo $row['portrait_album_image']; ?>">
			<img class="wedding-photo lazy" src="https://i.stack.imgur.com/PpGz3.png" data-src="<?php echo $row['portrait_album_image']; ?>" alt="">
		</a> <!-- .btn -->

			<div class="popup" data-popup="<?php echo $row['portrait_album_image']; ?>">
					<div class="popup-inner">
             <img class="popup-image lazy" src="https://i.stack.imgur.com/PpGz3.png" data-src="<?php echo $row['portrait_album_image']; ?>">
							
						 <a class="popup-close" data-popup-close="<?php echo $row['portrait_album_image']; ?>" href="#">x</a>
								</div> <!-- .popup-inner -->
							</div> <!-- .popup -->
	
		<?php
				endforeach;
			endif;
			?>


 							</div> <!-- .portraits  -->
						</div> <!-- portrait container --> 



<div id="label3" class="tab-details" class="label">

<?php
			$loop = CFS()->get( 'detail_album', 74 );
			if(isset($loop)):
				foreach ( $loop as $row ) :
			?> 
  
	<a class="btn"  href="#" data-popup-open="<?php echo $row['detail_album_images']; ?>">
			<img class="wedding-photo" src="<?php echo $row['detail_album_images']; ?>" alt="">
		</a> <!-- .btn -->

			<div class="popup" data-popup="<?php echo $row['detail_album_images']; ?>">
					<div class="popup-inner">
             <img class="popup-image" src="<?php echo $row['detail_album_images']; ?>">
							
						 <a class="popup-close" data-popup-close="<?php echo $row['detail_album_images']; ?>" href="#">x</a>
								</div> <!-- .popup-inner -->
							</div> <!-- .popup -->
		<?php
				endforeach;
			endif;
			?>

				</div> <!-- .tab-details  -->	
		  </div> <!-- .single-album-page-content -->
		</div><!-- .tab-gallery-wrapper -->

		<div class="wedding-logo">
				<img class="wedding-page-logo" src=<?php echo get_template_directory_uri() . '/images/lovesea_logo_monogram.svg' ?>>
		 </div> <!-- .wedding-logo -->

		<div class="back-to-top">
			<a href="#back-to-top">back to top</a>
		</div>
    <div class="about-us-button-wrapper">
		<div class="about-us">
			<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ) ) ); ?>" rel="About Us">About us</a>
</div> <!-- .about-us button -->
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
