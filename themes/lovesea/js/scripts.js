(function($){

if($('.home').length){
  $(window).scroll(function() {
    if ($(document).scrollTop() > 3) {  
      $('.front-center-logo').addClass('shrink');
      $('.menu-list').addClass('fade-background');
    } else {
      $('.front-center-logo').removeClass('shrink');  
      $('.menu-list').removeClass('fade-background');
    }
  });
}

$(window).scroll(function() {
  if ($(document).scrollTop() > 3) {  
    $('.menu-list').addClass('fade-background');
  } else {
    $('.menu-list').removeClass('fade-background');
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
  $('[data-popup-open]').on('click', function(e)  {
      var targetedPopupClass = jQuery(this).attr('data-popup-open');
      $('[data-popup="' + targetedPopupClass + '"]').fadeIn(350);

      e.preventDefault();
  });

  //----- CLOSE
  $('[data-popup-close]').on('click', function(e)  {
      var targetedPopupClass = jQuery(this).attr('data-popup-close');
      $('[data-popup="' + targetedPopupClass + '"]').fadeOut(350);

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

// tab links on single-album pages
$('.wedding-tab-links .categories').on('click', function(e)  {
  var currentAttrValue = $(this).attr('href');

  // Show/Hide Tabs
  $('.single-album-page-content ' + currentAttrValue).show().siblings().hide();

  // Change/remove current tab to active
  $(this).parent('li').addClass('active').siblings().removeClass('active');

  e.preventDefault();
});

$(document).ready(function(){
  $('.lazy').unveil();  
});

})(jQuery);