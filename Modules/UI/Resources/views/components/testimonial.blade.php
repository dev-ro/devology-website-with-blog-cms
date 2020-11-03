<section id="review" class="section review-area bg-overlay ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="text-white">Our clients says</h2>
                    <p class="text-white d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    <p class="text-white d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Client Reviews -->
            <div class="client-reviews owl-carousel">
                @foreach ($testimonials as $testimonial)     
                <!-- Single Review -->
                <div class="single-review p-5">
                    <!-- Review Content -->
                    <div class="review-content">
                        <!-- Review Text -->
                        <div class="review-text">
                            <p>{{$testimonial->description}}</p>
                        </div>
                        <!-- Quotation Icon -->
                        <div class="quot-icon">
                            <img class="avatar-sm" src="assets/img/quote.png" alt="Quote">
                        </div>
                    </div>
                    <!-- Reviewer -->
                    <div class="reviewer media mt-3">
                        <!-- Reviewer Thumb -->
                        <div class="reviewer-thumb">
                            <img class="avatar-lg radius-100" src="{{$testimonial->image}}" alt="{{$testimonial->name}}">
                        </div>
                        <!-- Reviewer Media -->
                        <div class="reviewer-meta media-body align-self-center ml-4">
                            <h5 class="reviewer-name color-primary mb-2">{{$testimonial->name}}</h5>
                            <h6 class="text-secondary fw-6">{{$testimonial->company}}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>