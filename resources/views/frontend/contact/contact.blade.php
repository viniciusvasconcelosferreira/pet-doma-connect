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
    <div id="page-banner" class="page-banner section">
        <div class="page-title-area">
            <img src="{{asset('assets/images/banner-bg-1.svg')}}" alt="banner" class="banner-bg">
            <div class="page-title-box">
                <h2 class="page-title">{{__('Contact Us')}}</h2>
                <nav style="--bs-breadcrumb-divider: '-';" aria-label="breadcrumb">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('frontend.home')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Contact')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
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
                                    <li class="mb-4">
                                        <span><i class="fa-solid fa-phone"></i></span> +1 234 567 890
                                    </li>
                                    <li class="mb-4">
                                        <span><i class="fa-regular fa-envelope"></i></span> purrwell@gmail.com
                                    </li>
                                    <li>
                                        <span><i class="fa-solid fa-location-dot"></i></span> 2092 Owen LaneFort
                                        Myers, FL 33901
                                    </li>
                                </ul>
                            </div>
                            <div class="working-hours-box">
                                <h2 class="working-title">{{__('Working Hours')}}</h2>
                                <ul class="working-collection">
                                    <li>
                                        <p class="day-name">{{__('Monday')}}</p>
                                        <p class="line-devider"></p>
                                        <p class="day-hours">01:45 AM - 9:45 PM</p>
                                    </li>
                                    <li>
                                        <p class="day-name">{{__('Tuesday')}}</p>
                                        <p class="line-devider"></p>
                                        <p class="day-hours">02:45 AM - 9:45 PM</p>
                                    </li>
                                    <li>
                                        <p class="day-name">{{__('Wednesday')}}</p>
                                        <p class="line-devider"></p>
                                        <p class="day-hours">05:45 AM - 8:45 PM</p>
                                    </li>
                                    <li>
                                        <p class="day-name">{{__('Thursday')}}</p>
                                        <p class="line-devider"></p>
                                        <p class="day-hours">01:45 AM - 9:45 PM</p>
                                    </li>
                                    <li>
                                        <p class="day-name">{{__('Friday')}}</p>
                                        <p class="line-devider"></p>
                                        <p class="day-hours">05:45 AM - 8:45 PM</p>
                                    </li>
                                </ul>

                                <ul class="contact-social">
                                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xxl-8">
                        <form id="home-contact-form" class="home-contact-form">
                            <div class="row">
                                <h2 class="home-contact-title mb-10">{{__('Get A Service Now')}}</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="home-contact-name">{{__('Full Name')}}</label>
                                        <input type="text" class="form-control" id="home-contact-name"
                                               placeholder="{{__('Enter your name')}}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="home-contact-email">{{__('Email Address')}}</label>
                                        <input type="email" class="form-control" id="home-contact-email"
                                               placeholder="johndoe@gmail.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="home-contact-phone">{{__('Phone Number')}}</label>
                                        <input type="text" class="form-control" id="home-contact-phone"
                                               placeholder="(61) 9 8797-8775">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label>{{__('Service')}}</label>
                                        <select class="form-control">
                                            <option selected>Veterinary 1</option>
                                            <option>Veterinary 2</option>
                                            <option>Veterinary 3</option>
                                            <option>Veterinary 4</option>
                                            <option>Veterinary 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="home-contact-phone">{{__('Message')}}</label>
                                        <textarea class="form-control" id="home-contact-message" rows="5"
                                                  placeholder="{{__('Write your message here')}}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-granny-apple-600" type="submit">{{__('Contact Us')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Contact Section End -->

    <!-- FAQ section Start -->
    @include('frontend.layouts.partials.faq.faq-alt')
    <!-- FAQ section End -->

    <!-- Subscribe Section Start -->
    @include('frontend.layouts.partials.subscribe.subscribe-alt')
    <!-- Subscribe Section End -->

    <!-- Footer Section Start -->
    @include('frontend.layouts.partials.footer.footer-alt')
    <!-- Footer Section End -->
@endsection
