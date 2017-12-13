(function ($) {

    $('.toggle-menu-button').on('click', function () {
      $('.menu-list').toggleClass('toggle-nav');
    });

    $('.toggle-menu-button').on('blur', function () {
      $('.menu-list').toggleClass('toggle-nav');
    });
    
})(jQuery);