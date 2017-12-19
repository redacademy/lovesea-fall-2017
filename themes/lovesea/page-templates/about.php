<?php
/** Template Name: about */

get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <header class="entry-header custom-hero">
      <img src= '<?php echo CFS()->get( 'about_header_image' );	?>'>
      </header>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
                <div class="who-are-we-image">
                <img src="<?php
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

            <div class="what-we-do-title">
                <?php echo CFS()->get( 'what_we_do_title' ); ?>
              </div>

              <div class="what-we-do-wrapper">
              <div class="block-one-wrapper">
              <div class="what-we-do-image-one"><img src="<?php
              echo CFS()->get( 'what_we_do_image_one' ); 
              ?>" alt="girl blowing confetti" class="what-we-do-image"></img>
              </div>

              <div class="what-we-do-text-one">
              <?php echo CFS()->get( 'what_we_do_text_one' ); ?>
              </div>
              </div>

              <div class="block-two-wrapper">
              <div class="what-we-do-image-two"><img src="<?php
              echo CFS()->get( 'what_we_do_image_two' ); 
              ?>" alt="bridesmaids approach a wedding" class="what-we-do-image-two"></img>
              </div>

              <div class="what-we-do-text-two">
              <?php echo CFS()->get( 'what_we_do_text_two' ); ?>
              </div>
              </div>

              <div class="block-one-wrapper">
              <div class="what-we-do-image-three"><img src="<?php
              echo CFS()->get( 'what_we_do_image_three' ); 
              ?>" alt="Newly married couple standing on a dock, the girl is holding a canoe." class="what-we-do-image-three"></img>
              </div>

              <div class="what-we-do-text-three">
              <?php echo CFS()->get( 'what_we_do_text_three' ); ?>
              </div>
              </div>

              <div class="block-two-wrapper">
              <div class="what-we-do-image-four"><img src="<?php
              echo CFS()->get( 'what_we_do_image_four' ); 
              ?>" alt="a wooden just married sign rests on the bow of a canoe." class="what-we-do-image-four"></img>
              </div>

              <div class="what-we-do-text-four">
              <?php echo CFS()->get( 'what_we_do_text_four' ); ?>
              </div>
              </div>
            </div>
          </div>
   
          <div id="tab3" class="tab">
            <div class="accordion">
              <div class="accordion-section">
                
                <a class="accordion-section-title" href="#accordion-1">Our Philosophy</a>
        
                <div id="accordion-1" class="accordion-section-content">
                  <?php echo CFS()->get( 'philosophy' ); ?>
                </div><!--end .accordion-section-content-->
              </div><!--end .accordion-section-->

              <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-2">FAQ</a>
        
                <div id="accordion-2" class="accordion-section-content">
                  <?php echo CFS()->get( 'frequently_asked_questions' ); ?>
                </div><!--end .accordion-section-content-->
              </div><!--end .accordion-section-->

              <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-3">Testimonials</a>
        
                <div id="accordion-3" class="accordion-section-content">
                  <?php echo CFS()->get( 'testimonials' ); ?>
                </div><!--end .accordion-section-content-->
              </div><!--end .accordion-section-->
            </div><!--end .accordion-->

            <div class="faq-desktop">
              <div class="about-section-one">
              <h2 class='about-section-title'><?php
              $props = CFS()->get_field_info( 'philosophy' );
              echo $props['label'];
              ?></h2>
              <?php echo CFS()->get( 'philosophy' ); ?>
              </div>
              <div class="about-section-two">
              <h2 class='about-section-title'><?php
              $props = CFS()->get_field_info( 'frequently_asked_questions' );
              echo $props['label'];
              ?></h2>
              <?php echo CFS()->get( 'frequently_asked_questions' ); ?>
              </div>
              <div class="about-section-three">
              <h2 class='about-section-title'><?php
              $props = CFS()->get_field_info( 'testimonials' );
              echo $props['label'];
              ?></h2>
              <?php echo CFS()->get( 'testimonials' ); ?>
              </div>
            </div><!--end .faq-desktop-->
          </div>
  
          </div>
          </div>
        </div>
      </article>
      <div class="website-logo">
        <img class="monogram-logo" src=<?php echo get_template_directory_uri() . '/images/lovesea_logo_monogram.svg' ?>>
        </div> <!-- .wedding-logo -->
        <div class="contact-us-button-wrapper">
          <div class="about-contact-us">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'connect' ) ) ); ?>">Let's Talk</a>
          </div> 
        </div>
    </main>
  </div>
<?php get_footer(); ?>