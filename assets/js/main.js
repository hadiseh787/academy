$(document).ready(function () {
    $(".faq").click(function () {
        $(this).toggleClass("active");
        $(this).siblings().removeClass('active');
    });

    $("#menuToggle input").click(function (e) {
        $("#menuToggle").toggleClass("fixed");
    });
    function sticky_relocate() {
        var window_top = $(window).scrollTop();
        var div_top = $('#sticky-anchor').offset()?.top;
        if (window_top > div_top) {
            $('#sticky').addClass('stick');
        } else {
            $('#sticky').removeClass('stick');
        }
    }

    $(function () {
        $(window).scroll(sticky_relocate);
        sticky_relocate();
    });
    var sections = $('section')
        , nav = $('nav')
        , nav_height = nav.outerHeight();

    $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop();

        sections.each(function () {
            var top = $(this).offset().top - nav_height,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('a').removeClass('active');
                sections.removeClass('active');

                $(this).addClass('active');
                nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
            }
        });
    });

    nav.find('a').on('click', function () {
        var $el = $(this)
            , id = $el.attr('href');

        $('html, body').animate({
            scrollTop: $(id).offset().top - nav_height + 20
        }, 500);

        return false;
    });
    //accordion
    $(".accordion-list__item").click(function () {
        $(this).toggleClass("accordion-item--opened");
    });

    $(".acc-btn").click(function () {
        var show = !$(this).next().is(":visible");
        $(this).siblings(".acc-btn.active").removeClass("active");
        $(this).toggleClass("active", show);

        $(".acc-content").slideUp("normal");

        if (show) $(this).next().slideDown("normal");

    });

    $(".open_popup").click(function () {
        $(this).parent(".popup_main").children(".popup_body").addClass("popup_body_show");
    });
    $(".popup_close").click(function () {
        $(".popup_body").removeClass("popup_body_show");
    });
    $(".popup_back").click(function () {
        $(".popup_body").removeClass("popup_body_show");
    });

    var swiper = new Swiper('.swiper-one', {
        spaceBetween: 12,
        slidesPerView: 1,
        direction: 'horizontal',
        loop: false,
        breakpoints: {
            992: {
                spaceBetween: 24,
                slidesPerView: 3,
            },
            576: {
                spaceBetween: 12,
                slidesPerView: 2,
            }
        },

        navigation: {
            nextEl: '.swiper-button-prev.one',
            prevEl: '.swiper-button-next.one',
        },
    });

    var swiperTwo = new Swiper('.swiper-two', {
        spaceBetween: 0,
        slidesPerView: 1,
        direction: 'horizontal',
        loop: false,

        breakpoints: {
            992: {
                spaceBetween: 24,
                slidesPerView: 3,
            },
            576: {
                spaceBetween: 12,
                slidesPerView: 1,
            }
        },

        navigation: {
            nextEl: '.swiper-button-prev.two',
            prevEl: '.swiper-button-next.two',
        },
    });
    var swiperThree = new Swiper('.swiper-three', {
        spaceBetween: 12,
        slidesPerView: 1,
        direction: 'horizontal',
        loop: false,
        breakpoints: {
            992: {
                spaceBetween: 24,
                slidesPerView: 1,
            }
        },

        navigation: {
            nextEl: '.swiper-button-prev.three',
            prevEl: '.swiper-button-next.three',
        },
    });
    var swiperFour = new Swiper('.swiper-four', {
        loop:false,
        breakpoints: {
            992: {
                spaceBetween: 24,
                slidesPerView:4,
            }
        },

        navigation: {
            nextEl: '.swiper-button-prev.four',
            prevEl: '.swiper-button-next.four',
        },
    });

    var swipersix = new Swiper('.swiper-six', {
        loop:false,
        breakpoints: {
            992: {
                spaceBetween: 24,
                slidesPerView:4,
            }
        },

        navigation: {
            nextEl: '.swiper-button-prev.six',
            prevEl: '.swiper-button-next.six',
        },
    });

    var swiperFive = new Swiper('.swiper-five', {
        spaceBetween: 0,
        slidesPerView: 1,
        direction: 'horizontal',
        loop: false,

        breakpoints: {
            992: {
                spaceBetween: 24,
                slidesPerView: 3,
            },
            576: {
                spaceBetween: 12,
                slidesPerView: 1,
            }
        },

        navigation: {
            nextEl: '.swiper-button-prev.five',
            prevEl: '.swiper-button-next.five',
        },
    });
    $(".accordianNav h3.dropArrow").click(function() {
        $("h3.dropArrow").removeClass("active");
        $(".accordianNav ul ul").slideUp();
        if (!$(this).next().is(":visible")) {
            $(this).next().slideDown();
            $(this).addClass("active");
        }
    })

    function generateTOC() {
        var tocContainer = jQuery('#toc');
        var headings = jQuery('.text-article h2');

        var tocList = jQuery('<ul></ul>');

        headings.each(function (index) {
            var headingText = jQuery(this).text().trim();
            var tocItem = jQuery('<li></li>');
            var tocLink = jQuery('<a></a>');
            tocLink.text(headingText);
            tocLink.attr('href', '#' + encodeURIComponent(headingText));

            tocLink.on('click', function (e) {
                e.preventDefault();

                var clickedHeadingIndex = index;

                tocList.find('li').removeClass('active');

                tocList.find('li').eq(clickedHeadingIndex).addClass('active');

                var offset = headings.eq(clickedHeadingIndex).offset().top - 100;
                jQuery('html, body').animate({
                    scrollTop: offset
                }, 200);
            });

            tocItem.append(tocLink);
            tocList.append(tocItem);
        });

        tocContainer.append(tocList);
    }

    jQuery(document).ready(function () {
        generateTOC();
    });


    $(".toc-container h2").click(function () {
        $('.toc-container').toggleClass("open");

    });


});
