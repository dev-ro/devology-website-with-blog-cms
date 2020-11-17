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
        <textarea class="blog_description" name="blog_description" placeholder="Blog Description"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($blog->description)){{$blog->description}}@else{{old('blog_description')}}@endif</textarea> 
    </div>
    <div class="form-group">
        <label for="blog_image">Blog Image</label>
        <input type="file" name="blog_image" id="blog_image" class="form-control">
        @if(isset($blog->ft_img))
            <img  src="{{$blog->ft_img}}" class="img-fluid mt-2" width="100px" alt="">
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">@if($method==='POST') Create @else Edit @endif</button>
    </div>
</form>

@section('styles')
    <link rel="stylesheet" href="/assets/admin/plugins/summernote/summernote-bs4.css">
@endsection

@section('scripts')
<script src="/assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $('.blog_description').summernote();
    </script>
@endsection