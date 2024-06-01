<form id="home-contact-form" class="home-contact-form" action="{{route('frontend.contact.store')}}" method="post">
    @csrf
    <div class="row">
        <h2 class="home-contact-title mb-10">{{__('Get A Service Now')}}</h2>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="form-group">
                <label for="home-contact-name">{{__('Full Name')}}</label>
                <input type="text" class="form-control" id="home-contact-name" name="full_name"
                       placeholder="{{__('Enter your name')}}" required>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-group">
                <label for="home-contact-email">{{__('Email Address')}}</label>
                <input type="email" class="form-control" id="home-contact-email" name="email"
                       placeholder="johndoe@gmail.com" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="form-group">
                <label for="home-contact-phone">{{__('Phone Number')}}</label>
                <input type="text" class="form-control" id="home-contact-phone" name="phone_number"
                       placeholder="(61) 9 8797-8775" required>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-group">
                <label>{{__('Service')}}</label>
                <select class="form-control" required name="service">
                    <option value="" selected>{{__('Select a service')}}</option>
                    @foreach($all_services as $service)
                        <option value="{{$service}}">{{$service}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="form-group">
                <label for="home-contact-phone">{{__('Message')}}</label>
                <textarea class="form-control" id="home-contact-message" rows="5"
                          placeholder="{{__('Write your message here')}}" name="message"></textarea>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <button class="btn btn-granny-apple-600" type="submit">{{__('Contact Us')}}</button>
    </div>
</form>