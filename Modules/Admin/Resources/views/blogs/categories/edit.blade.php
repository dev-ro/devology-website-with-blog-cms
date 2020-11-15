@extends('admin::layouts.master')
@section('title') Edit Blog Categoriy @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Blog Categoriy</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @include('ui::admin.flash-msg')
        @include('admin::blogs.categories._form')
    </div>
  </div>
@endsection