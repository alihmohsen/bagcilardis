!(function ($) {
    "use strict";
    $.fn.meanmenu = function (e) {
        var n = {
            meanMenuTarget: jQuery(this),
            meanMenuContainer: ".mobile-responsive-menu",
            meanMenuClose: "X",
            meanMenuCloseSize: "18px",
            meanMenuOpen: "<span /><span /><span />",
            meanRevealPosition: "right",
            meanRevealPositionDistance: "0",
            meanRevealColour: "",
            meanScreenWidth: "480",
            meanNavPush: "",
            meanShowChildren: !0,
            meanExpandableChildren: !0,
            meanExpand: "+",
            meanContract: "-",
            meanRemoveAttrs: !1,
            onePage: !1,
            meanDisplay: "block",
            removeElements: "",
        };
        e = $.extend(n, e);
        var a = window.innerWidth || document.documentElement.clientWidth;
        return this.each(function () {
            var n = e.meanMenuTarget,
                t = e.meanMenuContainer,
                r = e.meanMenuClose,
                i = e.meanMenuCloseSize,
                s = e.meanMenuOpen,
                u = e.meanRevealPosition,
                m = e.meanRevealPositionDistance,
                l = e.meanRevealColour,
                o = e.meanScreenWidth,
                c = e.meanNavPush,
                v = ".meanmenu-reveal",
                h = e.meanShowChildren,
                d = e.meanExpandableChildren,
                y = e.meanExpand,
                j = e.meanContract,
                Q = e.meanRemoveAttrs,
                f = e.onePage,
                g = e.meanDisplay,
                p = e.removeElements,
                C = !1;
            (navigator.userAgent.match(/iPhone/i) ||
                navigator.userAgent.match(/iPod/i) ||
                navigator.userAgent.match(/iPad/i) ||
                navigator.userAgent.match(/Android/i) ||
                navigator.userAgent.match(/Blackberry/i) ||
                navigator.userAgent.match(/Windows Phone/i)) &&
                (C = !0),
                (navigator.userAgent.match(/MSIE 8/i) || navigator.userAgent.match(/MSIE 7/i)) && jQuery("html").css("overflow-y", "scroll");
            var w = "",
                x = function () {
                    if ("center" === u) {
                        var e = window.innerWidth || document.documentElement.clientWidth,
                            n = e / 2 - 22 + "px";
                        (w = "left:" + n + ";right:auto;"), C ? jQuery(".meanmenu-reveal").animate({ left: n }) : jQuery(".meanmenu-reveal").css("left", n);
                    }
                },
                A = !1,
                E = !1;
            "right" === u && (w = "right:" + m + ";left:auto;"), "left" === u && (w = "left:" + m + ";right:auto;"), x();
            var M = "",
                P = function () {
                    M.html(jQuery(M).is(".meanmenu-reveal.meanclose") ? r : s);
                },
                W = function () {
                    jQuery(".mean-bar,.mean-push").remove(), jQuery(t).removeClass("mean-container"), jQuery(n).css("display", g), (A = !1), (E = !1), jQuery(p).removeClass("mean-remove");
                },
                b = function () {
                    var e = "background:" + l + ";color:" + l + ";" + w;
                    if (o >= a) {
                        jQuery(p).addClass("mean-remove"),
                            (E = !0),
                            jQuery(t).addClass("mean-container"),
                            jQuery(".mean-container").prepend('<div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="' + e + '">Show Navigation</a><nav class="mean-nav"></nav></div>');
                        var r = jQuery(n).html();
                        jQuery(".mean-nav").html(r),
                            Q &&
                                jQuery("nav.mean-nav ul, nav.mean-nav ul *").each(function () {
                                    jQuery(this).is(".mean-remove") ? jQuery(this).attr("class", "mean-remove") : jQuery(this).removeAttr("class"), jQuery(this).removeAttr("id");
                                }),
                            jQuery(n).before('<div class="mean-push" />'),
                            jQuery(".mean-push").css("margin-top", c),
                            jQuery(n).hide(),
                            jQuery(".meanmenu-reveal").show(),
                            jQuery(v).html(s),
                            (M = jQuery(v)),
                            jQuery(".mean-nav ul").hide(),
                            h
                                ? d
                                    ? (jQuery(".mean-nav ul ul").each(function () {
                                          jQuery(this).children().length &&
                                              jQuery(this, "li:first")
                                                  .parent()
                                                  .append('<a class="mean-expand" href="#" style="font-size: ' + i + '">' + y + "</a>");
                                      }),
                                      jQuery(".mean-expand").on("click", function (e) {
                                          e.preventDefault(),
                                              jQuery(this).hasClass("mean-clicked")
                                                  ? (jQuery(this).text(y),
                                                    jQuery(this)
                                                        .prev("ul")
                                                        .slideUp(300, function () {}))
                                                  : (jQuery(this).text(j),
                                                    jQuery(this)
                                                        .prev("ul")
                                                        .slideDown(300, function () {})),
                                              jQuery(this).toggleClass("mean-clicked");
                                      }))
                                    : jQuery(".mean-nav ul ul").show()
                                : jQuery(".mean-nav ul ul").hide(),
                            jQuery(".mean-nav ul li").last().addClass("mean-last"),
                            M.removeClass("meanclose"),
                            jQuery(M).click(function (e) {
                                e.preventDefault(),
                                    A === !1 ? (M.css("text-align", "center"), M.css("text-indent", "0"), M.css("font-size", i), jQuery(".mean-nav ul:first").slideDown(), (A = !0)) : (jQuery(".mean-nav ul:first").slideUp(), (A = !1)),
                                    M.toggleClass("meanclose"),
                                    P(),
                                    jQuery(p).addClass("mean-remove");
                            }),
                            f &&
                                jQuery(".mean-nav ul > li > a:first-child").on("click", function () {
                                    jQuery(".mean-nav ul:first").slideUp(), (A = !1), jQuery(M).toggleClass("meanclose").html(s);
                                });
                    } else W();
                };
            C ||
                jQuery(window).resize(function () {
                    (a = window.innerWidth || document.documentElement.clientWidth), a > o, W(), o >= a ? (b(), x()) : W();
                }),
                jQuery(window).resize(function () {
                    (a = window.innerWidth || document.documentElement.clientWidth), C ? (x(), o >= a ? E === !1 && b() : W()) : (W(), o >= a && (b(), x()));
                }),
                b();
        });
    };
})(jQuery);

$(document).ready(function () {
    var _rtl = false
    if ($('body').css('direction') == 'rtl') {
        _rtl = true
    }

    // Mean Menu
    $('.mean-menu').meanmenu({
        meanScreenWidth: "991"
    });

    // Sticky, Go To Top JS
    $(window).on('scroll', function () {
        // Header Sticky JS
        if ($(this).scrollTop() > 100) {
            $('.navbar-area').addClass("is-sticky");
        }
        else {
            $('.navbar-area').removeClass("is-sticky");
        };
    });

    //AOS animation
    AOS.init({
        disable: function () {
            var maxWidth = 900;
            return window.innerWidth < maxWidth;
        }
    });

    // Others Option For Responsive JS
    $(".others-option-for-responsive .dot-menu").on("click", function () {
        $(".others-option-for-responsive .container .container").toggleClass("active");
    });

    //Services-slider
    $('.services-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        rtl:_rtl,
        autoplay: true,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        navText: [
            '<i class="ri-arrow-left-line"></i>',
            '<i class="ri-arrow-right-line"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 3,
            },
        }
    });

    //doctor slider2
    $('.doctor-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        rtl:_rtl,
        dots: false,
        autoplay: true,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        navText: [
            '<i class="ri-arrow-left-line"></i>',
            '<i class="ri-arrow-right-line"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 4,
            },
        }
    });

    //doctor slider2
    $('.solution-slider').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        rtl:_rtl,
        dots: false,
        autoplay: true,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        navText: [
            '<i class="ri-arrow-left-line"></i>',
            '<i class="ri-arrow-right-line"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            500: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 4,
            },
        }
    });

    $(".owl-carousel .owl-nav .owl-prev").attr('aria-label','owl-prev');
    $(".owl-carousel .owl-nav .owl-next").attr('aria-label','owl-next');

    // Go to Top
    $(window).on('scroll', function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
    });

    // Click Event
    $('.go-top').on('click', function () {
        $("html, body").animate({ scrollTop: "0" }, 500);
    });

    $(".phoneInput").intlTelInput({
        hiddenInput: "Mobile",
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.min.js",
        nationalMode: true,
        separateDialCode: true,
        initialCountry: "tr",
        preferredCountries: [
            "SA",
            "TR",
            "KW",
            "IQ",
            "QA",
            "BH",
            "SY",
            "EG",
            "OM",
        ],
    });

    $(".number-only").keydown(function (event) {
        // Allow: backspace, delete, tab, escape, and enter
        if (
            event.keyCode == 46 ||
            event.keyCode == 8 ||
            event.keyCode == 9 ||
            event.keyCode == 27 ||
            event.keyCode == 13 ||
            // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) ||
            // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)
        ) {
            if ($(this).val().length > 6 && $(this).val().length < 15) {
                $(this).parentsUntil('.contact-form').find(':input[type="submit"]').prop("disabled", false);
            } else {
                $(this).parentsUntil('.contact-form').find(':input[type="submit"]').prop("disabled", true);
            }
            return;
        } else {
            // Ensure that it is a number and stop the keypress
            if (
                event.shiftKey ||
                ((event.keyCode < 48 || event.keyCode > 57) &&
                    (event.keyCode < 96 || event.keyCode > 105))
            ) {
                event.preventDefault();
            }
        }

        if ($(this).val().length > 6 && $(this).val().length < 15) {
            $(this).parentsUntil('.contact-form').find(':input[type="submit"]').prop("disabled", false);
        } else {
            $(this).parentsUntil('.contact-form').find(':input[type="submit"]').prop("disabled", true);
        }
    });
});

// function to set a given theme/color-scheme
function setTheme(themeName) {
    localStorage.setItem('bagcilar_theme', themeName);
    document.documentElement.className = themeName;
}

// function to toggle between light and dark theme
function toggleTheme() {
    if (localStorage.getItem('bagcilar_theme') === 'theme-dark') {
        setTheme('theme-light');
    } else {
        setTheme('theme-dark');
    }
}

// Immediately invoked function to set the theme on initial load
(function () {
    if (localStorage.getItem('bagcilar_theme') === 'theme-dark') {
        setTheme('theme-dark');
    } else {
        setTheme('theme-light');
    }
})();
