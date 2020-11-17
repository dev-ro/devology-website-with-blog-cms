<form action="{{$form_action}}" enctype="multipart/form-data" method="POST">
    @csrf
    @method($method) 
        
    <div class="form-group">
        <label for="name">Name</label>
        <input 
            type="text" 
            name="testimonial_name" 
            id="name" 
            class="form-control" 
            value="@if(isset($testimonial->name)){{$testimonial->name}}@else{{old('tesimonial_name')}}@endif"
        >
    </div>
    <div class="form-group">
        <label for="testimonial_designation">Designation / Company</label>
        <input type="text" name="testimonial_designation" id="testimonial_designation" class="form-control" value="@if(isset($testimonial->company)){{$testimonial->company}}@else{{old('testimonial_designation')}}@endif">
    </div>
    <div class="form-group">
        <label for="testimonial_desc">Description</label>
        <textarea name="testimonial_desc"  cols="30" rows="5" id="testimonial_desc" class="form-control">@if(isset($testimonial->description)){{$testimonial->description}}@else{{old('testimonial_desc')}}@endif</textarea>
    </div>
    <div class="form-group">
        <label for="testimonial_image">Image</label>
        <input type="file" name="testimonial_image" id="testimonial_image" class="testimonial_image form-control">
        @if(isset($testimonial->image))
            <img  src="{{$testimonial->image}}" class="img-fluid mt-2" width="100px" alt="">
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">
            @if($method==='POST') Create @else Edit @endif
        </button>
    </div>
</form>