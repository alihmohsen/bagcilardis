<meta name="theme-color" content="#a27b2c">
<link rel="canonical" href="{{url()->current()}}">
<link rel="apple-touch-icon" href="{{asset_version('assets/web/dist/images/favicon.jpg')}}">

@foreach(config('app.locales') as $local)
    <link rel="alternate" hreflang="{{$local}}" href="{{get_translated_route($local)}}"/>
@endforeach
<link rel="alternate" href="{{get_translated_route(config('app.fallback_locale'))}}" hreflang="x-default"/>

<meta name="language" content="English"/>
<meta name="author" content="Flexcodes"/>
<meta name="audience" content="all"/>
<meta name="description" content="{{$description}}">
<meta name="keywords" content="{{$keywords}}">

<meta property="og:title" content="@yield('title')">
<meta property="og:type" content="website">
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:site_name" content="{{$settings->title}}">
<meta property="og:image" content="{{$image}}">
<meta property="og:description" content="{{substr($description, 0, 160)}}">

<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content="{{$settings->title}}">
<meta name="twitter:creator" content="{{$settings->title}}">
<meta name="twitter:title" content="@yield('title')">
<meta name="twitter:description" content="{{substr($description, 0, 160)}}">
<meta name="twitter:image" content="{{$image}}">
