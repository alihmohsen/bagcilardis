@extends('web.layouts.master')

@section('title', $title)

@section('meta')
    @include('web.layouts.partials._meta')
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset_version('assets/web/dist/css/articles-show.css') }}">
@stop

@section('content')

    @include('web.layouts.partials._page_banner')

    <div class="container ptb-50">
        <div class="row">
            <div class="col-lg-4 order-1 order-lg-0 mt-4 mt-lg-0">
                <div class="side-bar position-sticky top-1">
                    <div class="popular-post py-3 py-lg-4 px-3 px-lg-4">
                        <h3>@lang('web.blog_page.popular_posts')</h3>
                        @foreach($recent_articles as $recent_article)
                            <div class="popular-card">
                                <div class="img">
                                    <a href="{{$recent_article->route}}">
                                            <img class="lazyload blur-up" data-src="{{ asset('storage/'.$recent_article->main_image) }}" style="width: 85px; height: 85px; object-fit: cover;" alt="Image">
                                    </a>
                                </div>
                                <a href="{{$recent_article->route}}">
                                    <h4>{{$recent_article->title}}</h4>
                                </a>
                                <div class="date">
                                    <i class="ri-calendar-event-line"></i>
                                    <p>{{$recent_article->created_at->format($date_format)}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="tag-content py-3 py-lg-4 px-3 px-lg-4">
                        <h3>@lang('web.blog_page.tags')</h3>
                        <ul>
                            @foreach($tags as $tag)
                                <li><a href="{{route('web.articles', [app()->getLocale()])}}">{{$tag->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 order-0 order-lg-1">
                <div class="section-title style2">
                    <h1>{{$article->title}}</h1>
                </div>

                <div class="top-image">
                    <img class="lazyload blur-up" data-src="{{ asset('storage/'.$article->main_image) }}" alt="Image">
                </div>

                <div class="inner-content mb-4">
                    {!! $article->description !!}
                </div>

                <div class="next-and-prev">
                    <ul class="d-flex justify-content-between">
                        <li>
                            <a href="{{$previous->route}}">
                                <i class="ri-arrow-left-line"></i>
                                @lang('web.blog_page.previous_post')
                            </a>
                        </li>
                        <li>
                            <a href="{{$next->route}}">
                                @lang('web.blog_page.next_post')
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
