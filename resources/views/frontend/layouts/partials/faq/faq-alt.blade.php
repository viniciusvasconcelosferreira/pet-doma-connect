<!-- FAQ section Start -->
<div id="faq" class="faq section bg-jade-500">
    <div class="faq-area">
        <div class="container">
            <div class="row">
                <div class="section-title-box">
                    <p class="section-sm-title"><span><img src="{{asset('assets/images/icons/cat-foot-1.svg')}}" alt=""></span>FAQs
                    </p>
                    <h2 class="section-title">{{__('Frequently Asked Question')}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="faq-box">
                    <div class="accordion" id="accordionFaq">
                        @foreach($faqs as $key => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq{{ $faq->formatted_key }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->formatted_key }}" aria-expanded="false" aria-controls="collapse{{ $faq->formatted_key }}">{{$faq->question}}</button>
                                </h2>
                                <div id="collapse{{ $faq->formatted_key }}" class="accordion-collapse collapse" aria-labelledby="faq{{ $faq->formatted_key }}"
                                     data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">{{$faq->answer}}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ section End -->
