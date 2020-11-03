@extends('layouts.master')
@section('meta')
@include('ui::meta' , [
    'title' => $search,
])
@endsection
@section('content')
b:fo
@include('ui::breadcrumb')
<section class="section about-area ptb_100">
    <div class="container">
        <h6 class="mb-5">Results In: </h6>
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    @foreach ($results as $result)
                    <div class="col-12 col-md-4">
                        <!-- Single Blog -->
                        <div class="single-blog res-margin">
                            <!-- Blog Thumb -->
                            <div class="blog-thumb">
                                <a href="{{$result->slug}}"><img src="{{$result->image}}" alt="{{$result->name}}"></a>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <!-- Meta Info -->
                                <ul class="meta-info d-flex justify-content-between">
                                    <li>By <a href="#">{{ $company_settings->company_name }}</a></li>
                                </ul>
                                <!-- Blog Title -->
                                <h3 class="blog-title my-3"><a href="{{$result->slug}}">{{ $result->name }}</a></h3>
                                <p>{{$result->excerpt}}</p>
                                <a href="{{$result->slug}}" class="blog-btn mt-3">Read More</a>
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
                {{$results->links('vendor.pagination.default')}}
            </div>
        </div>
    </div>
</section>
@endsection