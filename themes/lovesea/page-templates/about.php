<?php
/** Template Name: about */

get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header custom-hero">
        </header>
        <div class="container">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          <div class="entry-content">
          <div class='tabs'>
            <ul class="about-sub-pages">
              <li><a href='#tab1'><?php
              $props = CFS()->get_field_info( 'who_we_are' );
              echo $props['label'];
              ?></a></li>
               <li><a href='#tab2'><?php
              $props = CFS()->get_field_info( 'what_we_do' );
              echo $props['label'];
              ?></a></li>
               <li><a href='#tab3'><?php
              $props = CFS()->get_field_info( 'what_to_expect' );
              echo $props['label'];
              ?></a></li>
            </ul>
            <div class="tab-content">
              <div id='tab1' class="who-we-are-wrapper">
                <div class="who-are-we-image"><img src="<?php
                  echo CFS()->get( 'who_we_are_image' ); 
                  ?>" alt="image of a man and woman walking" class="who-we-are-image"></img>
                </div>
                <div class="who-we-are-text">
                  <?php 
                  echo CFS()->get( 'who_we_are_text' ); 
                  ?>
                </div>
              </div>

            <div id="tab2" class="tab">
              <p>Tab #2 content goes here!</p>
              <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac.</p>
            </div>
   
          <div id="tab3" class="tab">
              <p>Tab #3 content goes here!</p>
              <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac.</p>
          </div>
  
          </div>
          </div>
        </div>
      </article>
    </main>
  </div>
<?php get_footer(); ?>