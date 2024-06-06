$(document).ready(function () {


    $('.burger-menu-button').on('click', function () {
        $('.mobile-menu-wrapper').toggleClass('menu-open');
        $('.mobile-nav-wrapper').toggleClass('active');
    });

    //popup
    $(".popup-gallery").on("click", function () {
        var id = $(this).data("id");
        $(".popup-wrapper-" + id).fadeIn();
        $('html').css('overflow', 'hidden');
    });
    $(".close-modal").on("click", function () {
        $(".popup-wrapper").fadeOut();
        $('html').css('overflow', 'auto');
    });
    $('.popup-wrapper').on('click', function (event) {
        // Check if the click occurred outside the content wrapper
        if (!$(event.target).closest('.content-wrapper').length) {
            $(".popup-wrapper").fadeOut();
            $('html').css('overflow', 'auto');
        }
    });

    function scrollToSection(section) {
        $('html, body').animate({
            scrollTop: $(`#${section}`).offset().top
        }, 1500);
    }

    let url = new URLSearchParams(window.location.search);
    let sectionSlug = url.get('section');

    if (sectionSlug) {
        scrollToSection(sectionSlug);
    }

    $(".destop-menu-wrapper ul li div, .mobile-menu-links ul li div").click(function (e) {
        e.preventDefault();

        var section = $(this).data('section');

        if (window.location.pathname === '/') {
            window.history.pushState({}, '', `?section=${section}`);
            scrollToSection(section);
        } else {
            window.location.href = `/?section=${section}`;
        }
    });

    $(".destop-menu-wrapper ul li a, .mobile-menu-links ul li a").click(function (e) {
        e.preventDefault();

        var section = $(this).data('section');
        if (window.location.pathname === '/') {
            window.history.pushState({}, '', `?section=${section}`);
            scrollToSection(section);
        } else {
            window.location.href = `/?section=${section}`;
        }
    });



    $(".mobile-menu-links ul li div, .mobile-menu-links ul li a").click(function () {
        $('.mobile-menu-wrapper').removeClass('menu-open');
        $('.mobile-nav-wrapper').removeClass('active');
    });

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: "3",
        spaceBetween: 15,
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: "1.2",
            },
            // when window width is >= 769px
            575: {
                slidesPerView: "2",
            },
            // when window width is >= 992px
            992: {
                slidesPerView: "3",
            },
        },
    });

    $(window).scroll(function () {
        $('[animate]').each(function () {
            var $this = $(this);
            var top_of_element = $this.offset().top;
            var bottom_of_element = $this.offset().top + $this.outerHeight();
            var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
            var top_of_screen = $(window).scrollTop();

            if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
                $this.addClass('show');
            }
        });
    }).scroll();


    $('.mute-button').on('click', function () {
        var video = $(this).parent().find('video');
        var muteButton = $(this).find('.mute');
        var unmuteButton = $(this).find('.unmute');

        if (video.prop('muted')) {
            video.prop('muted', false);
            muteButton.hide();
            unmuteButton.show();
        } else {
            video.prop('muted', true);
            muteButton.show();
            unmuteButton.hide();
        }
    });

});
