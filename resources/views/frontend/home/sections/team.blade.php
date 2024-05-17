<!-- Team Section Start -->
<div id="team" class="team section bg-jade-500">
    <div class="team-area">
        <div class="container">
            <div class="row">
                <div class="section-title-box text-center">
                    <span class="section-side-span">{{__('Our Team')}}</span>
                    <h2 class="section-title">{{__('Discover our team')}}</h2>
                </div>
            </div>
            <div class="row">
                @foreach($team as $item)
                    <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="single-team">
                            <div class="team-img-box">
                                <img src="{{asset($item->full_photo)}}" alt="team">
                            </div>
                            <div class="team-content">
                                <h3 class="team-name">{{$item->name}}</h3>
                                <p class="team-designation">{{$item->function}}</p>
                                @if(!empty($item->social_media))
                                    <ul class="team-social">
                                        @foreach(json_decode($item->social_media) as $social)
                                            <li><a href="{{$social->link}}"><i class="fa-brands fa-{{$social->type}}"></i></a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Team Section End -->
