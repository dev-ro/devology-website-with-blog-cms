@extends('admin::layouts.master')
@section('title') Blogs @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <div class="row">
          <div class="col-md-7">
            <h3 class="card-title">Blogs</h3>
          </div>
          <div class="col-md-5 text-right">
              <a class="btn btn-primary btn-sm" href="{{route('blogs-create')}}">Create</a>
          </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @include('ui::admin.flash-msg')
        <table class="table table-bordered table-info table-hover">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{$blog->id}}</td>
                        <td>
                        @include('ui::admin.regular-image-show', [
                        'image' => $blog->ft_img, 
                        'alt' => $blog->title ])
                        </td>
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->created_at->diffForHumans()}}</td>
                        <td>{{$blog->updated_at->diffForHumans()}}</td>
                        <td>
                            @include('ui::admin.actions' , [
                                'editurl' => route('blogs-edit' , $blog->id),
                                'delurl'  => route('blogs-delete' , $blog->id)
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $blogs->links('vendor.pagination.bootstrap-4')}}
    </div>
  </div>
@endsection