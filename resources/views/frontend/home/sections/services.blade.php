<!-- Services Section Start -->
@section('styles')
    <style>
        .rounded-background {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #fff;
            width: 74px;
            height: 74px;
            border-radius: 50%;
        }

        .rounded-background > img {
            height: 48px;
            width: 48px;
        }
    </style>
@endsection
<div id="services" class="services section bg-jade-200">
    <div class="services-area">
        <div class="container">
            <div class="row">
                <div class="section-title-box">
                    <p class="section-sm-title"><span><img src="{{asset('assets/images/icons/new-cat-foot.svg')}}"
                                                           alt=""></span>{{__('Our Services')}}</p>
                    <h2 class="section-title">{{__('Services We Provide')}}</h2>
                </div>
            </div>
            <div class="row">
                @empty($services)
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="single-service">
                            <div class="single-service-img">
                                <img src="{{asset('assets/images/icons/service-rounded-1.svg')}}" alt="">
                            </div>
                            <h2 class="single-service-title">{{__('Grooming')}}</h2>
                            <p class="single-service-text">{{__('Pet grooming involves maintaining the hygiene and appearance of your furry friend.')}}</p>
                            <a href="{{route('frontend.services',\Illuminate\Support\Str::slug(__('Grooming')))}}" class="btn-details">{{__('View Details')}} <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="single-service">
                            <div class="single-service-img">
                                <img src="{{asset('assets/images/icons/service-rounded-2.svg')}}" alt="">
                            </div>
                            <h2 class="single-service-title">{{__('Boarding')}}</h2>
                            <p class="single-service-text">{{__('Pet grooming involves maintaining the hygiene and appearance of your furry friend.')}}</p>
                            <a href="{{route('frontend.services',\Illuminate\Support\Str::slug(__('Boarding')))}}" class="btn-details">{{__('View Details')}} <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="single-service">
                            <div class="single-service-img">
                                <img src="{{asset('assets/images/icons/service-rounded-3.svg')}}" alt="">
                            </div>
                            <h2 class="single-service-title">{{__('Day Care')}}</h2>
                            <p class="single-service-text">{{__('Pet grooming involves maintaining the hygiene and appearance of your furry friend.')}}</p>
                            <a href="{{route('frontend.services',\Illuminate\Support\Str::slug(__('Day Care')))}}" class="btn-details">{{__('View Details')}} <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="single-service">
                            <div class="single-service-img">
                                <img src="{{asset('assets/images/icons/service-rounded-4.svg')}}" alt="">
                            </div>
                            <h2 class="single-service-title">{{__('Veterinary')}}</h2>
                            <p class="single-service-text">{{__('Pet grooming involves maintaining the hygiene and appearance of your furry friend.')}}</p>
                            <a href="{{route('frontend.services',\Illuminate\Support\Str::slug(__('Veterinary')))}}" class="btn-details">{{__('View Details')}} <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                @else
                    @foreach($services as $service)
                        <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="single-service">
                                <div class="single-service-img">
                                    <div class="rounded-background">
                                        <img src="{{asset($service->icon)}}" alt="{{__('Icone '.$service->name)}}">
                                    </div>
                                </div>
                                <h2 class="single-service-title">{{__($service->name)}}</h2>
                                <p class="single-service-text">{{__($service->description)}}</p>
                                <a href="{{route('frontend.services',$service->slug)}}"
                                   class="btn-details">{{__('View Details')}} <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    @endforeach
                @endempty
            </div>
        </div>
    </div>
</div>
<!-- Services Section End -->
