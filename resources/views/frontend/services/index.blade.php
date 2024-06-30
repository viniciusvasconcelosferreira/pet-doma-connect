@extends('frontend.layouts.app')

@section('title', $title)

@section('styles')
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

        .quadrado-2 > img {
            width: 75px;
            height: 75px;
        }
    </style>
@endsection

@section('content')
    <!-- Header Section Start -->
    @include('frontend.layouts.partials.header.header-alt')
    <!-- Header Section End -->

    <!-- Page Title Section Start -->
    @include('frontend.layouts.partials.page-title.page-title', ['title' => 'Services', 'breadcrumb' => 'Services'])
    <!-- Page Title Section End -->

    <!-- Service Section Start -->
    <div id="services-2" class="services-2 section bg-jade-500">
        <div class="services-2-area">
            <div class="container">
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-xxl-4 col-md-6 mb-4">
                            <div class="single-services-2">
                                <div class="quadrado-2"><img src="{{asset($service->full_icon)}}" alt="services"></div>
                                <a class="services-name">{{$service->name}}</a>
                                <p class="services-text">{{$service->description}}</p>
                                <a href="{{route('frontend.services.show',$service->slug)}}"
                                   class="services-btn">{{__('View Details')}}<span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section End -->

    <!-- Happy Customer Section Start -->
    @include('frontend.home.sections.happy-customer')
    <!-- Happy Customer Section End -->

    <!-- Team Section Start -->
    @include('frontend.layouts.partials.team.team-alt',['team'=>$team])
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
