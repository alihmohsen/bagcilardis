@extends('web.layouts.master')

@section('title', $title)

@section('meta')
    @include('web.layouts.partials._meta')
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset_version('assets/web/dist/css/about-us.css') }}">
@stop

@section('content')

    @include('web.layouts.partials._page_banner')

    <!--Start About area-->
    <div class="about-area ptb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img me-3" data-aos="fade-right" data-aos-duration="1300" data-aos-delay="300">
                        <img class="lazyload blur-up" data-src="{{ asset('assets/web/dist/images/about-2.png') }}" alt="Image">
                        <div class="experience style">
                            <p>30 @lang('web.about_us_page.experience_doctors')</p>
                            <div class="icon">
                                <i class="flaticon-expert"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ps-3" data-aos="fade-left" data-aos-duration="1300" data-aos-delay="300">
                        <div class="about-title">
                            <span>@lang('web.footer.about_us')</span>
                            <h2>@lang('web.about_us_page.about_content_title')</h2>
                            <p>@lang('web.about_us_page.about_content_info')</p>

                        </div>
                        <div class="list">
                            <ul>
                                <li>
                                    <i class="ri-checkbox-circle-fill"></i>
                                    <p>@lang('web.about_us_page.provide_potential_health')</p>
                                </li>
                                <li>
                                    <i class="ri-checkbox-circle-fill"></i>
                                    <p>@lang('web.about_us_page.operational_research_transformation')</p>
                                </li>
                                <li>
                                    <i class="ri-checkbox-circle-fill"></i>
                                    <p>@lang('web.about_us_page.mental_health_solutions')</p>
                                </li>
                                <li>
                                    <i class="ri-checkbox-circle-fill"></i>
                                    <p>@lang('web.about_us_page.highly_professional_staff')</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End About area-->

    <!--Start Counter Area-->
    <div class="counter-area">
        <div class="container">
            <div class="counter-bg pt-5 pb-4 px-3 px-md-4 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-card">
                            <h1>
                                <span>1682</span>
                                <span class="target">+</span>
                            </h1>
                            <p>@lang('web.about_us_page.happy_clients')</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-card">
                            <h1>
                                <span>1879</span>
                                <span class="target">+</span>
                            </h1>
                            <p>@lang('web.about_us_page.total_projects')</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-card">
                            <h1>
                                <span>765</span>
                                <span class="target">+</span>
                            </h1>
                            <p>@lang('web.about_us_page.worldwide_partner')</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-card">
                            <h1>
                                <span>322</span>
                                <span class="target">+</span>
                            </h1>
                            <p>@lang('web.about_us_page.positive_review')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Counter Area-->

    <!--Start Work Area-->
    <div class="work-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="work-left-content">
                        <div class="work-title">
                            <span>@lang('web.about_us_page.how_we_work')</span>
                            <h2>@lang('web.about_us_page.how_we_work_title')</h2>
                            <p>@lang('web.about_us_page.how_we_work_info')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="follow-image-content" data-aos="fade-left" data-aos-duration="1500"
                         data-aos-delay="300">
                        <img class="lazyload blur-up" data-src="https://img.youtube.com/vi/7mMgzTSaiSk/maxresdefault.jpg" alt="Image">
                        <div class="icon">
                            <a data-fancybox="video" class="play-btn"
                               href="https://www.youtube.com/watch?v=7mMgzTSaiSk">
                                <i class="flaticon-play-button-arrowhead"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Work Area-->

    <!--Start Doctors Area-->
    @include('web.layouts.partials._doctors_area')
    <!--End Doctors Area-->
@stop
