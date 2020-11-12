@extends('admin::layouts.master')
@section('title') Testimonial @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <div class="row">
          <div class="col-md-7">
            <h3 class="card-title">Testimonial</h3>
          </div>
          <div class="col-md-5 text-right">
              <a class="btn btn-primary btn-sm" href="{{route('testimonials-create')}}">Create</a>
          </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-info table-hover">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <td>{{$testimonial->id}}</td>
                        <td>{{$testimonial->name}}</td>
                        <td>{{$testimonial->company}}</td>
                        <td>{{$testimonial->description}}</td>
                        <td>@include('ui::admin.regular-image-show' , ['image' => $testimonial->image, 'alt' => $testimonial->name ])</td>
                        <td>{{$testimonial->created_at->diffForHumans()}}</td>
                        <td>{{$testimonial->updated_at->diffForHumans()}}</td>
                        <td>
                            @include('ui::admin.actions' , [
                                'editurl' => route('testimonials-edit' , $testimonial->id),
                                'delurl'  => route('testimonials-delete' , $testimonial->id)
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $testimonials->links('vendor.pagination.bootstrap-4')}}
    </div>
  </div>
@endsection