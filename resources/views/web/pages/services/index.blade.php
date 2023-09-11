@extends('web.layouts.master')

@section('title', $title)

@section('meta')
    @include('web.layouts.partials._meta')
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset_version('assets/web/dist/css/services.css') }}">
@stop

@section('content')

    @include('web.layouts.partials._page_banner')

    <div class="container ptb-50">
        <div class="row">
            <div class="col-lg-4 order-1 order-lg-0 mt-4 mt-lg-0">
                <div class="side-bar position-sticky top-1">
                    <div class="side-contact">
                        <h2>@lang('web.footer.contact_us')</h2>
                        @include('web.layouts.partials._new_contact_form')
                    </div>
                </div>
            </div>

            <div class="col-lg-8 order-0 order-lg-1">
                <div class="section-title style2">
                    <h1>{{$model->title}}</h1>
                </div>

                <div class="top-image">
                    <img class="lazyload blur-up" data-src="{{ asset('storage/'.$model->main_image) }}" alt="Image">
                </div>

                <div class="inner-content">
                    {!! $model->description !!}
                </div>
            </div>
        </div>
    </div>

    <div class="services-area ptb-50">
        <div class="container-fluid">
            <div class="provide-bg px-3 px-md-4 px-xl-5 ptb-50">
                <div class="section-title">
                    <span class="top-title">@lang('web.services_page.what_we_do')</span>
                    <h2>@lang('web.services_page.service_title')</h2>
                </div>
                <div class="row">
                    @if ($model->children->isNotEmpty())
                        @foreach ($model->children as $child)
                            <div class="col-md-6 col-xl-4 mb-4">
                                <a href="{{$child->route}}"
                                   class="service-sub-card" data-aos="fade-up" data-aos-duration="1200"
                                   data-aos-delay="200">

                                    <div class="image">
                                        <img class="lazyload blur-up" data-src="{{ asset('storage/'.$child->main_image) }}" alt="service image">
                                    </div>

                                    <div class="provide-content">
                                        <h3>{{$child->title}}</h3>
                                        <p>{{$child->excerpt}}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
