<?php
/**
 * Template Name: Wedding Gallery
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<header class="page-header">
							
				<ul>
					<li>Weddings</li>
					<li>Portraits</li>
					<li>Details</li>
				</ul>

			</header><!-- .page-header -->


			<div class="gallery-wrapper">
				<div id="weddings" class="weddings">
							<?php
							$wedding_gallery_args = array( 'posts_per_page' => 5, 'post_type' => 'gallery' );
							
							$wedding_gallery = get_posts( $wedding_gallery_args );
							foreach ( $wedding_gallery as $post ) : setup_postdata( $post ); ?>

							
								<li>
									<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								
								
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'large' ); ?>
									<?php endif; ?>
								
								</a>
								</li>

						

							<?php 
							endforeach; 
							wp_reset_postdata();
						 ?>
				</div><!-- .weddings  -->

				<div id="portraits" class="portraits"></div>
				<div id="details" class="details"></div>	
			</div><!-- .gallery-wrapper -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>