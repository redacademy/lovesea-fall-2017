<?php
/**
 * Template Name: Wedding Gallery
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
	<header class="page-header">

	</header><!-- .page-header -->

	
	
<div id="back-to-top" class="tab-gallery-wrapper">
     
		 <ul class="wedding-tab-links">
				<li class="active"><a class="categories"href="#label1">
              galleries</a></li>
				<li><a class="categories" href="#label2"><?php
              $props = CFS()->get_field_info( 'wedding_tab_two' );
              echo $props['label'];
              ?></a></li>
				<li><a class="categories" href="#label3"><?php
              $props = CFS()->get_field_info( 'wedding_tab_three' );
              echo $props['label'];?></a></li>
			</ul><!-- .tab-links -->
		
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 
		 
		 <div class="wedding-page-content">
		 
				<ul id="label1" class="weddings" class="label" class="active">
					<?php $wedding_gallery_args = array( 'posts_per_page' => 6, 
																							 'post_type' => 'gallery', 
																							 'order' => 'ASC' );
							
							$wedding_gallery = get_posts( $wedding_gallery_args );

							foreach ( $wedding_gallery as $post ) : setup_postdata( $post );
							
							?>

							<li class="wedding-album">
									<div class="image-gradient">
										<a class="wedding-image" href="<?php the_permalink(); ?>">
								  <?php if ( has_post_thumbnail($post->ID) ) : ?>
									<?php the_post_thumbnail( $post->ID, 'large' ); ?>
									<?php endif; ?>
									
								<h2 class="album-name"><?php echo $post->post_title; ?></h2>
								<?php echo the_content('<p class="album-location">', '</p>'); ?>
								
		
								</a> 
							</div>
							</li> <!-- .wedding-album -->
            <?php 
							endforeach; 
							wp_reset_postdata();
						 ?>
				</ul><!-- .weddings  -->
			 
				<div class="portrait-container" id="label2" class="label">
			
				<div id="label2" class="tab-portraits" class="label">
				
				<?php
			$loop = CFS()->get( 'portrait_album_' );
			if(isset($loop)):
				foreach ( $loop as $row ) :
			?> 
	
	<a class="btn"  href="#" data-popup-open="<?php echo $row['portrait_album_image']; ?>">
			<img class="wedding-photo" src="<?php echo $row['portrait_album_image']; ?>" alt="">
		</a> <!-- .btn -->

			<div class="popup" data-popup="<?php echo $row['portrait_album_image']; ?>">
					<div class="popup-inner">
             <img class="popup-image" src="<?php echo $row['portrait_album_image']; ?>">
							
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
			$loop = CFS()->get( 'detail_album' );
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
				</div> <!-- .wedding-page-content -->
			</div><!-- .tab-gallery-wrapper -->
			
	<div class="back-to-top">
		<a href="#back-to-top">back to top</a>
	</div>

	<div class="wedding-logo">
				<img class="wedding-page-logo" src=<?php echo get_template_directory_uri() . '/images/lovesea_logo_monogram.svg' ?>>
		 </div> <!-- .wedding-logo -->

	<div class="about-us-button-wrapper">
			<div class="about-us">
			<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ) ) ); ?>" rel="About Us">About us</a>
		</div> <!-- .about-us button -->
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>