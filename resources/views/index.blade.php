@extends('layouts.master')
@section('meta')
    @include('ui::meta')
@endsection
@section('content')
<section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-md-7">
                <div class="welcome-intro text-right">
                    <h1 class="text-white">Design is intelligence made visible</h1>
                    <p class="text-white my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nihil tenetur minus quidem est deserunt molestias accusamus harum ullam tempore debitis et, expedita, repellat delectus aspernatur neque itaque qui quod.</p>
                    <!-- Buttons -->
                    <div class="button-group">
                        <a href="" class="btn btn-bordered-white">Start a Project</a>
                        <a href="{{route('pages_contact')}}" class="btn btn-bordered-white d-none d-sm-inline-block">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <!-- Welcome Thumb -->
                <div class="welcome-thumb-wrapper mt-5 mt-md-0">
                    <span class="welcome-thumb-1">
                        <img class="welcome-animation d-block ml-auto" src="/assets/img/welcome/thumb_1.png" alt="">
                    </span>
                    <span class="welcome-thumb-2">
                        <img class="welcome-animation d-block" src="/assets/img/welcome/thumb_2.png" alt="">
                    </span>
                    <span class="welcome-thumb-3">
                        <img class="welcome-animation d-block" src="/assets/img/welcome/thumb_3.png" alt="">
                    </span>
                    <span class="welcome-thumb-4">
                        <img class="welcome-animation d-block" src="/assets/img/welcome/thumb_4.png" alt="">
                    </span>
                    <span class="welcome-thumb-5">
                        <img class="welcome-animation d-block" src="/assets/img/welcome/thumb_5.png" alt="">
                    </span>
                    <span class="welcome-thumb-6">
                        <img class="welcome-animation d-block" src="/assets/img/welcome/thumb_6.png" alt="">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Shape Bottom -->
    <div class="shape shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
</section>
<section class="section service-area ptb_150">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Service -->
                <div class="single-service service-gallery m-0 overflow-hidden">
                    <!-- Service Thumb -->
                    <div class="service-thumb">
                        <a href="#"><img src="/assets/img/case_studies/case_studies_1/thumb_1.jpg" alt=""></a>
                    </div>
                    <!-- Service Content -->
                    <div class="service-content bg-white">
                        <a href="#">
                            <h3>Data Analytics</h3>
                        </a>
                        <p class="py-3">Lorem ipsum dolor sit amet, consectet ur adipisicing elit.</p>
                        <a class="service-btn" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Service -->
                <div class="single-service service-gallery m-0 overflow-hidden">
                    <!-- Service Thumb -->
                    <div class="service-thumb">
                        <a href="#"><img src="/assets/img/case_studies/case_studies_1/thumb_2.jpg" alt=""></a>
                    </div>
                    <!-- Service Content -->
                    <div class="service-content bg-white">
                        <a href="#">
                            <h3>Website Growth</h3>
                        </a>
                        <p class="py-3">Lorem ipsum dolor sit amet, consectet ur adipisicing elit.</p>
                        <a class="service-btn" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Service -->
                <div class="single-service service-gallery m-0 overflow-hidden">
                    <!-- Service Thumb -->
                    <div class="service-thumb">
                        <a href="#"><img src="/assets/img/case_studies/case_studies_1/thumb_3.jpg" alt=""></a>
                    </div>
                    <!-- Service Content -->
                    <div class="service-content bg-white">
                        <a href="#">
                            <h3>Seo Ranking</h3>
                        </a>
                        <p class="py-3">Lorem ipsum dolor sit amet, consectet ur adipisicing elit.</p>
                        <a class="service-btn" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('ui::growth')
<section class="section content-area ptb_150">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-6">
                <!-- Profile Circle Wrapper -->
                <div class="profile-circle-wrapper circle-animation d-none d-sm-block">
                    <!-- Profile Inner -->
                    <div class="profile-inner">
                        <!-- Profile Circle -->
                        <div class="profile-circle circle-lg">
                            <span class="profile-icon icon-1">
                                <img class="icon-1-img" src="/assets/img/content/profile-icons/profile_icon_1.svg" alt="" />
                            </span>
                            <span class="profile-icon icon-2">
                                <img class="icon-2-img" src="/assets/img/content/profile-icons/profile_icon_2.svg" alt="" />
                            </span>
                            <span class="profile-icon icon-3">
                                <img class="icon-3-img" src="/assets/img/content/profile-icons/profile_icon_1.svg" alt="" />
                            </span>
                            <span class="profile-icon icon-4">
                                <img class="icon-4-img" src="/assets/img/content/profile-icons/profile_icon_2.svg" alt="" />
                            </span>
                        </div>

                        <!-- Profile Circle -->
                        <div class="profile-circle circle-md">
                            <span class="profile-icon icon-5">
                                <img class="icon-5-img" src="/assets/img/content/profile-icons/profile_icon_3.svg" alt="" />
                            </span>
                            <span class="profile-icon icon-6">
                                <img class="icon-6-img" src="/assets/img/content/profile-icons/profile_icon_3.svg" alt="" />
                            </span>
                            <span class="profile-icon icon-7">
                                <img class="icon-7-img" src="/assets/img/content/profile-icons/profile_icon_3.svg" alt="" />
                            </span>
                        </div>

                        <!-- Profile Circle -->
                        <div class="profile-circle circle-sm">
                            <span class="profile-icon icon-8">
                                <img class="icon-8-img" src="/assets/img/content/profile-icons/profile_icon_4.svg" alt="" />
                            </span>
                            <span class="profile-icon icon-9">
                                <img class="icon-9-img" src="/assets/img/content/profile-icons/profile_icon_4.svg" alt="" />
                            </span>
                        </div>
                    </div>
                    <img class="folder-img" src="/assets/img/content/folders.png" alt="" />
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <!-- Content Inner -->
                <div class="content-inner text-center pt-sm-4 pt-lg-0 mt-sm-5 mt-lg-0">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-3">
                        <h2>Work smarter,<br> not harder.</h2>
                        <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                        <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                    </div>
                    <!-- Content List -->
                    <ul class="content-list text-left">
                        <!-- Single Content List -->
                        <li class="single-content-list media py-2">
                            <div class="content-icon pr-4">
                                <span class="color-2"><i class="fas fa-angle-double-right"></i></span>
                            </div>
                            <div class="content-text media-body">
                                <span><b>Digital Agency &amp; Marketing</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</span>
                            </div>
                        </li>
                        <!-- Single Content List -->
                        <li class="single-content-list media py-2">
                            <div class="content-icon pr-4">
                                <span class="color-2"><i class="fas fa-angle-double-right"></i></span>
                            </div>
                            <div class="content-text media-body">
                                <span><b>Planning To Startup</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</span>
                            </div>
                        </li>
                        <!-- Single Content List -->
                        <li class="single-content-list media py-2">
                            <div class="content-icon pr-4">
                                <span class="color-2"><i class="fas fa-angle-double-right"></i></span>
                            </div>
                            <div class="content-text media-body">
                                <span><b>Content Management</b><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, distinctio.</span>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-bordered mt-4">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<x-testimonial />
@include('ui::calltoaction')
@endsection