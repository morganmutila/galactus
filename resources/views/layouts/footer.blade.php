  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 text-center text-md-start order-md-3">
                <div class="footer-info text-center">
                  <a href="{{ route('home') }}" class="logo d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/logo.png') }}"/>
                  </a>
                  <p class="text-sm px-md-4 px-lg-5">We are dedicated to providing comprehensive safety solutions, expert guidance, and reliable support to ensure the well-being of your workforce and the success of your organization.</p>
                  <a href="#" class="btn rounded-1 text-white my-3">Request a quote</a>
                </div>
            </div><!-- End footer info column-->
            <div class="col-lg-2 col-md-4 text-center text-md-start footer-links order-md-4">
                <h4>Contact</h4>
                <p>
                    A108 Adam Street <br>
                    NY 535022, USA<br><br>
                    <strong>Phone:</strong> +260976249140<br>
                    <strong>Email:</strong> info@galactussafety.com<br>
                </p>

            </div><!-- End footer links column-->
            <div class="col-lg-2 col-md-3 text-center text-md-start footer-links order-md-1">
                <h4>Company</h4>
                <ul>
                <li><a href="{{ route('about') }}">About us</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('projects') }}">Projects</a></li>
                <li><a href="{{ route('home') }}">Brand</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                </ul>
            </div><!-- End footer links column-->

            <div class="col-lg-2 col-md-4 d-none d-md-block text-center text-md-start footer-links order-md-2">
                <h4>Our Solutions</h4>
                <ul>
                    <li><a href="#">Consultation</a></li>
                    <li><a href="#">Safety Gear</a></li>
                    <li><a href="#">Project Management</a></li>
                </ul>
            </div><!-- End footer links column-->


            <div class="col-lg-2 col-md-4 text-center text-md-start footer-links order-md-5">
                    <h4>Follow us</h4>
                    <p>Follow {{ Config('app.name') }} online via our social channels for the latest news, updates, and insights.</p>
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          Copyright &copy; {{ date('Y') }}&nbsp<strong><span>{{ Config('app.name') }} Safety Solutions Ltd</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer>
