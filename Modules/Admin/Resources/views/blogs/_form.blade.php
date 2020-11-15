<form action="{{$form_action}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="blog_title">Title</label>
        <input type="text" name="blog_title" id="blog_title" class="form-control" placeholder="Blog Title" value="@if(isset($blog->title)){{$blog->title}}@else{{old('blog_title')}}@endif">
    </div>
    <div class="form-group">
        <label for="blog_excerpt">Blog Excerpt</label>
        <textarea name="blog_excerpt"  id="blog_excerpt" class="form-control" cols="30" rows="5" placeholder="Blog Short Detail For Seo">@if(isset($blog->excerpt)){{$blog->excerpt}}@else{{old('blog_excerpt')}}@endif</textarea>
    </div>
    <div class="form-group">
        <label for="blog_category">Blog Category</label>
        <small class="text-muted d-block">Hold ctrl to select multiple category</small>
        <select name="blog_category[]" id="blog_category" class="form-control" multiple>
            <option value="">Select Category</option>
            @foreach ($blogcategories as $blogcategory)
                <option  
                    @if(isset($blog->blogcategories))
                        @foreach ($blog->blogcategories as $cat)
                            @if($cat->id === $blogcategory->id)
                                selected
                            @endif
                        @endforeach
                    @endif            
                    value="{{$blogcategory->id}}">{{$blogcategory->title}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="blog_description">Blog Description</label>
        
        <wsy-editor textarea_name='blog_description' content='@if(isset($blog->description)){{$blog->description}}@else{{old('blog_description')}}@endif' />
    </div>
    <div class="form-group">
        <label for="blog_image">Blog Image</label>
        <input type="file" name="blog_image" id="blog_image" class="form-control">

        @if(isset($blog->ft_img))
            <img  src="/storage/{{$blog->ft_img}}" class="img-fluid mt-2" width="100px" alt="">
        @endif

    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">@if($method==='POST') Create @else Edit @endif</button>
    </div>
</form>