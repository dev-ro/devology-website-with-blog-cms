@extends('layouts.master')
@section('meta')
@include('ui::meta' )
@endsection
@section('content')
    <!-- ***** About Area Start ***** -->
    <section class="section about-area ptb_100">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- About Thumb -->
                    <div class="about-thumb text-center">
                        <img src="assets/img/about/about_thumb_1.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- About Content -->
                    <div class="about-content section-heading text-center text-lg-left pl-md-4 mt-5 mt-lg-0 mb-0">
                        <h2 class="mb-3">We’re Your Partner in Your Success</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis tenetur maxime labore recusandae enim dolore, nesciunt, porro molestias ullam eum atque harum! Consectetur, facilis maxime ratione fugiat laborum omnis atque quae, molestiae rem perspiciatis veritatis cumque ex minima, numquam quis dicta impedit possimus tempore? Quo sequi labore, explicabo sit vitae.</p><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto iure excepturi eos, tenetur minima dignissimos repellendus laudantium, rem, quo ipsam esse maiores sequi ex debitis quae facilis dolorum voluptates animi.</p>
                        <!-- Counter Area -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->

    <!-- ***** Our Goal Area Start ***** -->
    <section class="section our-goal ptb_100">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Goal Content -->
                    <div class="goal-content section-heading text-center text-lg-left pr-md-4 mb-0">
                        <h2 class="mb-3">Our Goal</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis tenetur maxime labore recusandae enim dolore, nesciunt, porro molestias ullam eum atque harum! Consectetur, facilis maxime ratione fugiat laborum omnis atque quae, molestiae rem perspiciatis veritatis cumque ex minima, numquam quis dicta impedit possimus tempore? Quo sequi labore, explicabo sit vitae.</p><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto iure excepturi eos, tenetur minima dignissimos repellendus laudantium, rem, quo ipsam esse maiores sequi ex debitis quae facilis dolorum voluptates animi.</p>
                        <a href="#" class="btn btn-bordered mt-4">Read More</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Goal Thumb -->
                    <div class="goal-thumb mt-5 mt-lg-0">
                        <img src="assets/img/about/about_thumb_2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Goal Area End ***** -->

    <x-team />

   @include('ui::contact')

    <!--====== Call To Action Area Start ======-->
    <section class="section cta-area bg-overlay ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <!-- Section Heading -->
                    <div class="section-heading text-center m-0">
                        <h2 class="text-white">Looking for the best digital agency &amp; marketing solution?</h2>
                        <p class="text-white d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                        <p class="text-white d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                        <a href="#" class="btn btn-bordered-white mt-4">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Call To Action Area End ======-->
@endsection