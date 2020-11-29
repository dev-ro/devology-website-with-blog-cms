@extends('admin::layouts.master')
@section('title') Services @endsection
@section('content')
@inject('services', 'Modules\Admin\DataGrids\ServicesDataGrid')
{{$services->render()}}
@endsection

