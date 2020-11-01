<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    @yield('meta')
    <link rel="icon" href="{{ $company_settings->company_favicon  }}">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    @stack('styles')
</head>

<body>
    @include('_.scrolltotop')
    <div class="main overflow-hidden">
        @include('_.navbar')
        @yield('content')
        @include('_.footer')
    </div>
    <script src="/assets/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/bootstrap/popper.min.js"></script>
    <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/js/plugins/plugins.min.js"></script>
    <script src="/assets/js/active.js"></script>
    @stack('script')
</body>

</html>