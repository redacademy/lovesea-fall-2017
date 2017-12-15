<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<p> &copy; 2017 Lovesea Wedding Photography </p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		<!-- <script src="jquery.min.js"></script> -->


		
	<!-- masonry Javascript function -->
<?php	
	if ( ! function_exists( 'slug_masonry_init' )) :
function slug_masonry_init() { ?>
<script>
    //set the container that Masonry will be inside of in a var
    var container = document.querySelector('#masonry-loop');
    //create empty var msnry
    var msnry;
    // initialize Masonry after all images have loaded
    imagesLoaded( container, function() {
        msnry = new Masonry( container, {
            itemSelector: '.masonry-entry'
        });
    });
</script>

<?php }
//add to wp_footer
add_action( 'wp_footer', 'slug_masonry_init' );
endif; // ! slug_masonry_init exists
?>
	</body>
</html>
