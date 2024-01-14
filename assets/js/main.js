(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) $('#spinner').removeClass('show');
        }, 1);
    };
    spinner();

    // Sticky Navbar
    $(window).scroll(function () {
        $(this).scrollTop() > 147 ? $('.navbar').addClass('navbar-sticky') : $('.navbar').removeClass('navbar-sticky');
    });
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $("#about-process .owl-carousel").owlCarousel({
        autoplay: false,
        smartSpeed: 1000,
        center: true,
        margin: 25,
        dots: true,
        loop: true,
        nav : true,
        navText: [`<button type="button" class="btn btn-owl-nav btn-primary"><i class="fas fa-chevron-left"></i></button>`, `<button type="button" class="btn btn-owl-nav btn-primary"><i class="fas fa-chevron-right"></i></button>`],
        items: 1,
        autoHeight: true
    });
    
})(jQuery);

