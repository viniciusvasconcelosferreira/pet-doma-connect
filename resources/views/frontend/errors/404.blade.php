@extends('frontend.layouts.app')
@section('content')
    @include('frontend.layouts.partials.header.header')
    <!-- Error Page Section Start -->
    <div id="error-page" class="error-page section">
        <div class="error-page-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <img class="error-img" src="{{asset('assets/images/404-1.png')}}" alt="404">
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="error-page-content">
                            <h2 class="error-title">OOPS!</h2>
                            <p class="error-text">{{__('The Page You Requested Could Not Be Found.')}}</p>
                            <a href="{{route('frontend.home')}}"
                               class="btn btn-granny-apple-600">{{__('Return Home')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Error Page Section End -->
@endsection
