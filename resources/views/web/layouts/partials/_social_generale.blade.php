<div class="@if(!empty($socialClass)) {{$socialClass}} @else social-generale @endif">
    <ul class="p-0 m-0">
        @if(!empty($settings->whatsapp_link))
            <li>
                <a href="{{$settings->whatsapp_link}}" aria-label="visit our page in whatsapp" target="_blank"><i
                        class="ri-whatsapp-fill"></i></a>
            </li>
        @endif
        @if(!empty($settings->facebook_link))
            <li>
                <a href="{{$settings->facebook_link}}" aria-label="visit our page in facebook" target="_blank"><i
                        class="ri-facebook-fill"></i></a>
            </li>
        @endif
        @if(!empty($settings->messenger_link))
            <li>
                <a href="{{$settings->messenger_link}}" aria-label="visit our page in messenger" target="_blank"><i
                        class="ri-messenger-fill"></i></a>
            </li>
        @endif
        @if(!empty($settings->instagram_link))
            <li>
                <a href="{{$settings->instagram_link}}" aria-label="visit our page in instagram" target="_blank"><i
                        class="ri-instagram-line"></i></a>
            </li>
        @endif
        @if(!empty($settings->youtube_link))
            <li>
                <a href="{{$settings->youtube_link}}" aria-label="visit our page in youtube" target="_blank"><i
                        class="ri-youtube-line"></i></a>
            </li>
        @endif
        @if(!empty($settings->tiktok_link))
            <li>
                <a href="{{$settings->tiktok_link}}" aria-label="visit our page in tiktok" target="_blank"><i
                        class="ri-tiktok-line"></i></a>
            </li>
        @endif
        @if(!empty($settings->snapshot_link))
            <li>
                <a href="{{$settings->snapshot_link}}" aria-label="visit our page in snapshot" target="_blank"><i
                        class="ri-snapshot-line"></i></a>
            </li>
        @endif
        @if(!empty($settings->twitter_link))
            <li>
                <a href="{{$settings->twitter_link}}" aria-label="visit our page in twitter" target="_blank"><i
                        class="ri-twitter-fill"></i></a>
            </li>
        @endif
        @if(!empty($settings->linkedin_link))
            <li>
                <a href="{{$settings->linkedin_link}}" aria-label="visit our page in linkedin" target="_blank"><i
                        class="ri-linkedin-fill"></i></a>
            </li>
        @endif
    </ul>
</div>
