<!-- About Us Section Start -->
<div id="about-us" class="about-us section bg-jade-500">
    <div class="about-us-area">
        <div class="container">
            <div class="row">
                <div class="d-none d-lg-block col-lg-6">
                    <div class="about-us-img-box">
                        @if($about_us?->client_photos)
                            <img src="{{asset($about_us->full_client_photos[0])}}" alt="about-us" class="aui-lg">
                            <img src="{{asset('assets/images/icons/about-dot.png')}}" alt="about-us" class="aui-dot">
                            <img src="{{asset($about_us->full_client_photos[1])}}" alt="about-us" class="aui-cat">
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-content-box">
                            <span class="section-side-span">{{__('About Us')}}</span>
                            <h2 class="section-side-title mobile-hide">{{__($about_us->title)}}</h2>
                            <div class="about-us-img-box d-lg-none">
                                @if($about_us?->client_photos)
                                    <img src="{{asset($about_us->full_client_photos[0])}}" alt="about-us" class="aui-lg">
                                    <img src="{{asset('assets/images/icons/about-dot.png')}}" alt="about-us" class="aui-dot">
                                    <img src="{{asset($about_us->full_client_photos[1])}}" alt="about-us" class="aui-cat">
                                @endif
                            </div>
                            <p class="section-side-text">{{__($about_us->subtitle)}}</p>
                            <ul class="section-side-list column-2">
                                @if($about_us?->highlighted_services)
                                    @foreach(json_decode($about_us?->highlighted_services) as $service)
                                        <li class="mb-4">
                                            <span><img src="{{asset('assets/images/icons/new-tick.svg')}}" alt="Item {{__($service)}}"></span> {{__($service)}}
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                            <a href="{{route('frontend.about')}}" class="btn btn-iguana-green">{{__('More About Us')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us Section End -->
