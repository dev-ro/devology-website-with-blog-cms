@extends('admin::layouts.master')
@section('title') Edit Service @endsection
@section('content')
<div class="card">
    <div class="card-header">
      
      <div class="row">
        <div class="col-md-5">
          <h3 class="card-title">Edit Service</h3>
        </div>
        <div class="col-md-7 text-right">
          <div class="btn-group-sm">
            <a href="{{route('services-index-list')}}" class="btn btn-primary">Services</a>
            <a href="{{route('services-create')}}" class="btn btn-primary">Create</a>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
        @include('ui::admin.flash-msg')
        @include('admin::services._form')
    </div>
  </div>
@endsection