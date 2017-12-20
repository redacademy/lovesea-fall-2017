(function($){

if($('.home').length){
  $(window).scroll(function() {
    if ($(document).scrollTop() > 3) {  
      $('.front-center-logo').addClass('shrink');
      $('.menu-list').addClass('fade-background');
    } else {
      $('.front-center-logo').removeClass('shrink');  
      $('.menu-list').removeClass('fade-background');
      
    }
  });
}

$(window).scroll(function() {
  if ($(document).scrollTop() > 3) {  
    $('.menu-list').addClass('fade-background');
  } else {
    $('.menu-list').removeClass('fade-background');
  }
});


//About Page Functionality

  $('.tabs .about-sub-pages a').on('click', function(e)  {
    var currentAttrValue = $(this).attr('href');

    // Show/Hide Tabs
    $('.tabs ' + currentAttrValue).show().siblings().hide();

    // Change/remove current tab to active
    $(this).parent('li').addClass('active').siblings().removeClass('active');

    e.preventDefault();
});


// wedding page pop up modal

//----- OPEN
  $('[data-popup-open]').on('click', function(e)  {
      var targeted_popup_class = jQuery(this).attr('data-popup-open');
      $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

      e.preventDefault();
  });

  //----- CLOSE
  $('[data-popup-close]').on('click', function(e)  {
      var targeted_popup_class = jQuery(this).attr('data-popup-close');
      $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

      e.preventDefault();
  });



$('.wedding-tab-links .categories').on('click', function(e)  {
  var currentAttrValue = $(this).attr('href');

  // Show/Hide Tabs
  $('.wedding-page-content ' + currentAttrValue).show().siblings().hide();

  // Change/remove current tab to active
  $(this).parent('li').addClass('active').siblings().removeClass('active');

  e.preventDefault();
});

// tab links on single-album pages
$('.wedding-tab-links .categories').on('click', function(e)  {
  var currentAttrValue = $(this).attr('href');

  // Show/Hide Tabs
  $('.single-album-page-content ' + currentAttrValue).show().siblings().hide();

  // Change/remove current tab to active
  $(this).parent('li').addClass('active').siblings().removeClass('active');

  e.preventDefault();
});

<<<<<<< HEAD
$(document).ready(function(){
  $('.lazy').unveil();  
});


// function loadContent(){

//       $.ajax({
//           url: "http://localhost/lovesea/wp-json/wp/v2/gallery",
//           async: true,
//           type: "GET",
//           dataType: "json"
//        }).done(function(data){
        
//           $.each(data, function(i, val){

//             var output = '<div class="wedding-gallery-image">';
//             output += '<div class="image-gradient">';
            
//             output += '<h2 class="album-name">';
//             output += val.title.rendered;
//             output += '</h2>';

//             output += '<img src="'; 
//             output += val.better_featured_image.media_details.sizes.large.source_url;
//             output += '">';

//             output += '</div>';
//             output += '</div>';

//             $('.wedding-album-gallery-pages').append(output);

//           });
        
      
//       }).fail(function(){
//         console.log('error');
      
//       }).always(function(){
      
//           // holdLoad = false;
          
//       });
 
// }

// $(window).scroll(function(){
//   if( $(window).scrollTop() >= $(document).height() - $(window).height() - 100 ){
//       loadContent();
//   }
// });


=======
>>>>>>> e6bfb4917a2e5aee38a1d93df35218f4425f38dc
})(jQuery);