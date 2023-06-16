  <header id="header" class="header d-flex flex-row position-normal bg-secondary">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <x-logo/>
      </a>
      <div>
        {{-- <div class="align-items-center justify-content-end d-none d-md-flex gap-3 pb-3" style="font-size:14px;">
          <div class="text-white small"><span class="bi bi-telephone"></span>&nbsp;&nbsp;+1 5589 55488 55</div>
          <div class="text-white small"><span class="bi bi-envelope"></span>&nbsp;&nbsp;info@galactussafety.com</div>
        </div> --}}
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="{{ route('home') }}" class="@if (request()->RouteIs('home')) ? active : '' @endif">Home</a></li>
            <li><a href="{{ route('services') }}" class="@if (request()->RouteIs('services')) ? active : '' @endif">Solutions</a></li>
            <li><a href="{{ route('projects') }}" class="@if (request()->RouteIs('projects')) ? active : '' @endif">Projects</a></li>
            <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-caret-down-fill fs-6"></i></a>
              <ul>
                <li><a href="{{ route('about') }}" class="@if (request()->RouteIs('about')) ? active : '' @endif">About</a></li>
                <li><a href="{{ route('about') }}/#team" class="@if (request()->RouteIs('about')) ? active : '' @endif">Our Team</a></li>
                <li><a href="{{ route('about') }}/#vision" class="@if (request()->RouteIs('about')) ? active : '' @endif">Vision & Mission</a></li>
              </ul>
            </li>
            <li><a href="{{ route('blog') }}" class="@if (request()->RouteIs('blog')) ? active : '' @endif">Blog</a></li>
            <li><a href="{{ route('contact') }}" class="@if (request()->RouteIs('contact')) ? active : '' @endif">Contact</a></li>
          </ul>
        </nav><!-- .navbar -->
      </div>
    </div>
  </header>
