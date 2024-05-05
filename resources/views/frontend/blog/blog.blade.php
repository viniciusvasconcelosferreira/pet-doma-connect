@extends('frontend.layouts.app')
@section('content')
    <!-- Header Section Start -->
    @include('frontend.layouts.partials.header.header-alt')
    <!-- Header Section End -->

    <!-- Page Title Section Start -->
    <div id="page-banner" class="page-banner section">
        <div class="page-title-area">
            <img src="{{asset('assets/images/banner-bg-1.svg')}}" alt="banner" class="banner-bg">
            <div class="page-title-box">
                <h2 class="page-title">Blogs</h2>
                <nav style="--bs-breadcrumb-divider: '-';" aria-label="breadcrumb">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('frontend.home')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Blogs')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Blog Section Start -->
    <div id="blog" class="blog section">
        <div class="blog-area">
            <div class="container">
                <div class="row">
                    <div class="section-title-box">
                        <p class="section-sm-title"><span><img src="{{asset('assets/images/icons/cat-foot-1.svg')}}" alt=""></span>{{__('Our Blogs')}}</p>
                        <h2 class="section-title">{{__('Our Recent Blogs')}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-blog single-blog-2">
                            <div class="blog-top">
                                <a href="blog-details.html" class="blog-img-box">
                                    <img src="assets/images/blog-1.png" alt="blog">
                                </a>
                                <div class="blog-cat">Grooming</div>
                            </div>
                            <div class="blog-content">
                                <a class="blog-title" href="blog-details.html">Grooming your pet, what you need to
                                    know</a>
                                <p class="blog-text">Pet grooming involves maintaining the hygiene and appearance of
                                    your furry friend.</p>
                                <hr>
                                <div class="bottom-content">
                                    <p class="blog-date">{{ucwords(\Carbon\Carbon::parse('February 27, 2023')->translatedFormat('d M, Y'))}}</p>
                                    <a href="blog-details.html" class="blog-btn">{{__('View Details')}} <span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-blog single-blog-2">
                            <div class="blog-top">
                                <a href="blog-details.html" class="blog-img-box">
                                    <img src="assets/images/blog-2.png" alt="blog">
                                </a>
                                <div class="blog-cat">Grooming</div>
                            </div>
                            <div class="blog-content">
                                <a class="blog-title" href="blog-details.html">10 essential tips for keeping your pet
                                    healthy and happy</a>
                                <p class="blog-text">Pet grooming involves maintaining the hygiene and appearance of
                                    your furry friend.</p>
                                <hr>
                                <div class="bottom-content">
                                    <p class="blog-date">February 27, 2023</p>
                                    <a href="blog-details.html" class="blog-btn">{{__('View Details')}} <span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-blog single-blog-2">
                            <div class="blog-top">
                                <a href="blog-details.html" class="blog-img-box">
                                    <img src="assets/images/blog-3.png" alt="blog">
                                </a>
                                <div class="blog-cat">Grooming</div>
                            </div>
                            <div class="blog-content">
                                <a class="blog-title" href="blog-details.html">Pet Nutrition Separating Fact from
                                    Fiction</a>
                                <p class="blog-text">Pet grooming involves maintaining the hygiene and appearance of
                                    your furry friend.</p>
                                <hr>
                                <div class="bottom-content">
                                    <p class="blog-date">February 27, 2023</p>
                                    <a href="blog-details.html" class="blog-btn">{{__('View Details')}} <span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-blog single-blog-2">
                            <div class="blog-top">
                                <a href="blog-details.html" class="blog-img-box">
                                    <img src="assets/images/blog-2.png" alt="blog">
                                </a>
                                <div class="blog-cat">Grooming</div>
                            </div>
                            <div class="blog-content">
                                <a class="blog-title" href="blog-details.html">Grooming your pet, what you need to
                                    know</a>
                                <p class="blog-text">Pet grooming involves maintaining the hygiene and appearance of
                                    your furry friend.</p>
                                <hr>
                                <div class="bottom-content">
                                    <p class="blog-date">February 27, 2023</p>
                                    <a href="blog-details.html" class="blog-btn">{{__('View Details')}} <span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-blog single-blog-2">
                            <div class="blog-top">
                                <a href="blog-details.html" class="blog-img-box">
                                    <img src="assets/images/blog-3.png" alt="blog">
                                </a>
                                <div class="blog-cat">Grooming</div>
                            </div>
                            <div class="blog-content">
                                <a class="blog-title" href="blog-details.html">Grooming your pet, what you need to
                                    know</a>
                                <p class="blog-text">Pet grooming involves maintaining the hygiene and appearance of
                                    your furry friend.</p>
                                <hr>
                                <div class="bottom-content">
                                    <p class="blog-date">February 27, 2023</p>
                                    <a href="blog-details.html" class="blog-btn">{{__('View Details')}} <span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-blog single-blog-2">
                            <div class="blog-top">
                                <a href="blog-details.html" class="blog-img-box">
                                    <img src="assets/images/blog-1.png" alt="blog">
                                </a>
                                <div class="blog-cat">Grooming</div>
                            </div>
                            <div class="blog-content">
                                <a class="blog-title" href="blog-details.html">Grooming your pet, what you need to
                                    know</a>
                                <p class="blog-text">Pet grooming involves maintaining the hygiene and appearance of
                                    your furry friend.</p>
                                <hr>
                                <div class="bottom-content">
                                    <p class="blog-date">February 27, 2023</p>
                                    <a href="blog-details.html" class="blog-btn">{{__('View Details')}} <span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-blog single-blog-2">
                            <div class="blog-top">
                                <a href="blog-details.html" class="blog-img-box">
                                    <img src="assets/images/blog-3.png" alt="blog">
                                </a>
                                <div class="blog-cat">Grooming</div>
                            </div>
                            <div class="blog-content">
                                <a class="blog-title" href="blog-details.html">Grooming your pet, what you need to
                                    know</a>
                                <p class="blog-text">Pet grooming involves maintaining the hygiene and appearance of
                                    your furry friend.</p>
                                <hr>
                                <div class="bottom-content">
                                    <p class="blog-date">February 27, 2023</p>
                                    <a href="blog-details.html" class="blog-btn">{{__('View Details')}} <span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-blog single-blog-2">
                            <div class="blog-top">
                                <a href="blog-details.html" class="blog-img-box">
                                    <img src="assets/images/blog-1.png" alt="blog">
                                </a>
                                <div class="blog-cat">Grooming</div>
                            </div>
                            <div class="blog-content">
                                <a class="blog-title" href="blog-details.html">Grooming your pet, what you need to
                                    know</a>
                                <p class="blog-text">Pet grooming involves maintaining the hygiene and appearance of
                                    your furry friend.</p>
                                <hr>
                                <div class="bottom-content">
                                    <p class="blog-date">February 27, 2023</p>
                                    <a href="blog-details.html" class="blog-btn">{{__('View Details')}} <span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="single-blog single-blog-2">
                            <div class="blog-top">
                                <a href="blog-details.html" class="blog-img-box">
                                    <img src="assets/images/blog-2.png" alt="blog">
                                </a>
                                <div class="blog-cat">Grooming</div>
                            </div>
                            <div class="blog-content">
                                <a class="blog-title" href="blog-details.html">Grooming your pet, what you need to
                                    know</a>
                                <p class="blog-text">Pet grooming involves maintaining the hygiene and appearance of
                                    your furry friend.</p>
                                <hr>
                                <div class="bottom-content">
                                    <p class="blog-date">February 27, 2023</p>
                                    <a href="blog-details.html" class="blog-btn">{{__('View Details')}} <span><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination Start -->
                <div class="pagination-box mt-3 mt-md-5">
                    <ul>
                        <li>
                            <a class="pagination-link prev" href="#"><i class="fa-solid fa-chevron-left"></i></a>
                        </li>
                        <li>
                            <a class="pagination-link active" href="#">1</a>
                        </li>
                        <li>
                            <a class="pagination-link" href="#">2</a>
                        </li>
                        <li>
                            <a class="pagination-link" href="#">3</a>
                        </li>
                        <li>
                            <a class="next pagination-link active" href="#"><i
                                    class="fa-solid fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- Pagination End -->
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

    <!-- Subscribe Section Start -->
    @include('frontend.layouts.partials.subscribe.subscribe-alt')
    <!-- Subscribe Section End -->

    <!-- Footer Section Start -->
    @include('frontend.layouts.partials.footer.footer-alt')
    <!-- Footer Section End -->
@endsection
