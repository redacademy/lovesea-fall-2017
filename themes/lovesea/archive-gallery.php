<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>


<ul>
	<li>Weddings</li>
	<li>Portraits</li>
	<li>Details</li>
</ul>


			</header><!-- .page-header -->


			<div class="gallery-wrapper">
				<div id="weddings" class="weddings">
							<?php
							 while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content' );
							 endwhile;
							
							the_posts_navigation();
							
							else : 
							
							get_template_part( 'template-parts/content', 'none' ); 
				
						endif;
						 ?>
				</div><!-- .weddings  -->

				<div id="portraits" class="portraits"></div>
				<div id="details" class="details"></div>	
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
