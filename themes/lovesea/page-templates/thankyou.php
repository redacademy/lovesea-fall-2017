<?php

/** Template Name: Thank You */

get_header(); ?>
<div class="thank_you_hero_image">
      <img src= '<?php echo CFS()->get( 'thank_you_hero_image' );	?>'>
      </div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<div class='partners-grid'>
		<ul class='partners-logo-list'>

			<li><img src="<?php
				echo CFS()->get( 'partner_one_logo' ); ?>" alt="logo for the central westcoast forest society" class="partner-logo-one"></img>
			</li>
			<li><img src="<?php
				echo CFS()->get( 'partner_two_logo' ); ?>" alt="logo for sea to cedar" class="partner-logo-two"></img>
			</li>
			<li><img src="<?php
				echo CFS()->get( 'partner_three_logo' ); ?>" alt="logo for the raincoast education society" class="partner-logo-three"></img>
			</li>

			</ul>

			<ul class='partner-info-list'>
			<li> 
				<p><?php echo CFS()->get( 'partner_one_text' ); ?></p>
			</li>
			<li>
				<p><?php echo CFS()->get( 'partner_two_text' ); ?></p>
			</li>
			<li>
				<p><?php echo CFS()->get( 'partner_three_text' ); ?></p>
			</li>
			
			</ul>
								
	</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>