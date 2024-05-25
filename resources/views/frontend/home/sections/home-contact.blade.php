<!-- Home Contact Section Start -->
<div id="home-contact" class="home-contact section bg-jade-500">
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
                                        <a href="{{cleanAndFormatPhoneNumber($contact->phone_number)}}" target="_blank">
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
                                    <li class="mb-4">
                                        <span><i class="fa-regular fa-envelope"></i></span> {{$contact->email}}
                                    </li>
                                @endif
                                @if($contact->address)
                                    <li>
                                        <span><i class="fa-solid fa-location-dot"></i></span> {{$contact->address}}
                                    </li>
                                @endif
                            </ul>
                        </div>
                        @if($contact->operating_hours)
                            <div class="working-hours-box">
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
                                        <li><a href="{{$social_media->other}}"><i class="{{$iconClass}}"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-7 col-xxl-8">
                    <form id="home-contact-form" class="home-contact-form" action="{{route('frontend.contact.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <h2 class="home-contact-title mb-10">{{__('Get A Service Now')}}</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="home-contact-name">{{__('Full Name')}}</label>
                                    <input type="text" class="form-control" id="home-contact-name" name="full_name"
                                           placeholder="{{__('Enter your name')}}" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="home-contact-email">{{__('Email Address')}}</label>
                                    <input type="email" class="form-control" id="home-contact-email" name="email"
                                           placeholder="johndoe@gmail.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="home-contact-phone">{{__('Phone Number')}}</label>
                                    <input type="text" class="form-control" id="home-contact-phone" name="phone_number"
                                           placeholder="(61) 9 8797-8775" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label>{{__('Service')}}</label>
                                    <select class="form-control" required name="service">
                                        <option value="" selected>{{__('Select a service')}}</option>
                                        @foreach($all_services as $service)
                                            <option value="{{$service}}">{{$service}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="form-group">
                                    <label for="home-contact-phone">{{__('Message')}}</label>
                                    <textarea class="form-control" id="home-contact-message" rows="5"
                                              placeholder="{{__('Write your message here')}}" name="message"></textarea>
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
