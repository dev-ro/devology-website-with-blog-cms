<header id="header">
    <!-- Navbar -->
    <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand shadow-xs py-1">
        <div class="container header">
            <!-- Navbar Brand-->
            <a class="navbar-brand" href="/">
               @if ( $company_settings->company_logo !== '' )
                   <img src="{{$company_settings->company_logo_header}}" width="80px" alt="{{$company_settings->company_name}}" class="img-fluid">
               @else
                   <h3>{{$company_settings->company_name}}</h3>
               @endif
            </a>
            <div class="ml-auto"></div>
            <!-- Navbar -->
            <ul class="navbar-nav items">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pages_about')}}" class="nav-link">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('services-index')}}">Services <i class="fas fa-angle-down ml-1"></i></a>
                    <ul class="dropdown-menu">
                       @foreach ($company_services as $service)
                       <li class="nav-item"> <a class="nav-link" href="{{route('service-detail' , $service->slug)}}">{{$service->name}}</a></li>
                       @endforeach
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Blog Grid <i class="fas fa-angle-right ml-1"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="blog-two-column.html" class="nav-link">Grid 2 Column</a></li>
                                <li class="nav-item"><a href="blog-three-column.html" class="nav-link">Grid 3 Column</a></li>
                                <li class="nav-item"><a href="blog-left-sidebar.html" class="nav-link">Left Sidebar</a></li>
                                <li class="nav-item"><a href="blog-right-sidebar.html" class="nav-link">Right Sidebar</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blogs-index')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('portfolio-index')}}">Our Portfolio</a>
                </li>
            </ul>
            <!-- Navbar Icons -->
            <ul class="navbar-nav icons">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
            </ul>
            <!-- Navbar Toggler -->
            <ul class="navbar-nav toggle">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                        <i class="fas fa-bars toggle-icon m-0"></i>
                    </a>
                </li>
            </ul>
            <!-- Navbar Action Button -->
            <ul class="navbar-nav action">
                <li class="nav-item ml-3">
                    <a href="{{route('pages_contact')}}" class="btn ml-lg-auto"><i class="fas fa-paper-plane contact-icon mr-md-2"></i>Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>