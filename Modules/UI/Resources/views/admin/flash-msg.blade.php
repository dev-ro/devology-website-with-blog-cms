@if( $errors->any() ) 
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
            </button>
            {{ $error }}
        </div>
        @endforeach
    </ul>
    @endif
    @if($fs = Session::get('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{$fs}}
    </div>
@endif