@extends('web.layouts.master')

@section('title', 'Page not found')

@section('meta')
    @include('web.layouts.partials._meta')
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset_version('assets/web/dist/css/error-page.css') }}">
@stop

@section('content')
    <div class="error-area ptb-50">
        <div class="container">
            <div class="top-content">
                <ul>
                    <li>4</li>
                    <li>0</li>
                    <li>4</li>
                </ul>
            </div>
            <h2>@lang('web.page_not_found.title')</h2>
            <p>@lang('web.page_not_found.description')</p>
            <a href="{{route('web.index', app()->getLocale())}}" class="btn default-btn">@lang('web.page_not_found.back_to_home')</a>
        </div>
    </div>
@stop
