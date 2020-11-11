  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">{{$page_title ?? 'Home'}}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
            <a  href="{{route('dashboard-home')}}">Home</a></li>
            @if(isset($breadcrumbs) && is_array($breadcrumbs))
              @foreach ($breadcrumbs as $item)
              <li class="breadcrumb-item">{{$item}}</li>
              @endforeach
            @endif
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>