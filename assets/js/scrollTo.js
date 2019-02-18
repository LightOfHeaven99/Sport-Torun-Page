var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
$("#navbar a").on('click', function (event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash (#)
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area (the speed of the animation)
    $('html, body').animate({
        scrollTop: $(hash).offset().top
    }, 800, function () {

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
    });
});

$(document).ready(function(){
  $('body').scrollspy({target: ".navbar", offset: 50});
  $('.navbar a').css('color', 'white');
  if (w < 768) {
    $('.navbar').css('background','white');
    $('.navbar a').css('color', '');
  }
});

$(window).scroll(function () {
  if (w >= 768) {
    if ($(window).scrollTop() >= 50) {
    $('.navbar').css('background','white');
    $('.navbar a').css('color', '');
    } else {
      $('.navbar').css('background','transparent');
      $('.navbar a').css('color', 'white');
    }
  }
});
