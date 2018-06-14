<!-- Contact Form Section -->
<section id="contact-us" class="section-padding">
    <div class="container">
        <h1 class="text-center">Contact Us</h1>
        <p class="lead-lg max-width-700 mb-60 text-center">ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quia tempore rem quis iste saepe in omnis aspernatur eligendi asperiores.</p>

        <!-- Contact form -->
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{route('backHome')}}" id="contact" class="contact-form row" role="form" method="POST">
                        @csrf

                        <div class="col-md-12 text-center">
                            <h5 class="successContent">
                                <i class="fa fa-check left" style="color: #5cb45d;"></i>Your message has been sent successfully.
                            </h5>
                            <h5 class="errorContent" style="color: #e1534f;">
                                <i class="fa fa-exclamation-circle left"></i>There was a problem validating the form please check!
                            </h5>
                        </div>

                        <div class="col-md-6">
                            @if($errors->has('name'))
                            <div class="text-danger">{{$errors->first('name')}}</div>
                            @endif
                            <div class="form-field-wrapper">
                                <input class="input-lg form-full input-fancy {{$errors->has('name')?'border-danger':''}}" id="form-name" type="text" name="name" placeholder="Your Name" value="{{old('name')}}"/>
                            </div>


                        </div>
                        <div class="col-md-6">
                            @if($errors->has('email'))
                            <div class="text-danger">{{$errors->first('email')}}</div>
                            @endif
                            <div class="form-field-wrapper">
                                <input class="input-lg form-full input-fancy {{$errors->has('email')?'border-danger':''}}" id="form-email" type="email" name="email" placeholder="Email" value="{{old('email')}}"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            @if($errors->has('subject'))
                            <div class="text-danger">{{$errors->first('subject')}}</div>
                            @endif
                            <div class="form-field-wrapper">
                                <input class="input-lg form-full input-fancy {{$errors->has('subject')?'border-danger':''}}"  id="form-subject" type="text" name="subject" placeholder="Subject"/value="{{old('subject')}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            @if($errors->has('message'))
                            <div class="text-danger">{{$errors->first('message')}}</div>
                            @endif
                            <div class="form-field-wrapper">
                                <textarea class="home-contact-txt-msg input-lg form-full input-fancy" id="form-message" rows="7" name="message" placeholder="Your Message" value="{{old('message')}}"></textarea>
                            </div>

                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn-contact-submit btn btn-lg btn-black" type="submit" >Send Message</button>
                        </div>

                    </form>
            </div>
        </div>
        <!-- End Contact form -->

    </div>
</section>
<!-- End Contact Form Section -->