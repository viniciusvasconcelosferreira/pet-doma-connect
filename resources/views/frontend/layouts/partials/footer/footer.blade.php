<!-- Scroll To Top Start -->
<button id="scrollToTop" class="scrollToTop"><i class="fa-solid fa-arrow-up"></i></button>
<!-- Scroll To Top End -->

<!-- Footer Section Start -->
<footer id="footer" class="footer">
    <div class="footer-area">
        <img src="{{asset('assets/images/footer-3-bg.svg')}}" alt="footer-bg" class="footer-bg">
        <div class="container">
            <div class="row footer-middle">
                <div class="col-xl-5 col-sm-6 mb-4">
                    <div class="footer-content">
                        <div class="footer-logo">
                            <img src="{{asset('assets/images/logo-pet-doma-footer.svg')}}" alt="logo" style="width: 177px">
                        </div>
                        <p>{{__('Pet care and veterinary services are crucial for maintaining the health and well-being of our beloved animal companions')}}</p>
                        <ul class="footer-social">
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
                </div>
                <div class="col-xl-2 col-sm-6 mb-4">
                    <div class="footer-menu">
                        <h2 class="menu-category">{{__('Quick Links')}}</h2>
                        <ul class="footer-menu-list">
                            <li><a href="team.html">{{__('Our Team')}}</a></li>
                            <li><a href="about.html">{{__('About Us')}}</a></li>
                            <li><a href="pricing.html">{{__('Pricing')}}</a></li>
                            <li><a href="blog.html">{{__('Blog')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 mb-4">
                    <div class="footer-menu">
                        <h2 class="menu-category">{{__('Legal')}}</h2>
                        <ul class="footer-menu-list">
                            <li><a href="faq.html">{{__('FAQs')}}</a></li>
                            <li><a href="{{route('frontend.contact')}}">{{__('Contact Us')}}</a></li>
                            <li><a href="{{route('frontend.conditions')}}">{{__('Terms & Condition')}}</a></li>
                            <li><a href="{{route('frontend.privacy')}}">{{__('Privacy & Policy')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="menu-category">{{__('Contact Us')}}</h2>
                        <ul class="contact-info-collection">
                            @if($contact->phone_number)
                                @if($contact->phone_is_whatsapp)
                                    <a href="{{cleanAndFormatPhoneNumber($contact->phone_number)}}" target="_blank">
                                        <li class="mb-4">
                                            <p><span><i
                                                            class="fa-solid fa-phone"></i></span>
                                            </p> {{$contact->phone_number}}
                                        </li>
                                    </a>
                                @else
                                    <li class="mb-4">
                                        <p><span><i class="fa-solid fa-phone"></i></span></p> {{$contact->phone_number}}
                                    </li>
                                @endif
                            @endif
                            @if($contact->cell_phone_number)
                                @if($contact->cell_phone_is_whatsapp)
                                    <a href="{{cleanAndFormatPhoneNumber($contact->cell_phone_number)}}"
                                       target="_blank">
                                        <li class="mb-4">
                                            <p><span><i class="fa-solid fa-mobile-screen"></i></span>
                                            </p> {{$contact->cell_phone_number}}
                                        </li>
                                    </a>
                                @else
                                    <li class="mb-4">
                                        <p><span><i class="fa-solid fa-mobile-screen"></i></span>
                                        </p> {{$contact->cell_phone_number}}
                                    </li>
                                @endif
                            @endif
                            @if($contact->email)
                                <a href="maito:{{$contact->email}}">
                                    <li class="mb-4">
                                        <p><span><i class="fa-regular fa-envelope"></i></span>
                                        </p> {{$contact->email}}
                                    </li>
                                </a>
                            @endif
                            @if($contact->address)
                                <li>
                                    <p><span><i class="fa-solid fa-location-dot"></i></span></p> {{$contact->address}}
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-devider"></div>
        <div class="container">
            <div class="footer-bottom">
                <p class="footer-copyright">&copy; @php echo date('Y') @endphp PET
                    D.O.M.A. {{__('All Rights Reserved')}}</p>
                <div class="footer-bottom-link">
                    <a href="{{route('frontend.privacy')}}">{{__('Privay & Policy')}}</a>
                    <p>|</p>
                    <a href="{{route('frontend.conditions')}}">{{__('Terms & Conditions')}}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
