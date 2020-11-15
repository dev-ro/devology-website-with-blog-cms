@extends('admin::layouts.master')
@section('title') Add Testimonial @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-5">
          <h3 class="card-title">Add Testimonial</h3>
        </div>
        <div class="col-md-7 text-right">
          <div class="btn-group-sm">
            <a href="{{route('testimonials-index')}}" class="btn btn-primary">Testimonials</a>
            <a href="{{route('testimonials-create')}}" class="btn btn-primary">Create</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="msg my-4">
            @include('ui::admin.flash-msg')
        </div>
        @include('admin::testimonials._form')
    </div>
  </div>
@endsection