<?php
/**
 * Template Name: Wedding Gallery
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<header class="page-header">
	
				<?php echo CFS()->get( 'wedding_hero_image' );	?>
	
			
		</header><!-- .page-header -->

		<ul class="wedding-tab-links">
				<li class="active"><a href="#galleries">galleries</a></li>
				<li><a href="#portraits">portraits</a></li>
				<li><a href="#details">details</a></li>
			</ul><!-- .tab-links -->
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			
			<div class="wedding-logo">
				<img class="wedding-page-logo" src=<?php echo get_template_directory_uri() . '/images/lovesea_logo_monogram.svg' ?>>
     </div> <!-- .wedding-logo -->
			<div class="gallery-wrapper">
				
				<ul id="weddings" class="weddings" class="active">
					<?php $wedding_gallery_args = array( 'posts_per_page' => 6, 
																							 'post_type' => 'gallery', 
																							 'order' => 'ASC' );
							
							$wedding_gallery = get_posts( $wedding_gallery_args );

							foreach ( $wedding_gallery as $post ) : setup_postdata( $post ); ?>

							
								<li class="wedding-album">
									<div><a href="<?php the_permalink(); ?>">
								  <?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' ); ?></div>
									<?php endif; ?>
									</a> <!-- .wedding-album -->
									
								<?php the_title('<p class="album-name">', '</p>'); ?>
				        <?php the_content('<p class="album-location">', '</p>'); ?>
							
</li>

						

							<?php 
							endforeach; 
							wp_reset_postdata();
						 ?>
				</ul><!-- .weddings  -->



				<div id="portraits" class="portraits">
     <?php
			$loop = CFS()->get( 'portraits_album' );
			foreach ( $loop as $row ) :
			?> 
			<div class="portrait-gallery-image">
				<img class="portrait-photo" src="<?php	echo $row['portrait_photo']; ?>" alt="">
		 </div>	<!-- .portrait-gallery-image -->
			<?php
			endforeach;
			?>
       </div> <!-- .portraits  -->

				<div id="details" class="details">
				<?php
			$loop = CFS()->get( 'details_album' );
			foreach ( $loop as $row ) :
			?> 
			<div class="detail-gallery-image">
				<img class="detail-photo" src="<?php	echo $row['detail_photo']; ?>" alt="">
		 </div>	<!-- .portrait-gallery-image -->
			<?php
			endforeach;
			?>
			</div>	<!-- .details  -->

			</div><!-- .gallery-wrapper -->
			
			<div class="wedding-logo">
				<img class="wedding-page-logo" src=<?php echo get_template_directory_uri() . '/images/lovesea_logo_monogram.svg' ?>>
		 </div> <!-- .wedding-logo -->
		 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>