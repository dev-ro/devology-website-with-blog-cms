@extends('admin::layouts.master')
@section('title') Teams @endsection
@section('content')
@inject('teams', 'Modules\Admin\DataGrids\TeamsDataGrid')
    {{$teams->render()}}
@endsection