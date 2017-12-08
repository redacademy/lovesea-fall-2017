<?php
/**
 * Template Name: Wedding Gallery
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<header class="page-header">
							
			
		</header><!-- .page-header -->

		<ul class="wedding-tab-links">
				<li class="active"><a href="#galleries">galleries</a></li>
				<li><a href="#portraits">portraits</a></li>
				<li><a href="#details">details</a></li>
			</ul><!-- .tab-links -->

			<div class="gallery-wrapper">
				<ul id="weddings" class="weddings" class="active">
					<?php $wedding_gallery_args = array( 'posts_per_page' => 6, 
																							 'post_type' => 'gallery', 
																							 'order' => 'ASC' );
							
							$wedding_gallery = get_posts( $wedding_gallery_args );

							foreach ( $wedding_gallery as $post ) : setup_postdata( $post ); ?>

							
								<li class="wedding-album">
									<a href="<?php the_permalink(); ?>">
								
								
								
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'large' ); ?>
									<?php endif; ?>
									<?php the_title(); ?>
									<?php the_content();?>
								</a>
</li>

						

							<?php 
							endforeach; 
							wp_reset_postdata();
						 ?>
				</ul><!-- .weddings  -->

				<div id="portraits" class="portraits"></div>
				<div id="details" class="details"></div>	
			</div><!-- .gallery-wrapper -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>