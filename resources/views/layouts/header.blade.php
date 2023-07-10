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
                    <li><a href="{{ route('safety') }}" class="@if (request()->RouteIs('safety')) ? active : '' @endif">HSE</a></li>
                    <li><a href="{{ route('solutions') }}" class="@if (request()->RouteIs('solutions')) ? active : '' @endif">Solutions</a></li>
                    <li><a href="{{ route('projects') }}" class="@if (request()->RouteIs('projects')) ? active : '' @endif">Projects</a></li>
                    <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-caret-down-fill fs-6"></i></a>
                        <ul>
                            <li><a href="{{ route('about') }}" class="@if (request()->RouteIs('about')) ? active : '' @endif">About {{ Config('app.name') }}</a></li>
                            <li><a href="{{ route('about') }}/#team" class="@if (request()->RouteIs('about')) ? active : '' @endif">Team</a></li>
                            <li><a href="{{ route('about') }}/#vision" class="@if (request()->RouteIs('about')) ? active : '' @endif">Vision & Mission</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('blog') }}" class="@if (request()->RouteIs('blog')) ? active : '' @endif">News</a></li>
                    <li><a href="{{ route('contact') }}" class="@if (request()->RouteIs('contact')) ? active : '' @endif">Contact</a></li>
                    <li class="d-md-none social-links d-flex justify-content-around mt-auto">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="bi bi-linkedin"></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="bi bi-facebook"></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="bi bi-youtube"></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="bi bi-instagram"></span></a>
                    </li>
                </ul>

            </nav><!-- .navbar -->
        </div>
    </div>
</header>
