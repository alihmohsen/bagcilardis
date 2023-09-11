@extends('web.layouts.master')

@section('title', $title)

@section('meta')
    @include('web.layouts.partials._meta')
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset_version('assets/web/dist/css/services-show.css') }}">
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
                <a href="">
                    <div class="section-title style2">
                        <h1>{{$model->title}}</h1>
                    </div>

                    <div class="top-image">
                        <img class="lazyload blur-up" data-src="{{ asset('storage/'.$model->main_image) }}" alt="Image">
                    </div>

                    <div class="inner-content">
                        {!! $model->description !!}
                    </div>
                </a>
            </div>
        </div>
    </div>
@stop
