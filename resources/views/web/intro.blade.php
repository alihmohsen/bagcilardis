<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset_version('assets/web/favicon.webp')}}" type="image/x-icon">
    <title>Bağcılar Diş Kliniği</title>
    <style>
        html, body {
            padding: 0;
            margin: 0;
        }

        body {
            background: rgba(0, 0, 0, 1);
        }

        #background-video {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;
        }

        .content {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
    </style>

    <link rel="stylesheet" href="{{asset_version('assets/web/coming-soon/css/bootstrap.min.css')}}">
    <!-- Web Fonts -->
    <link rel="stylesheet" href="{{asset_version('assets/web/coming-soon/css/web-fonts.css')}}">
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset_version('assets/web/coming-soon/css/icon-font.css')}}">
    <link rel="stylesheet" href="{{asset_version('assets/web/coming-soon/css/aos.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset_version('assets/web/coming-soon/css/style.css')}}">

    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?12033';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {
                "backgroundColor": "#4dc247",
                "ctaText": "",
                "borderRadius": "25",
                "marginLeft": "0",
                "marginBottom": "50",
                "marginRight": "50",
                "position": "right"
            },
            "brandSetting": {
                "brandName": "BAĞCILAR AĞIZ VE DİŞ POLİKLİNİĞİ",
                "brandSubTitle": "Gülüş Akademisi ",
                "brandImg": "{{asset('assets/web/favicon.webp')}}",
                "welcomeText": "Merhaba Size \nNasıl Yardımcı Olabilirim ? ",
                "messageText": "Merhabalar ",
                "backgroundColor": "#0a5f54",
                "ctaText": "BİZE YAZIN",
                "borderRadius": "25",
                "autoShow": false,
                "phoneNumber": "905466144402"
            }
        };
        s.onload = function () {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>
</head>
<body data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
<script type="text/javascript" async src="{{asset_version('assets/web/coming-soon/js/shopifyWidget.js')}}"></script>

<div class="animation anim-dark aos-init aos-animate" data-aos="slide-effect-2">
    <div class="wrapper animation-inner">
        <div class="background">
            <div class="video-container">
                <div class="filter"></div>
                <video id="bgvid" playsinline autoplay muted loop>
                    {{--cdn: https://d3a0x7rdygs8vy.cloudfront.net/bag2.mp4--}}
                    <source src="{{asset('assets/web/into.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag. I suggest you upgrade your browser.
                    <source src="" type="video/webm">
                    Your browser does not support the video tag. I suggest you upgrade your browser.
                </video>
            </div>
        </div>

        <!-- // end .background -->
        <div class="content-section d-flex justify-content-center align-items-center">
            <div class="v-lines">
                <div class="vline-1"></div><!-- // end .vline-1 -->
                <div class="vline-2"></div><!-- // end .vline-1 -->
                <div class="vline-3"></div><!-- // end .vline-1 -->
                <div class="vline-4"></div><!-- // end .vline-1 -->
            </div><!-- // end .lines -->
            <div class="container">
                <div class="center-content text-light align-self-center">
                    <img src="{{asset('assets/web/bg-logo.png')}}" class="img-fluid aos-init aos-animate"
                         style="width: 400px;" alt="Bağcılar Diş Kliniği" data-aos="fade" data-aos-delay="1800">
                    <p class="lead my-4 aos-init aos-animate" data-aos="fade" data-aos-delay="2500">
                        Sağlıklı Gülümseniz İçin Çalışıyoruz :)
                    </p>
                    <!-- // end .lead -->
                    <span class="animation anim-light aos-init aos-animate" data-aos="slide-effect-btn"
                          data-aos-delay="3000">
                        <a class="btn btn-lg btn-outline" target="_blank"
                           href="https://www.instagram.com/bagcilardispoliklinigi/">BİZİ TAKİP EDİN</a>
                        </span>

                </div>
                <!-- // end .center-content -->
            </div>
            <!-- // end .container -->
        </div>
        <!-- // end .content-section -->
        <div class="sidebar sidebar-dark d-flex flex-column justify-content-end aos-init aos-animate"
             data-aos="slide-left" data-aos-delay="3000">
            <div class="hamburger-menu mb-auto">
                <div class="hamburger">
                    <div class="hamburger-line hamburger-line-1"></div>
                    <!-- // end .hamburger-line -->
                    <div class="hamburger-line hamburger-line-2"></div>
                    <!-- // end .hamburger-line -->
                    <div class="hamburger-line hamburger-line-3"></div>
                    <!-- // end .hamburger-line -->
                    <div class="hamburger-line hamburger-line-4"></div>
                    <!-- // end .hamburger-line -->
                </div>
                <!-- // end .hamburger -->
            </div>
            <!-- // end .hamburger-menu -->
            <div class="social-links">
                <a href="https://www.facebook.com/bagcilardis" target="_blank"> Facebook </a>
                <a href="https://www.instagram.com/bagcilardispoliklinigi/" target="_blank"> Instagram </a>
            </div>
        </div>
        <!-- // end .sidebar -->

        <div class="fullscreen-content dark-bg" id="fscontent">
            <div class="container">
                <div class="section-title mt-5">
                    <h2 class="section-heading">İletişim Bilgilerimiz</h2>
                    <p>Bizlere ulaşmak için aşağıdaki iletişim bilgilerimizden yararlanabilirsiniz.</p>
                </div><!-- // end .section-title -->

                <p class="text-center">
                    <a href="https://goo.gl/maps/onbb64BWhnNyFWLx5" target="_blank">
                        Adres: İstanbul Caddesi No:10 Bağcılar Meydan
                    </a>
                </p><!-- // end .text-center -->
                <p class="text-center">
                    <a href="tel:+9002124350410">
                        Tel: +90 0212 435 0410
                    </a>
                </p>
                <p class="text-center">
                    <a href="mailto:bilgi@bagcilardis.com">
                        E posta: bilgi@bagcilardis.com
                    </a>
                </p>

                <p class="text-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48153.36180194423!2d28.827797446422977!3d41.034332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa52d28bde3d7%3A0x5276c03c09ec7adc!2sSpecial%20Bagcilar%20Oral%20and%20Dental%20Health%20Clinic!5e0!3m2!1sen!2str!4v1677047317578!5m2!1sen!2str"
                        width="600" height="450" style="border:0;max-width:100%;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>
            </div>
        </div>
    </div>
    <!-- // end .wrapper -->
</div>
<!-- // end .animation -->

<!-- JS Files -->
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="{{asset_version('assets/web/coming-soon/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset_version('assets/web/coming-soon/js/tether.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset_version('assets/web/coming-soon/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset_version('assets/web/coming-soon/js/viewport.min.js')}}"></script>
<script src="{{asset_version('assets/web/coming-soon/js/aos.js')}}"></script>
<script src="{{asset_version('assets/web/coming-soon/js/smoothscroll.min.js')}}"></script>
<script src="{{asset_version('assets/web/coming-soon/js/validate.js')}}"></script>
<script src="{{asset_version('assets/web/coming-soon/js/subscribe.js')}}"></script>
<script src="{{asset_version('assets/web/coming-soon/js/contact.js')}}"></script>

<!-- Main JS -->
<script src="{{asset_version('assets/web/coming-soon/js/script.js')}}"></script>

</body>
</html>
