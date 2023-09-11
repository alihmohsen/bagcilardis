@if(isset($doctors) && $doctors->isNotEmpty())
    <div class="doctors-area ptb-50 style">
        <div class="container">
            <div class="section-title">
                <span class="top-title">@lang('web.doctor_card.our_doctors')</span>
                <h2>@lang('web.doctor_card.our_best_doctors')</h2>
            </div>
            <div class="doctor-slider owl-carousel owl-theme">
                @foreach($doctors as $doctor)
                    <div class="single-doctor-card style3">
                        <div class="doctor-img">
                            <img class="lazyload blur-up" data-src="{{ asset('storage/'.$doctor->main_image) }}" alt="Image">

                            <div class="social-content">
                                <ul>
                                    @if(!empty($doctor->facebook_link))
                                        <li>
                                            <a href="{{$doctor->facebook_link}}"
                                               aria-label="visit doctor page in facebook"
                                               target="_blank"><i
                                                    class="ri-facebook-fill"></i></a>
                                        </li>
                                    @endif
                                    @if(!empty($doctor->twitter_link))
                                        <li>
                                            <a href="{{$doctor->twitter_link}}"
                                               aria-label="visit doctor page in twitter_link" target="_blank"><i
                                                    class="ri-twitter-fill"></i></a>
                                        </li>
                                    @endif
                                    @if(!empty($doctor->instagram_link))
                                        <li>
                                            <a href="{{$doctor->instagram_link}}"
                                               aria-label="visit doctor page in instagram_link" target="_blank"><i
                                                    class="ri-instagram-line"></i></a>
                                        </li>
                                    @endif
                                    @if(!empty($doctor->linkedin_link))
                                        <li>
                                            <a href="{{$doctor->linkedin_link}}"
                                               aria-label="visit doctor page in linkedin"
                                               target="_blank"><i
                                                    class="ri-linkedin-fill"></i></a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="doctor-card-content">
                            <h3>{{$doctor->title}}</h3>
                            <p>{{$doctor->profession}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
