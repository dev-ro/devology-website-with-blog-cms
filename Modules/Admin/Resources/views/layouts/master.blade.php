<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}" >
        <title>Admin | @yield('title')</title>
        <link rel="icon" href="{{ $company_settings->company_favicon  }}">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="/assets/admin/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/assets/admin/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="/assets/admin/dist/css/main.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    </head>
    <body class="hold-transition sidebar-mini">
        <div id="app" class="wrapper">
          <!-- Navbar -->
         @include('admin::_.topbar')
         @include('admin::_.sidebar')
          <!-- /.navbar -->
        
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <x-breadcrumb />
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
              <div class="container-fluid">
               @yield('content')
                <!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->
          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
              <h5>Title</h5>
              <p>Sidebar content</p>
            </div>
          </aside>
          <!-- /.control-sidebar -->
         @include('admin::_.footer')
        </div>
        <!-- ./wrapper -->
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="/assets/admin/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/assets/admin/dist/js/adminlte.min.js"></script>
        <script src="/js/admin.js"></script>
        @stack('script')
    </body>
</html>
