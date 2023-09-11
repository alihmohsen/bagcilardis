<div class="footer-area">
    <div class="container">
        <div class="footer pt-5">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="logo-area">
                        <a href="{{route('web.index', [app()->getLocale()])}}"><img
                            class="lazyload blur-up" data-src="{{ asset('assets/web/dist/images/logo.jpg') }}"
                                alt="Image"></a>
                        <p>@lang('web.about_us_page.about_content_title')</p>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="quick-link">
                        <h3>@lang('web.footer.quick_links')</h3>
                        <ul>
                            <li>
                                <a href="{{route('web.articles', [app()->getLocale()])}}">
                                    <i class="ri-add-fill"></i>
                                    <p>@lang('web.footer.articles')</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('web.about_us', [app()->getLocale()])}}">
                                    <i class="ri-add-fill"></i>
                                    <p>@lang('web.footer.about_us')</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('web.contact_us', [app()->getLocale()])}}">
                                    <i class="ri-add-fill"></i>
                                    <p>@lang('web.footer.contact_us')</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="helpful-link">
                        <h3>@lang('web.footer.helpful_links')</h3>
                        <ul>
                            <li>
                                <span>@lang('web.footer.address'):</span> {{$settings->address}}
                            </li>
                            <li>
                                <span>@lang('web.footer.phone'):</span> <a href="tel:{{$settings->phone}}">{{$settings->phone}}</a>
                            </li>
                            <li>
                                <span>@lang('web.footer.email'):</span> <a href="mailto:{{$settings->email}}">{{$settings->email}}</a>
                            </li>
                            <li>
                                @include('web.layouts.partials._social_generale')
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright py-3 py-lg-4">
            <div class="row">
                <div
                    class="col-lg-6 text-center d-flex align-items-center justify-content-center justify-content-lg-start">
                    @lang('web.footer.all_rights_reserved')  @lang('web.title') © {{now()->year}}
                </div>

                <div
                    class="col-lg-6 mt-2 mt-lg-0 d-flex align-items-center justify-content-center justify-content-lg-end">
                    <span>@lang('web.footer.developed_by')</span>
                    <a class="h6 my-0 ms-1 font-weight-bold text-capitalize color-primary" href="https://flexcodes.net/"
                       target="_blank" rel="noopener noreferrer">@lang('web.footer.flex_codes')</a>
                </div>
            </div>
        </div>
    </div>
</div>
