@extends('admin::layouts.master')
@section('title') Dashboard @endsection
@section('content')
<div class="row">
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
      <div class="info-box-content">
        <span class="info-box-text"><a class="text-muted text-bold" href="{{route('enquiry-lists-admin')}}">Enquiries</a></span>
        <span class="info-box-number">{{$enquiriesCount}}</span>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-success"><i class="far fa-copy"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">
          <a class="text-muted text-bold" href="{{route('blogs-index-list')}}">Blogs</a>
        </span>
        <span class="info-box-number">{{$blogsCount}}</span>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-warning"><i class="fas fa-marker"></i></span>
      <div class="info-box-content">
        <span class="info-box-text"><a class="text-muted text-bold" href="{{route('testimonials-index')}}">Testimonials</a></span>
        <span class="info-box-number">{{$testimonialsCount}}</span>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-danger"><i class="fas fa-id-card"></i></span>
      <div class="info-box-content">
        <span class="info-box-text"><a class="text-muted text-bold" href="{{route('portfolio-index-list')}}">Portfolios</a></span>
      <span class="info-box-number">{{$portfolioCount}}</span>
      </div>
    </div>
  </div>
</div>
@endsection
