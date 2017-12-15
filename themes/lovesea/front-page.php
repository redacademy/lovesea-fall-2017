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
							));
						?>
					</ul>
				</div><!-- .widget -->
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

			<section class="introduction-container">
				<?php 
				// the_widget( 'WP_Widget_Recent_Posts' ); 
				?>
<!-- _____storyteller_______________ -->

				<ul id="storyteller" class="storyteller">

						<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

						<?php 
							$loop = CFS()->get( 'we_are_story_tellers' ); 
							foreach ( $loop as $row ) :
						?>  
						<li class="we-are-story-tellers">

							<?php 
								$story_img = $row['we_are_story_tellers_image']; 
								if(!empty($story_img)): 
							?>

							<div class="story-image">
								<img class="storytellers-image" src="<?php	echo $story_img; ?>" alt="">
							</div>

							<?php endif; ?>

							<div class="storytellers-text">
								<h1>	<?php echo $row['we_are_story_tellers_title']; ?> </h1>
								<?php echo $row['we_are_story_tellers_link']; ?> 

								<button class="browse-weddings"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'weddings' ) ) ); ?>">
								<?php echo $row['we_are_story_tellers_link']; ?>Browse Weddings</a></button> 
								<?php endforeach; ?>

							</div>
						</li>
					</ul>

<!-- _________observer______________ -->
					<ul class="observer">

						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>

							<?php 
								$loop = CFS()->get( 'we_are_observers' ); 
								foreach ( $loop as $row ) : 
							?> 
							<li class="we-are-observer">

								<?php 
									$observer_img = $row['we_are_observers_image']; 
									if(!empty($observer_img)): 
								?>

								<div class="observer-image">
									<img class="front-observer-image" src="<?php	echo $observer_img; ?>" alt="">
								</div>

								<?php endif; ?>

								<div class="observer-text">
									<h1 class="observer-title"><?php echo $row['we_are_observers_title']; ?></h1>
									<?php echo $row['we_are_observers_link']; ?> 

									<button class="about-us"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about' ) ) ); ?>">
									<?php echo $row['we_are_observers_link']; ?>About Us</a></button> 
									<?php endforeach; ?>
								</div>
							</li>
						</ul> 

<!-- ____________friend_______________ -->
						<ul class="friend">

							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>

								<?php 
									$loop = CFS()->get( 'we_are_your_friend' ); 
									foreach ( $loop as $row ) : 
								?> 
								<li class="we-are-your-friend">

								<?php 
									$observer_img = $row['we_are_your_friend_image']; 
									if(!empty($observer_img)): 
								?>

								<div class="friend-image">
									<img class="friend-image" src="<?php echo $observer_img; ?>" alt="">
								</div>

								<?php endif; ?>

								<div class="friend-text">
									<h1 class="friend-title"><?php echo $row['we_are_your_friend_title']; ?></h1>
									<?php echo $row['we_are_your_friend_link']; ?> 

									<button class="connect"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'connect' ) ) ); ?>">
									<?php echo $row['we_are_your_friend_link']; ?>Let's Talk</a></button> 
									<?php endforeach; ?>

								</div>
							</li>
						</ul>


<!-- _________carousel_________ -->
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
