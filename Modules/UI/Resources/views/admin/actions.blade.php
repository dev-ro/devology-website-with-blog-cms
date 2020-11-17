<div class="btn-group btn-group-sm" role="group" aria-label="">
    <a href="{{$editurl}}"  class="btn btn-default btn-sm"><i class="fas fa-pencil-alt"></i></a>
    <form action="{{$delurl}}" method="post">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
    </form>
</div>