@extends('admin::layouts.master')
@section('title') Add Team @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-md-5">
          <h3 class="card-title">Add Team</h3>
        </div>
        <div class="col-md-7  text-right">
          <div class="btn-group-sm">
            <a href="{{route('teams-index-lists')}}" class="btn btn-primary">Teams</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @include('ui::admin.flash-msg')
        @include('admin::team._form')
    </div>
  </div>
@endsection