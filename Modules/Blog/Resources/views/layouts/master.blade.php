<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Blog</title>
    <meta name="description" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet officia ipsa modi rerum quia quis eius error, voluptas ullam distinctio, expedita, rem sunt. Illo provident, velit quaerat ullam facere voluptatum!" >
    <link rel="icon" href="{{ $company_settings->company_favicon  }}">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    @stack('styles')
</head>

<body class="blog">
    @include('_.scrolltotop')
    <div class="main overflow-hidden">
        @include('_.navbar')
        <section id="blog" class="section blog-area ptb_100">
           
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        @include('blog::_.sidebar')
                    </div>
                    <div class="col-12 col-lg-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
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