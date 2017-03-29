'use strict';

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

 // load project details from portfolio
 function openProject() {

    var portfolioItem = $('.portfolio-item  a');
    var singleProject = $('#single-project');

    portfolioItem.click(function () {

        var link = $(this).attr('href');
        $('html, body').animate({
            scrollTop: singleProject.offset().top - 30
        }, 500);

        singleProject.empty();

        setTimeout(function () {
            singleProject.load(link, function (response, status) {
                if (status === "error") {
                    alert("An error");
                } else {
                    singleProject.slideDown(500);

                    var closeProject = $('#close-project');
                    closeProject.on('click', function () {
                        singleProject.slideUp(500);
                        setTimeout(function () {

                            singleProject.empty();
                        }, 500);
                    });
                }
            });
        }, 500);
        return false;
    });
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
