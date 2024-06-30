@extends('frontend.layouts.app')

@section('title', $title)

@section('styles')
    <style>
        .single-blog.single-blog-2 {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 514px;
        }

        .single-blog.single-blog-2 > .blog-content {
            min-height: 234px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
@endsection
@section('content')
    <!-- Header Section Start -->
    @include('frontend.layouts.partials.header.header-alt')
    <!-- Header Section End -->

    <!-- Page Title Section Start -->
    @include('frontend.layouts.partials.page-title.page-title', ['title' => 'Blogs', 'breadcrumb' => 'Blogs'])
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
                    @foreach($posts as $post)
                        <div class="col-xxl-4 col-md-6 mb-4">
                            <div class="single-blog single-blog-2">
                                <div class="blog-top">
                                    <a href="{{route('frontend.blog.show',$post->slug)}}" class="blog-img-box">
                                        <img src="{{$post->full_thumbnail}}" alt="blog">
                                    </a>
                                    <div class="blog-cat">{{$post->main_tag}}</div>
                                </div>
                                <div class="blog-content">
                                    <a class="blog-title" href="{{route('frontend.blog.show',$post->slug)}}">{{$post->title}}</a>
                                    <p class="blog-text">{{$post->resume}}</p>
                                    <hr>
                                    <div class="bottom-content">
                                        <p class="blog-date">{{ucwords(\Carbon\Carbon::parse($post->posted_at)->translatedFormat('d M, Y'))}}</p>
                                        <a href="{{route('frontend.blog.show',$post->slug)}}" class="blog-btn">{{__('View Details')}} <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination Start -->
                {{$posts->links('frontend.layouts.partials.pagination.custom')}}
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
