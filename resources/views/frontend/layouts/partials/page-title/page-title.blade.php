<!-- Page Title Section Start -->
<div id="page-banner" class="page-banner section">
    <div class="page-title-area">
        <img src="{{asset('assets/images/banner-bg-1.svg')}}" alt="banner" class="banner-bg">
        <div class="page-title-box">
            <h2 class="page-title">{{__($title)}}</h2>
            <nav style="--bs-breadcrumb-divider: '-';" aria-label="breadcrumb">
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('frontend.home')}}">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__($breadcrumb)}}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Title Section End -->