<!-- About Us Section Start -->
@section('styles')
    <style>
        .quadrado {
            width: 60px;
            height: 60px;
            background-color: #19825c;
            border-radius: 7%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .quadrado > img {
            height: 34px;
            width: 34px;
            filter: brightness(0) saturate(100%) invert(100%) sepia(100%) saturate(0%) hue-rotate(4deg) brightness(103%) contrast(102%);
        }
    </style>
@endsection
<div id="features" class="features section bg-jade-500">
    <div class="features-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2 d-none d-lg-block">
                    <div class="features-lg-img">
                        <img src="{{asset($features->image??'assets/images/features-lg-default.png')}}" alt="about-us" class="features-lg">
                        <img src="{{asset('assets/images/icons/features-dot.svg')}}" alt="features-sm-img"
                             class="features-dot">
                        <div class="safe-box">
                            <div class="safe-icon-box">
                                <img src="{{asset('assets/images/icons/safe-3.svg')}}" alt="ebook-sm">
                            </div>
                            <div class="safe-content">
                                <h4>100%</h4>
                                <p>{{__('Safe Your Pets')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-content-box">
                            <span class="section-side-span">{{__('Our Features')}}</span>
                            <h2 class="section-side-title mobile-hide">{{__($features->title??'Our best staff looks after your pets')}}</h2>
                            <div class="features-lg-img d-lg-none">
                                <img src="{{asset($features->image??'assets/images/features-lg-default.png')}}" alt="about-us"
                                     class="features-lg">
                                <img src="{{asset('assets/images/icons/features-dot.svg')}}" alt="features-sm-img"
                                     class="features-dot">
                            </div>
                            <p class="section-side-text">{{__($features->subtitle??'The Purrwell team is dedicated to providing the highest quality care for your dog. Everyone of our campers receives individual attention and sensitive loving care.')}}</p>
                            <ul class="section-featurs-list">
                                @forelse(json_decode($features?->features) as $feature)
                                    <li class="single-feature">
                                        <div>
                                            <div class="features-img-box">
                                                <div class="quadrado"><img src="{{asset($feature->icon)}}" alt="Item {{__($feature->name)}}"></div>
                                            </div>
                                        </div>
                                        <div class="features-content">
                                            <h3 class="fc-title">{{__($feature->name)}}</h3>
                                            <p class="fc-text">{{__($feature->describe)}}</p>
                                        </div>
                                    </li>
                                @empty
                                    <li class="single-feature">
                                        <div>
                                            <div class="features-img-box">
                                                <img src="{{asset('assets/images/icons/features-1.svg')}}" alt="Features">
                                            </div>
                                        </div>
                                        <div class="features-content">
                                            <h3 class="fc-title">{{__('Vaccinations')}}</h3>
                                            <p class="fc-text">{{__("Immunizations to protect your pet against common and potentially dangerous illnesses.")}}</p>
                                        </div>
                                    </li>
                                    <li class="single-feature">
                                        <div>
                                            <div class="features-img-box">
                                                <img src="{{asset('assets/images/icons/features-2.svg')}}" alt="Features">
                                            </div>
                                        </div>
                                        <div class="features-content">
                                            <h3 class="fc-title">{{__('Nutrition Counseling')}}</h3>
                                            <p class="fc-text">{{__("Advice on selecting the right food and supplem-ents for your pet's specific needs.")}}</p>
                                        </div>
                                    </li>
                                    <li class="single-feature">
                                        <div>
                                            <div class="features-img-box">
                                                <img src="{{asset('assets/images/icons/features-3.svg')}}" alt="Features">
                                            </div>
                                        </div>
                                        <div class="features-content">
                                            <h3 class="fc-title">{{__('Pet insurance')}}</h3>
                                            <p class="fc-text">{{__("Insurance plans that can help cover the costs of veterinary care and treatments.")}}</p>
                                        </div>
                                    </li>
                                    <li class="single-feature">
                                        <div>
                                            <div class="features-img-box">
                                                <img src="{{asset('assets/images/icons/features-4.svg')}}" alt="Features">
                                            </div>
                                        </div>
                                        <div class="features-content">
                                            <h3 class="fc-title">{{__('Dental Care')}}</h3>
                                            <p class="fc-text">{{__("Routine cleanings and dental exams to maintain your pet's oral health.")}}</p>
                                        </div>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us Section End -->
