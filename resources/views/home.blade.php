@extends('layouts.app')

@section('content')

    @include('partials._hero')

    <main id="main">

        @include('partials._call-to-action')

        @include('partials._solutions')

        @include('partials._industrial-solutions-alt')

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter bg-secondary">
            <div class="container position-relative">

                <div class="section-header pb-2">
                    <h2 class="text-primary">Quick Facts</h2>
                </div>

                <div class="row gy-2 justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="stats-item bg-transparent text-white text-center d-flex flex-column justify-content-start align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter text-white"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="stats-item bg-transparent text-white text-center d-flex flex-column justify-content-start align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter text-white"></span>
                            <p>Completed Projects</p>
                        </div>
                    </div><!-- End Stats Item -->


                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="stats-item bg-transparent text-white text-center d-flex flex-column justify-content-start align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter text-white"></span>
                            <p>Professional Workers</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="stats-item bg-transparent text-white text-center d-flex flex-column justify-content-start align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter text-white"></span>
                            <p>HSE Solutions</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>
        </section><!-- End Stats Counter Section -->

        @include('partials._why-choose-us')

        {{-- @include('partials._blog-posts') --}}

    </main>

@endsection
