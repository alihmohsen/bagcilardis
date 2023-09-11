<!--Start Page Banner-->
<div class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <h1>{{$title}}</h1>
            <ul>
                <li><a href="{{route('web.index', [app()->getLocale()])}}">@lang('web.footer.home')</a></li>
                <li>{{$title}}</li>
            </ul>
        </div>
    </div>

    <div class="image">
        <img class="lazyload blur-up" data-src="{{ asset_version('assets/web/dist/images/page-banner.jpg')}}" alt="page banner">
    </div>
</div>
<!--End Page Header-->
