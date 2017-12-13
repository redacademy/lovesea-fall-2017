(function ($) {
  // jQuery(document).ready(function() {
  //   jQuery('.toggle-nav').click(function(e) {
  //     jQuery(this).toggleClass('menu-items');
  //     jQuery('.menu ul').toggleClass('menu-items');

  //     e.preventDefault();
  //   });
  // });

    
  

    
    // $('#search-field').on('blur', function (){
    //   $('.search-field').toggle()
    // });
  

    $('.toggle-mobile-menu').click(function () {
      $('.fixed-menu').toggleClass('toggle-nav');
    });

    // $('.burger').click(function () {
    //   $(this).toggleClass('open');
    // });

    // $( '.toggle')

    //   if ($(document).scrollTop() > 3) {
    //     $('.front-center-logo').addClass('shrink');
    //   } else {
    //     $('.front-center-logo').removeClass('shrink');
    //   }
    // });

    // $('.hamburger').on('click', function () {
      
    //   $('.menu').toggleClass('open');
      
    //   });
      
    //   $( '.menu a' ).on("click", function(){
    //   $('.menu').hide();
    //   });
    
})(jQuery);