<div class="card card-primary card-outline">
    <div class="card-header">
        <div class="card-title">{{$results['title']}}</div>
        <div class="card-tools">
            <form action="" method="post">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Search Testimonial">
                    <div class="input-group-append">
                      <div class="btn btn-primary">
                        <i class="fas fa-search"></i>
                      </div>
                    </div>
                  </div>
            </form>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="row px-3">
            <div class="col-12">
                <div class="mailbox-controls d-flex justify-content-between align-items-center">
                    @if ($results['enableMassAction'])
                        @foreach ($results['massActions'] as $massAction)
                            @if ($massAction['type'] === 'Delete')              
                            <form action="{{$massAction['action']}}" method="post" class="d-inline" id="deletebulk">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-default btn-sm d-flex align-items-center">
                                    <i class="far fa-trash-alt"></i>
                                    <span class="pl-1 plw d-none">Please wait...</span>
                                </button>
                            </form>
                            @endif
                        @endforeach
                    @endif
                    <div class="float-right">
                        <a href="" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i></a>
                    </div>
                </div>  
            </div>
        </div>
        <div class="table-responsive mailbox-messages">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        @if ($results['enableMassAction'])    
                        <th>
                            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                        </button></th>
                        @endif
                        @foreach ($results['columns'] as $column)
                            <th>{{$column['label']}}</th>
                        @endforeach
                        @if ($results['enableAction'])
                            <th>Action</th>
                        @endif
                    </tr>
                </thead>
                 @include('ui::admin.datatable.body' , [
                    'records' => $results['records'],
                    'enableMassAction' => $results['enableMassAction'],
                    'enableAction' => $results['enableAction'],
                    'actions' => $results['actions'],
                    'HumanizeDateTime' => $results['HumanizeDateTime']
                 ])
            </table>
        </div>
    </div>
    @if ($results['paginated'])     
        @include('ui::admin.datatable.footer' , [
            'pagination' => $results['records']->links('vendor.pagination.bootstrap-4')
        ])
    @endif
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