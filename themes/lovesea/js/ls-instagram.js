
(function ($) {

    // https://github.com/adrianengine/jquery-spectragram/wiki/How-to-get-Instagram-API-access-token-and-fix-your-broken-feed

    var spectagramComplete = function () {

        $(window).on("load", function () {
            createCarousel();
        });

    };

    var createCarousel = function () {

        $('.owl-carousel').owlCarousel({
            // stagePadding: 10,
            loop:true,
            // margin:10,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            nav: true,

            itemsDesktop : [1000,3], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,4], // betweem 900px and 601px
            itemsTablet: [600,1], //2 items between 600 and 0
            itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
                
            
        });

    }
 
//   Custom Navigation Events
//   $(".next").click(function(){
//     owl.trigger('owl.next');
//   })
//   $(".prev").click(function(){
//     owl.trigger('owl.prev');
//   })
//   $(".play").click(function(){
//     owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
//   })
//   $(".stop").click(function(){
//     owl.trigger('owl.stop');
//   })

// });

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