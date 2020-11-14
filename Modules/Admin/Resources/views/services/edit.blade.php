@extends('admin::layouts.master')
@section('title') Edit Service @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Service</h3>
    </div>
    <div class="card-body">
        @include('ui::admin.flash-msg')
        @include('admin::services._form')
    </div>
  </div>
@endsection