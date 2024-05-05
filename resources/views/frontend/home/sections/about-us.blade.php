<!-- About Us Section Start -->
<div id="about-us" class="about-us section bg-jade-500">
    <div class="about-us-area">
        <div class="container">
            <div class="row">
                <div class="d-none d-lg-block col-lg-6">
                    <div class="about-us-img-box">
                        @empty(json_decode($about_us?->client_photos))
                            <img src="{{asset('assets/images/about-us-lg-default.png')}}" alt="about-us" class="aui-lg">
                            <img src="{{asset('assets/images/icons/about-dot.png')}}" alt="about-us" class="aui-dot">
                            <img src="{{asset('assets/images/about-us-sm-default.png')}}" alt="about-us"
                                 class="aui-cat">
                        @else
                            <img src="{{asset(json_decode($about_us->client_photos)[0])}}" alt="about-us" class="aui-lg">
                            <img src="{{asset('assets/images/icons/about-dot.png')}}" alt="about-us" class="aui-dot">
                            <img src="{{asset(json_decode($about_us->client_photos)[1])}}" alt="about-us" class="aui-cat">
                        @endempty
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-content-box">
                            <span class="section-side-span">{{__('About Us')}}</span>
                            <h2 class="section-side-title mobile-hide">{{__($about_us->title ?? "It's our pleasure to care your pets")}}</h2>
                            <div class="about-us-img-box d-lg-none">
                                @empty(json_decode($about_us?->client_photos))
                                    <img src="{{asset('assets/images/about-us-lg-default.png')}}" alt="about-us" class="aui-lg">
                                    <img src="{{asset('assets/images/icons/about-dot.png')}}" alt="about-us" class="aui-dot">
                                    <img src="{{asset('assets/images/about-us-sm-default.png')}}" alt="about-us"
                                         class="aui-cat">
                                @else
                                    <img src="{{asset(json_decode($about_us->client_photos)[0])}}" alt="about-us" class="aui-lg">
                                    <img src="{{asset('assets/images/icons/about-dot.png')}}" alt="about-us" class="aui-dot">
                                    <img src="{{asset(json_decode($about_us->client_photos)[1])}}" alt="about-us" class="aui-cat">
                                @endempty
                            </div>
                            <p class="section-side-text">{{__($about_us->subtitle ?? 'Ultimately, pet care and veterinary services are critical for ensuring that our furry, feathered, or scaled friends lead happy, healthy lives.')}}</p>
                            <ul class="section-side-list column-2">
                                @forelse(json_decode($about_us?->highlighted_services)??[] as $service)
                                    <li class="mb-4">
                                        <span><img src="{{asset('assets/images/icons/new-tick.svg')}}" alt="Item {{__($service)}}"></span> {{__($service)}}
                                    </li>
                                @empty
                                    <li class="mb-4">
                                        <span><img src="{{asset('assets/images/icons/new-tick.svg')}}" alt=""></span> {{__("Best Veterinarian's")}}
                                    </li>
                                    <li>
                                        <span><img src="{{asset('assets/images/icons/new-tick.svg')}}" alt=""></span> {{__("Bath and Grooming")}}
                                    </li>
                                    <li class="mb-4">
                                        <span><img src="{{asset('assets/images/icons/new-tick.svg')}}" alt=""></span> {{__("24/7 Hour Care")}}
                                    </li>
                                    <li>
                                        <span><img src="{{asset('assets/images/icons/new-tick.svg')}}" alt=""></span> {{__("Best Foods")}}
                                    </li>
                                @endforelse
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
