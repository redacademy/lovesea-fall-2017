(function ($) {

    $('.toggle-menu-button').on('click', function () {
      $('.menu-list').toggleClass('toggle-nav');
    });

    $('.site-content').on('click', function () {
      $('.menu-list').removeClass('toggle-nav');
    });

    // var window=window;

    //   $('.test').each(function() {
    //     if ($(this).prop('href') == window.location.href) {
    //       $(this).addClass('current');
    //     }
    //   });
 
      // var url = window.location.href;   
      // var page = url.substr(url.lastIndexOf('/')+1);   
      //  target = $('.active-menu a[href*="'+home+'"]');   
      //  $(target).addClass('active-page');

    

    
})(jQuery);