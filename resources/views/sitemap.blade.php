@extends('layouts.app')

@section('title', 'Sitemap')

@section('content')

    <main id="main">

    <!-- ======= Sitemap Section ======= -->
    <section class="sitemap">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="section-header">
                <h2>Sitemap</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 links">
                    <h4 class="mb-5">Main Navigation</h4>
                    <ul>
                        <li><a href="{{ route('about') }}">About {{ Config('app.name') }}</a></li>
                        <li><a href="{{ route('solutions') }}">Solutions</a></li>
                        <li><a href="{{ route('industries') }}">Industrial Solutions</a></li>
                        <li><a href="{{ route('blog') }}">News</a></li>
                        <li><a href="{{ route('home') }}">Careers</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 links">
                    <h4 class="mb-5">Solutions</h4>
                    <ul>
                        <li><a href="#">Safety Audits</a></li>
                        <li><a href="#">Health Education & Promotion</a></li>
                        <li><a href="#">Health & Safety Consultancy</a></li>
                        <li><a href="#">Safety Equipment</a></li>
                        <li><a href="#">Safety File Development</a></li>
                        <li><a href="#">Environmental Impact Assessment</a></li>
                        <li><a href="#">Hazardous Materials Management</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 links">
                    <h4 class="mb-5">Other Links</h4>
                    <ul>
                        <li><a href="{{ route('safety') }}">What is HSE?</a></li>
                        <li><a href="{{ route('contact') }}">Request a quote</a></li>
                        <li><a href="{{ route('brand') }}" >Brand Identity</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    </main>

@endsection
