@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <main id="main">

        <x-breadcrumb>
            About {{ config('app.name') }}
        </x-breadcrumb>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7">
                        <div class="our-story pt-0 ps-0 pe-0 pe-md-3">
                            <h2 class="gss-title text-capitalize">Our Company</h2>
                            <p class="lh-base gss-text-line">
                                Galactus Safety Solutions Limited, founded by Mbachi Ngulube, is a leading provider of
                                comprehensive safety solutions, committed to ensuring the well-being of individuals and
                                organizations.
                            </p>
                            <p class="lh-base gss-text-line">
                                With a strong focus on delivering excellence, Galactus Safety Solutions Limited
                                has been serving clients since its establishment and is registered with the Patents and Companies
                                Registration Agency (PACRA) under entity number 120220031661, guaranteeing its legitimacy and professionalism.
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-5 about-img" style="background-image: url({{ asset('img/about-1.jpg') }});"></div>

                </div>

            </div>
        </section>
        <!-- End About Section -->


        <!-- ======= About Section 2 ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">
                    <div class="col-lg-5 about-img order-2 order-md-1" style="background-image: url({{ asset('img/about-2.jpg') }});" data-aos="fade-up" data-aos-delay="300"></div>

                    <div class="col-lg-7 order-1 order-md-2">
                        <div class="our-story pt-0 pe-0 ps-0 ps-md-3" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="gss-title text-capitalize mt-3 mt-mb-0">Industrial Safety Professionals</h2>
                            <p class="lh-base gss-text-line">Our dedicated team of safety experts leverages extensive industry knowledge
                            and experience to deliver tailored safety services, including safety assessments,
                            training programs, consulting, and equipment supply. We are passionately committed to
                            fostering a culture of safety, empowering our clients to mitigate risks, comply with
                            regulations, and create a secure working environment. Partner with Galactus Safety Solutions
                            Limited to ensure the highest standards of safety and protect what matters most.
                            <p>

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter img-bg" style="background-image: url('{{ asset('img/img-bg-2.jpg') }}');">
                <div class="container position-relative">

                    <div class="section-header pb-0">
                        <h3 class="title text-white mb-0">Our Statistics</h3>
                    </div>

                    <div class="row gy-2 justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">

                        <div class="col-md-3 col-6">
                            <div class="stats-item bg-transparent text-white text-center d-flex flex-column  align-items-center w-100 h-100">
                                <i class="bi bi-emoji-smile flex-shrink-0"></i>
                                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter text-white"></span>
                                <p>Happy Clients<br>A testament to our commitment to exceptional service and client satisfaction.</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-md-3 col-6">
                            <div class="stats-item bg-transparent text-white text-center d-flex flex-column  align-items-center w-100 h-100">
                                <i class="bi bi-journal-richtext flex-shrink-0"></i>
                                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter text-white"></span>
                                <p>Projects<br>Showcasing Our Successful Safety Solutions and Project Execution Expertise.</p>
                            </div>
                        </div><!-- End Stats Item -->


                        <div class="col-md-3 col-6">
                            <div class="stats-item bg-transparent text-white text-center d-flex flex-column align-items-center w-100 h-100">
                                <i class="bi bi-people flex-shrink-0"></i>
                                <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter text-white"></span>
                                <p>Professional Workers<br>A Dedicated Team of Safety Experts, Committed to Your Safety.</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-md-3 col-6">
                            <div class="stats-item bg-transparent text-white text-center d-flex flex-column align-items-center w-100 h-100">
                                <i class="bi bi-bezier flex-shrink-0"></i>
                                <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter text-white"></span>
                                <p>Solutions<br>Comprehensive safety assessments to specialized training programs and expert consulting services.</p>
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
                        <p class="gss-text-line">Choose us as your safety company, and let us help you create a safer work environment, mitigate risks, and protect your most valuable assets—your employees.</p>

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

        <!-- ======= Download Company Profile ======= -->
        <section class="img-bg text-center d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('img/download-profile-bg.jpg') }}');">
            <div class="container position-relative">
                <div class="row gy-2 position-relative justify-content-center align-items-center">
                    <div class="col">
                        <h3 class="text-white mb-4">Download {{ Config('app.name') }} Safety Company Profile</h3>
                        <a href="{{ route('home') }}" class="btn call-to-action-btn rounded-0 text-white px-3 d-inline-flex align-items-center">
                            <i class="bi bi-file-earmark-arrow-down fs-4 me-2"></i><span>Download Profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Download Company Profile -->

        @include('partials._team')

        {{-- @include('partials._testimonials') --}}

    </main><!-- End #main -->

@endsection

