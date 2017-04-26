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

// close nav when link is clicked
$('.menu  a').on('click', function(e) {
    e.preventDefault();
    $('nav').removeClass('nav-expanded');
});

// calculate full jumbotron width
 function homeFullScreen() {

    var homeSection = $('.home');
    var windowHeight = $(window).outerHeight();

    if (homeSection.hasClass('home-fullscreen')) {

        $('.home-fullscreen').css('height', windowHeight);
    }
}

// initialize
$(window).load(function () {
    openProject();
    homeFullScreen();

    smoothScroll.init();
});

// window resize
$(window).resize(function () {
    homeFullScreen();
});
