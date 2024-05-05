<!-- Happy Customer Section Start -->
<div id="happy-customer" class="happy-customer">
    <div class="happy-customer-area">
        <div class="container">
            <div class="row">
                @forelse(json_decode($goals->goals) as $goal)
                    @php
                        $formattedNumber = formatNumberShort($goal->counter);
                    @endphp
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="single-customer">
                            <h2 class="customer-number">+<span class="counter">{{$formattedNumber['count']}}</span>{{$formattedNumber['unit_suffixes']??''}}</h2>
                            <p class="customer-category">{{__($goal->name)}}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="single-customer">
                            <h2 class="customer-number">+<span class="counter">5</span>k</h2>
                            <p class="customer-category">{{__('Happy Customers')}}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="single-customer">
                            <h2 class="customer-number">+<span class="counter">45</span></h2>
                            <p class="customer-category">{{__('Awards')}}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="single-customer">
                            <h2 class="customer-number">+<span class="counter">200</span></h2>
                            <p class="customer-category">{{__('Professionals')}}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="single-customer">
                            <h2 class="customer-number">+<span class="counter">10</span></h2>
                            <p class="customer-category">{{__('Years of experience')}}</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
<!-- Happy Customer Section End -->
