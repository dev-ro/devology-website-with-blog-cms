<div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">'title</h3>
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
            <div class="mailbox-controls d-flex justify-content-between align-items-center">
                <form action="{{$massDeleteRoute}}" method="post" class="d-inline" id="deletebulk">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-default btn-sm d-flex align-items-center">
                        <i class="far fa-trash-alt"></i>
                        <span class="pl-1 plw d-none">Please wait...</span>
                    </button>
                </form>
                <div class="float-right">
                    <a href="{{$createRoute}}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i></a>
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
                    @foreach ($headers as $item)
                        {{$item}}
                    @endforeach
                </tr>
            </thead>
            <tbody> 
                
                @foreach ($datas as $key =>  $data)
                    <tr>
                        <td>
                            <div class="icheck-primary">
                              <input type="checkbox" class="checkbox" value="{{$data->id}}" id="check1">
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
                @if(isset($datas))
                {{$datas->perPage().'/'.$datas->total()}}
                {{$datas->links('vendor.pagination.bootstrap-4')}}
                @endif
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    $(function () {
        var ia = [];
        $('.checkbox-toggle').click(function () {
            var clicks = $(this).data('clicks')
            if (clicks) {
            $('.checkbox').prop('checked', false)
            $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
            } else {
            $('.checkbox').prop('checked', true)
            $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
            }
            $(this).data('clicks', !clicks);
        })

        $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
            }else{
                $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
            }
        })

        $('#deletebulk').submit(function(e){
            e.preventDefault();
            if($('.checkbox:checked').length > 0) {
                if(confirm('are you sure?')) {

                    var arr = [];
                    var checked = $('.checkbox:checked');
                    $.each(checked, function (i, j) { 
                        arr.push(j.value);
                    });
                    // Sending 
                    $.ajax({
                        type: $(this).attr('method'),
                        url: $(this).attr('action'),
                        data: {
                            'indexes' : arr
                        },
                        dataType: "JSON",
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function () {
                            $('.plw').removeClass('d-none');
                            $('.plw').addClass('d-flex');
                        },
                        success: function(response) {
                            $('.plw').removeClass('d-flex');
                            location.reload();
                        }
                    });
                }
            } else {
                alert('Please select to delete');
            }
        })
    });
</script>
@endsection