@extends('admin::layouts.master')
@section('title') Edit Blog @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-5">
          <h3 class="card-title">Edit Blog</h3>
        </div>
        <div class="col-md-7 text-right">
          <div class="btn-group-sm">
            <a href="{{route('blogs-index-list')}}" class="btn btn-primary">Blogs</a>
            <a href="{{route('blogs-create')}}" class="btn btn-primary">Create</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @include('ui::admin.flash-msg')
        @include('admin::blogs._form')
    </div>
  </div>
@endsection