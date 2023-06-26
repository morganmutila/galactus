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
                        <div class="our-story bg-white pt-0 ps-0 pe-0 pe-md-3">
                            <h2 class="gss-title">Our Company</h2>
                            <p class="lead">
                                Galactus Safety Solutions Limited, founded by Mbachi Ngulube, is a leading provider of
                                comprehensive safety solutions, committed to ensuring the well-being of individuals and
                                organizations.
                            </p>
                            <p class="lh-lg">
                                With a strong focus on delivering excellence, Galactus Safety Solutions Limited
                                has been serving clients since its establishment and is registered with the Patents and Companies
                                Registration Agency (PACRA) under entity number 120220031661, guaranteeing its legitimacy and professionalism.
                            </p>
                            <p class="lh-lg">
                                Our dedicated team of safety experts leverages extensive industry knowledge and experience to deliver tailored safety
                                services, including safety assessments, training programs, consulting, and equipment supply. We are passionately committed
                                to fostering a culture of safety, empowering our clients to mitigate risks, comply with regulations, and create a secure working environment.
                                Partner with Galactus Safety Solutions Limited to ensure the highest standards of safety and protect what matters most.
                            </p>


                            <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-play-circle"></i>
                                <a href="https://www.youtube.com" class="glightbox stretched-link">Watch Video</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 about-img" style="background-image: url({{ asset('img/about.jpg') }});"></div>

                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter img-bg" style="background-image: url('{{ asset('img/img-bg-2.jpg') }}');">
                <div class="container">

                    <div class="row gy-2 position-relative justify-content-center align-items-center">

                        <div class="col-md-3 col-6">
                            <div class="stats-item bg-transparent text-white text-center d-flex flex-column  align-items-center w-100 h-100">
                                <i class="bi bi-emoji-smile flex-shrink-0"></i>
                                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter text-white"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-md-3 col-6">
                            <div class="stats-item bg-transparent text-white text-center d-flex flex-column  align-items-center w-100 h-100">
                                <i class="bi bi-journal-richtext flex-shrink-0"></i>
                                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter text-white"></span>
                                <p>Projects</p>
                            </div>
                        </div><!-- End Stats Item -->


                        <div class="col-md-3 col-6">
                            <div class="stats-item bg-transparent text-white text-center d-flex flex-column align-items-center w-100 h-100">
                                <i class="bi bi-people flex-shrink-0"></i>
                                <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter text-white"></span>
                                <p>Hard Workers</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-md-3 col-6">
                            <div class="stats-item bg-transparent text-white text-center d-flex flex-column align-items-center w-100 h-100">
                                <i class="bi bi-bezier flex-shrink-0"></i>
                                <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter text-white"></span>
                                <p>Solutions</p>
                            </div>
                        </div><!-- End Stats Item -->

                    </div>

                </div>
        </section><!-- End Stats Counter Section -->

        <!-- ======= Why choose us Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-5 image" style="background-image: url({{ asset('img/why-wok-with-us.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h2 class="gss-title">Why Choose Galactus</h2>
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

        @include('partials._team')

        {{-- @include('partials._testimonials') --}}

    </main><!-- End #main -->

@endsection

