@extends('admin::layouts.master')
@section('title') Services @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <div class="row">
          <div class="col-md-7">
            <h3 class="card-title">Services</h3>
          </div>
          <div class="col-md-5 text-right">
              <a class="btn btn-primary btn-sm" href="{{route('services-create')}}">Create</a>
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
                    <th>Name</th>
                    <th>image</th>
                    <th>Featured</th>
                    <th>Footer</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($services as $service)
                    <tr>
                        <td>{{$service->id}}</td>
                        <td>{{$service->name}}</td>
                        <td>
                            @include('ui::admin.regular-image-show', ['image' => $service->image, 'alt' => $service->name])
                        </td>
                        <td>{{$service->featured}}</td>
                        <td>{{$service->show_footer_menu}}</td>
                        <td>{{$service->created_at->diffForHumans()}}</td>
                        <td>{{$service->updated_at->diffForHumans()}}</td>
                        <td>@include('ui::admin.actions',[
                            'editurl' => route('services-edit' , $service->id),
                            'delurl'  => route('services-delete' , $service->id)
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $services->links('vendor.pagination.bootstrap-4')}}
    </div>
</div>
@endsection

