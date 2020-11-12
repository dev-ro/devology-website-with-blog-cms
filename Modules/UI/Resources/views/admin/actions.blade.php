<div class="btn-group btn-group-sm" role="group" aria-label="">
    <a href="{{$editurl}}"  class="btn btn-sm btn-primary">Edit</a>
    <form action="{{$delurl}}" method="post" onsubmit="d(e)">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    </form>
</div>