@if (isset($image) && $image !== '')
    <img 
        src="{{'/storage/'.$image}}" 

        alt="{{isset($alt) ? $alt : $company_settings->company_name}}" 

        class="img-fluid {{ isset($class) ? $class : ''}}" 

        width="{{ isset($width) ? $width : '120px' }}" 

        height="{{isset($width) ? $width : '120px'}}" 

        style="{{isset($styles) ? $styles : ''}}"
    >
@else
    <img 
    width="120px" 
    src="{{ config('admin.image_placeholder') }}" 
    alt="{{$company_settings->company_name}}" 
    class="img-fluid"
    >
@endif
