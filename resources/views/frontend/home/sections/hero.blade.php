<!-- Hero Section Start -->
<div id="hero" class="hero hero-1">
    <img src="{{asset('assets/images/hero-1-bg-jade.svg')}}" alt="{{__('Featured Session Background')}}" class="hero-1-bg">
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="hero-content">
                        <h1 class="hero-title">{{__($hero_content->title ?? 'There is nothing more important to us than your pet')}}</h1>
                        <div class="hero-img-box-2 d-xl-none">
                            @if($hero_content?->featured_photo == null)
                                <img src="{{asset('assets/images/hero-1-default.png')}}" alt="{{__('Featured Image')}}" class="hero-img">
                            @else
                                <img src="{{asset($hero_content->featured_photo)}}" alt="{{__('Featured Image')}}" class="hero-img">
                            @endif
                        </div>
                        <p class="hero-text">{{__($hero_content->subtitle ?? 'Pets are humanizing. They remind us we have an obligation and responsibility to preserve and nurture and care for all life')}}</p>
                        @php
                            if ($hero_content?->link_button)
                                $routeName = app('router')->getRoutes()->match(app('request')->create($hero_content->link_button))->getName();
                        @endphp
                        <a href="{{route($routeName ?? 'frontend.contact')}}" class="btn btn-granny-apple-600">{{__(ucwords($hero_content?->name_button) ?? 'Make An Appointment')}}</a>
                        <div class="happy-client-box">
                            <div class="hc-img-box">
                                @if($hero_content?->satisfied_customers)
                                    @if($hero_content->sub_featured_photos === null)
                                        <div class="hc-single-img">
                                            <img src="{{asset('assets/images/client-1-default.png')}}" alt="">
                                        </div>
                                        <div class="hc-single-img">
                                            <img src="{{asset('assets/images/client-2-default.png')}}" alt="">
                                        </div>
                                        <div class="hc-single-img">
                                            <img src="{{asset('assets/images/client-3-default.png')}}" alt="">
                                        </div>
                                    @else
                                        @foreach(json_decode($hero_content->sub_featured_photos) as $image)
                                            <img src="{{asset($image)}}" alt="Client {{$loop->index + 1}}">
                                        @endforeach
                                    @endif
                                @endif
                            </div>
                            <div class="hc-text-box">
                                @php
                                    $formattedNumber = formatNumberShort($hero_content?->satisfied_customers);
                                @endphp
                                @if($hero_content?->satisfied_customers)
                                    <h4>+<span class="counter">{{$formattedNumber['count']}}</span>{{$formattedNumber['unit_suffixes']}}</h4>
                                    <p>{{__('Satisfied Clients')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-none d-xl-block">
                    <div class="hero-img-box-2">
                        @if($hero_content?->featured_photo === null)
                            <img src="{{asset('assets/images/hero-1-default.png')}}" alt="{{__('Featured Image')}}" class="hero-img">
                        @else
                            <img src="{{asset($hero_content->featured_photo)}}" alt="{{__('Featured Image')}}" class="hero-img">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->
