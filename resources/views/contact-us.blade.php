@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

  <main id="main">

	<x-breadcrumb>Contact Us</x-breadcrumb>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-6">

                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-map"></i>
                    <h3>Our Address</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>contact@example.com</p>
                    </div>

                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="email-form">
                        <div class="row gy-4">
                            <div class="col-lg-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div><!-- End Contact Form -->
            </div>

        </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection('content')
