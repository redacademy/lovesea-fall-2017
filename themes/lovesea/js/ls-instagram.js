
(function ($) {

    // https://github.com/adrianengine/jquery-spectragram/wiki/How-to-get-Instagram-API-access-token-and-fix-your-broken-feed

    var spectagramComplete = function () {
        
        $(window).on('load', function () {
            createCarousel();
        });
    };

    var createCarousel = function () {

        $('.owl-carousel').owlCarousel({
            loop: true,
            mouseDrag: false,
            touchDrag: false,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
            navText: ['<img src="/left-arrow.png">', '>'],
            // navText: ["<img src='myprevimage.png'>","<img src='mynextimage.png'>"]
            lazyLoad: true,
            resonsiveClass:true,
            responsive:{
                0:{
                    items: 1,
                },
                600:{
                    items: 3,
                },
                1000:{
                    items: 4,
                },
            }
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