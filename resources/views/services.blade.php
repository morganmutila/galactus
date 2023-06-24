@extends('layouts.app')

@section('title', 'Services')

@section('content')

<main id="main">

	<x-breadcrumb>
		Solutions
	</x-breadcrumb>

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

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

</main>

@endsection
