// open nav
$('#nav-expander').on('click', (e) => {
  e.preventDefault();
  $('nav').toggleClass('nav-expanded');
});

// close nav
$('.menu .close').on('click', (e) => {
  e.preventDefault();
  $('nav').toggleClass('nav-expanded');
});

// close nav after item clicked
$('.menu  a').on('click', (e) => {
  e.preventDefault();
  $('nav').removeClass('nav-expanded');
});

// calculate jumotron width
homeFullScreen() => {
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
