<!-- Home Blog Section Start -->
<div id="home-blog" class="home-blog section-pb bg-jade-500">
    <div class="home-blog-area">
        <div class="container">
            <div class="row">
                <div class="section-side-title-box">
                    <div>
                        <span class="section-side-span mb-5">{{__('Our Insights')}}</span>
                        <h2>{{__('Our Recent Blogs')}}</h2>
                    </div>
                    <div>
                        <a href="{{route('frontend.blog')}}" class="btn btn-granny-apple-600-outline">{{__('View All')}}</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($most_recent_posts as $post)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="single-blog">
                            <div class="blog-top">
                                <a href="{{route('frontend.blog.show',$post->slug)}}" class="blog-img-box">
                                    <img src="{{asset($post->full_thumbnail)}}" alt="blog">
                                </a>
                                <div class="blog-cat">{{$post->main_tag}}</div>
                            </div>
                            <div class="blog-content">
                                <a class="blog-title" href="{{route('frontend.blog.show',$post->slug)}}">{{$post->title}}</a>
                                <p class="blog-date">{{ucwords(\Carbon\Carbon::parse($post->posted_at)->translatedFormat('d M, Y'))}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Home Blog Section End -->
