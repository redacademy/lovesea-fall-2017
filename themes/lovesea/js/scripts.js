jQuery(document).ready(function($) {
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
});

//About Page Functionality

jQuery( document ).ready(function($) {
  $('.tabs .about-sub-pages a').on('click', function(e)  {
    var currentAttrValue = $(this).attr('href');

    // Show/Hide Tabs
    $('.tabs ' + currentAttrValue).show().siblings().hide();

    // Change/remove current tab to active
    $(this).parent('li').addClass('active').siblings().removeClass('active');

    e.preventDefault();
});
});