(function ($) {

  $('.toggle-menu-button').on('click', function () {
    $('.menu-list').toggleClass('toggle-nav');
  });

  $('.site-content').on('click', function () {
    $('.menu-list').removeClass('toggle-nav');
  });

  //underline current page
  if ($('body').hasClass('home')) {
    $( '.menu-item--home' ).addClass( 'active-page' );
  }

  if ($('body').hasClass('page-id-74')) {
    $( '.menu-items--weddings' ).addClass( 'active-page' );
  }

  if ($('body').hasClass('page-id-54')) {
    $( '.menu-item--about' ).addClass( 'active-page' );
  }

  if ($('body').hasClass('page-id-61')) {
    $( '.menu-item--connect' ).addClass( 'active-page' );
  }

})(jQuery);