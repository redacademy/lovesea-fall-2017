(function($){



// jQuery(document).ready(function($) {
//   jQuery('.toggle-nav').click(function(e) {
//     jQuery(this).toggleClass('.active');
//     jQuery('.menu ul').toggleClass('.active');

//     e.preventDefault();
//   });

$(window).scroll(function() {
  if ($(document).scrollTop() > 3) {
    $('.front-center-logo').addClass('shrink');
  } else {
    $('.front-center-logo').removeClass('shrink');
  }
});


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
  $('.wedding-photo').on('click', function(e)  {
      var popup_image = jQuery(this).attr('data-popup-open');
      $('[data-popup="' + popup_image + '"]').fadeIn(350);

      e.preventDefault();
  });

  //----- CLOSE
  $('[data-popup-close]').on('click', function(e)  {
      var targeted_popup_class = jQuery(this).attr('data-popup-close');
      $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

      e.preventDefault();
  });




$('.gallery-modal-link').on('click', function(event){
  event.preventDefault();

  var imageUrl = $(this).data("image-url");

  console.log(imageUrl);

});




})(jQuery);