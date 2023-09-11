$(document).ready(function () {
    // Add smooth scrolling to all links
    $(".navbar .navbar-collapse .navbar-nav .nav-item .nav-link").on(
        "click",
        function (event) {
            if (this.hash !== "") {
                var hash = this.hash;
                $("html, body").animate(
                    {scrollTop: $(hash).offset().top - 60},
                    900,
                    "swing"
                );
            }
        }
    );

    $(window).scroll(function () {
        var sc = $(this).scrollTop();
        if (sc > 200) {
            $(".scroll-top").addClass("d-flex");
        } else {
            $(".scroll-top").removeClass("d-flex");
        }
    });

    var _rtl = false;

    if ($("body").css("direction") == "rtl") {
        _rtl = true;
    }

    $(".after-before-carousel").owlCarousel({
        margin: 10,
        items: 1,
        rtl: _rtl,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        dots: true,
    });

    $(".header-images").owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: false,
        rtl: false,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplaySpeed: 1500,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        items: 1,
        lazyLoad: true,
    });

    $.fn.BeerSlider = function (options) {
        options = options || {};
        return this.each(function () {
            new BeerSlider(this, options);
        });
    };
    $(".beer-slider").each(function (index, el) {
        $(el).BeerSlider({start: $(el).data("start")});
    });

    $(".owl-carousel .owl-dots .owl-dot").attr("aria-label", "owl-dot");
    $(".owl-carousel .owl-nav .owl-prev").attr("aria-label", "owl-prev");
    $(".owl-carousel .owl-nav .owl-next").attr("aria-label", "owl-next");

    //To Hide Modal on Click Back Button
    //-----------
    $(".modal").on("shown.bs.modal", function () {
        var urlReplace = "#" + $(this).attr("id");
        history.pushState(null, null, urlReplace);
    });

    $(window).on("popstate", function () {
        $(".modal").modal("hide");
    });
    //-----------

    $(".scroll-top").click(function () {
        $("html").animate({scrollTop: 0}, 500);
    });

    document.addEventListener("lazybeforeunveil", function (e) {
        var bg = e.target.getAttribute("data-bg")
        if (bg) {
            e.target.style.backgroundImage = "url(" + bg + ")";
        }
    });

    var $Language = $("html").attr("lang");

    $(".btn-send").on("click", function (e) {
        e.preventDefault();
        var lang = document.documentElement.lang;
        var $this = $(this).parents("form");
        var source_form = $this.find("input[name=source_form]").val();
        var name = $this.find("input[id=Last_Name]").val();
        var email = $this.find("input[name=email]").val();
        var mobile_number = $this.find("input[id=Mobile]").val();
        var message = $this.find("textarea[name=Description]").val();
        var fullsrc = $(location).attr("href");
        var domain = $(location).attr("hostname");

        var emailReg = /^([\w\-\.]{2,}\@[a-zA-Z-0-9]{2,}\.[\w\-]{2,4})/;
        var numReg = /[0-9]/;
        var valid = true;

        if (name == "") {
            valid = false;
            alert($pleaseEnterNameMsg);
        } else if (mobile_number == "") {
            valid = false;
            alert($pleaseEnterMobileMsg);
        } else if (!numReg.test(mobile_number)) {
            valid = false;
            alert($pleaseEnterNumberOnly);
        } else if (mobile_number.length < 5) {
            valid = false;
            alert($pleaseEnterValidMobileMsg);
        }

        if (valid) {
            $(".btn-send").prop("disabled", true);

            $.ajax({
                url: $this.attr("action"),
                method: "POST",
                dataType: "json",
                data: {
                    source_form: source_form,
                    name: name,
                    phone: mobile_number,
                    email: email,
                    message: message,
                    fullsrc: fullsrc,
                    domain: domain,
                    locale: lang,
                    _token: $('meta[name="csrf-token"]').attr("content"),
                },
                beforeSend: function () {
                    $this.find(".send").addClass("d-none");
                    $this.find(".sending").removeClass("d-none");
                },
                success: function (data) {
                    if (data.error.length > 0) {
                        alert(data.error);
                    } else {
                        dataLayer.push({event: "form_submitted"});
                        $this[0].reset();
                        $("#thanksForm").submit();
                    }

                    $this.find(".send").removeClass("d-none");
                    $this.find(".sending").addClass("d-none");
                    $this.find(".submit-form").prop("disabled", false);
                    $(".btn-send").prop("disabled", false);
                },
                error: function (data, error_status, error_message) {
                    if (data.status === 429) {
                        alert($TooManyAttempts);
                    } else {
                        // send mail to development
                        // code here
                        $.ajax({
                            url: "/send-mail-to-dev",
                            method: "POST",
                            dataType: "json",
                            data: {
                                name: name,
                                phone: mobile_number,
                                email: email,
                                message: message,
                                fullsrc: fullsrc,
                                domain: domain,
                                error_status: data.status,
                                error_message: error_message,
                                locale: lang,
                                _token: $('meta[name="csrf-token"]').attr(
                                    "content"
                                ),
                            },
                        });
                        alert($errorSending);

                        // ====================================================================
                    }
                },
                complete: function () {
                    $this.find(".send").removeClass("d-none");
                    $this.find(".sending").addClass("d-none");
                    $this.find(".submit-form").prop("disabled", false);
                    $(".btn-send").prop("disabled", false);
                },
            });
        }
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

    $(".number-only").on('input', function (event) {
        if ($(this).val().length > 6 && $(this).val().length < 15) {
            $(this).parentsUntil('.contact-form').find(':input[type="submit"]').prop("disabled", false);
        } else {
            $(this).parentsUntil('.contact-form').find(':input[type="submit"]').prop("disabled", true);
        }
    });

    $(':input[type="submit"]').prop("disabled", true);
});
