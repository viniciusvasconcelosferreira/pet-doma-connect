$(document).ready(function () {
    // Discount Modal
    window.addEventListener('load', function () {
        $('#discountModal').modal('show');
    });

    /* =========================================================
        Sticky Header Start
     =========================================================*/
    $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();
        if (scrollTop > 200) {
            $('.header').addClass('sticky');
            $('.resp-none').addClass('scroll-none');
        } else {
            $('.header').removeClass('sticky');
            $('.resp-none').removeClass('scroll-none');
        }
    });
    
    /* =========================================================
        Counter Up Start
     =========================================================*/
    $('.counter').counterUp({
        delay: 100,
        time: 1000,
    });
    /* =========================================================
        Counter Up End
     =========================================================*/

    /* =========================================================
        Scroll To Top Start
     =========================================================*/
    $('.scrollToTop').on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
    });

    $(window).scroll(function () {
        var scrollToTopBtn = $('.scrollToTop');
        if ($(window).scrollTop() > 200) {
            scrollToTopBtn.show();
        } else {
            scrollToTopBtn.hide();
        }
    });
    /* =========================================================
        Scroll To Top End
     =========================================================*/

    /* =========================================================
        Testimonial Slider Start
     =========================================================*/
    $('#testimonial-1-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: $('#testimonial-prev-1'),
        nextArrow: $('#testimonial-next-1'),
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
    /* =========================================================
        Testimonial Slider End
     =========================================================*/
     
    /* =========================================================
        Testimonial Slider Start
     =========================================================*/
    $('#testimonial-2-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('#testimonial-prev-1'),
        nextArrow: $('#testimonial-next-1'),
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
    /* =========================================================
        Testimonial Slider End
     =========================================================*/

    /* =========================================================
        Testimonial Slider Start
     =========================================================*/
    $('#team-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: $('#testimonial-prev-1'),
        nextArrow: $('#testimonial-next-1'),
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
    /* =========================================================
        Testimonial Slider End
     =========================================================*/
});