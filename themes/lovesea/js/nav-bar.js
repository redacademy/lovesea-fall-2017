(function (jQuery) {
  jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
      jQuery(this).toggleClass('menu-items');
      jQuery('.menu ul').toggleClass('menu-items');

      e.preventDefault();
    });
  });


  // $('.main-navigation #search-field').hide();
  
  
  //   $('#search-submit').click(function() {
  //     $('#search-field').toggle( function(){
  //     $('#search-field').focus();
  //     });
  //   });
  
    
  //   $('#search-field').on('blur', function (){
  //     $('.search-field').toggle()
  //   });
  



})(jQuery);