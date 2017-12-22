
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
            navText: ['', ''],
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
        instaToken: '4179239652.184e83c.a38b4f72be5f4851be286fd9e1755280',
        instaID: '184e83ce24d1430ca0dd089fbb533312',
        init: function () {
            $.fn.spectragram.accessData = {
                accessToken: this.instaToken,
                clientID: this.instaID
            };

            $('.owl-carousel').spectragram('getUserFeed', {
                query: 'loveseaphotography',
                size: 'big',
                wrapEachWith: '<div class="item"></div>',
                complete: spectagramComplete()
            });
        }
    };

    Spectra.init();
    
})(jQuery);