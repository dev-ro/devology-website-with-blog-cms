<div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Testimonial</h3>
      <div class="card-tools">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" placeholder="Search Testimonial">
          <div class="input-group-append">
            <div class="btn btn-primary">
              <i class="fas fa-search"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body p-0">
      <div class="row px-3">
          <div class="col-12">
            <div class="mailbox-controls">
                <form action="" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                </form>
              <div class="float-right">
                 <a href="{{route('testimonials-create')}}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i></a>
              </div>
            </div>
          </div>
      </div>
      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th><button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                    </button></th>
                    <th>#</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>C.at</th>
                    <th>U.at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check1">
                              <label for="check1"></label>
                            </div>
                        </td>
                        <td>{{$testimonial->id}}</td>
                        <td>{{$testimonial->name}}</td>
                        <td>{{$testimonial->company}}</td>
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
    </div>
    <div class="card-footer p-0">
      <div class="mailbox-controls">
        <div class="float-right">
            @if($testimonials->links())
            {{$testimonials->perPage().'/'.$testimonials->total()}}
            {{$testimonials->links('vendor.pagination.bootstrap-4')}}
            @endif
        </div>
        </div>
      </div>
</div>

@section('scripts')
<script>
    $(function () {
      //Enable check and uncheck all functionality
      $('.checkbox-toggle').click(function () {
        var clicks = $(this).data('clicks')
        if (clicks) {
          //Uncheck all checkboxes
          $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
          $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
        } else {
          //Check all checkboxes
          $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
          $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
        }
        $(this).data('clicks', !clicks)
      })
    });
  </script>
@endsection