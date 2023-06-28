  <header id="header" class="header d-flex flex-row position-normal bg-secondary">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <x-logo/>
        </a>
        <div>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('home') }}" class="@if (request()->RouteIs('home')) ? active : '' @endif">Home</a></li>
                    <li><a href="{{ route('safety') }}" class="@if (request()->RouteIs('safety')) ? active : '' @endif">Safety Info</a></li>
                    <li><a href="{{ route('solutions') }}" class="@if (request()->RouteIs('solutions')) ? active : '' @endif">Solutions</a></li>
                    <li><a href="{{ route('projects') }}" class="@if (request()->RouteIs('projects')) ? active : '' @endif">Projects</a></li>
                    <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-caret-down-fill fs-6"></i></a>
                    <ul>
                        <li><a href="{{ route('about') }}" class="@if (request()->RouteIs('about')) ? active : '' @endif">About us</a></li>
                        <li><a href="{{ route('about') }}/#team" class="@if (request()->RouteIs('about')) ? active : '' @endif">Our Team</a></li>
                        <li><a href="{{ route('about') }}/#team" class="@if (request()->RouteIs('about')) ? active : '' @endif">Brand</a></li>
                        <li><a href="{{ route('about') }}/#vision" class="@if (request()->RouteIs('about')) ? active : '' @endif">Vision & Mission</a></li>
                    </ul>
                    </li>
                    <li><a href="{{ route('blog') }}" class="@if (request()->RouteIs('blog')) ? active : '' @endif">News</a></li>
                    <li><a href="{{ route('contact') }}" class="@if (request()->RouteIs('contact')) ? active : '' @endif">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->
        </div>
    </div>
</header>
