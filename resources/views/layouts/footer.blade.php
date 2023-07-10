  <footer id="footer" class="footer bg-secondary">

    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5 order-1">
                    <div class="footer-info text-start">
                        <a href="{{ route('home') }}" class="logo d-flex align-items-center justify-content-center justify-content-md-start">
                            <img src="{{ asset('img/logo-white.png') }}" class="d-none d-md-inline-block" height="90px"/>
                            <img src="{{ asset('img/logo.png') }}" class="d-md-none" height="80px"/>
                        </a>
                        <p class="text-sm d-none d-md-block pe-md-4 pe-5">We are dedicated to providing comprehensive safety solutions, expert guidance, and reliable support.</p>
                    </div>
                </div><!-- End footer info column-->

                <div class="col-lg-2 col-md-3 text-center text-md-start footer-links order-2">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="{{ route('about') }}">About {{ Config('app.name') }}</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('solutions') }}">Solutions</a></li>
                        <li><a href="{{ route('industries') }}">Industrial Solutions</a></li>
                        <li><a href="{{ route('blog') }}">News</a></li>
                        <li><a href="{{ route('home') }}">Careers</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-4 text-center text-md-start footer-links order-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="{{ route('safety') }}">What is HSE?</a></li>
                        <li><a href="{{ route('contact') }}">Request a quote</a></li>
                        <li><a href="{{ route('sitemap') }}">Sitemap</a></li>

                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-3 col-md-4 d-none d-md-block text-center text-md-start footer-links order-4">
                    <h4>Our Solutions</h4>
                    <ul>
                        <li><a href="#">Safety Audits</a></li>
                        <li><a href="#">Health Education & Promotion</a></li>
                        <li><a href="#">Health & Safety Consultancy</a></li>
                        <li><a href="#">Safety Equipment</a></li>
                        <li><a href="#">Safety File Development</a></li>
                        <li><a href="#">Environmental Impact Assessment</a></li>
                        <li><a href="#">Hazardous Materials Management</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-4 text-center text-md-start footer-links order-5">
                    <h4 class="d-none d-md-block">Follow Us</h4>
                    <p>Follow {{ Config('app.name') }} via our social channels for the latest news and updates.</p>
                    <div class="social-links d-flex justify-content-around mt-3">
                        <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-legal text-center text-md-start position-relative">
        <div class="copyright">
            <div class="container">
                <div class="d-block">&copy; {{ date('Y') }}&nbsp{{ Config('app.name') }} Safety Solutions Ltd. All Rights Reserved. <span class="d-none d-md-inline">{{ Config('app.name') }} is registered with PACRA entity number 120220031661.</span></div>
            </div>
        </div>
    </div>

</footer>
