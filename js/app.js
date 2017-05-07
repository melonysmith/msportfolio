// open nav
 $('#nav-expander').on('click', function(e) {
    e.preventDefault();
    $('nav').toggleClass('nav-expanded');
});

// close nav
 $('.menu .close').on('click', function(e) {
    e.preventDefault();
    $('nav').toggleClass('nav-expanded');
});

// when menu link clicked, close nav
$('.menu  a').on('click', function(e) {
    e.preventDefault();
    $('nav').removeClass('nav-expanded');
});

// calculate jumotron width
function homeFullScreen() {
  const homeSection = $('.home');
  const windowHeight = $(window).outerHeight();
  if (homeSection.hasClass('home-fullscreen')) {
    $('.home-fullscreen').css('height', windowHeight);
  }
}

// initialize
$(window).load(() => {
  homeFullScreen();
  smoothScroll.init();
});

// on window resize...
$(window).resize(() => {
  homeFullScreen();
});
