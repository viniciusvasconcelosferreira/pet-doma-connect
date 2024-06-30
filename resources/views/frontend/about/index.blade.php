@extends('frontend.layouts.app')

@section('title', $title)

@section('content')
    <!-- Header Section Start -->
    @include('frontend.layouts.partials.header.header-alt')
    <!-- Header Section End -->

    <!-- Page Title Section Start -->
    @include('frontend.layouts.partials.page-title.page-title', ['title' => 'About Us', 'breadcrumb' => 'About Us'])
    <!-- Page Title Section End -->

    <!-- About Us Section Start -->
    <div id="about-us" class="about-us section bg-jade-500">
        <div class="about-us-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-us-content">
                            <div class="section-content-box">
                                <span class="section-side-span">{{__('About Us')}}</span>
                                <h2 class="section-side-title mobile-hide">{{__('We are pleased to care for your pets')}}</h2>
                                <div class="about-us-img-box-2 d-lg-none">
                                    <img src="assets/images/about-2.png" alt="about-us" class="aui-lg-2">
                                </div>
                                <p class="section-side-text">{{__('Ultimately, pet care and veterinary services are critical for ensuring that our furry, feathered, or scaled friends lead happy, healthy lives.')}}</p>
                                <ul class="section-side-list column-2">
                                    <li class="mb-4">
                                        <span><img src="{{asset('assets/images/icons/new-tick.svg')}}" alt=""></span>
                                        {{__("Best Veterinarian's")}}
                                    </li>
                                    <li>
                                        <span><img src="{{asset('assets/images/icons/new-tick.svg')}}" alt=""></span>
                                        {{__("Bath and Grooming")}}
                                    </li>
                                    <li class="mb-4">
                                        <span><img src="{{asset('assets/images/icons/new-tick.svg')}}" alt=""></span>
                                        {{__('24/7 Hour Care')}}
                                    </li>
                                    <li>
                                        <span><img src="{{asset('assets/images/icons/new-tick.svg')}}" alt=""></span>
                                        {{__('Best Foods')}}
                                    </li>
                                </ul>
                                <a href="about.html" class="btn btn-granny-apple-600">{{__('More About Us')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="about-us-img-box-2">
                            <img src="assets/images/about-2.png" alt="about-us" class="aui-lg-2">
                            <img src="assets/images/about-3.png" alt="about-us" class="aui-lg-3">
                            <img src="assets/images/icons/about-dot.png" alt="about-us" class="aui-dot-icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Happy Customer Section Start -->
    @include('frontend.home.sections.happy-customer')
    <!-- Happy Customer Section End -->

    <!-- Our Mission Section Start -->
    @include('frontend.layouts.partials.mission.our-mission')
    <!-- Our Mission Section End -->

    <!-- Team Section Start -->
    @include('frontend.layouts.partials.team.team-alt')
    <!-- Team Section End -->

    @if(!empty($feedbacks))
        <!-- Testimonial Section Start -->
        @include('frontend.home.sections.testimonial')
        <!-- Testimonial Section End -->
    @endif

    <!-- Subscribe Section Start -->
    @include('frontend.layouts.partials.subscribe.subscribe-alt')
    <!-- Subscribe Section End -->

    <!-- Footer Section Start -->
    @include('frontend.layouts.partials.footer.footer-alt')
    <!-- Footer Section End -->
@endsection
