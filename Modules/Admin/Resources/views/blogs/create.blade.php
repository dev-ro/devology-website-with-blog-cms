@extends('admin::layouts.master')
@section('title') Create Blog @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Create Blog</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @include('ui::admin.flash-msg')
        @include('admin::blogs._form')
    </div>
  </div>
@endsection