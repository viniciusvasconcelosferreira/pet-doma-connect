<!-- Our Team Section Start -->
<div id="our-team" class="our-team section bg-jade-500">
    <div class="our-team-area">
        <div class="container">
            <div class="row">
                <div class="section-side-title-box">
                    <div>
                        <span class="section-side-span mb-5">{{__('Our Team')}}</span>
                        <h2>{{__('Discover our team')}}</h2>
                    </div>
                    <div>
                        <a href="team.html" class="btn btn-granny-apple-600-outline">{{__('View All')}}</a>
                    </div>
                </div>
            </div>
            <div class="row team-slider">
                @foreach($team as $member)
                    <div class="col-xxl-3 col-xl-4 col-md-6 mb-4">
                        <div class="single-team-member">
                            <div class="teams-img-box">
                                <img src="{{asset($member->full_photo)}}" alt="team">
                                <ul class="teams-socials">
                                    @foreach(json_decode($member->social_media) as $social)
                                        <li><a href="{{$social->link}}"><i class="fa-brands fa-{{$social->type}}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="teams-content-box">
                                <a href="#" class="teams-member-name">{{$member->name}}</a>
                                <p class="teams-member-designation">{{$member->function}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Our Team Section End -->
