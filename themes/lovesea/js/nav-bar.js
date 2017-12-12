(function ($) {
  // jQuery(document).ready(function() {
  //   jQuery('.toggle-nav').click(function(e) {
  //     jQuery(this).toggleClass('menu-items');
  //     jQuery('.menu ul').toggleClass('menu-items');

  //     e.preventDefault();
  //   });
  // });


  // $('.mobile-menu #toggle-mobile-menu').hide();
  
  
  //   $('#toggle-mobile-menu').click(function() {
  //     $('#mobile-menu-items').toggle( function(){

  //     });
  //   });
  //   $('#toggle-mobile-menu').click(function() {
  //       $('.front-center-logo').addClass('shrink');

  //       $('.front-center-logo').removeClass('shrink');
  //     })

    
    // $('#search-field').on('blur', function (){
    //   $('.search-field').toggle()
    // });
  

    $('.burger').click(function () {
      $(this).toggleClass('open');
    });

})(jQuery);