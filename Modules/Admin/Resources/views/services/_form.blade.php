<form action="{{$form_action}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="service_name">Service Name</label>
        <input type="text" name="service_name" id="service_name" class="form-control" placeholder="Service Name" value="@if(isset($service->name)){{$service->name}}@else{{old('service_name')}}@endif">
    </div>
    <div class="form-group">
        <label for="service_excerpt">Service Excerpt</label>
        <textarea name="service_excerpt"  id="service_excerpt" class="form-control" cols="30" rows="5" placeholder="Service Short Detail For Seo">@if(isset($service->excerpt)){{$service->excerpt}}@else{{old('service_excerpt')}}@endif</textarea>
    </div>
    <div class="form-group">
        <label for="service_keywords">Service Keywords</label>
        <textarea name="service_keywords"  id="service_keywords" class="form-control" cols="30" rows="5" placeholder="Service Keywords Detail For Seo">@if(isset($service->keywords)){{$service->keywords}}@else{{old('service_keywords')}}@endif</textarea>
    </div>
    <div class="form-group">
        <label for="service_description">Service Description</label>
        <textarea class="service_description" name="service_description" placeholder="Blog Description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">@if(isset($service->description)){{$service->description}}@else{{old('service_description')}}@endif</textarea>
    </div>
    <div class="form-group">
        <label for="service_image">Service Image</label>
        <input type="file" name="service_image" id="service_image" class="form-control">
        @if(isset($service->image))
            <img  src="{{$service->image}}" class="img-fluid mt-2" width="100px" alt="">
        @endif
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-3">
                <label for="service_featured">Featured </label>
                <input 
                    @if(isset($service->featured) && $service->featured)
                    checked
                    @endif
                    type="checkbox" 
                    name="service_featured" 
                    id="service_featured"
                >
            </div>
            <div class="col-md-3">
                <label for="service_footer_menu_show">Show in Footer</label>
                <input 
                    @if(isset($service->show_footer_menu) && $service->show_footer_menu)
                    checked
                    @endif
                    type="checkbox" 
                    name="service_footer_menu_show" 
                    id="service_footer_menu_show"
                >
            </div>
        </div>
    </div>
    <div class="form-group">
        <button 
            type="submit" 
            class="btn btn-success">@if($method==='POST') Create @else Edit @endif
        </button>
    </div>
</form>

@section('styles')
    <link rel="stylesheet" href="/assets/admin/plugins/summernote/summernote-bs4.css">
@endsection
@section('scripts')
<script src="/assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $('.service_description').summernote();
    </script>
@endsection