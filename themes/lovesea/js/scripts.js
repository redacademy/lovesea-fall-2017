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


// function loadContent(   ){
  
//   var holdLoad = false;
  
//   if(!holdLoad){
  
//       holdLoad = true;
  
//       $.ajax({
//           url: "http://wordpress.testinggrounds.info/wp-json/wp/v2/posts",
//           type: "GET"
//        }).done(function(data){
 
//           console.log(data[num].title.rendered);
//           $('#content').append(data[num].title.rendered);
      
//       }).fail(function(){
      
//       }).always(function(){
      
//           holdLoad = false;
          
//       });
//   }// end if
// }

// $(window).scroll(function(){
//   if( $(window).scrollTop() >= $(document).height() - $(window).height() - 100 ){
//       loadContent(1);
//   }
// });


})(jQuery);