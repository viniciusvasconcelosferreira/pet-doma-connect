<!-- Header Section Start -->
<header id="header" class="header header-2">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-xl">
                <div class="container-fluid">
                    <a class="navbar-brand header-logo" href="{{route('frontend.home')}}">
                        <div class="">
                            <img id="header-logo" src="{{asset('assets/images/logo-pet-doma-v2.svg')}}" alt="logo" style="width: 177px">
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
