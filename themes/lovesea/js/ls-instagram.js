
(function ($) {

    // https://github.com/adrianengine/jquery-spectragram/wiki/How-to-get-Instagram-API-access-token-and-fix-your-broken-feed

    var spectagramComplete = function () {
        
        $(window).on('load', function () {
            createCarousel();
            // e.preventDefault();
            
        });

    };

    var createCarousel = function () {

        $('.owl-carousel').owlCarousel({
            // stagePadding: 10,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:false,
            nav: true,

            itemsDesktop : [2000,4], // 4 items between 1000px and 901px
            itemsDesktopSmall : [800,3], // 3 items betweem 900px and 601px
            itemsMobile: [600,1], // 1 items between 600 and 0
        });
    
    }
    var Spectra = {
        instaToken: '1443206686.4186d71.7b4c8a64377e4f31ad1b76e7ef649fb9',
        instaID: '4186d71dabda40669358e3260812ee53',

        init: function () {
            $.fn.spectragram.accessData = {
                accessToken: this.instaToken,
                clientID: this.instaID
            };

            // $('.site-header').append('<div class="owl-carousel"></div>');

            $('.owl-carousel').spectragram('getUserFeed', {
                // max: 12,
                query: 'btrischuk',
                size: 'big',
                wrapEachWith: '<div class="item"></div>',
                complete: spectagramComplete()
            });


        }
    };

    Spectra.init();




})(jQuery);