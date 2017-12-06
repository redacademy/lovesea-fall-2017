<?php
/** Template Name: About Page */

get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header custom-hero">
          <div class ="container">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </div>
        </header>

        <div class="container">
          <div class="entry-content">
						<h3><?php echo CFS()->get( 'who_we_are' ); ?></h3>
						<h3><?php echo CFS()->get( 'what_we_do' ); ?></h3>
						<h3><?php echo CFS()->get( 'what_to_expect' ); ?></h3>
          </div>
        </div>
      </article>
    </main>
  </div>
<?php get_footer(); ?>