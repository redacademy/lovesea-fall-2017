(function ($) {

    $('.toggle-menu-button').on('click', function () {
      $('.menu-list').toggleClass('toggle-nav');
    });

    $('.site-content').on('click', function () {
      $('.menu-list').removeClass('toggle-nav');
    });
    
})(jQuery);