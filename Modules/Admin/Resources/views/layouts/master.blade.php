<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}" >
    <title>Admin | @yield('title')</title>
    <link rel="icon" href="{{ $company_settings->company_favicon  }}">
    <link rel="stylesheet" href="/assets/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/assets/admin/dist/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('styles')
    @yield('admin_plugins_files')

  </head>
  <body class="hold-transition sidebar-mini">
    <div id="app" class="wrapper">
      @include('admin::_.topbar')
      @include('admin::_.sidebar')
      <div class="content-wrapper">
        <x-breadcrumb />
        <div class="content">
          <div class="container-fluid">
            @yield('content')
          </div>
        </div>
      </div>
      <aside class="control-sidebar control-sidebar-dark">
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      @include('admin::_.footer')
    </div>
    <script src="/assets/admin/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/admin/dist/js/adminlte.min.js"></script>
    <script src="/assets/js/plugins.min.js"> </script>
    <script src="/assets/js/custom.js"> </script>
    <script src="/js/admin.js"></script>
    @yield('scripts')
    @stack('script')
  </body>
</html>
