@extends('admin::layouts.master')
@section('title') Create Blog @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-5">
          <h3 class="card-title">Create Service</h3>
        </div>
        <div class="col-md-7  text-right">
          <div class="btn-group-sm">
            <a href="{{route('services-index-list')}}" class="btn btn-primary">Services</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @include('ui::admin.flash-msg')
        @include('admin::services._form')
    </div>
  </div>
@endsection