<!-- Happy Customer Section Start -->
<div id="happy-customer" class="happy-customer">
    <div class="happy-customer-area">
        <div class="container">
            <div class="row">
                @if(!empty($goals->goals))
                    @foreach(json_decode($goals->goals) as $goal)
                        @php
                            $formattedNumber = formatNumberShort($goal->counter);
                        @endphp
                        <div class="col-sm-6 col-lg-3 mb-4">
                            <div class="single-customer">
                                <h2 class="customer-number">+<span
                                            class="counter">{{$formattedNumber['count']}}</span>{{$formattedNumber['unit_suffixes']??''}}
                                </h2>
                                <p class="customer-category">{{__($goal->name)}}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Happy Customer Section End -->
