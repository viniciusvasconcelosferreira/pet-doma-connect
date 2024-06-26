<!-- Hero Section Start -->
<div id="hero" class="hero hero-1">
    <img src="{{asset('assets/images/hero-1-bg-jade.svg')}}" alt="{{__('Featured Session Background')}}" class="hero-1-bg">
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="hero-content">
                        <h1 class="hero-title">{{__($hero_content->title)}}</h1>
                        <div class="hero-img-box-2 d-xl-none">
                            <img src="{{asset($hero_content->full_featured_photo)}}" alt="{{__('Featured Image')}}" class="hero-img">
                        </div>
                        <p class="hero-text">{{__($hero_content->subtitle)}}</p>
                        <a href="{{route($hero_content?->link_button)}}" class="btn btn-granny-apple-600">{{__(ucwords($hero_content?->name_button))}}</a>
                        <div class="happy-client-box">
                            <div class="hc-img-box">
                                @if($hero_content?->satisfied_customers)
                                    @foreach($hero_content->full_sub_featured_photos as $index => $image)
                                        <img class="hc-single-img" src="{{ asset($image) }}" alt="Client {{ $index + 1 }}">
                                    @endforeach
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
                        <img src="{{asset('assets/images/'.$hero_content->featured_photo)}}" alt="{{__('Featured Image')}}" class="hero-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->
