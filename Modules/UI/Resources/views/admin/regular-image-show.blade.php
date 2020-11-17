@if (isset($image) && $image !== '')
    <img 
        src="{{$image}}" 

        alt="{{isset($alt) ? $alt : $company_settings->company_name}}" 

        class="img-fluid {{ isset($class) ? $class : ''}}" 

        width="{{ isset($width) ? $width : '50px' }}" 

        height="{{isset($width) ? $width : '50px'}}" 

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
