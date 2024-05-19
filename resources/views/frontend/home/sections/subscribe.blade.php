<!-- Subscribe Section Start -->
<div id="subscribe" class="subscribe section-pb">
    <div class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="subscibe-area">
                    <div class="subscribe-box">
                        <img class="subscribe-bg" src="{{asset('assets/images/subsciption-bg-1.svg')}}"
                             alt="subscribe-bg">
                        <img class="subscribe-left" src="{{asset('assets/images/get-touch-3.png')}}" alt="subscribe">
                        <img class="subscribe-right" src="{{asset('assets/images/get-touch-4.png')}}" alt="subscribe">
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
</div>
<!-- Subscribe Section End -->
