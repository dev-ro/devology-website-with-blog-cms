@extends('admin::layouts.master')
@section('title') Teams @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <div class="row position-relative">
        <div class="col-md-7">
            <h3 class="card-title">Teams</h3>
        </div>
        <div class="col-md-5 text-right">
            <a class="btn btn-primary btn-sm" href="{{route('teams-create')}}">Add Team</a>
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
                    <th>Designation</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($teams as $team)
                    <tr>
                        <td>{{$team->id}}</td>
                        <td>{{$team->team_name}}</td>
                        <td>{{$team->designation}}</td>
                        <td>
                            @include('ui::admin.regular-image-show', ['image' => $team->image, 'alt' => $team->team_name ])
                        </td>
                        <td>{{$team->created_at->diffForHumans()}}</td>
                        <td>{{$team->updated_at->diffForHumans()}}</td>
                        <td>
                            @include('ui::admin.actions' , [
                                'editurl' => route('teams-edit' , $team->id),
                                'delurl'  => route('teams-delete' , $team->id)
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $teams->links('vendor.pagination.bootstrap-4')}}
    </div>
</div>
@endsection