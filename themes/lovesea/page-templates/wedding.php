<?php
/**
 * Template Name: Wedding Gallery
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
	<header class="page-header">
		<?php echo CFS()->get( 'wedding_hero_image' );?>
	</header><!-- .page-header -->

			
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
			</ul><!-- .tab-links -->
		
			
			<div class="wedding-logo">
				<img class="wedding-page-logo" src=<?php echo get_template_directory_uri() . '/images/lovesea_logo_monogram.svg' ?>>
     </div> <!-- .wedding-logo -->
		 
		 <div class="wedding-page-content">
		 <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 
				<ul id="label1" class="weddings" class="label" class="active">
					<?php $wedding_gallery_args = array( 'posts_per_page' => 6, 
																							 'post_type' => 'gallery', 
																							 'order' => 'ASC' );
							
							$wedding_gallery = get_posts( $wedding_gallery_args );

							foreach ( $wedding_gallery as $post ) : setup_postdata( $post );
							// d($post);
							?>

							<li class="wedding-album">
									<div>
										<a class="wedding-image" href="<?php the_permalink(); ?>">
								  <?php if ( has_post_thumbnail($post->ID) ) : ?>
									<?php the_post_thumbnail( $post->ID, 'large' ); ?>
									<?php endif; ?>
									
								<h2><?php echo $post->post_title; ?></h2>
								<?php
								// the_title('<p class="album-name">', '</p>'); 
								?>
								<?php the_content('<p class="album-location">', '</p>'); ?>
								</a> 
							</div>
							</li> <!-- .wedding-album -->
            <?php 
							endforeach; 
							wp_reset_postdata();
						 ?>
				</ul><!-- .weddings  -->

<!-- TODO tabs -->
       
				<div id="label2" class="tab-portraits" class="label">
				<div><h1 class="tab-section-title">Portrait</h1></div>
				 <?php 
				 
				 $portrait_gallery_args = array(
					 'post_type' => 'gallery',
					'tax_query' => array(
							array(
								'taxonomy' => 'gallery-type',
								'field' => 'slug',
								'terms' => 'portrait'
							)
							)
						);

					$portrait_gallery = get_posts( $portrait_gallery_args );?>


<?php	foreach ( $portrait_gallery as $post ) : setup_postdata( $post ); ?>
<?php $popup_image = "popup-". get_the_ID(); ?>

<a class="btn"  href="#" data-popup-open="<?php echo $popup_image?>">
			
	<div class="portrait-album">
		<?php if ( has_post_thumbnail() ) :
			the_post_thumbnail( $post->ID, 'large' );
		endif; ?>
	</div> <!-- .portrait-album -->
</a> <!-- .btn-->
					<div class="popup" data-popup="<?php echo $popup_image?>">
					<div class="popup-inner">
             <img class="popup-image" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>">
							<a class="popup-close" data-popup-close="<?php echo $popup_image?>" href="#">x</a>
								</div>
							</div>

						 <?php
							endforeach; 
							wp_reset_postdata();
						 ?>
		<button class="about-us">
			<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ) ) ); ?>" rel="About Us">About us</a>
		</button> <!-- .about-us button -->

			 </div> <!-- .portraits  -->
			 
			 <!-- TODO add TABS  -->
       
			 <div id="label3" class="tab-details" class="label">
			 <h1 class="tab-section-title">details</h1>
				 <?php 
				 
				 $portrait_gallery_args = array(
					 'post_type' => 'gallery',
					'tax_query' => array(
							array(
								'taxonomy' => 'gallery-type',
								'field' => 'slug',
								'terms' => 'details'
							)
							)
						);

					$portrait_gallery = get_posts( $portrait_gallery_args );?>


<?php	foreach ( $portrait_gallery as $post ) : setup_postdata( $post ); ?>


<a class="gallery-modal-link"  href="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>" 
							 data-image-url="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>">
							
							 <div class="detail-album">
									<?php if ( has_post_thumbnail() ) :
									the_post_thumbnail( $post->ID, 'large' );
									endif; ?>
						  </div> <!-- .details-album -->
							</a> <!-- .gallery-modal-link -->

<?php
		endforeach; 
		wp_reset_postdata(); ?>

		<button class="about-us">
			<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ) ) ); ?>" rel="About Us">About us</a>
		</button> <!-- .about-us button -->

			    </div> <!-- .tab-details  -->
				</div> <!-- .wedding-page-content -->
			</div><!-- .tab-gallery-wrapper -->
			
			<div class="wedding-logo">
				<img class="wedding-page-logo" src=<?php echo get_template_directory_uri() . '/images/lovesea_logo_monogram.svg' ?>>
		 </div> <!-- .wedding-logo -->
		 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>