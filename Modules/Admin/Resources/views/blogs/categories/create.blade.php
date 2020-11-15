@extends('admin::layouts.master')
@section('title') Create Blog Category @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-5">
          <h3 class="card-title">Create Blog Category</h3>
        </div>
        <div class="col-md-7 text-right">
          <div class="btn-group-sm">
            <a href="{{route('blogs-categories-index-list')}}" class="btn btn-primary">Blog Categories</a>
            <a href="{{route('blogs-categories-create')}}" class="btn btn-primary">Create</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @include('ui::admin.flash-msg')
        @include('admin::blogs.categories._form')
    </div>
  </div>
@endsection