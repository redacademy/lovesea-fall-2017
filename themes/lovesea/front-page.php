<?php
/**
 * The template for displaying all pages.
 * Template Name: front-page
 *
 * @package lovesea
 */

get_header(); ?>
<div class="hero">
	
	<img class="front-center-logo"  src="<?php echo get_template_directory_uri() . '/images/lovesea_logo_monogram.svg' ?>">
	<img class="front-center-text"  src="<?php echo get_template_directory_uri() . '/images/lovesea-logo-text.svg' ?>">
	<div class="scroll-arrow">
					<button class="scroll"><h1><a href="#storyteller">╲╱</a></h1></button>
							</div>

</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- <img class="front-center-logo" src='/images/Lovesea_logo_text.svg' alt="cool" > -->

		<?php if ( has_post_thumbnail() && is_front_page() ) : ?>
   		<?php the_post_thumbnail( 'large' ); ?>
   	<?php endif; ?>


		<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( red_starter_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php echo esc_html( 'Most Used Categories' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>





			<?php while ( have_posts() ) : the_post(); ?>



				<section class="introduction-container">
				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<div id="storyteller" class="storyteller">


									<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' ); ?>
									<?php endif; ?>

									<?php
									$loop = CFS()->get( 'we_are_story_tellers' );

									// d($loop);

									foreach ( $loop as $row ) :
									?> 
									<div class="we-are-story-tellers"><img class="storytellers-image" src="<?php	echo $row['we_are_story_tellers_image']; ?>" alt="">

									<?php echo $row['we_are_story_tellers_title']; ?>
									
								</div>	<!-- .wedding-gallery-image -->
								<?php
								endforeach;
									?>



						<h1>We are story tellers.</h1>
						<p>With a photojournalistic style, we capture both the story and romance of your wedding.</p>
						<button class="browse-weddings"><a href = "<?php echo esc_url(get_permalink());?>">Browse Weddings</a></button> 
						
					</div>

					<div class="observer">
						<h1>We are observers.</h1>
						<p>We work in the background, capturing even the tiniest of details, to tell your story.</p>
						<button class="about-us"><a href = "<?php echo esc_url(get_permalink());?>">About Us</a></button>
					</div>

					<div class="friend">
						<h1>We are your friend.</h1>
						<p>We get to know you and your story to perfectly document what’s important to you.</p>
						<button class="connect"><a href = "http://localhost:3000/lovesea/connect/">Let's Talk</a></button>
					</div>


					<div class="instagram-carousel-container"> 
						<div class="follow-instagram-header">
							<h2 class="follow-instagram">follow along on <span class="instagram"> Instagram</span> </h2>
						</div>
						<div class="owl-carousel">
		
						</div>


					</div>
				</section>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar();?>

<?php get_footer(); ?>
