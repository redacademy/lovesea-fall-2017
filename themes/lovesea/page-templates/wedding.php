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

							foreach ( $wedding_gallery as $post ) : setup_postdata( $post );
							// d($post);
							?>

							<li class="wedding-album">
									<div>
										<a href="<?php the_permalink(); ?>">
								  <?php if ( has_post_thumbnail($post->ID) ) : ?>
									<?php the_post_thumbnail( $post->ID, 'large' ); ?>
									<?php endif; ?>
									
								<h2><?php echo $post->post_title; ?></h2>
								<?php
								// the_title('<p class="album-name">', '</p>'); 
								?>
								<?php the_content('<p class="album-location">', '</p>'); ?>
								</a> <!-- .wedding-album -->
							</div>
							</li>
            <?php 
							endforeach; 
							wp_reset_postdata();
						 ?>
				</ul><!-- .weddings  -->



				<div id="portraits" class="portraits">
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

<h1>Portrait</h1>
<?php	foreach ( $portrait_gallery as $post ) : setup_postdata( $post ); ?>

						<a class="gallery-modal-link" href="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>" 
							 data-image-url="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>">

							<div class="portrait-album">
									<?php if ( has_post_thumbnail() ) :
									
									

									the_post_thumbnail( $post->ID, 'large' );
									
									endif; ?>
							
						
						</div> <!-- .portrait-album -->
							</a>

						 <?php
							endforeach; 
							wp_reset_postdata();
						 ?>
       </div> <!-- .portraits  -->

			 <div id="details" class="details">
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

<h1>details</h1>
<?php	foreach ( $portrait_gallery as $post ) : setup_postdata( $post ); ?>

						<a class="gallery-modal-link" href="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>" 
							 data-image-url="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>">

							<div class="detail-album">
									<?php if ( has_post_thumbnail() ) :
									
									

									the_post_thumbnail( $post->ID, 'large' );
									
									endif; ?>
							
						
						</div> <!-- .details-album -->
							</a>

						 <?php
							endforeach; 
							wp_reset_postdata();
						 ?>
			 </div> <!-- .details  -->
			 
			</div><!-- .gallery-wrapper -->
			
			<div class="wedding-logo">
				<img class="wedding-page-logo" src=<?php echo get_template_directory_uri() . '/images/lovesea_logo_monogram.svg' ?>>
		 </div> <!-- .wedding-logo -->
		 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>