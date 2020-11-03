 <!--====== Contact Area Start ======-->
 <section id="contact" class="contact-area ptb_100">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-5">
                <!-- Section Heading -->
                <div class="section-heading text-center mb-3">
                    <h2>Let's connect!</h2>
                    <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                </div>
                <!-- Contact Us -->
                <div class="contact-us">
                    <ul>
                        <!-- Contact Info -->
                        <li class="contact-info shadow-xs color-1 bg-hover active hover-bottom text-center p-5 m-3">
                            <span><i class="fas fa-mobile-alt fa-3x"></i></span>
                            <a class="d-block my-2" href="#">
                                <h3>{{$company_settings->company_contact}}</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </li>
                        <!-- Contact Info -->
                        <li class="contact-info shadow-xs color-3 bg-hover active hover-bottom text-center p-5 m-3">
                            <span><i class="fas fa-envelope-open-text fa-3x"></i></span>
                            <a class="d-none d-sm-block my-2" href="#">
                                <h3>{{$company_settings->company_email}}</h3>
                            </a>
                            <a class="d-block d-sm-none my-2" href="#">
                                <h3>{{$company_settings->company_email}}</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 pt-4 pt-lg-0">
                <!-- Contact Box -->
                <div class="contact-box text-center">
                    <!-- Contact Form -->
                    <form id="contact-form" method="POST" action="{{route('enquire')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control shadow-xs" name="name" placeholder="Name" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control shadow-xs" name="company_name" placeholder="Company Name" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control shadow-xs" name="email" placeholder="Email" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control shadow-xs" name="phone" placeholder="Phone" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control shadow-xs" name="message" placeholder="Message" required="required"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-bordered active btn-block mt-3"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send Message</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Contact Area End ======-->