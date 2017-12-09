jQuery(document).ready(function($) {
//   jQuery('.toggle-nav').click(function(e) {
//     jQuery(this).toggleClass('.active');
//     jQuery('.menu ul').toggleClass('.active');

//     e.preventDefault();
//   });

$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('.front-center-logo').addClass('shrink');
  } else {
    $('.front-center-logo').removeClass('shrink');
  }
});
});
