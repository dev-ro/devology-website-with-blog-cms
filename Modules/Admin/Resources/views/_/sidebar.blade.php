<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{route('dashboard-home')}}" class="brand-link">
    <img src="{{$company_settings->company_logo_header}}" alt="{{$company_settings->company_name}} Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">{{$company_settings->company_name}}</span>
  </a>
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-th"></i>
            <p>
              Testimonial
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('testimonials-index')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Testimonials</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('testimonials-create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-th"></i>
            <p>
              Blogs
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('blogs-index-list')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Blogs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('blogs-create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('blogs-categories-index-list')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Blog Categories</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-th"></i>
            <p>
              Services
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('services-index-list')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Services</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('services-create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-th"></i>
            <p>
              Teams
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('teams-index-lists')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Team Lists</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-th"></i>
            <p>
              Portfolios
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('portfolio-index-list')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Portfolio Lists</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-envelope-open"></i>
            <p>
              Enquiries
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('enquiry-lists-admin')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Enquiries Lists</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              Settings
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('company-settings')}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Company Settings</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Website Settings</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</aside>