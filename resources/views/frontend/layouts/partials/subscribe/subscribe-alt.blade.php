<!-- Subscribe Section Start -->
<div id="subscribe" class="subscribe subscribe-2">
    <div class="subscribe-area">
        <div class="container">
            <div class="subscibe-area position-relative">
                <img class="subscribe-bg" src="{{asset('assets/images/subsciption-bg-2.svg')}}" alt="subscribe-bg">
                <img class="subscribe-cat-2" src="{{asset('assets/images/subscribe-2-default.png')}}" alt="subscribe-cat">
                <div class="subscribe-box subscribe-box-2">
                    <div class="subscribe-content">
                        <p>{{__('Receive our updates')}}</p>
                        <h2>{{__('Helpful Hints for Keeping Your Pet Happy and Healthy')}}</h2>
                        <form class="subscribe-form-box" method="post" action="{{route('frontend.newsletter.subscribe')}}">
                            @csrf
                            <input class="form-control" id="emai" name="email" type="email" placeholder="{{__('Your Mail Here')}}" required>
                            <button class="btn btn-granny-apple-600" type="submit">{{__('Subscribe')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe Section End -->
