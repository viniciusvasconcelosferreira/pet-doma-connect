@extends('frontend.layouts.app')
@section('content')
    <style>
        .quadrado-2 {
            background-color: #eefbf4;
            border-radius: 20%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 106px;
            width: 106px;
        }

        .quadrado-2 > img{
            width: 75px;
            height: 75px;
        }
    </style>
    <!-- Header Section Start -->
    @include('frontend.layouts.partials.header.header-alt')
    <!-- Header Section End -->

    <!-- Page Title Section Start -->
    <div id="page-banner" class="page-banner section">
        <div class="page-title-area">
            <img src="{{asset('assets/images/banner-bg-1.svg')}}" alt="banner" class="banner-bg">
            <div class="page-title-box">
                <h2 class="page-title">{{__('Services')}}</h2>
                <nav style="--bs-breadcrumb-divider: '-';" aria-label="breadcrumb">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('frontend.home')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Services')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Service Section Start -->
    <div id="services-2" class="services-2 section bg-jade-500">
        <div class="services-2-area">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-services-2">
                            <div class="quadrado-2">
                                <img src="{{asset('assets/images/services/001-beauty-saloon.svg')}}" alt="services">
                            </div>
                            <a class="services-name">Grooming</a>
                            <p class="services-text">Pet grooming involves maintaining the hygiene and appearance of
                                your furry friend.</p>
                            <a href="#" class="services-btn">{{__('View Details')}}<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-services-2">
                            <img src="assets/images/icons/service-2.svg" alt="services" class="services-icon">
                            <a class="services-name">Boarding</a>
                            <p class="services-text">Pet grooming involves maintaining the hygiene and appearance of
                                your furry friend.</p>
                            <a href="#" class="services-btn">{{__('View Details')}}<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-services-2">
                            <img src="assets/images/icons/service-3.svg" alt="services" class="services-icon">
                            <a class="services-name">Day Care</a>
                            <p class="services-text">Pet grooming involves maintaining the hygiene and appearance of
                                your furry friend.</p>
                            <a href="#" class="services-btn">{{__('View Details')}}<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-services-2">
                            <img src="assets/images/icons/service-4.svg" alt="services" class="services-icon">
                            <a class="services-name">Veterinary</a>
                            <p class="services-text">Pet grooming involves maintaining the hygiene and appearance of
                                your furry friend.</p>
                            <a href="#" class="services-btn">{{__('View Details')}}<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-services-2">
                            <img src="assets/images/icons/service-5.svg" alt="services" class="services-icon">
                            <a class="services-name">Vaccination</a>
                            <p class="services-text">Pet grooming involves maintaining the hygiene and appearance of
                                your furry friend.</p>
                            <a href="#" class="services-btn">{{__('View Details')}}<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-services-2">
                            <img src="assets/images/icons/service-6.svg" alt="services" class="services-icon">
                            <a class="services-name">Emergency Care</a>
                            <p class="services-text">Pet grooming involves maintaining the hygiene and appearance of
                                your furry friend.</p>
                            <a href="#" class="services-btn">{{__('View Details')}}<span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section End -->

    <!-- Happy Customer Section Start -->
    @include('frontend.home.sections.happy-customer')
    <!-- Happy Customer Section End -->

    <!-- Team Section Start -->
    @include('frontend.layouts.partials.team.team-alt')
    <!-- Team Section End -->

    <!-- Testimonial Section Start -->
    @include('frontend.home.sections.testimonial')
    <!-- Testimonial Section End -->

    <!-- Subscribe Section Start -->
    @include('frontend.layouts.partials.subscribe.subscribe-alt')
    <!-- Subscribe Section End -->

    <!-- Footer Section Start -->
    @include('frontend.layouts.partials.footer.footer-alt')
    <!-- Footer Section End -->
@endsection
