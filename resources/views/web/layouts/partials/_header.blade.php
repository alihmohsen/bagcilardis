<div class="tob-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="heder-left-content">
                    <ul>
                        <li>
                            <i class="ri-user-location-line"></i>
                            <p>@lang('web.header.welcome_to') @lang('web.title')</p>
                        </li>
                        <li>
                            <i class="ri-time-line"></i>
                            <p>{{$settings->open_hours}}</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="heder-right-content">
                    <ul>
                        <li>
                            <div class="language dropdown me-2">
                                <button class="dropdown-toggle" aria-label="language" type="button"
                                        id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-global-line"></i>
                                    <span class="ms-1">@lang('messages.languages.'.app()->getLocale().'.title')</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    @foreach(get_translated_routes() as $local=>$item)
                                        <a aria-label="change language" class="dropdown-item"
                                           href="{{$item}}">@lang('messages.languages.'.$local.'.title')</a>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li>
                            @include('web.layouts.partials._social_generale')
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu mean-container">
                <div class="logo">
                    <a href="/">
                        <img class="lazyload blur-up main-logo" data-src="{{ asset('assets/web/dist/images/logo.jpg')}}" alt="logo">
                        <img class="lazyload blur-up white-logo" data-src="{{ asset('assets/web/dist/images/logo.jpg')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('web.index', [app()->getLocale()])}}">
                    <img class="lazyload blur-up main-logo" data-src="{{ asset('assets/web/dist/images/logo.jpg')}}" alt="logo">
                    <img class="lazyload blur-up white-logo" data-src="{{ asset('assets/web/dist/images/logo.jpg')}}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{route('web.index', [app()->getLocale()])}}" class="nav-link">@lang('web.footer.home')</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('web.about_us', [app()->getLocale()])}}" class="nav-link">@lang('web.footer.about_us')</a>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle">
                                @lang('web.footer.services')
                            </a>

                            <ul class="dropdown-menu">
                                @foreach($services as $service)
                                    <li class="nav-item">
                                        <a href="{{$service->route}}" class="nav-link dropdown-toggle">
                                            {{$service->title}}
                                        </a>
                                        @if ($service->children->isNotEmpty())
                                            <ul class="dropdown-menu">
                                                @foreach ($service->children as $child)
                                                    <li class="nav-item">
                                                        <a href="{{$child->route}}"
                                                           class="nav-link">{{$child->title}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('web.articles', [app()->getLocale()])}}" class="nav-link">@lang('web.footer.articles')</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('web.contact_us', [app()->getLocale()])}}" class="nav-link">@lang('web.footer.contact_us')</a>
                        </li>
                    </ul>

                    <div class="others-options">
                        <ul>
                            <li>
                                <div class="call-now">
                                    <i class="flaticon-phone-call-1"></i>
                                    <p>@lang('web.header.call_for_free')</p>
                                    <a href="tel:{{$settings->phone}}">{{$settings->phone}}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options justify-content-center d-flex align-items-center">
                        <div class="others-options">
                            <ul>
                                <li>
                                    <div class="call-now">
                                        <i class="flaticon-phone-call-1"></i>
                                        <p>@lang('web.header.call_for_free')</p>
                                        <a href="tel:021-6523-3652">021-6523-3652</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
