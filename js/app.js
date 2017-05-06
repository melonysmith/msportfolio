'use strict';

/* eslint no-undef: 0 */

 /* open nav */
 $('#nav-expander').on('click', function(e) {
    e.preventDefault();
    $('nav').toggleClass('nav-expanded');
});

/* close nav */
 $('.menu .close').on('click', function(e) {
    e.preventDefault();
    $('nav').toggleClass('nav-expanded');
});

/* close nav after menu link clickd */
$('.menu  a').on('click', function(e) {
    e.preventDefault();
    $('nav').removeClass('nav-expanded');
});

/* calculate jumbotron width */
 function homeFullScreen() {

    var homeSection = $('.home');
    var windowHeight = $(window).outerHeight();

    if (homeSection.hasClass('home-fullscreen')) {

        $('.home-fullscreen').css('height', windowHeight);
    }
}

/* initialize */
$(window).load(function () {
    homeFullScreen();
    smoothScroll.init();
});

/* on window resize */
$(window).resize(function () {
    homeFullScreen();
});
