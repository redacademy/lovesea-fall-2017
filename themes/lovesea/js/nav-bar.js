(function ($) {
  // jQuery(document).ready(function() {
  //   jQuery('.toggle-nav').click(function(e) {
  //     jQuery(this).toggleClass('menu-items');
  //     jQuery('.menu ul').toggleClass('menu-items');

  //     e.preventDefault();
  //   });
  // });

    
  

    
    // $('#toggle-menu-button').on('blur', function (){
    //   $('.menulist').toggle()
    // });
  

    $('.toggle-menu-button').on('click', function () {
      $('.menu-list').toggleClass('toggle-nav');
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