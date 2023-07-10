@extends('layouts.app')

@section('title', 'About Galactus')

@section('content')

    <main id="main">

        <x-breadcrumb>
            About {{ config('app.name') }}
        </x-breadcrumb>

        <!-- ======= Our company Section ======= -->
        <section>
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-md-6">
                        <h2 class="gss-title text-capitalize fs-1">Our Company</h2>
                        <p class="lead">
                            Galactus Safety Solutions Limited, founded by Mbachi Ngulube is a leading provider of comprehensive Health, Safety, and Environment (HSE) services, committed to ensuring the well-being of individuals and
                            organizations.
                        </p>
                        <p class="lh-base gss-text-line">
                            With years of industry experience, we specialize in helping organizations create and maintain safe, healthy work environments while minimizing their impact on the environment.
                            Galactus Safety Solutions Limited
                            has been serving clients since its establishment. We are registered with the Patents and Companies
                            Registration Agency (PACRA) under entity number 120220031661, guaranteeing our professionalism.
                        </p>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('img/about-1.jpg') }}" alt="About us" class="img-fluid">
                    </div>

                </div>

            </div>
        </section><!-- End our company section -->

        <!-- ======= Proffetional experts ======= -->
        <section class="section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 order-2 order-md-1">
                        <img src="{{ asset('img/media/galactus-60.jpg') }}" alt="Our Experts" class="img-fluid">
                    </div>

                    <div class="col-md-6 order-1 order-md-2">
                        <h2 class="gss-title text-capitalize mt-3 mt-mb-0 fs-1">Industrial Safety<br>Professionals</h2>
                        <p class="lh-base gss-text-line">Our dedicated team of safety experts leverages extensive industry knowledge
                        and experience to deliver tailored safety services, including safety assessments,
                        training programs, consulting, and equipment supply. </p>
                        <p>We are passionately committed to fostering a culture of safety, empowering our clients to mitigate risks, comply with
                        regulations, and create a secure working environment. Partner with Galactus Safety Solutions
                        Limited to ensure the highest standards of safety and protect what matters most.
                        <p>
                    </div>

                </div>

            </div>
        </section><!-- End proffetional experts -->

        <!-- ======= Industries Served Section ======= -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="gss-title fs-1 text-capitalize">Tailored Industry Solutions</h2>
                        <p class="gss-text-line">At Galactus Safety Solutions Limited, we proudly serve a diverse range of sectors, providing comprehensive safety solutions tailored to the unique needs and challenges of each industry.</p>
                        <p class="gss-text-line">From construction and manufacturing to oil and gas, healthcare, transportation, and beyond, our expertise extends across various sectors, ensuring the highest standards of safety, compliance, and peace of mind for our valued clients. </p>
                        <p class="gss-text-line">With a deep understanding of industry-specific risks and regulations, we deliver customized safety programs, training, and consulting services that empower organizations to create safe, secure, and productive work environments in their respective sectors.</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('img/sectors-served.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section><!-- End Industries Served experts -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter img-bg" style="background-image: url('{{ asset('img/img-bg-2.jpg') }}');">
            <div class="container position-relative">

                <div class="section-header pb-0">
                    <h3 class="title text-white mb-0">Our Statistics</h3>
                </div>

                <div class="row gy-2 justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-md-3 col-6">
                        <div class="stats-item bg-transparent text-white text-center d-flex flex-column justify-content-start align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter text-white"></span>
                            <p>Happy Clients<br>A testament to our commitment to exceptional service and client satisfaction.</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-md-3 col-6">
                        <div class="stats-item bg-transparent text-white text-center d-flex flex-column justify-content-start align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter text-white"></span>
                            <p>Projects<br>Showcasing Our Successful Safety Solutions and Project Execution Expertise.</p>
                        </div>
                    </div><!-- End Stats Item -->


                    <div class="col-md-3 col-6">
                        <div class="stats-item bg-transparent text-white text-center d-flex flex-column justify-content-start align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter text-white"></span>
                            <p>Professional Workers<br>A Dedicated Team of Safety Experts, Committed to Your Safety.</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-md-3 col-6">
                        <div class="stats-item bg-transparent text-white text-center d-flex flex-column justify-content-start align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter text-white"></span>
                            <p>Solutions<br>Comprehensive safety assessments to specialized training programs and expert consulting services.</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>
        </section><!-- End Stats Counter Section -->

        <!-- ======= Why choose us Section ======= -->
        @include('partials._why-choose-us')
        <!-- End Why choose us Section -->

        <!-- ======= Download Company Profile ======= -->
        <section id="cta" class="cta">
            <div class="container aos-init aos-animate" data-aos="zoom-in">
                <div class="text-start">
                    <h3>Download our company profile to learn more about Galactus.</h3>
                    <a class="btn call-to-action-btn mt-3" href="#">Download Profile</a>
                </div>
            </div>
        </section><!-- End Download Company Profile -->


        @include('partials._team')

        {{-- @include('partials._testimonials') --}}

    </main><!-- End #main -->

@endsection
