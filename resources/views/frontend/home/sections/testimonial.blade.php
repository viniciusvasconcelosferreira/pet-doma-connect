<!-- Testimonial Section Start -->
<div id="testimonial" class="testimonial section bg-jade-200">
    <div class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="section-side-title-box">
                    <h2>{{__('Customers Feedback')}}</h2>
                    <div>
                        <ul class="slider-btn-box">
                            <li id="testimonial-prev-1" class="prev"><i class="fa-solid fa-chevron-left"></i></li>
                            <li id="testimonial-next-1" class="next"><i class="fa-solid fa-chevron-right"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="testimonial-1-slider" class="testimonial-1-slider">
                @if(!empty($feedbacks))
                    @foreach($feedbacks as $feedback)
                        <div class="single-testimonial">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="testionial-content">
                                        <div class="testiomonial-top">
                                            <div class="testimonial-img-box d-md-none">
                                                <img src="{{asset($feedback->full_photo)}}"
                                                     alt="testimonial">
                                            </div>
                                            <ul class="testimonial-rating-collection">
                                                @for($i = 0; $i < $feedback->rating; $i++)
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                @endfor
                                            </ul>
                                            <h3 class="testimonial-title">{{__($feedback->title)}}</h3>
                                            <p class="testimonial-msg">{{__($feedback->comments)}}</p>
                                        </div>
                                        <div class="testiomonial-bottom">
                                            <div class="testimonial-author">
                                                <h3 class="testimonial-author-name">{{$feedback->owner_name}}</h3>
                                                <p class="testimonial-author-designation">{{__(":name is Owner",['name'=>$feedback->pet_name])}}</p>
                                            </div>
                                            <div class="testimonial-quote-img">
                                                <img src="{{asset('assets/images/icons/quote.svg')}}" alt="quote">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-none d-md-block">
                                    <div class="testimonial-img-box">
                                        <img src="{{asset($feedback->full_photo)}}" alt="testimonial">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->
