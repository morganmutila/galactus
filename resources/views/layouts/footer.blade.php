  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 text-center text-md-start order-md-3">
                    <div class="footer-info text-center">
                        <a href="{{ route('home') }}" class="logo d-flex align-items-center justify-content-center">
                            <img src="{{ asset('img/logo-white.png') }}" height="90px"/>
                        </a>
                        <p class="text-sm px-md-3 px-lg-4">We are dedicated to providing comprehensive safety solutions, expert guidance, and reliable support.</p>
                        {{-- <a href="#" class="btn rounded-1 text-white my-3">Request a quote</a> --}}
                    </div>
                </div><!-- End footer info column-->

                <div class="col-lg-2 col-md-4 text-center text-md-start footer-links order-md-4">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="{{ route('safety') }}">What is HSE?</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('contact') }}">Request a quote</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-3 text-center text-md-start footer-links order-md-1">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="{{ route('about') }}">About {{ Config('app.name') }}</a></li>
                        <li><a href="{{ route('solutions') }}">Solutions</a></li>
                        <li><a href="{{ route('industries') }}">Industrial Solutions</a></li>
                        <li><a href="{{ route('blog') }}">News</a></li>
                        <li><a href="{{ route('home') }}">Careers</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-4 d-none d-md-block text-center text-md-start footer-links order-md-2">
                    <h4>Our Solutions</h4>
                    <ul>
                        <li><a href="#">Risk Assessments</a></li>
                        <li><a href="#">Training Programs</a></li>
                        <li><a href="#">Consulting</a></li>
                        <li><a href="#">Equipment Supply</a></li>
                        <li><a href="#">Audits and Inspections</a></li>
                        <li><a href="#">Management Systems</a></li>
                    </ul>
                </div><!-- End footer links column-->

                <div class="col-lg-2 col-md-4 text-center text-md-start footer-links order-md-5">
                    <h4>Follow Us</h4>
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
                &copy; {{ date('Y') }}&nbsp{{ Config('app.name') }} Safety Solutions Ltd. <br class="d-md-none">All Rights Reserved. <span class="d-none d-md-inline">{{ Config('app.name') }} is registered with the Patents and Companies Registration Agency (PACRA) under entity number 120220031661.</span>
            </div>
        </div>
    </div>

</footer>
