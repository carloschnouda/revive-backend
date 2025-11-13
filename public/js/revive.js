$(document).ready(function () {

    // Open mobile menu
    $('.burger-menu-button').on('click', function () {
        $('.mobile-menu-wrapper').toggleClass('menu-open');
        $('.mobile-nav-wrapper').toggleClass('active');
        $('body').toggleClass('menu-open');
    });

    // Close mobile menu with close button
    $('.close-menu-button .close-btn').on('click', function () {
        $('.mobile-menu-wrapper').removeClass('menu-open');
        $('.mobile-nav-wrapper').removeClass('active');
        $('body').removeClass('menu-open');
    });

    //popup - Updated for new team card structure
    $(".team-card, .popup-gallery").on("click", function () {
        var id = $(this).data("id");
        if (!id) {
            // Check if it's a wrapper element
            id = $(this).closest('[data-id]').data("id");
        }
        var popup = $(".popup-wrapper-" + id);
        popup.removeClass('hidden').css('display', 'flex');
        // Trigger animation by adding opacity after display is set
        setTimeout(function() {
            popup.css('opacity', '1');
        }, 10);
        $('html').css('overflow', 'hidden');
    });

    $(".close-modal").on("click", function (e) {
        e.stopPropagation();
        closePopup();
    });

    $('.popup-wrapper').on('click', function (event) {
        // Check if the click occurred outside the content wrapper
        if (!$(event.target).closest('.content-wrapper').length) {
            closePopup();
        }
    });

    function closePopup() {
        $('.popup-wrapper').css('opacity', '0');
        setTimeout(function() {
            $('.popup-wrapper').css('display', 'none').addClass('hidden');
            $('html').css('overflow', 'auto');
        }, 400);
    }

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
        $('body').removeClass('menu-open');
    });

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: "3",
        spaceBetween: 15,
        autoHeight: false,
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

    // Enhanced Scroll Animations with Intersection Observer
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    $(entry.target).addClass('show');
                }
            });
        }, observerOptions);

        $('[animate]').each(function() {
            observer.observe(this);
        });
    } else {
        // Fallback for browsers without Intersection Observer
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
    }

    // Smooth Scroll for Scroll Indicator
    $('.scroll-indicator').on('click', function() {
        $('html, body').animate({
            scrollTop: $(window).height()
        }, 1000, 'swing');
    });

    // Add parallax effect to parallax section
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        var parallaxOffset = $('#parallax').offset();

        if (parallaxOffset) {
            var parallaxTop = parallaxOffset.top;
            var windowHeight = $(window).height();

            // Only apply parallax when section is in view
            if (scrolled + windowHeight > parallaxTop && scrolled < parallaxTop + $('#parallax').height()) {
                var yPos = -(scrolled - parallaxTop) * 0.5;
                $('.parallax-background').css('background-position', 'center ' + yPos + 'px');
            }
        }
    });


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
