@extends('admin::layouts.master')
@section('title') Company Settings @endsection
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Edit Company Settings</h3>
  </div>
  @include('admin::settings.company-settings._form')
</div>
@endsection
@section('script')
  <script src="/js/jsoneditor.js"></script>
@endsection