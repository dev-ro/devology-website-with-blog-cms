@extends('admin::layouts.master')
@section('title') Enquiries @endsection
@section('content')
<div class="card">
    <div class="card-header">
      <div class="row">
          <div class="col-md-7">
            <h3 class="card-title">Enquiries</h3>
          </div>
          <div class="col-md-5 text-right">
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
                    <th>Email</th>
                    <th>Number</th>
                    <th>Enq. Type</th>
                    <th>Messaged at</th>
                    <th>Responded at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($enquiries as $enquiry)
                    <tr>
                        <td>{{$enquiry->id}}</td>
                        <td>{{$enquiry->name}}</td>
                        <td>{{$enquiry->email}}</td>
                        <td>{{$enquiry->phone}}</td>
                        <td>{{$enquiry->type}}</td>
                        <td>{{$enquiry->created_at->diffForHumans()}}</td>
                        <td>{{$enquiry->updated_at->diffForHumans()}}</td>
                        <td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $enquiries->links('vendor.pagination.bootstrap-4')}}
    </div>
</div>
@endsection

