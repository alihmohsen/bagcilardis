<div class="blog-card">
    <div class="blog-img">
        <a href="{{$article->route}}">
            <img class="lazyload blur-up" data-src="{{ asset('storage/'.$article->main_image) }}" alt="Image">
        </a>
    </div>

    <div class="blog-content">
        <div class="date-admin">
            <ul class="d-flex ">
                <li>
                    <i class="ri-calendar-event-line"></i>
                    <p>{{$article->created_at->format($date_format)}}</p>
                </li>
            </ul>
        </div>
        <a href="{{$article->route}}">
            <h3>{{$article->title}}</h3>
        </a>
        <p>{{$article->excerpt}}</p>
    </div>
</div>
