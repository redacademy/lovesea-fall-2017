(function($){


// Select all links with hashes

$('a[href="#storyteller"]')

// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') 
    && 
    location.hostname === this.hostname
  ){
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('body, html').animate({
        scrollTop: target.offset().top +130
      }, 1000)
    }
  }
});



// Back to top
$('a[href="#back-to-top"]')

// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') 
    && 
    location.hostname === this.hostname
  ){
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('body, html').animate({
        scrollTop: target.offset().top -130
      }, 1000)
    }
  }
});

})(jQuery);