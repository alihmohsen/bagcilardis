@extends('web.layouts.master')

@section('title', $title)

@section('meta')
    @include('web.layouts.partials._meta')
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset_version('assets/web/dist/css/home.css') }}">
@stop

@section('content')
    <!--Start Banner Area-->
    <div class="banner-area pb-100 pt-5">
        <video id="bgvid" playsinline autoplay muted loop>
            {{--cdn: https://d3a0x7rdygs8vy.cloudfront.net/bag2.mp4--}}
            <source src="{{asset('assets/web/Dental clinic Hospital with the latest medical equipments.mp4')}}" type="video/mp4">
            @lang('web.home_page.support_video_tag_message')
            <source src="" type="video/webm">
            @lang('web.home_page.support_video_tag_message')
        </video>

        <div class="container-fluid px-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-8 col-xl-6 px-lg-4">
                    <div class="banner-content">
                        <span data-aos="fade-up" data-aos-duration="1300" data-aos-delay="200">@lang('web.home_page.banner.title')</span>
                        <h1 data-aos="fade-up" data-aos-duration="1300" data-aos-delay="400">@lang('web.home_page.banner.description')</h1>
                        <div class="btn-area" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="800">
                            <a href="{{ route('web.contact_us', [app()->getLocale()]) }}"
                                class="default-btn btn active me-3">@lang('web.home_page.banner.book_an_appointment')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Banner Area-->

    <!--Start About area-->
    <div class="about-area ptb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img me-3" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                        <img class="lazyload blur-up" data-src="{{ asset('assets/web/dist/images/about-1.png') }}" alt="Image">
                        <div class="experience">
                            <p>30 @lang('web.about_us_page.experience_doctors')</p>
                            <div class="icon">
                                <i class="flaticon-expert"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ps-3" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
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
                            </ul>
                        </div>
                        <a href="{{ route('web.about_us', [app()->getLocale()]) }}" class="default-btn btn">@lang('web.home_page.explore_more')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End About area-->

    <!--Start Services Area-->
    <div class="main-services-area ptb-50">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0 px-lg-4">
                    <div class="services-content">
                        <span>@lang('web.footer.services')</span>
                        <h2>@lang('web.home_page.services.title')</h2>
                        <p>@lang('web.home_page.services.info')
                        </p>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="services-slider owl-carousel owl-theme">
                        @foreach($services as $service)
                            <div class="service-card px-3 px-lg-4">
                                <div class="image">
                                    <img class="lazyload blur-up" data-src="{{ asset('storage/'.$service->main_image) }}" style="width: 85px; height: 85px; object-fit: cover;" alt="Image">
                                </div>
                                <div class="card-contain">
                                    <h3>{{$service->title}}</h3>
                                    <p>{{$service->excerpt}}</p>
                                    <a href="{{$service->route}}" class="default-btn btn">@lang('web.home_page.explore_more')</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Services Area-->

    <div class="faq-area ptb-50">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1300"
                    data-aos-delay="300">
                    <div class="faq-image pe-3">
                        <img class="lazyload blur-up" data-src="{{ asset('assets/web/dist/images/faq-image.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1300"
                    data-aos-delay="300">
                    <div class="faq-left-content ps-3">
                        <div class="faq-title">
                            <span>@lang('web.home_page.faq.questions') &amp; @lang('web.home_page.faq.answer')</span>
                            <h2>@lang('web.home_page.faq.title')</h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1. Is a phone call considered telemedicine?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        There are many variations of passages of Lorem Ipsum available, the
                                        many variations of passages of Lorem Ipsum available, majority have
                                        injected humour, randomised words don't look believable.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. What equipment do you need for telemedicine?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        There are many variations of passages of Lorem Ipsum available, the
                                        many variations of passages of Lorem Ipsum available, majority have
                                        injected humour, randomised words don't look believable.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        3. Can you use FaceTime for telemedicine?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        There are many variations of passages of Lorem Ipsum available, the
                                        many variations of passages of Lorem Ipsum available, majority have
                                        injected humour, randomised words don't look believable.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        4. How do I get started with telemedicine?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        There are many variations of passages of Lorem Ipsum available, the
                                        many variations of passages of Lorem Ipsum available, majority have
                                        injected humour, randomised words don't look believable.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        4. How do I get started with telemedicine?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        There are many variations of passages of Lorem Ipsum available, the
                                        many variations of passages of Lorem Ipsum available, majority have
                                        injected humour, randomised words don't look believable.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Start Blog Area-->
    <div class="blog-area ptb-50">
        <div class="container-fluid">
            <div class="blog-bg px-4 px-lg-5 pt-5">
                <div class="section-title">
                    <span class="top-title">@lang('web.blog_page.our_blog')</span>
                    <h2>@lang('web.blog_page.blog_title')</h2>
                </div>

                <div class="row justify-content-center">
                    @foreach($articles as $article)
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            @include('web.layouts.partials._blog_card')
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-5">
                    <a href="{{route('web.articles', [app()->getLocale()])}}" class="default-btn btn">
                        @lang('web.home_page.view_all_articles')
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--End Blog Area-->

    <!--Start Solution Area-->
    <div class="solution-area ptb-50">
        <div class="container-fluid">
            <div class="solution-bg px-3 px-lg-5 ptb-50">
                <div class="section-title white-title">
                    <span class="top-title">@lang('web.home_page.solutions.title')</span>
                    <h2>@lang('web.home_page.solutions.info')</h2>
                </div>

                <div class="solution-slider owl-carousel owl-theme">
                    @if(isset($youtube) && $youtube->isNotEmpty())
                        @foreach($youtube as $video)
                            <div class="solution-img">
                                <img class="lazyload blur-up" data-src="{{$video->snippet->thumbnails->high->url}}" alt="{{$video->snippet->title}}">
                                <div class="icon">
                                    <a data-fancybox="video" aria-label="watch video" class="play-btn"
                                       href="https://www.youtube.com/watch?v={{$video->id->videoId}}"><i
                                            class="flaticon-play-button-arrowhead"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--End Solution Area-->

    <!--Start Doctors Area-->
    @include('web.layouts.partials._doctors_area')
    <!--End Doctors Area-->

    <!-- Start Contact Doctor Area-->
    <div class="contact-doctor-area pb-5 mb-lg-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-doctor-contain" data-aos="fade-right" data-aos-duration="1200"
                        data-aos-delay="200">
                        <div class="contact-title">
                            <span>@lang('web.footer.contact_us')</span>
                            <h2>@lang('web.home_page.solutions.title')</h2>
                            <p>@lang('web.home_page.solutions.info')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    @include('web.layouts.partials._new_contact_form')
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Doctor Area-->
@stop
