<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Galactus Safety provides comprehensive Health, Safety, and Environment (HSE) solutions to ensure workplace well-being and the success of your organization. Contact us for expert HSE services.">

    <title>@yield('title', 'Galactus® - Your safety is our no 1 priority')</title>
    <meta content="author" name="Mostek Technologies">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.cdnfonts.com/css/galano-grotesque-alt" rel="stylesheet">

    <!-- Vendor CSS & JS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="{{ asset('vendor/fontawesome-free-6/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @if (request()->RouteIs('gallary'))
        <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    @endif
    @if (request()->RouteIs('home'))
        <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    @endif

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>

    <!-- ======= Header ======= -->
    @include('layouts.header')
    <!-- End Header -->


    @yield('content')


    <!-- ======= Footer ======= -->
    @include('layouts.footer')
    <!-- End Footer -->

    <x-scroll-to-top/>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Company",
          "name": "Galactus Safety Solutions",
          "url": "https://www.galactussafety.com",
          "logo": "https://www.galactussafety.com/img/logo.png"
        }
    </script>


</body>

</html>
