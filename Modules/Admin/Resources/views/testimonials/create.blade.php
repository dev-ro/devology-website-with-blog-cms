@extends('admin::layouts.master')
@section('title') Add Testimonial @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Add Testimonial</h3>
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