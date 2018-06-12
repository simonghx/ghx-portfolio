<!-- Contact Form Section -->
<section id="contact-us" class="section-padding">
    <div class="container text-center">
        <h1>Contact Us</h1>
        <p class="lead-lg max-width-700 mb-60">ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quia tempore rem quis iste saepe in omnis aspernatur eligendi asperiores.</p>

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
                            <div class="form-field-wrapper">
                                <input class="input-lg form-full input-fancy" id="form-name" type="text" name="name" placeholder="Your Name" required />
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-field-wrapper">
                                <input class="input-lg form-full input-fancy" id="form-email" type="email" name="email" placeholder="Email" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-field-wrapper">
                                <input class="input-lg form-full input-fancy" id="form-subject" type="text" name="subject" placeholder="Subject" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-field-wrapper">
                                <textarea class="home-contact-txt-msg input-lg form-full input-fancy" id="form-message" rows="7" name="message" placeholder="Your Message" required></textarea>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <button class="btn-contact-submit btn btn-lg btn-black" type="submit" >Send Message</button>
                        </div>

                    </form>
            </div>
        </div>
        <!-- End Contact form -->

    </div>
</section>
<!-- End Contact Form Section -->