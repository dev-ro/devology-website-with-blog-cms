<form action="{{$form_action}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="team_name">Name</label>
        <input type="text" name="team_name" id="team_name" class="form-control" placeholder="Team Name" value="@if(isset($team->team_name)){{$team->team_name}}@else{{old('team_name')}}@endif">
    </div>
    <div class="form-group">
        <label for="team_designation">Designation</label>
        <input type="text" name="team_designation" id="team_designation" class="form-control" placeholder="Team Desgnation" value="@if(isset($team->designation)){{$team->designation}}@else{{old('team_designation')}}@endif">
    </div>
    <div class="form-group">
        <label for="team_description">Description</label>
        <textarea name="team_description"  id="team_description" class="form-control" cols="30" rows="5" placeholder="Team Description">@if(isset($team->description)){{$team->description}}@else{{old('team_description')}}@endif</textarea>
    </div>
    <div class="form-group">
        <label for="team_image">Team Image</label>
        <input type="file" name="team_image" id="team_image" class="form-control">

        @if(isset($team->image))
            <img  src="{{$team->image}}" class="img-fluid mt-2" width="100px" alt="">
        @endif

    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">@if($method==='POST') Add Team @else Edit @endif</button>
    </div>
</form>