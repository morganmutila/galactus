  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-5">
            <div class="footer-info">
              <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <x-logo/>
              </a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente facere officia quidem.</p>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Company Links</h4>
            <ul>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About us</a></li>
              <li><a href="{{ route('services') }}">Services</a></li>
              <li><a href="{{ route('projects') }}">Projects</a></li>
              <li><a href="{{ route('blog') }}">Blog</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-3 col-md-4 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#" class="btn py-3 rounded-1 aos-init aos-animate">Request a quote</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-3 col-md-4 footer-links">
            <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
            </p>
            <div class="social-links d-flex mt-3">
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
            </div>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright {{ date('Y') }}&nbsp<strong><span>{{ Config('app.name') }} Safety Solutions Ltd</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer>