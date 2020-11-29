@extends('admin::layouts.master')
@section('title') Testimonials @endsection
@section('content')
@inject('testimonials', 'Modules\Admin\DataGrids\TestimonialsDataGrid')
{{$testimonials->render()}}
@endsection
