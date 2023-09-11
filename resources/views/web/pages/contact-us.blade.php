@extends('web.layouts.master')

@section('title', $title)

@section('meta')
    @include('web.layouts.partials._meta')
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset_version('assets/web/dist/css/contact-us.css') }}">
@stop

@section('content')

    @include('web.layouts.partials._page_banner')

    <!--Start Contact Area-->
    <div class="contact-area ptb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-img">
                        <img class="lazyload blur-up" data-src="{{ asset('assets/web/dist/images/contact-img.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    @include('web.layouts.partials._new_contact_form')
                </div>
            </div>
        </div>
    </div>
    <!--End Contact Area-->

    <!--Start Map ARea-->
    <div class="map-area mb-4">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48153.36180194423!2d28.827797446422977!3d41.034332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa52d28bde3d7%3A0x5276c03c09ec7adc!2sSpecial%20Bagcilar%20Oral%20and%20Dental%20Health%20Clinic!5e0!3m2!1sen!2str!4v1677047317578!5m2!1sen!2str"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!--End Map ARea-->

@stop
