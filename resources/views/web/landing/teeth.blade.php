<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ __('messages.dir') }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#b68b18">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="apple-touch-icon" href="{{ asset_version('assets/web/favicon.webp') }}">
    <link rel="shortcut icon" href="{{ asset_version('assets/web/favicon.webp') }}" type="image/x-icon">

    <meta name="author" content="flexcodes" />
    <meta name="audience" content="all" />
    <meta name="description" content="@lang('landing.teeth.title')">
    <meta name="keywords" content="@lang('landing.teeth.keywords')">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Bağcılar Diş Kliniği">
    <meta name="twitter:creator" content="flexcodes">
    <meta name="twitter:title" content="@lang('landing.teeth.title')">
    <meta name="twitter:description" content="@lang('landing.teeth.description')">
    <meta name="twitter:image" content="{{ asset('assets/web/landing/pages/teeth/hero/1.png') }}">

    <meta property="og:title" content="@lang('landing.teeth.title')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Bağcılar Diş Kliniği">
    <meta property="og:image" content="{{ asset('assets/web/landing/pages/teeth/hero/1.png') }}">
    <meta property="og:description" content="@lang('landing.teeth.description')">
    <title>Bağcılar Diş Kliniği</title>
    @if (app()->getLocale() == 'ar')
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@300;500;600;700&display=swap" rel="stylesheet">
    @else
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    @endif

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css">
    </noscript>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    </noscript>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.0.0/css/intlTelInput.css"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.0.0/css/intlTelInput.css">
    </noscript>
    <link rel="preload"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    </noscript>
    <link rel="stylesheet" href="{{ asset('assets/web/landing/css/beer-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/landing/css/style.min.css') }}">
</head>

<body class="@if (app()->getLocale() == 'ar') rtl @endif">
    <div class="page-wrapper">
        <div class="content">
            <a href="#scroll-top" aria-label="scroll to top" class="scroll-top">
                <i class="fas fa-chevron-up" aria-hidden="true"></i>
            </a>

            <!-- nav -->
            <div class="nav-contain">
                <div class="container">
                    <nav class="navbar d-flex navbar-expand-lg p-0">
                        <div class="navbar-toggler" aria-label="navbar toggler" type="button" data-toggle="collapse"
                            data-target="#main__navbarMenu" aria-controls="main__navbarMenu" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <div class="nav-icon"></div>
                            <div class="nav-icon"></div>
                            <div class="nav-icon"></div>
                        </div>

                        <a class="navbar-brand text-center m-0 p-0 mr-lg-5" href="/">
                            <img src="{{ asset('assets/web/wide-logo.jpg') }}" alt="logo">
                        </a>

                        <div class="navbar-collapse collapse" id="main__navbarMenu">
                            <ul class="navbar-nav w-100">
                                <li class="nav-item">
                                    <a class="nav-link" href="#section-1">
                                        @lang('landing.teeth.title')
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section-2">
                                        {{ __('landing.fields.before_after') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section-3">
                                        {{ __('landing.fields.videos') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section-4">
                                        {{ __('landing.fields.faqs') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section-5">
                                        {{ __('landing.fields.our_services') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#section-6">
                                        {{ __('landing.fields.contact_us') }}
                                    </a>
                                </li>
                            </ul>

                            <div class="mobile-lang d-lg-none">
                                <div class="lang-lable mr-3">@lang('landing.language') :</div>
                                @foreach(get_translated_routes() as $local=>$item)
                                    <a aria-label="change language" class="text-uppercase" href="{{$item}}">{{$local}}</a>
                                    <span>/</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="language dropdown ml-lg-4 d-none d-lg-block">
                            <button class="dropdown-toggle" aria-label="language" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 122.879 122.879">
                                    <g>
                                        <path
                                            d="M109.465,89.503c0.182,0,0.359,0.019,0.533,0.053c1.146-1.998,2.191-4.095,3.135-6.286 c0.018-0.044,0.037-0.086,0.059-0.128c1.418-3.345,2.488-6.819,3.209-10.419c0.559-2.793,0.904-5.657,1.035-8.591h-16.893 c-0.307,8.574-2.867,17.03-7.639,25.371H109.465L109.465,89.503z M106.52,94.889H89.506c-5.164,7.481-12.121,14.87-20.838,22.167 c1.367-0.17,2.719-0.388,4.055-0.655c3.646-0.729,7.164-1.817,10.549-3.264l-0.002-0.004c3.441-1.48,6.646-3.212,9.609-5.199 c2.969-1.992,5.721-4.255,8.25-6.795l0.01-0.01l0,0C103.096,99.18,104.889,97.099,106.52,94.889L106.52,94.889z M54.21,117.055 c-8.716-7.296-15.673-14.685-20.838-22.166H16.361c1.631,2.21,3.423,4.291,5.379,6.24l0.01,0.011v-0.001 c2.53,2.54,5.282,4.803,8.25,6.795c2.962,1.987,6.167,3.719,9.609,5.199c0.043,0.019,0.086,0.038,0.128,0.059 c3.345,1.419,6.819,2.488,10.42,3.209C51.493,116.668,52.843,116.886,54.21,117.055L54.21,117.055z M12.852,89.503h17.122 c-4.771-8.341-7.332-16.797-7.637-25.371H5.445c0.13,2.934,0.475,5.797,1.034,8.59c0.729,3.646,1.818,7.164,3.264,10.549 l0.004-0.001C10.682,85.442,11.716,87.521,12.852,89.503L12.852,89.503z M5.445,58.747h16.997c0.625-8.4,3.412-16.857,8.407-25.371 H12.852c-1.136,1.982-2.17,4.061-3.105,6.234c-0.019,0.043-0.039,0.086-0.059,0.127C8.269,43.083,7.2,46.557,6.479,50.157 C5.92,52.95,5.575,55.814,5.445,58.747L5.445,58.747z M16.361,27.991h17.938c5.108-7.361,11.862-14.765,20.29-22.212 c-1.496,0.175-2.973,0.408-4.431,0.7c-3.647,0.729-7.164,1.818-10.549,3.264l0.001,0.003c-3.442,1.481-6.647,3.212-9.609,5.2 c-2.968,1.992-5.72,4.255-8.25,6.794l-0.011,0.01h0C19.784,23.7,17.992,25.78,16.361,27.991L16.361,27.991z M68.289,5.778 c8.428,7.447,15.182,14.851,20.291,22.212h17.939c-1.631-2.21-3.424-4.291-5.381-6.24l-0.01-0.01l0,0 c-2.529-2.54-5.281-4.802-8.25-6.794c-2.963-1.988-6.168-3.719-9.609-5.2c-0.043-0.018-0.086-0.038-0.127-0.059 c-3.346-1.418-6.82-2.488-10.42-3.208C71.264,6.187,69.785,5.954,68.289,5.778L68.289,5.778z M110.027,33.376H92.029 c4.996,8.514,7.783,16.971,8.408,25.371h16.998c-0.131-2.934-0.477-5.797-1.035-8.59c-0.73-3.646-1.818-7.164-3.264-10.549 l-0.004,0.002C112.197,37.437,111.164,35.358,110.027,33.376L110.027,33.376z M49.106,1.198C53.098,0.399,57.21,0,61.44,0 c4.23,0,8.341,0.399,12.333,1.198c3.934,0.788,7.758,1.97,11.473,3.547c0.051,0.018,0.1,0.037,0.148,0.058 c3.703,1.594,7.197,3.485,10.471,5.684c3.268,2.192,6.291,4.677,9.066,7.462c2.785,2.775,5.27,5.799,7.461,9.065 c2.197,3.275,4.09,6.768,5.684,10.473l-0.004,0.001l0.004,0.009c1.607,3.758,2.809,7.628,3.605,11.609 c0.799,3.992,1.197,8.104,1.197,12.334c0,4.23-0.398,8.343-1.197,12.335c-0.787,3.932-1.971,7.758-3.547,11.472 c-0.018,0.05-0.037,0.099-0.059,0.147c-1.594,3.705-3.486,7.197-5.684,10.472c-2.191,3.267-4.676,6.29-7.461,9.065 c-2.775,2.785-5.799,5.271-9.066,7.462c-3.273,2.198-6.768,4.091-10.471,5.684l-0.002-0.004l-0.01,0.004 c-3.758,1.606-7.629,2.808-11.609,3.604c-3.992,0.799-8.104,1.198-12.333,1.198c-4.229,0-8.342-0.399-12.334-1.198 c-3.933-0.787-7.758-1.97-11.474-3.546c-0.049-0.019-0.098-0.037-0.147-0.059c-3.705-1.593-7.197-3.485-10.472-5.684 c-3.266-2.191-6.29-4.677-9.065-7.462c-2.785-2.775-5.27-5.799-7.461-9.065c-2.198-3.274-4.09-6.767-5.684-10.472l0.004-0.002 l-0.004-0.009c-1.606-3.758-2.808-7.628-3.604-11.609C0.4,69.782,0,65.67,0,61.439c0-4.229,0.4-8.342,1.199-12.334 c0.787-3.933,1.97-7.758,3.546-11.473c0.018-0.049,0.037-0.099,0.058-0.147c1.594-3.705,3.485-7.198,5.684-10.473 c2.192-3.266,4.677-6.29,7.461-9.065c2.775-2.785,5.799-5.27,9.065-7.462c3.275-2.198,6.768-4.09,10.472-5.684l0.001,0.004 l0.009-0.004C41.254,3.197,45.125,1.995,49.106,1.198L49.106,1.198z M64.133,9.268v18.723h17.826 C77.275,21.815,71.34,15.575,64.133,9.268L64.133,9.268z M64.133,33.376v25.371h30.922c-0.699-8.332-3.789-16.788-9.318-25.371 H64.133L64.133,33.376z M64.133,64.132v25.371h22.51c5.328-8.396,8.189-16.854,8.531-25.371H64.133L64.133,64.132z M64.133,94.889 v18.952c7.645-6.283,13.902-12.601,18.746-18.952H64.133L64.133,94.889z M58.747,113.843V94.889H40 C44.843,101.24,51.1,107.559,58.747,113.843L58.747,113.843z M58.747,89.503V64.132H27.706c0.341,8.518,3.201,16.975,8.531,25.371 H58.747L58.747,89.503z M58.747,58.747V33.376H37.143c-5.529,8.583-8.619,17.04-9.319,25.371H58.747L58.747,58.747z M58.747,27.991 V9.266C51.54,15.573,45.604,21.815,40.92,27.991H58.747L58.747,27.991z" />
                                    </g>
                                </svg>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @foreach(get_translated_routes() as $local=>$item)
                                    <a aria-label="change language" class="dropdown-item text-uppercase" href="{{$item}}">{{$local}}</a>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- /nav -->

            <!-- header -->
            <header class="position-relative">
                <div class="container d-flex justify-content-between">
                    <div class="information position-relative">
                        <h1
                            class="head font-weight-bold primary-color text-capitalize d-none d-lg-block fadeInDown animated">
                            @lang('landing.teeth.hero.title')
                        </h1>

                        <p class="sub-head fadeInRight animated">
                            @lang('landing.teeth.hero.desc')
                        </p>

                        <button class="btn-modal fadeInUp animated text-capitalize" data-toggle="modal"
                            data-target=".modal__contact">
                            {{ __('landing.fields.order_free') }}
                        </button>
                    </div>

                    <div class="images position-relative">
                        <h1 class="head font-weight-bold primary-color mb-4 d-lg-none text-capitalize">
                            @lang('landing.teeth.hero.title')
                        </h1>
                        <div class="owl-carousel owl-theme header-images" dir="ltr">
                            @foreach (File::allFiles('assets/web/landing/pages/teeth/hero') as $i => $image)
                                <img class="main-image owl-lazy"
                                    data-src="{{ asset('assets/web/landing/pages/teeth/hero/' . $image->getFileName()) }}"
                                    alt="image">
                            @endforeach
                        </div>
                    </div>
                </div>
            </header>
            <!-- /header -->

            <!-- services -->
            <section class="services py-4 py-lg-5" id="section-1">
                <div class="container">
                    <h2 class="section-title mb-4 mb-lg-5">
                        @lang('landing.teeth.surgeries.title')
                    </h2>

                    <ul class="p-0">
                        @foreach ($landing_page['surgeries']['list'] as $i => $surgery)
                            <li>
                                <div class="image">
                                    <img class="lazyload blur-up w-100"
                                        data-src="{{ asset('assets/web/landing/pages/teeth/surgeries/' . ($i + 1) . '.png') }}"
                                        alt="service-image">
                                </div>
                                <div class="desc">
                                    <div class="title text-capitalize">{{ $surgery['title'] }}</div>
                                    <p>{{ $surgery['desc'] }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>
            <!-- /services -->

            <!-- before after -->
            <section class="before-after" id="section-2">
                <div class="image">
                    <div class="bg-div"></div>
                    <img class="bg-image lazyload blur-up"
                        data-src="{{ asset('assets/web/landing/pages/teeth/gghh.png') }}" alt="background">
                </div>
                <div class="container">
                    <h2 class="section-title mb-4 mb-lg-5">
                        {{ __('landing.fields.before_after') }}
                    </h2>
                    <div class="contain">
                        <div class="owl-carousel after-before-carousel owl-theme">
                            <div class="beer-slider beer-slider-wlabels"
                                data-beer-label="{{ __('landing.fields.before') }}" data-start="50">
                                <img src="{{ asset('assets/web/landing/pages/teeth/before-after-1/before.jpg') }}"
                                    alt="before">
                                <div class="beer-reveal" data-beer-label="{{ __('landing.fields.after') }}">
                                    <img src="{{ asset('assets/web/landing/pages/teeth/before-after-1/after.jpg') }}"
                                        alt="after">
                                </div>
                            </div>
                        </div>

                        <div class="owl-carousel after-before-carousel owl-theme">
                            <div class="beer-slider beer-slider-wlabels"
                                data-beer-label="{{ __('landing.fields.before') }}" data-start="50">
                                <img src="{{ asset('assets/web/landing/pages/teeth/before-after-2/before.jpg') }}"
                                    alt="before">
                                <div class="beer-reveal" data-beer-label="{{ __('landing.fields.after') }}">
                                    <img src="{{ asset('assets/web/landing/pages/teeth/before-after-2/after.jpg') }}"
                                        alt="after">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center position-relative">
                        <button class="btn-modal" data-toggle="modal" data-target=".modal__contact">
                            {{ __('landing.fields.order_free') }}
                        </button>
                    </div>
                </div>
            </section>
            <!-- /before after -->

            <!-- videos section -->
            <section class="videos-section" id="section-3">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="section-title mb-4 mb-lg-5">{{ __('landing.fields.videos') }}</h2>
                    </div>
                    <div class="row">
                        @foreach ($landing_page['videos'] as $i => $item)
                            <div class="project-block col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box mb-3">
                                    <div class="image">
                                        <img class="lazyload blur-up"
                                            data-src="https://img.youtube.com/vi/{{ $item }}/maxresdefault.jpg"
                                            alt="video-cover" />

                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="overlay-content">
                                                    <a aria-label="watch video" class="plus"
                                                        href="https://www.youtube.com/watch?v={{ $item }}"
                                                        data-fancybox="videos" data-caption=""><i
                                                            class="far fa-play-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- /videos section -->

            <!-- faq section -->
            <section class="faq-section py-4 py-lg-5" id="section-4">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="section-title mb-4 mb-lg-5">
                            {{ sprintf(__('landing.fields.some_frequently_asked'), __('landing.teeth.title')) }}</h2>
                    </div>

                    <div class="accordion" id="accordionQuestion">
                        @foreach ($landing_page['questions'] as $i => $question)
                            <div class="card">
                                <div class="card-header" id="heading{{ $i }}">
                                    <h3 class="mb-0">
                                        <button class="btn btn-link btn-block text-capitalize" type="button"
                                            data-toggle="collapse" data-target="#collapse{{ $i }}"
                                            aria-expanded="true" aria-controls="collapse{{ $i }}">
                                            {{ $question['title'] }}
                                        </button>
                                    </h3>
                                </div>

                                <div id="collapse{{ $i }}" class="collapse {{ $i == 0 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $i }}" data-parent="#accordionQuestion">
                                    <div class="card-body">{{ $question['desc'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- /faq section -->

            <!-- services section -->
            <section class="services-section pt-4" id="section-5">
                <div class="container">
                    <div class="section-title text-center">
                        <h2 class="section-title mb-4 mb-lg-5">{{ __('web.footer.services') }}</h2>
                    </div>

                    <div class="row">
                        @foreach (__('landing.services') as $i => $service)
                            <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                                <img class="d-block my-3 lazyload blur-up"
                                    data-src="{{ asset('assets/web/landing/images/services/icons/' . $i . '.svg') }}"
                                    alt="transportation">
                                <h3 class="text-capitalize">{{ $service['title'] }}</h3>
                                <p>{{ $service['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- /services section -->

            <!-- contact form -->
            <section class="contact-form-section container-fluid" id="section-6">
                <div class="pattern-layer">
                    <img class="lazyload blur-up" src="{{ asset('assets/web/landing/pages/teeth/hg.png') }}"
                        alt="background image">
                </div>
                <div
                    class="contain background-primary px-3 px-lg-5 mx-auto mx-lg-5 py-4 col-11 col-sm-9 col-lg-5 rounded-lg">
                    <div class="title-box text-center color-light">
                        <h2 class="section-title mb-4">{!! __('landing.fields.let_us') !!}</h2>
                    </div>

                    @include('web.layouts.partials._contact_form', ['type' => 'landing'])
                </div>
            </section>
            <!-- /contact form -->

            <footer class="text-center d-flex flex-column">
                <div class="container">
                    <p class="mb-0">{{ __('web.footer.reserved') }} © {{ now()->year }} </p>
                    <div class="mt-1">{{ __('web.footer.developed_by') }}
                        <a class="h5 mt-1 font-weight-bold text-capitalize" href="https://flexcodes.net/"
                            target="_blank" rel="noopener noreferrer">flexcodes</a>
                    </div>
                </div>
            </footer>

            <div class="fixed-bottom">
                <a href="https://api.whatsapp.com/send?phone=905466144402&text=Merhabalar" aria-label="go to whatsapp"
                    class="whatsapp" target="_blank">
                    <i class="fab fa-whatsapp text-light" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="modal modal__contact modal-fullscreen" id="contact-us-modal" tabindex="-1" role="dialog"
        aria-labelledby="contact-us-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content mt-5 p-3 p-lg-4">
                <div class="h5 text-capitalize text-center mb-4 title">{!! __('landing.fields.let_us') !!}</div>
                @include('web.layouts.partials._contact_form', ['type' => 'landing'])
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.16.3/dist/sweetalert2.all.min.js" defer></script>
    <script src="https://kit.fontawesome.com/699d058cf1.js" defer></script>
    <script src="https://afarkas.github.io/lazysizes/lazysizes.min.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.0.0/js/intlTelInput.min.js" defer></script>
    <script src="{{ asset_version('assets/web/landing/js/beer-slider.js') }}"></script>
    <script src="{{ asset_version('assets/web/landing/js/landing.min.js') }}"></script>
    <!-- Do not remove this --- Analytics Tracking code starts -->
    <script id='wf_anal'
        src='https://crm.zohopublic.com/crm/WebFormAnalyticsServeServlet?rid=66c13862cbf7157d10b7556b9cb8f784bcbcc81dc217bcca6728e3bef15a4a04gid6ef525507206f36392f5a0f48bde164dc3de78345d86f03be239e280baf49927gid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513'>
    </script>
    <!-- Do not remove this --- Analytics Tracking code ends. -->
</body>

</html>
