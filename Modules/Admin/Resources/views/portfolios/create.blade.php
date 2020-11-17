@extends('admin::layouts.master')
@section('title') Create Portfolio @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-5">
          <h3 class="card-title">Create Portfolio</h3>
        </div>
        <div class="col-md-7  text-right">
          <div class="btn-group-sm">
            <a href="{{route('portfolio-index-list')}}" class="btn btn-primary">Portfolios</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @include('ui::admin.flash-msg')
        @include('admin::portfolios._form')
    </div>
  </div>
@endsection