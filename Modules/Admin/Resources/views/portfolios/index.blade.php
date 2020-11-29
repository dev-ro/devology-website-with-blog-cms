@extends('admin::layouts.master')
@section('title') Portfolios @endsection
@section('content')
@inject('portfolios', 'Modules\Admin\DataGrids\PortfoliosDataGrid')
{{$portfolios->render()}}
{{-- <div class="card">
    <div class="card-header">
      <div class="row">
          <div class="col-md-7">
            <h3 class="card-title">Portfolios</h3>
          </div>
          <div class="col-md-5 text-right">
              <a class="btn btn-primary btn-sm" href="{{route('portfolio-create')}}">Create</a>
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
                @foreach ($portfolios as $portfolio)
                    <tr>
                        <td>{{$portfolio->id}}</td>
                        <td>
                        @include('ui::admin.regular-image-show', [
                        'image' => $portfolio->image, 
                        'alt' => $portfolio->title ])
                        </td>
                        <td>{{$portfolio->title}}</td>
                        <td>{{$portfolio->created_at->diffForHumans()}}</td>
                        <td>{{$portfolio->updated_at->diffForHumans()}}</td>
                        <td>
                            @include('ui::admin.actions' , [
                                'editurl' => route('portfolio-edit' , $portfolio->id),
                                'delurl'  => route('portfolio-delete' , $portfolio->id)
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $portfolios->links('vendor.pagination.bootstrap-4')}}
    </div>
</div> --}}
@endsection