(function($){

if($('.home').length){
  $(window).scroll(function() {
    if ($(document).scrollTop() > 3) {  
      $('.front-center-logo').addClass('shrink');
    } else {
      $('.front-center-logo').removeClass('shrink');  
    }
  });
}

//About Page Functionality

  $('.tabs .about-sub-pages a').on('click', function(e)  {
    var currentAttrValue = $(this).attr('href');

    // Show/Hide Tabs
    $('.tabs ' + currentAttrValue).show().siblings().hide();

    // Change/remove current tab to active
    $(this).parent('li').addClass('active').siblings().removeClass('active');

    e.preventDefault();
});


// wedding page pop up modal

//----- OPEN
  $('[data-popup-open]').on('click', function(e)  {
      var targeted_popup_class = jQuery(this).attr('data-popup-open');
      $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

      e.preventDefault();
  });

  //----- CLOSE
  $('[data-popup-close]').on('click', function(e)  {
      var targeted_popup_class = jQuery(this).attr('data-popup-close');
      $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

      e.preventDefault();
  });



$('.wedding-tab-links .categories').on('click', function(e)  {
  var currentAttrValue = $(this).attr('href');

  // Show/Hide Tabs
  $('.wedding-page-content ' + currentAttrValue).show().siblings().hide();

  // Change/remove current tab to active
  $(this).parent('li').addClass('active').siblings().removeClass('active');

  e.preventDefault();
});


// wedding page api

// $('.wedding-album .wedding-image').on('click', function(event) {
//   event.preventDefault();

//   $.ajax({
//     method: 'POST',
//     url: 'http://localhost:3000/lovesea/wp-json/wp/v2/gallery/',
// })
//  .done( function (event) {
    
//   console.log(event);

//  })
// })


})(jQuery);