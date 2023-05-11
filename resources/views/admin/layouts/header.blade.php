      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <div class="d-flex align-items-center justify-content-between gap-4 py-3">
            <a class="navbar-brand brand-logo" style="width:40px;" href="{{ route('dashboard') }}">
              <x-admin-logo/>
            </a>
            <h5 class="text-white text-left">{{ Config('app.name') }} Safety <br>Admin </h5>  
          </div>  
          <a class="navbar-brand brand-logo-mini" style="width:25px;"  href="{{ route('dashboard') }}">
            <x-admin-logo/>
          </a>  
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">
                <a href="{{ route('home') }}" target="_blank" class="btn btn-primary">Go to website</a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{ asset('admin/images/faces/face8.jpg') }}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{ asset('admin/images/faces/face8.jpg') }}" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Mbachi Ngulube</p>
                  <p class="font-weight-light text-muted mb-0">machingulube@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile</a>
                <a class="dropdown-item">FAQ</a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>