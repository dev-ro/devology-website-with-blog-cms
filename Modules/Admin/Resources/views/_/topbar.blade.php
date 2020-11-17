<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('dashboard-home')}}" class="nav-link">Dashboard</a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-cogs"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="{{route('home.index')}}" target="_blank" class="nav-link dropdown-item">Website</a>
        <div class="dropdown-divider"></div>
        <a href="{{route('company-settings')}}" target="_blank" class="nav-link dropdown-item">Settings</a>
    </li>
  </ul>
</nav>