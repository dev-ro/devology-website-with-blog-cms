<title>{{ $title ?? $company_settings->company_name ?? config('app.name')}}</title>
<meta name="description" content="{{ $description ?? $company_settings->company_description ?? $company_settings->tagline }}" >

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{config('app.url')}}">
<meta property="og:title" content="{{$title ?? $company_settings->company_name ?? config('app.name')}}">
<meta property="og:description" content="{{ $description ?? $company_settings->company_description ?? $company_settings->tagline }}">
<meta property="og:image" content="{{$simg ?? $company_settings->company_logo}}">

<!-- Twitter -->
<meta property="twitter:card" content="{{$simg ?? $company_settings->company_logo}}">
<meta property="twitter:url" content="{{config('app.url')}}">
<meta property="twitter:title" content="{{$title ?? $company_settings->company_name ?? config('app.name')}}">
<meta property="twitter:description" content="{{ $description ?? $company_settings->company_description ?? $company_settings->tagline }}">
<meta property="twitter:image" content="{{$simg ?? $company_settings->company_logo}}">