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

// OPEN
$('.gallery-modal-link').on('click', function(event){
  event.preventDefault();

  var imageUrl = $(this).data('image-url');

  $('[data-image-url="' + imageUrl + '"]').addClass("popup popup-inner");
   
});

// CLOSE


$('.wedding-tab-links .categories').on('click', function(e)  {
  var currentAttrValue = $(this).attr('href');

  // Show/Hide Tabs
  $('.wedding-page-content ' + currentAttrValue).show().siblings().hide();

  // Change/remove current tab to active
  $(this).parent('li').addClass('active').siblings().removeClass('active');

  e.preventDefault();
});


// wedding page api

$('.wedding-album .wedding-image').on('click', function(event) {
  event.preventDefault();

  $.ajax({
    method: 'POST',
    url: 'http://localhost:3000/lovesea/wp-json/wp/v2/gallery/',
})
 .done( function (event) {
    
  console.log(event);

 })
})


})(jQuery);