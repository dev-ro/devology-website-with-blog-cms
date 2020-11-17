<form action="{{$form_action}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="blogcategory_title">Blog Category Title</label>
        <input type="text" name="blogcategory_title" id="blogcategory_title" class="form-control" placeholder="Blog Title" value="@if(isset($blogcategory->title)){{$blogcategory->title}}@else{{old('blogcategory_title')}}@endif">
    </div>
    <div class="form-group">
        <label for="blogcategory_excerpt">Blog Category Excerpt</label>
        <textarea name="blogcategory_excerpt"  id="blogcategory_excerpt" class="form-control" cols="30" rows="5" placeholder="Blog Category Short Detail For Seo">@if(isset($blogcategory->excerpt)){{$blogcategory->excerpt}}@else{{old('blogcategory_excerpt')}}@endif</textarea>
    </div>
    <div class="form-group">
        <label for="blogcategory_image">Blog Category Image</label>
        <input type="file" name="blogcategory_image" id="blogcategory_image" class="form-control">
        @if(isset($blogcategory->image))
            <img  src="{{$blogcategory->image}}" class="img-fluid mt-2" width="100px" alt="">
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">@if($method==='POST') Create @else Edit @endif</button>
    </div>
</form>