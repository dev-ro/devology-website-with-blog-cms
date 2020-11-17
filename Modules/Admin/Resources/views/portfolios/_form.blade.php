<form action="{{$form_action}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="portfolio_title">Title</label>
        <input type="text" name="portfolio_title" id="portfolio_title" class="form-control" placeholder="Portfolio Title" value="@if(isset($portfolio->title)){{$portfolio->title}}@else{{old('portfolio_title')}}@endif">
    </div>
    <div class="form-group">
        <label for="portfolio_excerpt">Porfolio Excerpt</label>
        <textarea name="portfolio_excerpt"  id="portfolio_excerpt" class="form-control" cols="30" rows="5" placeholder="Portfolio Short Detail For Seo">@if(isset($portfolio->excerpt)){{$portfolio->excerpt}}@else{{old('portfolio_excerpt')}}@endif</textarea>
    </div>
    <div class="form-group">
        <label for="portfolio_description">Portfolio Description</label>
        
        <wsy-editor textarea_name='portfolio_description' content='@if(isset($portfolio->description)){{$portfolio->description}}@else{{old('portfolio_description')}}@endif' />
    </div>
    <div class="form-group">
        <label for="portfolio_image">Portfolio Image</label>
        <input type="file" name="portfolio_image" id="portfolio_image" class="form-control">

        @if(isset($portfolio->image))
            <img  src="{{$portfolio->image}}" class="img-fluid mt-2" width="100px" alt="">
        @endif

    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">@if($method==='POST') Create @else Edit @endif</button>
    </div>
</form>