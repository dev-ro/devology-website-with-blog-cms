@extends('layouts.master')
@section('meta')
    @include('ui::meta')
@endsection
@include('ui::breadcrumb')
@section('content')
<section id="blog" class="section blog-area ptb_100">
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                @foreach ($services as $service)
                <div class="col-12 col-md-4">
                    <!-- Single Blog -->
                    <div class="single-blog res-margin">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="{{route('service-detail' , $service->slug)}}"><img src="{{$service->image}}" alt="{{$service->name}}"></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li>By <a href="#">{{ $company_settings->company_name }}</a></li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="{{route('service-detail' , $service->slug)}}">{{ $service->name }}</a></h3>
                            <p>{{$service->excerpt}}</p>
                            <a href="{{route('service-detail' , $service->slug)}}" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <!-- Pagination -->
            {{$services->links('vendor.pagination.default')}}
        </div>
    </div>
</div>
</section>
@endsection
