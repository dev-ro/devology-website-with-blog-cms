@extends('admin::layouts.master')
@section('title') Blogs @endsection
@section('content')
@inject('blogs', 'Modules\Admin\DataGrids\BlogsDataGrid')
{{$blogs->render()}}
@endsection