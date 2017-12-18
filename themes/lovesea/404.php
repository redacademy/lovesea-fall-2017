<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
  * Template Name: 404

 * @package Lovesea_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero">
				<h1 class="page-title">404<span>Page Not Found</span></h1>
			</div>
			<section class="error-404 not-found">
				<header class="page-header">
				</header><!-- .page-header -->

				<div class="page-content">
					<div class="sorry">
						<p><?php echo esc_html( 'We&#039;re so sorry!' ); ?></p>
						<p><?php echo esc_html( 'Something must have gone wrong.' ); ?></p>
					</div>
					<p>Go back to</p>
					<button class="browse-weddings"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'weddings' ) ) ); ?>">Browse Weddings</a></button> 

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

					<?php
						// $archive_content = '<p>' . sprintf( esc_html( 'Try looking in the monthly archives. %1$s' ), convert_smilies( ':)' ) ) . '</p>';
						// the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
