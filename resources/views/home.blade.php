@extends('layouts.app')

@section('content')

    @include('partials._hero')

    <main id="main">
        <!-- ======= Call to Action Section ======= -->
        <section class="call-to-action no-padding">
            <div class="container">
            <div class="action-style-box">
                <div class="row">
                    <div class="col-md-8 text-center text-md-start">
                        <div class="call-to-action-text text-start" data-aos="fade-up">
                            <h3 class="action-title mb-4 position-relative fs-2">Who is {{ config('app.name') }}</h3>
                            <p class="text-white">We are dedicated to providing comprehensive safety solutions, expert guidance, and reliable support to ensure the well-being of your workforce and the success of your organization.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-end align-items-md-center justify-content-start justify-content-md-end d-flex">
                        <a class="btn call-to-action-btn rounded-1 text-white" href="{{ route('contact') }}">Request a quote</a>
                    </div>
                </div>
            </div>
            </div>
        </section><!-- End Call to Action Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                <h2>Our Solutions</h2>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-mountain-city"></i>
                        </div>
                        <h3>Safety Assessments</h3>
                        <p>Our comprehensive safety assessments identify potential hazards and risks within your workplace. Our expert team conducts thorough inspections, analyzes processes, and provides detailed reports to help you create a safer work environment.</p>
                        <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                        </div>
                        <h3>Training Programs</h3>
                        <p>We offer a wide range of safety training programs tailored to your industry and specific needs. Our engaging and informative training sessions cover topics such as hazard identification, emergency preparedness, personal protective equipment (PPE), and more.</p>
                        <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-compass-drafting"></i>
                        </div>
                        <h3>Consulting</h3>
                        <p>Our experienced safety consultants work closely with you to develop effective safety strategies and programs. We provide guidance on regulatory compliance, risk management, safety policies and procedures, and help you implement best practices to enhance safety performance.</p>
                        <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-trowel-bricks"></i>
                        </div>
                        <h3>Safety Equipment Supply</h3>
                        <p>We offer a comprehensive selection of high-quality safety equipment and supplies. From personal protective gear and safety signage to first aid kits and fire extinguishers, we ensure you have the necessary tools to maintain a safe work environment.</p>
                        <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-helmet-safety"></i>
                        </div>
                        <h3>Safety Audits and Inspections</h3>
                        <p>Our thorough safety audits and inspections assess your workplace's compliance with safety regulations and standards. We identify areas for improvement, provide actionable recommendations, and assist in implementing corrective measures.</p>
                        <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                        <div class="icon">
                            <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                        </div>
                        <h3>Safety Management Systems</h3>
                        <p>We help you establish effective safety management systems to streamline safety processes, track performance, and continuously improve safety practices. Our systems help create a proactive safety culture and drive overall organizational excellence.</p>
                        <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Constructions Section ======= -->
        {{-- <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                <h2>Constructions</h2>
                <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
                </div>

                <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                    <div class="row">
                        <div class="col-xl-5">
                        <div class="card-bg" style="background-image: url({{ asset('img/constructions-1.jpg') }});"></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                        <div class="card-body">
                            <h4 class="card-title">Eligendi omnis sunt veritatis.</h4>
                            <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                    <div class="row">
                        <div class="col-xl-5">
                        <div class="card-bg" style="background-image: url({{ asset('img/constructions-2.jpg') }});"></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                        <div class="card-body">
                            <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                            <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                    <div class="row">
                        <div class="col-xl-5">
                        <div class="card-bg" style="background-image: url({{ asset('img/constructions-3.jpg') }});"></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                        <div class="card-body">
                            <h4 class="card-title">Error beatae dolor inventore aut</h4>
                            <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla culpa.</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                    <div class="row">
                        <div class="col-xl-5">
                        <div class="card-bg" style="background-image: url({{ asset('img/constructions-4.jpg') }});"></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                        <div class="card-body">
                            <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                            <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores libero nobis.</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!-- End Card Item -->

                </div>

            </div>
        </section><!-- End Constructions Section --> --}}

        <!-- ======= Why choose us Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url({{ asset('img/why-wok-with-us-2.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3 class="fs-1">Why Choose Galactus</h3>
                        <p class="lead">Choose us as your safety company, and let us help you create a safer work environment, mitigate risks, and protect your most valuable assets—your employees.</p>

                        <div class="icon-box d-flex position-relative align-items-center" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-patch-check-fill flex-shrink-0"></i>
                            <div>
                                <h4>Expertise and Experience</h4>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative align-items-center" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-easel-fill flex-shrink-0"></i>
                            <div>
                                <h4>Comprehensive Safety Solutions</h4>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative align-items-center" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-people-fill flex-shrink-0"></i>
                            <div>
                                <h4>Client-Focused Approach</h4>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative align-items-center" data-aos="fade-up" data-aos-delay="400">
                            <i class="fa fa-helmet-safety  flex-shrink-0"></i>
                            <div>
                                <h4>Industry Experience</h4>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </section><!-- End Why choose us Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row  g-2 d-flex">

                <li class="nav-item col-3">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                    <h4>Modisit</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                    <h4>Praesenti</h4>
                    </a><!-- End tab nav item -->

                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                    <h4>Explica</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                    <h4>Nostrum</h4>
                    </a>
                </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <h3>Voluptatem dignissimos provident</h3>
                        <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        </p>
                        <ul>
                        <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('img/features-1.jpg') }}" alt="" class="img-fluid">
                    </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane" id="tab-2">
                    <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Neque exercitationem debitis</h3>
                        <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        </p>
                        <ul>
                        <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                        <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="{{ asset('img/features-2.jpg')}}" alt="" class="img-fluid">
                    </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane" id="tab-3">
                    <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Voluptatibus commodi accusamu</h3>
                        <ul>
                        <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                        </ul>
                        <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="{{ asset('img/features-3.jpg')}}" alt="" class="img-fluid">
                    </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane" id="tab-4">
                    <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Omnis fugiat ea explicabo sunt</h3>
                        <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                        </p>
                        <ul>
                        <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="{{ asset('img/features-4.jpg')}}" alt="" class="img-fluid">
                    </div>
                    </div>
                </div><!-- End tab content item -->

                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                <h2>Our Projects</h2>
                <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-remodeling">Safety Assessments</li>
                    <li data-filter=".filter-construction">Audits and Inspections</li>
                    <li data-filter=".filter-repairs">Equipment Supply</li>
                    <li data-filter=".filter-design">Safety Management</li>
                </ul><!-- End Projects Filters -->

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/projects/remodeling-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Remodeling 1</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/projects/construction-1.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Construction 1</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/projects/construction-1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/projects/repairs-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Repairs 1</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/projects/repairs-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/projects/design-1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Design 1</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/projects/design-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/projects/remodeling-2.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Remodeling 2</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/projects/remodeling-2.jpg" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/projects/construction-2.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Construction 2</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/projects/repairs-2.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Repairs 2</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/projects/repairs-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/projects/design-2.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Design 2</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/projects/design-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('img/projects/remodeling-3.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                        <h4>Remodeling 3</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="assets/img/projects/remodeling-3.jpg" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    </div><!-- End Projects Item -->
                </div><!-- End Projects Container -->

                </div>

            </div>
        </section><!-- End Our Projects Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                <h2>Testimonials</h2>
                <p>Here is our clients stories about {{ Config('app.name') }}</p>
                </div>

                <div class="slides-2 swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                        <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
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
                        <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
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
                        <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
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
                        <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
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
                        <img src="{{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
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

        <!-- ======= Latest news Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">

                <div class=" section-header">
                    <h2>Latest News</h2>
                    <p>The latest insights and updates</p>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                            <img src="{{ asset('img/blog/blog-1.jpg')}}" class="img-fluid" alt="">
                            {{-- <span class="post-date">December 12</span> --}}
                            </div>

                            <div class="post-content d-flex flex-column">

                            <h3 class="post-title">10 Essential Workplace Safety Tips for Employees</h3>

                            {{-- <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                                </div>
                            </div> --}}


                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                            <img src="{{ asset('img/blog/blog-2.jpg')}}" class="img-fluid" alt="">
                            {{-- <span class="post-date">July 17</span> --}}
                            </div>

                            <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Understanding OSHA Compliance: A Guide for Businesses</h3>

                            {{-- <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                                </div>
                            </div> --}}


                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

                            <div class="post-img position-relative overflow-hidden">
                            <img src="{{ asset('img/blog/blog-3.jpg') }}" class="img-fluid" alt="">
                            {{-- <span class="post-date">September 05</span> --}}
                            </div>

                            <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Fire Safety 101: Protecting Your Business and Employees</h3>

                            {{-- <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                                </div>
                            </div> --}}


                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                </div>

            </div>
        </section><!-- End Recent Blog Posts Section -->
    </main>

@endsection

