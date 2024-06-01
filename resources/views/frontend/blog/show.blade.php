@extends('frontend.layouts.app')
@section('content')
    <!-- Header Section Start -->
    @include('frontend.layouts.partials.header.header-alt')
    <!-- Header Section End -->

    <!-- Page Title Section Start -->
    @include('frontend.layouts.partials.page-title.page-title', ['title' => 'Blog Details', 'breadcrumb' => 'Blog Details'])
    <!-- Page Title Section End -->

    <!-- Blog Details Section Start -->
    <div id="blog-details" class="blog-details section">
        <div class="blog-details-area">
            <div class="container">
                <div class="row">
                    <div class="blog-details-top">
                        <p class="bd-tag">{{$post->main_tag}}</p>
                        <h2 class="bd-title">{{__($post->title)}}</h2>
                        <div class="bd-post-desc">
                            <div class="bd-writter">
                                <img src="{{asset('assets/images/writter.png')}}" alt="writter">
                                <h4 class="bd-writter-name">{{$post->user->name}}</h4>
                            </div>
                            <div class="bd-pst">
                                <p><i class="fa-regular fa-calendar"></i></p>
                                <p>{{ucwords(\Carbon\Carbon::parse($post->posted_at)->translatedFormat('d M, Y'))}}</p>
                            </div>
                            <div class="bd-pst">
                                <p><i class="fa-regular fa-clock"></i></p>
                                <p>{{ucwords(\Carbon\Carbon::parse($post->posted_at)->translatedFormat('H:i'))}}</p>
                            </div>
                        </div>
                        <div class="bd-lg-img">
                            <img src="{{asset($post->full_featured_image)}}" alt="blog">
                        </div>
                    </div>
                    <div class="blog-details-content">
                        <div class="mb-4">
                            <h3 class="bd-content-title">Keeping your pet clean and healthy is an essential part of pet
                                care.</h3>
                            <p class="bd-content-text">Pet grooming is an important part of pet care that helps maintain
                                your pet’s physical and emotional well-being. Proper
                                grooming practices can prevent health issues, promote healthy skin and coat, and enhance
                                the
                                bond between you and your
                                furry companion. In this blog post, we will discuss the benefits of pet grooming and
                                some
                                tips for effective grooming.</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="bd-content-title">Benefits of Pet Grooming:.</h3>
                            <ol type="1" class="bd-content-collection">
                                <li>Improved Coat Health: Regular brushing and bathing remove dirt, debris, and loose
                                    hair from your pet’s coat, preventing
                                    tangles, mats, and skin irritations. Brushing also distributes natural oils
                                    throughout the coat, improving its shine and
                                    texture.
                                </li>
                                <li>Prevent Skin Issues: Grooming can help prevent skin problems such as allergies,
                                    infections, and parasites. Regular
                                    cleaning of your pet's ears, eyes, and teeth can prevent infections and related
                                    issues.
                                </li>
                                <li>Early Detection of Health Issues: During grooming sessions, you can check for any
                                    lumps, bumps, or changes in your pet’s
                                    skin or coat, which can indicate underlying health issues. Early detection of these
                                    issues can help prevent them from
                                    getting worse.
                                </li>
                                <li>Enhance Bonding: Grooming can be an enjoyable activity for both you and your pet,
                                    and it can help strengthen your bond.
                                    Regular grooming sessions provide an opportunity for you to show your pet affection
                                    and attention.
                                </li>
                            </ol>
                        </div>
                        <div class="mb-4">
                            <div class="bd-quote">
                                In conclusion, pet grooming is an essential part of responsible pet ownership. It helps
                                maintain your pet’s health,
                                comfort, and overall well-being. By incorporating regular grooming practices into your
                                pet care routine, you can help
                                keep your furry friend happy, healthy, and looking their best.
                                <img class="bd-quote-img" src="{{asset('assets/images/icons/blog-quote.svg')}}"
                                     alt="quote">
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="bd-content-text">In conclusion, pet grooming is an essential part of responsible
                                pet ownership. It helps maintain your pet’s health,
                                comfort, and overall well-being. By incorporating regular grooming practices into your
                                pet care routine, you can help
                                keep your furry friend happy, healthy, and looking their best.</p>
                        </div>
                    </div>
                    <div class="bolg-details-bottom">
                        @if(!empty($post->secondary_tags))
                            <div class="bd-tags-box">
                                <p>{{__('Tags:')}}</p>
                                <ul>
                                    @foreach(json_decode($post->secondary_tags) as $tag)
                                        <li>{{$tag}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="bd-socials">
                            <p>{{__('Share On:')}}</p>
                            <ul class="bd-social-collection">
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}&text={{ urlencode($post->title) }}"
                                       target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text={{ urlencode($post->title) }}"
                                       target="_blank">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(Request::url()) }}&text={{ urlencode($post->title) }}"
                                       target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->

    <!-- Subscribe Section Start -->
    @include('frontend.layouts.partials.subscribe.subscribe-alt')
    <!-- Subscribe Section End -->

    <!-- Footer Section Start -->
    @include('frontend.layouts.partials.footer.footer-alt')
    <!-- Footer Section End -->
@endsection