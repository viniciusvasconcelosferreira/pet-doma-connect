@extends('frontend.layouts.app')
@section('content')
    <style>
        .working-hours-box .working-collection li .day-name {
            background: #c5edd6;
        }

        .working-hours-box .working-collection li .day-hours {
            background: #c5edd6;
        }
    </style>
    <!-- Header Section Start -->
    @include('frontend.layouts.partials.header.header-alt')
    <!-- Header Section End -->

    <!-- Page Title Section Start -->
    @include('frontend.layouts.partials.page-title.page-title', ['title' => 'Contact Us', 'breadcrumb' => 'Contact'])
    <!-- Page Title Section End -->

    <!-- Home Contact Section Start -->
    <div id="home-contact" class="home-contact section bg-jade-200">
        <div class="home-contact-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xxl-4 mb-4 mb-lg-5">
                        <div class="home-contact-content">
                            <div class="section-content-box">
                                <h2 class="home-contact-title mobile-hide">{{__('Contact Us')}}</h2>
                                <p class="section-side-text">{{__('Contact information for pet care and veterinary services can vary depending on the specific provide')}}</p>
                                <ul class="contact-info-collection">
                                    @if($contact->phone_number)
                                        @if($contact->phone_is_whatsapp)
                                            <a href="{{cleanAndFormatPhoneNumber($contact->phone_number)}}"
                                               target="_blank">
                                                <li class="mb-4">
                                                <span><i
                                                            class="fa-solid fa-phone"></i></span> {{$contact->phone_number}}
                                                </li>
                                            </a>
                                        @else
                                            <li class="mb-4">
                                                <span><i class="fa-solid fa-phone"></i></span> {{$contact->phone_number}}
                                            </li>
                                        @endif
                                    @endif
                                    @if($contact->cell_phone_number)
                                        @if($contact->cell_phone_is_whatsapp)
                                            <a href="{{cleanAndFormatPhoneNumber($contact->cell_phone_number)}}"
                                               target="_blank">
                                                <li class="mb-4">
                                                    <span><i class="fa-solid fa-mobile-screen"></i></span> {{$contact->cell_phone_number}}
                                                </li>
                                            </a>
                                        @else
                                            <li class="mb-4">
                                                <span><i class="fa-solid fa-mobile-screen"></i></span> {{$contact->cell_phone_number}}
                                            </li>
                                        @endif
                                    @endif
                                    @if($contact->email)
                                        <a href="maito:{{$contact->email}}">
                                            <li class="mb-4">
                                                <span><i class="fa-regular fa-envelope"></i></span> {{$contact->email}}
                                            </li>
                                        </a>
                                    @endif
                                    @if($contact->address)
                                        <li>
                                            <span><i class="fa-solid fa-location-dot"></i></span> {{$contact->address}}
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            @if(!empty($contact->operating_hours) || !empty($social_media))
                                <div class="working-hours-box">
                                    @if(!empty($contact->operating_hours))
                                        <h2 class="working-title">{{__('Working Hours')}}</h2>
                                        <ul class="working-collection">
                                            @foreach(sortOperatingHours($contact->operating_hours) as $day => $hour)
                                                <li>
                                                    <p class="day-name">{{__($day)}}</p>
                                                    <p class="line-devider"></p>
                                                    <p class="day-hours">{{__($hour)}}</p>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    @if(!empty($social_media))
                                        <ul class="contact-social">
                                            @if($social_media->facebook)
                                                <li><a href="{{$social_media->facebook}}"><i
                                                                class="fa-brands fa-facebook-f"></i></a></li>
                                            @endif
                                            @if($social_media->twitter)
                                                <li><a href="{{$social_media->twitter}}"><i
                                                                class="fa-brands fa-twitter"></i></a></li>
                                            @endif
                                            @if($social_media->instagram)
                                                <li><a href="{{$social_media->instagram}}"><i
                                                                class="fa-brands fa-instagram"></i></a></li>
                                            @endif
                                            @if($social_media->linkedin)
                                                <li><a href="{{$social_media->linkedin}}"><i
                                                                class="fa-brands fa-linkedin-in"></i></a></li>
                                            @endif
                                            @if($social_media->youtube)
                                                <li><a href="{{$social_media->youtube}}"><i
                                                                class="fa-brands fa-youtube"></i></a></li>
                                            @endif
                                            @if($social_media->pinterest)
                                                <li><a href="{{$social_media->pinterest}}"><i
                                                                class="fa-brands fa-pinterest-p"></i></a></li>
                                            @endif
                                            @if($social_media->other)
                                                @php
                                                    $platform = extractPlatform($social_media->other);
                                                    $iconClass = $platform ? 'fa-brands fa-' . $platform : 'fa-solid fa-globe';
                                                @endphp
                                                <li><a href="{{$social_media->other}}"><i
                                                                class="{{$iconClass}}"></i></a></li>
                                            @endif
                                        </ul>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-7 col-xxl-8">
                        @include('frontend.layouts.partials.forms.contact-form', ['all_services' => $all_services])
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Contact Section End -->

    <!-- FAQ section Start -->
    @include('frontend.layouts.partials.faq.faq-alt',['faqs'=>$faqs])
    <!-- FAQ section End -->

    <!-- Subscribe Section Start -->
    @include('frontend.layouts.partials.subscribe.subscribe-alt')
    <!-- Subscribe Section End -->

    <!-- Footer Section Start -->
    @include('frontend.layouts.partials.footer.footer-alt')
    <!-- Footer Section End -->
@endsection
