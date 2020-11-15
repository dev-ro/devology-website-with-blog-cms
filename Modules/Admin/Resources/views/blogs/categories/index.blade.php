@extends('admin::layouts.master')
@section('title') Blog Categories @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <div class="row">
          <div class="col-md-7">
            <h3 class="card-title">Blog Categories</h3>
          </div>
          <div class="col-md-5 text-right">
              <a class="btn btn-primary btn-sm" href="{{route('blogs-categories-create')}}">Create</a>
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
                    <th>Title</th>
                    <th>Image</th>
                    <th>Blog count</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($blogcategories as $blogcategory)
                    <tr>
                        <td>{{$blogcategory->id}}</td>
                        <td>
                        @include('ui::admin.regular-image-show', [
                        'image' => $blogcategory->image, 
                        'alt' => $blogcategory->title ])
                        </td>
                        <td>{{$blogcategory->title}}</td>
                        <td>
                            {{$blogcategory->blogs_count}}
                        </td>
                        <td>{{$blogcategory->created_at->diffForHumans()}}</td>
                        <td>{{$blogcategory->updated_at->diffForHumans()}}</td>
                        <td>
                            @include('ui::admin.actions' , [
                                'editurl' => route('blogs-categories-edit' , $blogcategory->id),
                                'delurl'  => route('blogs-categories-delete' , $blogcategory->id)
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $blogcategories->links('vendor.pagination.bootstrap-4')}}
    </div>
  </div>
@endsection