@extends('web.layouts.master')

@section('title', $title)

@section('meta')
    @include('web.layouts.partials._meta')
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset_version('assets/web/dist/css/articles.css') }}">
@stop

@section('content')
    @include('web.layouts.partials._page_banner')

    <div class="container ptb-50">
        <div class="section-title">
            <span class="top-title">@lang('web.blog_page.our_blog')</span>
            <h2>@lang('web.blog_page.blog_title')</h2>
        </div>
        <div class="row justify-content-center">
            @foreach($paginator as $article)
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    @include('web.layouts.partials._blog_card')
                </div>
            @endforeach
        </div>

        <div class="text-center">
            @if(($paginator->total() > $per_page) && ($paginator->total() / $per_page) > 1)
                <ul class="page-nav list-style mt-3">
                    <li><a href="{{$previous_page}}"><i class="flaticon-left-arrow"></i></a></li>
                    @foreach($url_range as $key => $item)
                        @if($key > 0)
                            <li>
                                <a href="{{$item}}" class="{{$key == $paginator->currentPage() ? 'active' : ''}}">{{$key}}</a>
                            </li>
                        @endif
                    @endforeach
                    <li><a href="{{$next_page}}"><i class="flaticon-right-arrow"></i></a></li>
                </ul>
            @endif
        </div>
    </div>
@stop
