<!-- Header Section Start -->
<header id="header" class="header header-2">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-xl">
                <div class="container-fluid">
                    <a class="navbar-brand header-logo" href="{{route('frontend.home')}}">
                        <div class="">
{{--                            <img id="header-logo" src="assets/images/icons/logo.svg" alt="logo">--}}
                            <img id="header-logo" src="{{asset('assets/images/logo.png')}}" alt="logo">
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#headerNavbarDropdown" aria-controls="headerNavbarDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-menu-icon"><i class="fa-solid fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="headerNavbarDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('frontend.home')) active @endif" href="{{route('frontend.home')}}">{{__('Home')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('frontend.about')) active @endif" href="{{route('frontend.about')}}">{{__('About')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('frontend.services')) active @endif" href="{{route('frontend.services')}}">{{__('Services')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs(['frontend.blog','frontend.blog.show'])) active @endif" href="{{route('frontend.blog')}}">{{__('Blogs')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->routeIs('frontend.contact')) active @endif" href="{{route('frontend.contact')}}">{{__('Contact')}}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                                    <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                                    <li><a class="dropdown-item" href="services.html">Services</a></li>
                                    <li><a class="dropdown-item" href="team.html">Team</a></li>
                                    <li><a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
                                    <li><a class="dropdown-item" href="sign-in.html">Sign In</a></li>
                                    <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                    <li><a class="dropdown-item" href="404.html">Error Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header-buttons d-none d-xl-flex">
                        <a href="{{route('frontend.contact')}}" class="btn btn-granny-apple-600">{{__('Contact Us')}}</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- Header Section End -->
