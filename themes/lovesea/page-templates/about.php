<?php
/** Template Name: about */

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
            <div class="who-we-are-tab">

            <h2><?php
              $props = CFS()->get_field_info( 'who_we_are' );
              echo $props['label'];
              ?></h2>
              <div class="who-we-are-wrapper">
                <img src="<?php
                echo CFS()->get( 'who_we_are_image' ); 
                ?>" alt="" class="who-we-are-image"></img>
                <div class="who-we-are-text">
                <?php 
                echo CFS()->get( 'who_we_are_text' ); 
                ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
    </main>
  </div>
<?php get_footer(); ?>