@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <main id="main">

        <x-breadcrumb>
            About Galactus
        </x-breadcrumb>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">

            <div class="col-lg-7">
                <div class="our-story bg-white pt-0 ps-0">
                    <h3>Our Story</h3>
                    <p>
                        Galactus Safety Solutions Limited, founded by Mbachi Ngulube, is a leading provider of
                        comprehensive safety solutions, committed to ensuring the well-being of individuals and
                        organizations.
                    </p>
                    <p>
                        With a strong focus on delivering excellence, Galactus Safety Solutions Limited
                        has been serving clients since its establishment and is registered with the Patents and Companies
                        Registration Agency (PACRA) under entity number 120220031661, guaranteeing its legitimacy and professionalism.
                    </p>
                    <p>
                        Our dedicated team of safety experts leverages extensive industry knowledge and experience to deliver tailored safety
                        services, including safety assessments, training programs, consulting, and equipment supply. We are passionately committed
                        to fostering a culture of safety, empowering our clients to mitigate risks, comply with regulations, and create a secure working environment.
                        Partner with Galactus Safety Solutions Limited to ensure the highest standards of safety and protect what matters most.
                    </p>


                    <div class="watch-video d-flex align-items-center position-relative">
                        <i class="bi bi-play-circle"></i>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 about-img" style="background-image: url({{ asset('img/about.jpg') }});"></div>

            </div>

        </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter section-bg">
        <div class="container">

            <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                <div>
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Happy Clients</p>
                </div>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                <div>
                    <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Projects</p>
                </div>
                </div>
            </div><!-- End Stats Item -->


            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-people color-pink flex-shrink-0"></i>
                <div>
                    <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hard Workers</p>
                </div>
                </div>
            </div><!-- End Stats Item -->

            </div>

        </div>
        </section><!-- End Stats Counter Section -->

        <!-- ======= Why choose us Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url({{ asset('img/why-wok-with-us.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3 class="fs-1">Why Choose Galactus</h3>
                        <p class="lead">Choose us as your safety company, and let us help you create a safer work environment, mitigate risks, and protect your most valuable assets—your employees.</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-patch-check-fill flex-shrink-0"></i>
                        <div>
                            <h4>Expertise and Experience</h4>
                            <p>With years of experience in the safety industry, our team of experts possesses the knowledge and skills necessary to address your safety needs effectively. We stay updated with the latest regulations, best practices, and industry standards, ensuring that you receive the highest level of professional service.</p>
                        </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-easel-fill flex-shrink-0"></i>
                        <div>
                            <h4>Comprehensive Safety Solutions</h4>
                            <p>We offer a wide range of safety services tailored to meet the specific requirements of your industry. From conducting thorough safety assessments and implementing customized safety programs to providing comprehensive safety training and supplying top-quality safety equipment, we have you covered.</p>
                        </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-people-fill flex-shrink-0"></i>
                        <div>
                            <h4>Client-Focused Approach</h4>
                            <p>We prioritize our clients and their unique needs. Our team takes the time to understand your organization, its operations, and safety challenges. We work closely with you to develop customized solutions that align with your goals and help create a safe and compliant work environment.</p>
                        </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="fa fa-helmet-safety  flex-shrink-0"></i>
                        <div>
                            <h4>Industry Experience</h4>
                            <p>We have extensive experience serving various industries, including construction, manufacturing, healthcare, transportation, and more. Our industry-specific knowledge allows us to provide targeted safety solutions that address the specific risks and challenges faced by your industry.</p>
                        </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>
            </div>
        </section><!-- End Why choose us Section -->

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Management</h2>
            <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
            </div>

            <div class="row gy-5">

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
                <div class="member-info text-center">
                <h4>Mbachi Ngulube</h4>
                <span>Executive Director</span>
                <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                <img src="{{ asset('img/team/team-2.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
                <div class="member-info text-center">
                <h4>Mwansa Kosamu</h4>
                <span>Product Manager</span>
                <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                <img src="{{ asset('img/team/team-3.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
                <div class="member-info text-center">
                <h4>Owen Kijele</h4>
                <span>CTO</span>
                <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
                </div>
            </div><!-- End Team Member -->

            </div>

        </div>
        </section><!-- End Our Team Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Testimonials</h2>
            <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
            </div>

            <div class="slides-2 swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                    <img src="{{ asset('img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    </div>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                    <img src="{{ asset('img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    </div>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                    <img src="{{ asset('img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    </div>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                    <img src="{{ asset('img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    </div>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                    <img src="{{ asset('img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    </div>
                </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
            </div>

        </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->

@endsection

